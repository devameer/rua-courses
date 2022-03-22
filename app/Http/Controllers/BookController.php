<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Utils\EmptyClass;
use App\Utils\UploadFiles;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function _index()
    {
        return view('landing.books.index', [
            'books' => Book::query()->orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
    public function _show(Book $book)
    {
        return view('landing.books.show', ['book' => $book, 'latestBooks' => Book::query()->where('id', '!=', $book->id)->orderBy('created_at', 'desc')->limit(5)->get()->all()]);
    }
    public function index()
    {
        return view('admin.books.index', ['books' => Book::query()->paginate(15)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.books.create', ['isCreating' => true, 'book' => new EmptyClass(old())]);
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
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
            'file' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);

        $model = new Book();
        if ($request->hasFile('image')) {
            $model->image = UploadFiles::upload(UploaderController::TYPES['books.image'], $request->file('image') );
        }
        if ($request->hasFile('file')) {
            $model->file = UploadFiles::upload(UploaderController::TYPES['books.file'], $request->file('file') );
        }

        $model->name = $request->input('name');
        $model->description = $request->input('description');
        $model->content = $request->input('content');
        $model->save();

        return redirect(route('admin.books.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.books.create', ['isCreating' => false, 'book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['nullable', 'string'],
            'content' => ['nullable', 'string'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
            'file' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);

        $updated = false;

        if ($request->hasFile('image')) {
            UploadFiles::delete(UploaderController::TYPES['books.image'], $book->image);
            $book->image = UploadFiles::upload(UploaderController::TYPES['books.image'], $request->file('image') );
            $updated = true;
        }
        if ($request->hasFile('file')) {
            UploadFiles::delete(UploaderController::TYPES['books.file'], $book->file);
            $book->file = UploadFiles::upload(UploaderController::TYPES['books.file'], $request->file('file') );
            $updated = true;
        }




        if ($request->has('name') && $request->input('name') != null && $book->name != $request->input('name')) {
            $book->name = $request->input('name');
            $updated = true;
        }
        if ($request->has('description') && $request->input('description') != null && $book->description != $request->input('description')) {
            $book->description = $request->input('description');
            $updated = true;
        }
        if ($request->has('content') && $request->input('content') != null && $book->content != $request->input('content')) {
            $book->content = $request->input('content');
            $updated = true;
        }
        if ($updated) {
            $book->update();
        }

        return redirect(route('admin.books.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function delete(Book $book)
    {
        return view('admin.books.delete', ['book' => $book]);
    }
    public function destroy(Book $book)
    {
        UploadFiles::delete(UploaderController::TYPES['books.image'], $book->image);
        UploadFiles::delete(UploaderController::TYPES['books.file'], $book->file);

        $book->delete();
        return redirect(route('admin.books.index'));
    }
}
