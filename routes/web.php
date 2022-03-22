<?php

use App\Http\Controllers\Account\SettingsController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Documentation\ReferencesController;
use App\Http\Controllers\Logs\AuditLogsController;
use App\Http\Controllers\Logs\SystemLogsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect('index');
// });

// $menu = theme()->getMenu();
// array_walk($menu, function ($val) {
//     if (isset($val['path'])) {
//         $route = Route::get($val['path'], [PagesController::class, 'index']);

//         // Exclude documentation from auth middleware
//         if (!Str::contains($val['path'], 'documentation')) {
//             $route->middleware('auth');
//         }
//     }
// });

// Documentations pages




/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth']], static function () {
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::get('books/{book}/delete', [\App\Http\Controllers\BookController::class, 'delete'])->name('books.delete');
    Route::resource('books', \App\Http\Controllers\BookController::class);
    Route::get('teachers/{teacher}/delete', [\App\Http\Controllers\TeacherController::class, 'delete'])->name('teachers.delete');
    Route::resource('teachers', \App\Http\Controllers\TeacherController::class);
    Route::get('files/{file}/delete', [\App\Http\Controllers\RuaFileController::class, 'delete'])->name('files.delete');
    Route::resource('files', \App\Http\Controllers\RuaFileController::class);

    Route::get('courses/categories/{category}/delete', [\App\Http\Controllers\CourseCategoryController::class, 'delete'])->name('courses.categories.delete');
    Route::resource('courses/categories', \App\Http\Controllers\CourseCategoryController::class ,['as' => 'courses']);
    Route::get('courses/{course}/delete', [\App\Http\Controllers\CourseController::class, 'delete'])->name('courses.delete');
    Route::resource('courses', \App\Http\Controllers\CourseController::class);
    Route::get('dublicate/{course}', [\App\Http\Controllers\CourseController::class, 'dublicate'])->name('courses.dublicate');



    Route::get('courses/{course}/attachments/{attachment}/delete', [\App\Http\Controllers\CourseAttachmentController::class, 'delete'])->name('courses.attachments.delete');
    Route::resource('courses/{course}/attachments', \App\Http\Controllers\CourseAttachmentController::class , ['as' => 'courses']);
    Route::get('courses/{course}/lessons/{lesson}/delete', [\App\Http\Controllers\CourseLessonController::class, 'delete'])->name('courses.lessons.delete');
    Route::resource('courses/{course}/lessons', \App\Http\Controllers\CourseLessonController::class , ['as' => 'courses']);
    Route::prefix('account')->group(function () {
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
        Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
        Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
    });
});

Route::get('/', [\App\Http\Controllers\LandingController::class, 'home'])->name('home');
Route::get('books', [\App\Http\Controllers\BookController::class, '_index'])->name('books');
Route::get('books/{book}', [\App\Http\Controllers\BookController::class, '_show'])->name('books.show');
Route::get('files', [\App\Http\Controllers\RuaFileController::class, '_index'])->name('files');
Route::get('files/{book}', [\App\Http\Controllers\RuaFileController::class, '_show'])->name('files.show');
Route::get('courses/categories', [\App\Http\Controllers\CourseCategoryController::class, '_index'])->name('courses.categories');
Route::get('courses/categories/{category}', [\App\Http\Controllers\CourseCategoryController::class, '_show'])->name('courses.categories.show');

Route::get('courses', [\App\Http\Controllers\CourseController::class, '_index'])->name('courses');
Route::get('courses/{course}', [\App\Http\Controllers\CourseController::class, '_show'])->name('courses.show');

Route::get('about', [\App\Http\Controllers\LandingController::class, 'about'])->name('about');
Route::get('contact', [\App\Http\Controllers\LandingController::class, 'contact'])->name('contact');
Route::get('favorite/{course}', [CourseController::class, 'favoriteCourse'])->name('favoriteCourse');
Route::get('unfavorite/{course}', [CourseController::class, 'unFavoriteCourse'])->name('unFavoriteCourse');

Route::put('user/settings', [\App\Http\Controllers\DashboardController::class, 'user_settings'])->name('user.settings');


Route::group(['as' => 'dashboard.', 'prefix' => 'dashboard', 'middleware' => ['auth']], static function () {
    Route::get('profile', [\App\Http\Controllers\DashboardController::class, 'profile'])->name('profile');
    Route::get('settings', [\App\Http\Controllers\DashboardController::class, 'settings'])->name('settings');
    Route::get('courses', [\App\Http\Controllers\DashboardController::class, 'courses'])->name('courses');

});



// require __DIR__.'/auth.php';

Auth::routes(['verify' => false]);

