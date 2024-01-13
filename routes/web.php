<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/fill-form', [TeacherController::class, 'index'])->name('teacher.index');
Route::post('/create', [TeacherController::class, 'store'])->name('teacher.store');
Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::post('/update/{id}', [TeacherController::class, 'update'])->name('teacher.update');
Route::get('/delete/{id}', [TeacherController::class, 'destroy'])->name('teacher.destroy');

