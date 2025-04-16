<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Club de Lectura Microvalencia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css', 'resources/js/app.js')
</head>

<body class="bg-black-ferran font-sans pb-20">



    <div class="px-10 text-white font-hanken">
        <nav class="flex justify-between items-center bg-black-ferran border-b border-white/15">

            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/microvalencia.png') }}" width="75" height="75"
                        alt="">
                </a>
            </div>

            <div class="flex justify-between ">
                <div>
                    <a href=""
                        class="px-5 py-3 transition duration-300 rounded hover:bg-white/80 hover:px-5 hover:py-3 hover:text-black">Autores</a>
                </div>
                <div>
                    <a href=""
                        class="px-5 py-3 transition duration-300 rounded hover:bg-white/80 hover:px-5 hover:py-3 hover:text-black">Libros</a>
                </div>
                <div>
                    <a href=""
                        class="px-5 py-3 transition duration-300 rounded hover:bg-white/80 hover:px-5 hover:py-3 hover:text-black">Categorías</a>
                </div>
            </div>


            <div class="inline-flex items-center gap-x-2">
                <span class="w-2 h-2 bg-blue-600 inline-block"></span>
                <a href="">Publica tu libro</a>
            </div>



        </nav>


        <main class="mt-10 mx-w-[986px] mx-auto">
            {{ $slot }}

        </main>


    </div>

</body>

</html>
