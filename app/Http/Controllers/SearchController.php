<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $book = Book::where('title', 'like', '%' . request('q') . '%')
            ->get();

        return view('results', ['books' => $book]);

    }
}
