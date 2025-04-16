<?php

use App\Models\Author;
use App\Models\Book;


it('belongs to an author', function () {

    $author = Author::factory()->create();
    $book = Book::factory()->create([
        'author_id' => $author->id,
    ]);


    expect($book->author->is($author))->toBeTrue();


});

it('can have genres', function () {

    $book = Book::factory()->create();

    $book->genre('Policiaca');

    expect($book->genres)->toHaveCount(1);
});