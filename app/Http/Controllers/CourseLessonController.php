<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseLesson;
use App\Utils\EmptyClass;
use App\Utils\UploadFiles;
use Illuminate\Http\Request;

class CourseLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _index(Course $course)
    {
        return view('landing.lessons.index', [
            'course' => $course
        ]);
    }

    public function index(Course $course)
    {
        return view('admin.courses.lessons.index', ['course' => $course , 'lessons' => CourseLesson::query()->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('admin.courses.lessons.create', ['course' => $course ,'isCreating' => true, 'lesson' => new EmptyClass(old())]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , Course $course)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        $model = new CourseLesson();

        $model->title = $request->input('title');
        $model->course_id = $course->id;
        $model->video = $request->video;

        $model->save();

        return redirect(route('admin.courses.lessons.index' ,  $course));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(CourseLesson $lesson)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course ,CourseLesson $lesson)
    {
        return view('admin.courses.lessons.create', ['course'=> $course ,'isCreating' => false, 'lesson' => $lesson]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course, CourseLesson $lesson)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'min:3', 'max:255'],

        ]);

        $updated = false;

        if ($request->has('title') && $request->input('title') != null && $lesson->title != $request->input('title')) {
            $lesson->title = $request->input('title');
            $updated = true;
        } if ($request->has('video') && $request->input('video') != null && $lesson->video != $request->input('video')) {
            $lesson->video = $request->input('video');
            $updated = true;
        }
        if ($updated) {
            $lesson->update();
        }
        return redirect(route('admin.courses.lessons.index' , $course));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $lesson
     * @return \Illuminate\Http\Response
     */
    public function delete(Course $course , CourseLesson $lesson)
    {
        return view('admin.courses.lessons.delete', ['course' => $course , 'lesson' => $lesson]);
    }
    public function destroy(Course $course , CourseLesson $lesson)
    {
        UploadFiles::delete(UploaderController::TYPES['lessons.image'], $lesson->image);
        $lesson->delete();
        return redirect(route('admin.courses.lessons.index' , $course));
    }
}
