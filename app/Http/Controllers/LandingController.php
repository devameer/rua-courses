<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CourseCategory;
use App\Models\RuaFile;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {

        $categories = CourseCategory::query()->paginate(15);
        $books = Book::query()->paginate(15);
        $files = RuaFile::query()->paginate(15);

        return view('landing.home' , ['categories' => $categories ,'books' => $books ,'files' => $files , ]);
    }
    public function about()
    {
        return view('landing.about');
    } public function contact()
    {
        return view('landing.contact');
    }
}
