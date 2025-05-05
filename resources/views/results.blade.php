<x-layout>
    <x-page-heading>Resultados de búsqueda</x-page-heading>

    <div class="mt-8 space-y-6">
        @if ($books->count() > 0)
            @foreach ($books as $book)
                <x-book-card-wide :book="$book" />
            @endforeach
        @else
            <p class="text-center text-gray-500">No se encontraron resultados para "{{ request('q') }}"</p>
        @endif
    </div>

</x-layout>
