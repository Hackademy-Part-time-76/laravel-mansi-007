<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/crea-libro', [BookController::class, 'create'])->name('books.create');
Route::post('/salva', [BookController::class, 'store'])->name('books.store');
Route::get('/dettaglio-libro/{book}',  [BookController::class, 'show'])->name('books.show');
