<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/book', [BookController::class,'index'])->name('books.index');
Route::post('/book/store', [BookController::class,'store'])->name('books.store');
Route::get('/book/delete/{book}', [BookController::class,'delete'])->name('books.delete');
Route::put('/book/update/{book}', [BookController::class,'update'])->name('books.update');


