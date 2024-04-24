<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Producto
        </h2>
    </x-slot>

    {{ Aire::open()->route('productos.store')->class('bg-white m-2') }}

    <div class="grid grid-cols-2 gap-4 p-8">

        {{ Aire::input('name', 'Nombre del Producto') }}
        {{ Aire::number('price', 'Precio del Producto') }}
        {{ Aire::number('stock', 'Stock del Producto') }}
        {{ Aire::textarea('description', 'Descripción del Producto')}}

    </div>

    <div class="flex justify-end p-8">
        {{ Aire::submit('Crear')->class('bg-green-500 hover:bg-green-600 ') }}
    </div>

    {{ Aire::close() }}

</x-app-layout>

