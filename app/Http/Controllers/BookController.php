<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
    
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
        $request->validate([
            'name' => 'required',
            'pages' => ['required','integer']
        ]);

        Book::create([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages
        ]);
        return redirect()->route('index')->with('success','Operazione compiuta! Il libro è stato aggiunto.');
    }

    
    public function show(Book $book)
    {
        return view('show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'pages' => ['required','integer']
        ]);

        $book->update([
            'name' => $request->name,
            'year' => $request->year,
            'pages' => $request->pages
        ]);
        return redirect()
            ->route('index')
            ->with('success','Operazione compiuta! Il libro è stato aggiornato.');
    }
    public function destroy(Book $book)
    {
        //azione
        $book->delete();
        return redirect()
            ->route('index')
            ->with('success','Operazione compiuta! Il libro è stato eliminato.');
    }
}
