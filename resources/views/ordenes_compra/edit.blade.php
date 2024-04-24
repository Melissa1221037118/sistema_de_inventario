<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar orden de compra
        </h2>
    </x-slot>

    {{ Aire::open()->route('ordenes.update',$orden->id)->class('bg-white m-2') }}

    <div class="grid grid-cols-2 gap-4 p-8">

        {{ Aire::select($products->pluck('name','id'),'product_id','Productos')->value($orden->product_id) }}

        {{ Aire::number('cantidad','Cantidad')->value($orden->cantidad) }}

        {{ Aire::select($proveedores->pluck('nombre','id'),'proveedor_id','Proveedores')->value($orden->proveedor_id) }}

        {{ Aire::date('fecha_entrega','Fecha de Entrega')->value($orden->fecha_entrega) }}

    </div>

    <div class="flex justify-end p-8">
        {{ Aire::submit('Edit')->class('bg-green-500 hover:bg-green-600 ') }}
    </div>

    {{ Aire::close() }}

</x-app-layout>

