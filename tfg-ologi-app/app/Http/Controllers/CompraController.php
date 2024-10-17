<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;

class CompraController extends Controller
{
    public function realizarCompra(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'metodo_pago' => 'required|in:efectivo,tarjeta,paypal',
        ]);

        // Crear una nueva compra
        $compra = new Compra();
        $compra->metodo_pago = $request->input('metodo_pago');
        // Guardar en la base de datos
        $compra->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('compra')->with('success', 'Compra realizada con éxito');
    }
    public function index()
    {

        // Pasar los datos del carrito a la vista
        return view('compra');
    }
}
