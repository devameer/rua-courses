<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Utils\EmptyClass;
use App\Utils\UploadFiles;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _index()
    {
        return view('landing.teachers.index', [
            'teachers' => Teacher::query()->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function index()
    {
        return view('admin.teachers.index', ['teachers' => Teacher::query()->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.create', ['isCreating' => true, 'teacher' => new EmptyClass(old())]);
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
            'job_title' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);
        $model = new Teacher();
        if ($request->hasFile('image')) {
            $model->image = UploadFiles::upload(UploaderController::TYPES['teachers'], $request->file('image'));
        }


        $model->name = $request->input('name');
        $model->job_title = $request->input('job_title');
        $model->save();

        return redirect(route('admin.teachers.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.create', ['isCreating' => false, 'teacher' => $teacher]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'job_title' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);

        $updated = false;

        if ($request->hasFile('image')) {
            UploadFiles::delete(UploaderController::TYPES['teachers'], $teacher->image);
            $teacher->image = UploadFiles::upload(UploaderController::TYPES['teachers'], $request->file('image') );
            $updated = true;
        }




        if ($request->has('name') && $request->input('name') != null && $teacher->name != $request->input('name')) {
            $teacher->name = $request->input('name');
            $updated = true;
        }
        if ($request->has('job_title') && $request->input('job_title') != null && $teacher->job_title != $request->input('job_title')) {
            $teacher->job_title = $request->input('job_title');
            $updated = true;
        }
        if ($updated) {
            $teacher->update();
        }

        return redirect(route('admin.teachers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $teacher
     * @return \Illuminate\Http\Response
     */
    public function delete(Teacher $teacher)
    {
        return view('admin.teachers.delete', ['teacher' => $teacher]);
    }
    public function destroy(Teacher $teacher)
    {
        UploadFiles::delete(UploaderController::TYPES['teachers'], $teacher->image);
        $teacher->delete();
        return redirect(route('admin.teachers.index'));
    }
}
