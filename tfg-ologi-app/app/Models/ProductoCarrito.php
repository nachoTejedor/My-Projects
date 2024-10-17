<?php

// app/Models/ProductoCarrito.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoCarrito extends Model
{
    use HasFactory;

    protected $table = 'producto_carrito'; // Nombre correcto de la tabla

    protected $fillable = ['id_carrito', 'id_producto', 'n_copias', 'guardados'];
}

