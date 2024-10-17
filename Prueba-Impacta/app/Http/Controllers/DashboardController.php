<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Asegúrate de que el usuario esté autenticado
      if (!auth()->guard()->check()) {
            return redirect('/')->with('error', 'You need to log in first.');
        }

        // Obtén todos los mensajes
        $mensajes = Mensaje::all();

        // Pasa los mensajes a la vista
        return view('dashboard', compact('mensajes'));
    }
}
