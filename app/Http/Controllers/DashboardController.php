<?php

namespace App\Http\Controllers;

use App\Utils\UploadFiles;
use Auth;
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
    public function user_settings(Request $request){
        $this->validate($request, [
            'first_name' => ['required', 'string', 'min:3', 'max:255'],
            'last_name' => ['required', 'string', 'min:3', 'max:255'],

            'email' => ['required', 'string'],
            'phone' => ['nullable', 'string'],
            'birth_date' => ['nullable', 'string'],
            'gender' => ['nullable', 'string'],

            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg,gif'],
        ]);
        $user = Auth::user();
        $updated = false;

        if ($request->hasFile('image')) {
            UploadFiles::delete(UploaderController::TYPES['users'], $user->image);
            $user->image = UploadFiles::upload(UploaderController::TYPES['books.image'], $request->file('image') );
            $updated = true;
        }




        if ($request->has('first_name') && $request->input('first_name') != null && $user->first_name != $request->input('first_name')) {
            $user->first_name = $request->input('first_name');
            $updated = true;
        }

        if ($request->has('last_name') && $request->input('last_name') != null && $user->last_name != $request->input('last_name')) {
            $user->last_name = $request->input('last_name');
            $updated = true;
        }
        if ($request->has('email') && $request->input('email') != null && $user->email != $request->input('email')) {
            $user->email = $request->input('email');
            $updated = true;
        }
        if ($request->has('phone') && $request->input('phone') != null && $user->phone != $request->input('phone')) {
            $user->phone = $request->input('phone');
            $updated = true;
        }
        if ($request->has('birth_date') && $request->input('birth_date') != null && $user->birth_date != $request->input('birth_date')) {
            $user->birth_date = $request->input('birth_date');
            $updated = true;
        }
        if ($request->has('gender') && $request->input('gender') != null && $user->gender != $request->input('gender')) {
            $user->gender = $request->input('gender');
            $updated = true;
        }




        if ($updated) {
            $user->update();
        }

        return redirect(route('dashboard.profile'));
    }

}
