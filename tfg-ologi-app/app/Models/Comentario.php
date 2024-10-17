<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function autor(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
    public function producto(){
        return $this->belongsTo(Producto::class,'id_producto');
    }
    public function comentario(){
        return $this->belongsTo(Comentario::class,'id_comentario');
    }
    public function respuestas(){
        return $this->hasMany(Comentario::class);
    }
}
