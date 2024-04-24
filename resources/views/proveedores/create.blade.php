<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Proveedor
        </h2>
    </x-slot>

    {{ Aire::open()->route('proveedores.store') }}

    <div class="grid grid-cols-2 gap-4 p-8">

        {{ Aire::input('nombre', 'Nombre del Proveedor') }}
        {{ Aire::input('direccion', 'Direccion del Proveedor') }}
        {{ Aire::number('telefono', 'Telefono del Proveedor') }}
        {{ Aire::input('email', 'Email del Proveedor')}}

    </div>

    <div class="flex justify-end p-8">
        {{ Aire::submit('Crear')->class('bg-green-500 hover:bg-green-600 ') }}
    </div>

    {{ Aire::close() }}

</x-app-layout>

