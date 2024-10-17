<?php

// app/Models/Carrito.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $table = 'carrito'; // Nombre correcto de la tabla

    protected $fillable = ['usuario_id', 'n_productos', 'guardados'];

    public function productos()
    {
        return $this->hasMany(ProductoCarrito::class, 'id_carrito');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}

