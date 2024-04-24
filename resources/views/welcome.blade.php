<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="">

        <header class="py-6 px-8 border-b border-gray-300 flex justify-between items-center">

            <x-application-logo class="h-8 w-auto" />

            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] "
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-3 py-2 transition focus:outline-none "
                        >
                            Iniciar Sesion
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-blue-500 focus:outline-none "
                            >
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="flex justify-center py-4">
            <img src="{{ asset('img/cecep-logo.png') }}" alt="logo-cecep" class="w-[500px] h-[200px]">
        </div>

        <section class="py-4">
            <h2 class="text-4xl text-center my-8 font-bold">
                SISTEMA DE CONTROL DE INVENTARIO (SCI)
            </h2>

            <section class="text-center my-8">
                <h4>
                    MELISSA MONTAÑO
                </h4>
                <h5>
                    Cecep - 2024
                </h5>
            </section>
        </section>

    </body>
</html>
