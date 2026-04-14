<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //$books = json_encode(Book::all());
    // dd($books);

    $books = Book::all();
    return view('welcome', ['books' => $books]);
});
