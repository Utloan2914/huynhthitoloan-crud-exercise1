<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/',[StudentController::class, 'index'])->name('list');
Route::get('/create',[StudentController::class, 'create'])->name('create');
Route::post('/create',[StudentController::class, 'store'])->name('create');
Route::get('/edit{id}',[StudentController::class, 'edit'])->name('edit');
Route::post('/edit{id}',[StudentController::class, 'update'])->name('edit');
Route::get('/delete{id}',[StudentController::class, 'destroy'])->name('delete');
Route::get('/search', [StudentController::class, 'search'])->name('search');
