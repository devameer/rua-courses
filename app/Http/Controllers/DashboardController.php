<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile()
    {
        return view('dashboard.profile');
    }
    public function settings()
    {
        return view('dashboard.settings');
    } public function courses()
    {
        return view('dashboard.courses');
    }
}
