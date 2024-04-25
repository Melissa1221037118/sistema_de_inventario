<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        $context = compact('products');

        return view('productos.index',$context);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required|max:255',
            'stock' => 'required|numeric',
        ]);

        Product::create($validated);

        return redirect()->route('productos.index')->with('success','Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $product = Product::find($id);

        $context = compact('product');

        return view('productos.edit',$context)->with('success','Producto actualizado con éxito');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);

        $validated = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'description' => 'required|max:255',
            'stock' => 'required|numeric',
        ]);

        $product->update($validated);

        return redirect()->route('productos.index')->with('success','Producto actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('productos.index')->with('success','Producto eliminado con éxito');
    }
}
