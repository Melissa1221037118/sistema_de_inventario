<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" text-gray-900">

                    <div class="flex justify-center py-2">
                        <img src="{{ asset('img/cecep-logo.png') }}" alt="logo-cecep" class="w-[300px] h-[150px]">
                    </div>

                    <h3 class="text-2xl font-bold text-center">
                        SISTEMA DE CONTROL DE INVENTARIO (SCI)
                    </h3>

                    <h4 class="text-xl text-center my-2 text-gray-500">
                        Puedes elegir una de las siguientes opciones:
                    </h4>

                    <section class="flex justify-center gap-4 items-center my-4">

                        <a href="{{ route('productos.index') }}" class="text-center bg-blue-300 hover:bg-blue-400 text-white py-2 px-3 rounded-lg text-xl">
                            PRODUCTOS
                        </a>

                        <a href="{{ route('proveedores.index') }}" class="text-center bg-blue-300 hover:bg-blue-400 text-white py-2 px-3 rounded-lg text-xl">
                            PROVEEDORES
                        </a>

                        <a href="{{ route('proveedores.index') }}" class="text-center bg-blue-300 hover:bg-blue-400 text-white py-2 px-3 rounded-lg text-xl">
                            ORDENES DE COMPRA
                        </a>
                    </section>


                    <section class="text-center my-8">
                        <h4>
                            MELISSA MONTAÑO
                        </h4>
                        <h5>
                            Cecep - 2024
                        </h5>
                    </section>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
