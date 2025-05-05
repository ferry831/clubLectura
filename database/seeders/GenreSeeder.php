<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = [
            'novela',
            'poesia',
            'ensayo',
            'ciencia ficcion',
            'fantasia',
            'terror',
            'misterio',
            'policiaco',
            'romance',
            'drama',
            'aventura',
            'historico',
            'biografia',
            'autobiografia',
            'humor',
            'distopia',
            'realismo magico',
            'filosofia',
            'teatro',
            'cuento',
            'novela grafica',
            'thriller',
            'belico',
            'politica',
            'autoayuda',
            'infantil',
            'juvenil',
            'clasico',
            'western',
            'epistolar',

        ];

        foreach ($generos as $genero) {
            Genre::firstOrCreate(['name' => $genero]);
        }

    }
}
