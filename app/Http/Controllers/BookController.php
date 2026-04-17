<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
        //     Book::create([
        //         'name' => 'Libro di storia',
        //         'pages' => 897,
        //         'year' => 2025,
        //     ]);

        //     Book::create([
        //         'name' => 'Libro di narrativa',
        //         'pages' => 197,
        //         'year' => 2022,
        //     ]);
        //     dd('libri creati');
    }

    public function store(BookStoreRequest $request)
    {
        Book::create([
            'name' => $request->name,
            'pages' => $request->input('pages'),
            'year' => $request->input('year')
        ]);

        return redirect()->route('books.index')->with('success', 'Libro creato con successo');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }
}
