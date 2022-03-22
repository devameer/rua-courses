<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use App\Utils\EmptyClass;
use App\Utils\UploadFiles;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _index()
    {
        return view('landing.courses.categories.index', [
            'categories' => CourseCategory::query()->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function index()
    {
        return view('admin.courses.categories.index', ['categories' => CourseCategory::query()->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.categories.create', ['isCreating' => true, 'category' => new EmptyClass(old())]);
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
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);

        $model = new CourseCategory();
        if ($request->hasFile('image')) {
            $model->image = UploadFiles::upload(UploaderController::TYPES['courses.categories'], $request->file('image') );
        }


        $model->name = $request->input('name');
        $model->save();

        return redirect(route('admin.courses.categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $category
     * @return \Illuminate\Http\Response
     */
    public function _show(CourseCategory $category)
    {
        return view('landing.courses.categories.show', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseCategory $category)
    {
        return view('admin.courses.categories.create', ['isCreating' => false, 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseCategory $category)
    {
        $this->validate($request, [
            'job_title' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);

        $updated = false;

        if ($request->hasFile('image')) {
            UploadFiles::delete(UploaderController::TYPES['courses.categories'], $category->image);
            $category->image = UploadFiles::upload(UploaderController::TYPES['courses.categories'], $request->file('image') );
            $updated = true;
        }




        if ($request->has('name') && $request->input('name') != null && $category->name != $request->input('name')) {
            $category->name = $request->input('name');
            $updated = true;
        }
        if ($request->has('job_title') && $request->input('job_title') != null && $category->job_title != $request->input('job_title')) {
            $category->job_title = $request->input('job_title');
            $updated = true;
        }


        return redirect(route('admin.courses.categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $category
     * @return \Illuminate\Http\Response
     */
    public function delete(CourseCategory $category)
    {
        return view('admin.courses.categories.delete', ['category' => $category]);
    }
    public function destroy(CourseCategory $category)
    {
        UploadFiles::delete(UploaderController::TYPES['courses.categories'], $category->image);
        $category->courses->each->delete();

        $category->delete();
        return redirect(route('admin.courses.categories.index'));
    }
}
