<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenesCompra extends Model
{
    use HasFactory;
    protected $table = 'ordenes_compras';

    protected $fillable = [
        'producto_id',
        'proveedor_id',
        'cantidad',
        'fecha_orden',
        'fecha_entrega'
    ];

    
}
