<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Proveedor - {{ $proveedor->nombre }}
        </h2>
    </x-slot>

    {{ Aire::open()->route('proveedores.update',$proveedor->id) }}

    <div class="grid grid-cols-2 gap-4 p-8">

        {{ Aire::input('nombre', 'Nombre del Proveedor')->value($proveedor->nombre) }}
        {{ Aire::input('direccion', 'Direccion del Proveedor')->value($proveedor->direccion) }}
        {{ Aire::number('telefono', 'Telefono del Proveedor')->value($proveedor->telefono) }}
        {{ Aire::input('email', 'Email del Proveedor')->value($proveedor->email)}}

    </div>

    <div class="flex justify-end p-8">
        {{ Aire::submit('Editar')->class('bg-green-500 hover:bg-green-600 ') }}
    </div>

    {{ Aire::close() }}

</x-app-layout>

