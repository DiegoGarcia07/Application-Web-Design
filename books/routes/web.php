<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

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

Route::get('/', function () {
    return view('welcome');
});
//Index
Route::get('/books', [BooksController::class, 'index']) ->name('books.index');
//Create view
Route::get('/books/create', [BooksController::class, 'create']) ->name('books.create');
//Create method, post
Route::post('/books/store', [BooksController::class, 'store'])->name('books.store');
//Edit view
Route::get('/books/{id}/edit', [BooksController::class, 'edit'])->name('books.edit');
//Update method
Route::put('/books/{id}', [BooksController::class, 'update'])->name('books.update');
//Delete method
Route::delete('/books/{id}', [BooksController::class, 'destroy'])->name('books.destroy');
