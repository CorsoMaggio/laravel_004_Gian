<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('index', compact('books'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Book::create([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages
        ]);
        dd('ok');
    }
}
