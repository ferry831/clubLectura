<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Genre>
 */
class GenreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $generos = [
            'Novela',
            'Poesia',
            'Ensayo',
            'Ciencia ficcion',
            'Fantasía',
            'Terror',
            'Misterio',
            'Policiaco',
            'Romance',
            'Drama',
            'Aventura',
            'Historico',
            'Biografia',
            'Autobiografia',
            'Humor',
            'Distopia',
            'Realismo magico',
            'Filosofia',
            'Teatro',
            'Cuento',
            'Novela grafica',
            'Thriller',
            'Belico',
            'Politica',
            'Autoayuda',
            'Infantil',
            'Juvenil',
            'Clasico',
            'Western',
            'Epistolar',
        ];

        return [
            'name' => fake()->randomElement($generos),
        ];
    }
}
