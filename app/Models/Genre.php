<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /** @use HasFactory<\Database\Factories\GenreFactory> */
    use HasFactory;

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }


}
