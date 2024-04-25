<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\OrdenesCompra;
use App\Models\Product;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class OrdenesCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordenesCompra = OrdenesCompra::all();

        $context = compact('ordenesCompra');

        return view('ordenes_compra.index',$context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        $proveedores = Proveedor::all();

        $context = compact('products','proveedores');

        return view('ordenes_compra.create',$context);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //info($request->all());

        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'proveedor_id' => 'required',
            'cantidad' => 'required|integer|min:1',
            'fecha_entrega' => 'required|date'
        ]);

        $producto = Product::findOrFail($validated['product_id']);

        if ($validated['cantidad'] > $producto->stock) {
            return back()->withError('La cantidad solicitada supera el stock disponible');
        }

        $cantidadStock = $producto->stock - $validated['cantidad'];

        if($cantidadStock < 0){
            $cantidadStock = 0;
        }

        $producto->update([
            'stock' => $cantidadStock
        ]);

        $fecha_orden = now();

        $validated['fecha_orden'] = $fecha_orden;

        OrdenesCompra::create($validated);

        return redirect()->route('ordenes.index')->with('success','Orden de compra creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Product::all();
        $proveedores = Proveedor::all();
        $orden = OrdenesCompra::find($id);

        $context = compact('products','proveedores','orden');

        return view('ordenes_compra.edit',$context);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $ordenCompra = OrdenesCompra::find($id);

        $old_cantidad = $ordenCompra->cantidad;

        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'proveedor_id' => 'required',
            'cantidad' => 'required|integer|min:1',
            'fecha_entrega' => 'required|date'
        ]);

        $producto = Product::findOrFail($validated['product_id']);

        $new_cantidad = $validated['cantidad'];

        $diferencia = $new_cantidad - $old_cantidad;

        if ($diferencia > $producto->stock) {
            return back()->withError('La cantidad solicitada supera el stock disponible');
        }

        $cantidadStock = $producto->stock - $diferencia;

        if($cantidadStock < 0){
            $cantidadStock = 0;
        }

        $producto->update([
            'stock' => $cantidadStock
        ]);

        $ordenCompra->update($validated);

        return redirect()->route('ordenes.index')->with('success','Orden de compra actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $orden = OrdenesCompra::find($id);

        $orden->delete();

        return redirect()->route('ordenes.index')->with('success','Orden eliminada');
    }
}
