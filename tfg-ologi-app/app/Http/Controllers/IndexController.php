<?php
namespace App\Http\Controllers;

use App\Models\Producto;

class IndexController extends Controller
{
    public function index()
    {
        // Obtener productos por tipo
        $camisetas = Producto::where('tipo', 'camiseta')->get();
        $sudaderas = Producto::where('tipo', 'sudadera')->get();
        $zapatillas = Producto::where('tipo', 'zapatilla')->get();

        // Pasar las variables a la vista
        return view('index', compact('camisetas', 'sudaderas', 'zapatillas'));
    }
}