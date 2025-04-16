@props(['book'])

<x-panel class="flex flex-col">


    <div class="py-8 text-center">
        <h3 class="text-xl font-semibold group-hover:text-orange-600 transition-colors duration-300">
            {{ $book->title }}
        </h3>
        <p class="text-sm mt-2">{{ $book->author->name }}</p>
    </div>


    <div class="flex justify-between items-center">
        <div class="flex flex-wrap space-x-1">
            @foreach ($book->genre as $genre)
                <x-genero :genre="$genre" size="small" />
            @endforeach

        </div>


        <div class="flex justify-end">
            <img src="http://picsum.photos/seed/{{ rand(0, 1000000) }}/42" alt="" class="rounded-lg">
        </div>
    </div>


</x-panel>
