<x-layout>


    <div class="space-y-10">


        <section class="text-center">
            <x-page-heading>Busca tu libro:</x-page-heading>
            <form action="" class="mt-4">

                <input type="text" placeholder="El Quijote..."
                    class="bg-white/5 border border-white/15 rounded-xl px-5 py-2 w-full max-w-2xl focus:border-orange-600 transition-colors duration-300  focus:outline-none">

            </form>


        </section>

        <section>

            <x-section-heading>Libros Recomendados</x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-5">
                @foreach ($featuredBooks as $book)
                    <x-book-card :book="$book" />
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Géneros</x-section-heading>
            <div class="mt-5 space-x-1 flex flex-wrap gap-2">

                @foreach ($genres as $genre)
                    <x-genero :genre="$genre->name"></x-genero>
                @endforeach





            </div>



        </section>

        <section class="mb-8">
            <x-section-heading>Libros Más Leídos</x-section-heading>
            <div class="mt-6 space-y-6">

                @foreach ($books as $book)
                    <x-book-card-wide :book="$book" />
                @endforeach


            </div>


        </section>


    </div>



</x-layout>
