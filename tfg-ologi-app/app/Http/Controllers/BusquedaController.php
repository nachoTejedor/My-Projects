<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Usuario;

class BusquedaController extends Controller
{
    public function buscar(Request $request)
    {
        // Verifica si se ha enviado una consulta de búsqueda
        if ($request->has('busqueda')) {
            $busqueda = $request->input('busqueda');

            // Busca recetas por nombre
            $productos = Producto::where('nombre', 'like', '%' . $busqueda . '%')->get();

            // Busca usuarios por nombre de usuario
            $usuarios = Usuario::where('nombre_usuario', 'like', '%' . $busqueda . '%')->get();

            // Muestra los resultados de la búsqueda
            return view('resultados', compact('productos', 'usuarios', 'busqueda'));
        }

        // Si no se envió ninguna búsqueda, redirecciona al inicio u otra página
        return redirect()->route('inicio');
    }
}
