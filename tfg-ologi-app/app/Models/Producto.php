<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function Seccion(){
        return $this->hasMany(Seccion::class);
    }
    public function usuario(){
        return $this->belongsTo(Usuario::class,'id_usuario');
    }
    public function comentarios(){
        return $this->hasMany(Comentario::class,'id_producto');
    }
}
