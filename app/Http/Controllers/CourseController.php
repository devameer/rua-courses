<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Teacher;
use App\Utils\EmptyClass;
use App\Utils\UploadFiles;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _index()
    {
        return view('landing.courses.index', [
            'courses' => Course::query()->orderBy('created_at', 'desc')->paginate(10) 
            , 'is_search' => false
        ]);
    }
    public function _show(Course $course)
    {
        $first_lesson = $course->lessons->first();
        if($first_lesson){
            $first_video = $first_lesson->video;

        }else{
            $first_video = null;
        }
        return view('landing.courses.show', ['first_video' => $first_video , 'course' => $course, 'latestBooks' => Course::query()->where('id', '!=', $course->id)->orderBy('created_at', 'desc')->limit(5)->get()->all()]);
    }
    public function index()
    {
        return view('admin.courses.index', ['courses' => Course::query()->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = CourseCategory::all();
        $teachers = Teacher::all();

        return view('admin.courses.create', ['categories' => $categories , 'teachers' => $teachers , 'isCreating' => true, 'course' => new EmptyClass(old())]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['nullable', 'string'],
            'teacher_id' => ['nullable', 'string'],
            'category_id' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);

        $model = new Course();
        if ($request->hasFile('image')) {
            $model->image = UploadFiles::upload(UploaderController::TYPES['courses.image'], $request->file('image') );
        }


        $model->name = $request->input('name');
        $model->description = $request->input('description');
        $model->teacher_id = $request->input('teacher_id');
        $model->category_id = $request->input('category_id');

        $model->save();

        return redirect(route('admin.courses.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = CourseCategory::all();
        $teachers = Teacher::all();
        return view('admin.courses.create', ['categories' => $categories , 'teachers' => $teachers ,'isCreating' => false, 'course' => $course]);
    }
    public function dublicate(Course $course)
    {
        $cat = Course::find($course->id);
        $newCat = $cat->replicateRow();

        return redirect(route('admin.courses.index'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['nullable', 'string'],
            'teacher_id' => ['nullable', 'string'],
            'category_id' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);
        $updated = false;
        if ($request->hasFile('image')) {
            UploadFiles::delete(UploaderController::TYPES['courses.image'], $course->image);
            $course->image = UploadFiles::upload(UploaderController::TYPES['courses.image'], $request->file('image') );
            $updated = true;
        }

        if ($request->has('name') && $request->input('name') != null && $course->name != $request->input('name')) {
            $course->name = $request->input('name');
            $updated = true;
        }
        if ($request->has('description') && $request->input('description') != null && $course->description != $request->input('description')) {
            $course->description = $request->input('description');
            $updated = true;
        }
        if ($request->has('teacher_id') && $request->input('teacher_id') != null && $course->teacher_id != $request->input('teacher_id')) {
            $course->teacher_id = $request->input('teacher_id');
            $updated = true;
        }
        if ($request->has('category_id') && $request->input('category_id') != null && $course->category_id != $request->input('category_id')) {
            $course->category_id = $request->input('category_id');
            $updated = true;
        }
        if ($updated) {
            $course->update();
        }

        return redirect(route('admin.courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $course
     * @return \Illuminate\Http\Response
     */
    public function delete(Course $course)
    {
        return view('admin.courses.delete', ['course' => $course]);
    }
    public function destroy(Course $course)
    {
        UploadFiles::delete(UploaderController::TYPES['courses.image'], $course->image);
        $course->attachments->each->delete();
        $course->lessons->each->delete();

        $course->delete();
        return redirect(route('admin.courses.index'));
    }

    public function favoriteCourse(Course $course)
    {
        Auth::user()->favorites()->attach($course->id);
//        Auth::user()->favorites()->attach($post->id);
        return back()->with(['success' => 'تم الإضافة إلى المفضلة بنجاح']);

    }

    public function unFavoriteCourse(Course $course)
    {
        Auth::user()->favorites()->detach($course->id);

        return back()->with(['success' => 'تم الحذف من المفضلة بنجاح']);
    }
}

