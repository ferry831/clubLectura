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
            'Novela',
            'Poesía',
            'Ensayo',
            'Ciencia ficción',
            'Fantasía',
            'Terror',
            'Misterio',
            'Policiaco',
            'Romance',
            'Drama',
            'Aventura',
            'Histórico',
            'Biografía',
            'Autobiografía',
            'Humor',
            'Distopía',
            'Realismo mágico',
            'Filosofía',
            'Teatro',
            'Cuento',
            'Novela gráfica',
            'Thriller',
            'Bélico',
            'Política',
            'Autoayuda',
            'Infantil',
            'Juvenil',
            'Clásico',
            'Western',
            'Epistolar',
        ];

        foreach ($generos as $genero) {
            Genre::firstOrCreate(['name' => $genero]);
        }

    }
}
