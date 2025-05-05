<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;

class BookGenreSeeder extends Seeder
{
    public function run()
    {
        Book::all()->each(function ($book) {
            // Asume que $book->genres_array es tu array de nombres
            foreach ($book->genre as $name) {
                $genre = Genre::firstOrCreate(['name' => $name]);
                $book->genres()->syncWithoutDetaching($genre->id);
            }
        });
    }
}
