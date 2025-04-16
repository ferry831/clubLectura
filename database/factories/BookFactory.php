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
