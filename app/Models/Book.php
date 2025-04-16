<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Genre;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function genre(string $name)
    {
        $genre = Genre::firstOrCreate(['name' => $name]);
        $this->genres()->attach($genre);
    }

    public function genres()
    {

        return $this->belongsToMany(Genre::class);
    }

    protected $fillable = ['title', 'author_id', 'logo', 'genre'];

    // Asegúrate de que el campo genre sea tratado como un array
    protected $casts = [
        'genre' => 'array',  // Esto indica que genre es un array o JSON
    ];

}

