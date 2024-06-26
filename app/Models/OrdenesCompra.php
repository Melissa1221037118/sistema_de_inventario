<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenesCompra extends Model
{
    use HasFactory;
    protected $table = 'ordenes_compras';

    protected $fillable = [
        'product_id',
        'proveedor_id',
        'cantidad',
        'fecha_orden',
        'fecha_entrega'
    ];

    public function producto()
    {
        return $this->belongsTo(Product::class,'product_id');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

}
