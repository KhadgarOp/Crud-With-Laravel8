<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\KaryawanController;

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
    return view ('mainpage', ["title" => "Main Page"]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'Dashboard']);
})->middleware('auth');

Route::get('/siswa', [StudentController::class, 'index']);
Route::post('/siswa', [StudentController::class, 'input']);
Route::get('/siswa/{id}/update', [StudentController::class, 'update'])->middleware('auth');
Route::post('/siswa/{id}/submit', [StudentController::class, 'submit']);
Route::get('/siswa/{id}/delete', [StudentController::class, 'delete'])->middleware('auth');
Route::get('/siswa/{id}', [StudentController::class, 'view'])->middleware('auth');

Route::get('/guru', [TeacherController::class, 'index']);
Route::post('/guru', [TeacherController::class, 'input']);
Route::get('/guru/{id}/update', [TeacherController::class, 'update'])->middleware('auth');
Route::post('/guru/{id}/submit', [TeacherController::class, 'submit']);
Route::get('/guru/{id}/delete', [TeacherController::class, 'delete'])->middleware('auth');
Route::get('/guru/{id}', [TeacherController::class, 'view'])->middleware('auth');

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::post('/karyawan', [KaryawanController::class, 'input']);
Route::get('/karyawan/{id}/update', [KaryawanController::class, 'update'])->middleware('auth');
Route::post('/karyawan/{id}/submit', [KaryawanController::class, 'submit']);
Route::get('/karyawan/{id}/delete', [KaryawanController::class, 'delete'])->middleware('auth');
Route::get('/karyawan/{id}', [KaryawanController::class, 'view'])->middleware('auth');

Route::get('/sign-in', [SigninController::class, 'index'])->middleware('guest');
Route::post('/sign-in', [SigninController::class, 'generate']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);