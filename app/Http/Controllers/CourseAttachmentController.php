<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseAttachment;
use App\Utils\EmptyClass;
use App\Utils\UploadFiles;
use Illuminate\Http\Request;

class CourseAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _index()
    {
        return view('landing.attachments.index', [
            'attachments' => CourseAttachment::query()->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    public function index(Course $course)
    {
        return view('admin.courses.attachments.index', ['course' => $course]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Course $course)
    {
        return view('admin.courses.attachments.create', ['course' => $course ,'isCreating' => true, 'attachment' => new EmptyClass(old())]);
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
            'file' => ['nullable', 'file'],

        ]);

        $model = new CourseAttachment();
        if ($request->hasFile('file')) {
            $model->file = UploadFiles::upload(UploaderController::TYPES['courses.attachments'], $request->file('file') );
        }


        $model->title = $request->input('title');
        $model->course_id = $course->id;

        $model->save();

        return redirect(route('admin.courses.attachments.index' , $course));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $course_attachment
     * @return \Illuminate\Http\Response
     */
    public function show(CourseAttachment $course_attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $course_attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course ,CourseAttachment $attachment  )
    {
        return view('admin.courses.attachments.create', ['course'=> $course ,'isCreating' => false, 'attachment' => $attachment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $course_attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course , CourseAttachment $attachment)
    {
        $this->validate($request, [
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'file' => ['nullable', 'file'],
        ]);

        $updated = false;

        if ($request->hasFile('file')) {
            UploadFiles::delete(UploaderController::TYPES['courses.attachments'], $attachment->file);
            $attachment->file = UploadFiles::upload(UploaderController::TYPES['courses.attachments'], $request->file('file') );
            $updated = true;
        }
        if ($request->has('title') && $request->input('title') != null && $attachment->title != $request->input('title')) {
            $attachment->title = $request->input('title');
            $updated = true;
        }
        if ($updated) {
            $attachment->update();
        }
        return redirect(route('admin.courses.attachments.index' , $course));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $course_attachment
     * @return \Illuminate\Http\Response
     */
    public function delete( Course $course , CourseAttachment $attachment)
    {
        return view('admin.courses.attachments.delete', ['course' => $course ,'attachment' => $attachment]);
    }
    public function destroy(Course $course , CourseAttachment $attachment)
    {
        UploadFiles::delete(UploaderController::TYPES['courses.attachments'], $attachment->file);
        $attachment->delete();
        return redirect(route('admin.courses.attachments.index' , $course));
    }
}
