<?php

namespace App\Http\Controllers;

use App\Models\RuaFile;
use App\Utils\EmptyClass;
use App\Utils\UploadFiles;
use Illuminate\Http\Request;

class RuaFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _index()
    {
        return view('landing.files.index', [
            'rua_files' => RuaFile::query()->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
    public function _show(RuaFile $rua_file)
    {
        return view('landing.rua_files.show', ['rua_file' => $rua_file, 'latestBooks' => RuaFile::query()->where('id', '!=', $rua_file->id)->orderBy('created_at', 'desc')->limit(5)->get()->all()]);
    }
    public function index()
    {
        return view('admin.files.index', ['files' => RuaFile::query()->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rua_files.create', ['isCreating' => true, 'rua_file' => new EmptyClass(old())]);
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
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
            'file' => ['nullable', 'file'],
        ]);

        $model = new RuaFile();
        if ($request->hasFile('image')) {
            $model->image = UploadFiles::upload(UploaderController::TYPES['rua_files.image'], $request->file('image'));
        }
        if ($request->hasFile('file')) {
            $model->file = UploadFiles::upload(UploaderController::TYPES['rua_files.file'], $request->file('file'));
        }

        $model->name = $request->input('name');
        $model->description = $request->input('description');
        $model->save();

        return redirect(route('admin.files.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $rua_file
     * @return \Illuminate\Http\Response
     */
    public function show(RuaFile $rua_file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $rua_file
     * @return \Illuminate\Http\Response
     */
    public function edit(RuaFile $rua_file)
    {
        return view('admin.files.create', ['isCreating' => false, 'rua_file' => $rua_file]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $rua_file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RuaFile $rua_file)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
            'file' => ['nullable', 'file'],
        ]);

        $updated = false;

        if ($request->hasFile('image')) {
            UploadFiles::delete(UploaderController::TYPES['rua_files.image'], $rua_file->image);
            $rua_file->image = UploadFiles::upload(UploaderController::TYPES['rua_files.image'], $request->file('image') );
            $updated = true;
        }
        if ($request->hasFile('file')) {
            UploadFiles::delete(UploaderController::TYPES['rua_files.file'], $rua_file->file);
            $rua_file->file = UploadFiles::upload(UploaderController::TYPES['rua_files.file'], $request->file('file') );
            $updated = true;
        }

        if ($request->has('name') && $request->input('name') != null && $rua_file->name != $request->input('name')) {
            $rua_file->name = $request->input('name');
            $updated = true;
        }
        if ($request->has('description') && $request->input('description') != null && $rua_file->description != $request->input('description')) {
            $rua_file->description = $request->input('description');
            $updated = true;
        }
        if ($updated) {
            $rua_file->update();
        }

        return redirect(route('admin.files.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $rua_file
     * @return \Illuminate\Http\Response
     */
    public function delete(RuaFile $file)
    {
        return view('admin.files.delete', ['file' => $file]);
    }
    public function destroy(RuaFile $rua_file)
    {
        UploadFiles::delete(UploaderController::TYPES['rua_files.image'], $rua_file->image);
        UploadFiles::delete(UploaderController::TYPES['rua_files.file'], $rua_file->file);

        $rua_file->delete();
        return redirect(route('admin.files.index'));
    }
}
