<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class PageController extends Controller
{
    public function homepage(){
        //Ottengo i dati dal DB
        $books = Book::all();
        //Crea una variabile
        //la passa alla vista
        return view('homepage', compact('books'));
        //return view('homepage', ['books'=> $book]);

    }

    public function detail(Book $book){
        return view('detail', compact('book'));
    }
}
