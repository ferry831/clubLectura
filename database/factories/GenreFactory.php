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

        return [
            'name' => fake()->randomElement($generos),
        ];
    }
}
