<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __invoke(Genre $genre)
    {

        $books = $genre->books;            // o ->books()->get()
        $heading = $genre->name;             // "Fantasía", por ejemplo

        return view('results', compact('books', 'heading'));



    }
}
