@props(['book'])

<x-panel class="flex gap-x-6">

    <div>
        <img src="http://picsum.photos/seed/{{ rand(0, 1000000) }}/100" alt="" class="rounded-lg">
    </div>


    <div class="flex-1 flex flex-col mt-auto mb-auto">


        <h3 class="text-3xl font-semibold group-hover:text-orange-600 transition-colors duration-300">{{ $book->title }}
        </h3>

        <p class=" ">{{ $book->author->name }}</p>
    </div>

    <div class="flex justify-between">

        <div class="space-x-1">

            @foreach ($book->genre as $genre)
                <x-genero :genre="$genre" size="small" />
            @endforeach



        </div>

    </div>
</x-panel>
