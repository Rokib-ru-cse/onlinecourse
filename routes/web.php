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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/addcourse', [CourseController::class, 'addcourse'])->name('addcourse');
Route::get('/profile', [CourseController::class, 'profile_show'])->name('profile');

Route::get('/profile/addlecture/{id}', [LectureController::class, 'addlecture'])->name('addlecture');
Route::post('/addlecture', [LectureController::class, 'editaddlecture'])->name('editaddlecture');

Route::get('/profile/addassignment/{id}', [AssignmentController::class, 'addassignment'])->name('addassignment');
Route::post('/addassignment/{id}', [AssignmentController::class, 'editaddassignment'])->name('editaddassignment');
