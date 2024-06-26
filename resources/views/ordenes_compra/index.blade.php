<x-app-layout>

    <x-slot name="header" class="flex justify-end">
        <a href="{{ route('ordenes.create') }}" class="px-2 py-3 bg-green-400 hover:bg-green-500 text-white rounded-lg">
            Nueva Orden de Compra
        </a>
    </x-slot>


    <div class="container mx-auto p-8">
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <td class="py-2 px-4 border-b border-gray-200 font-bold">Producto</td>
                    <td class="py-2 px-4 border-b border-gray-200 font-bold">Proveedor</td>
                    <td class="py-2 px-4 border-b border-gray-200 font-bold">Cantidad</td>
                    <td class="py-2 px-4 border-b border-gray-200 font-bold">Fecha de Orden</td>
                    <td class="py-2 px-4 border-b border-gray-200 font-bold">Fecha de Entrega</td>
                    <td class="py-2 px-4 border-b border-gray-200 font-bold">Total</td>
                    <td class="py-2 px-4 border-b border-gray-200 font-bold"></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($ordenesCompra as $orden)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $orden->producto->name }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $orden->proveedor->nombre }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $orden->cantidad }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $orden->fecha_orden }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $orden->fecha_entrega }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">${{ $orden->producto->price * $orden->cantidad }}</td>
                        <td class="py-2 px-4 border-b border-gray-200 flex gap-4 items-center justify-end">
                            <a href="{{ route('ordenes.edit', $orden->id) }}" class="px-2 py-3 bg-blue-400 hover:bg-blue-500 text-white rounded-lg flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                                Editar
                            </a>
                            {{ Aire::open()->route('ordenes.destroy', $orden->id) }}
                                <button type="submit" onclick="return confirm('¿Seguro que quieres eliminar?')" class="px-2 py-3 bg-red-400 hover:bg-red-500 text-white rounded-lg flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                    Eliminar
                                </button>
                            {{ Aire::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>
