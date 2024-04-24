<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Orden de Compra
        </h2>
    </x-slot>

    {{ Aire::open()->route('ordenes.store')->class('bg-white m-2') }}

    <div class="grid grid-cols-2 gap-4 p-8">

        {{ Aire::select($products->pluck('name','id'),'product_id','Productos') }}

        {{ Aire::number('cantidad','Cantidad') }}

        {{ Aire::select($proveedores->pluck('nombre','id'),'proveedor_id','Proveedores') }}

        {{ Aire::date('fecha_entrega','Fecha de Entrega') }}

    </div>

    <div class="flex justify-end p-8">
        {{ Aire::submit('Crear')->class('bg-green-500 hover:bg-green-600 ') }}
    </div>

    {{ Aire::close() }}

</x-app-layout>

