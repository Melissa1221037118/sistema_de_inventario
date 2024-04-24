<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Producto - {{ $product->name }}
        </h2>
    </x-slot>

    {{ Aire::open()->route('productos.update',$product) }}

    <div class="grid grid-cols-2 gap-4 p-8">

        {{ Aire::input('name', 'Nombre del Producto')->value($product->name) }}
        {{ Aire::number('price', 'Precio del Producto')->value($product->price) }}
        {{ Aire::number('stock', 'Stock del Producto')->value($product->stock) }}
        {{ Aire::textarea('description', 'Descripción del Producto')->value($product->description) }}

    </div>

    <div class="flex justify-end p-8">
        {{ Aire::submit('Editar')->class('bg-green-500 hover:bg-green-600 ') }}
    </div>

    {{ Aire::close() }}

</x-app-layout>


