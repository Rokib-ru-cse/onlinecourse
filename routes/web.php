<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LectureController;
use App\Http\Controllers\AssignmentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/addcourse', function () {
    return view('addcourse');
});
Route::post('/addcourse', [CourseController::class, 'addcourse'])->name('addcourse');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [CourseController::class, 'profile_show'])->name('profile');



Route::get('/addlecture/{id}', [LectureController::class, 'addlecture'])->name('addlecture');
Route::post('/profile/addlecture', [LectureController::class, 'editaddlecture'])->name('editaddlecture');

Route::get('/profile/addassignment/{id}', [AssignmentController::class, 'addassignment'])->name('addassignment');
Route::post('/addassignment', [AssignmentController::class, 'editaddassignment'])->name('editaddassignment');

Route::get('/profile/coursedetail/{id}', [CourseController::class, 'coursedetail'])->name('coursedetail');

Route::get('/profile/edit/{id}', [CourseController::class, 'edit'])->name('ecourse');
Route::post('/profile/edit/{id}', [CourseController::class, 'editcourse'])->name('editcourse');
Route::delete('/profile/{id}', [CourseController::class, 'destroycourse'])->name('destroycourse');

Route::get('/profile/addlecture/{id}', [LectureController::class, 'edit'])->name('electure');
Route::post('/profile/addlecture/{id}', [LectureController::class, 'editlecture'])->name('editlecture');
Route::delete('/profile/addlecture/{id}', [LectureController::class, 'destroylecture'])->name('destroylecture');

Route::get('/profile/coursedetail/edit/{id}', [AssignmentController::class, 'edit'])->name('eassignment');
Route::post('/profile/coursedetail/edit/{id}', [AssignmentController::class, 'editassignment'])->name('editassignment');
Route::delete('/profile/coursedetail/{id}', [AssignmentController::class, 'destroyassignment'])->name('destroyassignment');

Route::get('/search', [CourseController::class, 'search'])->name('search');




