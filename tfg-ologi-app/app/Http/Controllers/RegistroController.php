<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function miMetodo(){
        $algo=false;
        if($algo){
            return view('inicio');
        }
        else{
            return view('Registro');
        }
    }



public function crearUsuario(Request $request) {
    // Validación de los datos del formulario
    $request->validate([
        'nombre_usuario' => ['required', 'min:4', 'max:50'],
        'nombre' => ['required', 'max:50'],
        'apellidos' => ['required', 'max:50'],
        'correo' => ['required', 'email:rfc,dns'],
        'contrasena' => ['required', 'min:6'],
        'telefono' => ['required', 'max:9'],
        'imagen' => ['image', 'mimes:png,jpg,jpeg'],
    ]);

    // Crear una nueva instancia de Usuario con los datos del formulario
    $usuario = new Usuario();
    $usuario->nombre_usuario = $request->nombre_usuario;
    $usuario->nombre = $request->nombre;
    $usuario->apellidos = $request->apellidos;
    $usuario->correo = $request->correo;
    $usuario->telefono = $request->telefono;
    $usuario->contrasena = $request->contrasena;

    // Manejo de la imagen
    if ($request->hasFile('imagen')) {
        $imageName = time() . '.' . $request->imagen->extension();
        $request->imagen->move(public_path('images'), $imageName);
        $usuario->imagen = $imageName;
    }
    
    // Guardar el usuario en la base de datos
    $usuario->save();

    // Colocar los datos del usuario en la sesión
    session()->put($usuario->getAttributes());

    // Redirigir a la página principal u otra vista
    return redirect('/')->with('success', 'Usuario creado correctamente.');
}

}