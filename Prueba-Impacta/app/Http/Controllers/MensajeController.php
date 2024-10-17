<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MensajeController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:100',
            'planet' => 'required|in:Mercurio,Venus,Tierra,Marte,Júpiter,Saturno,Urano,Neptuno',
            'message' => 'required|string',
            'result' => 'required|in:feliz,rico,avion,dormir',
            'privacy' => 'required|boolean'
        ]);

        // Verifica el valor recibido para el campo privacy
        $privacyValue = $request->input('privacy');
        \Illuminate\Support\Facades\Log::info('Privacy Value: ' . $privacyValue);

        // Crear un nuevo mensaje
        Mensaje::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'planet' => $request->input('planet'),
            'message' => $request->input('message'),
            'result' => $request->input('result'),
            'privacy' => $privacyValue // Almacena el valor recibido
        ]);

        // Redirigir o responder
        return redirect()->back()->with('success', 'Mensaje enviado exitosamente.');
    }
}

?>