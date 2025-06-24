<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();

        return view('autori.index', compact('authors'));
    }

    public function create()
    {
        return view('autori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required'
        ]);

        Author::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'birthday' => $request->birthday
        ]);
        return redirect()->route('autori.index')->with('success','Operazione compiuta! Autore è stato aggiunto.');
    }

    
    public function show(Author $author)
    {
        return view('autori.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('autori.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'birthday' => 'required'
        ]);

        $author->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'birthday' => $request->birthday
        ]);
        return redirect()
            ->route('autori.index')
            ->with('success','Operazione compiuta! Autore è stato aggiornato.');
    }
    public function destroy(Author $author)
    {
        //azione
        $author->delete();
        return redirect()
            ->route('autori.index')
            ->with('success','Operazione compiuta! Autore è stato eliminato.');
    }
}