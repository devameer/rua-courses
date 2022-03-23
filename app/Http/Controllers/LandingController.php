<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\RuaFile;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {

        $categories = CourseCategory::query()->paginate(15);
        $books = Book::query()->paginate(15);
        $files = RuaFile::query()->paginate(15);
        $books_count = Book::count();
        $files_count = RuaFile::count();
        $users_count = User::count();
        $courses_count = Course::count();

        return view('landing.home' , ['categories' => $categories ,'books' => $books ,'files' => $files , 'books_count' => $books_count , 'files_count' => $files_count , 'users_count' => $users_count , 'courses_count' => $courses_count ]);
    }
    public function about()
    {
        return view('landing.about');
    } public function contact()
    {
        return view('landing.contact');
    }
    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('_q');
        // $page = Page::where('slug', 'search')->get()->first();
        // Search in the title and body columns from the posts table
        $courses = Course::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->get();
        return view('landing.courses.index')->with(['courses' => $courses, 'query' => $search , 'is_search' => true]);
    }
}
