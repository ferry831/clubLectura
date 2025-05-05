<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
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
        $selectedGenres = fake()->randomElements(
            $generos,
            fake()->numberBetween(2, 5)
        );

        return [

            'title' => fake()->sentence(),
            'author_id' => Author::factory(),
            'logo' => fake()->imageUrl(),
            'genre' => $selectedGenres,


        ];
    }
}
