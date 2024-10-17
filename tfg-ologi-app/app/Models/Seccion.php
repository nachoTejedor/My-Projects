<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
class Seccion extends Model
{
	protected $fillable = ['nombre'];
    use HasFactory;
	public function Producto()
{
    return $this->belongsTo(Producto::class);
}
}
