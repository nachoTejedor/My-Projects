<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UsuarioController extends Controller
{
    public function verPerfil($id)
    {
        // Obtener los datos del usuario por su ID
        $usuario = Usuario::findOrFail($id);

        // Pasar los datos del usuario a la vista
        return view('VerPerfilAdmin', compact('usuario'));
    }
    public function editar(Usuario $usuario)
    {
        return view('editarUsuario', [
            'usuario' => $usuario,
        ]);
    }
    public function listarUsuarios()
    {
        // Obtener todos los usuarios de la base de datos
        $usuarios = Usuario::all();
        
        // Devolver la vista 'listar_usuarios' pasando los datos de los usuarios
        return view('listaUsuarios', ['usuarios' => $usuarios]);
    }
    public function crearPepe()
{
// Crear un nuevo usuario

// Crear un nuevo usuario
$usuario = new Usuario();
$usuario->nombre_usuario = 'pepe';
$usuario->nombre = 'Pepe';
$usuario->apellidos = 'Pepito';
$usuario->contrasena = 'pepote'; // Hashear la contraseña
$usuario->esAdmin = true; // Por defecto, no es admin
$usuario->correo = 'pepe@gmail.com';
$usuario->experiencia = 'Profesional experimentado'; // Establecer la experiencia
$usuario->save();
return view('inicio');
}


public function actualizar(Request $request)
{
    // Obtener el ID del usuario de la sesión
    $idUsuario = Session::get('id');

    // Verificar si se obtuvo correctamente el ID del usuario de la sesión
    if ($idUsuario) {
        // Buscar al usuario en la base de datos por su ID
        $usuario = Usuario::find($idUsuario);

        // Verificar si se encontró al usuario
        if ($usuario) {
            // Actualizar los atributos del usuario con los datos del formulario
            $usuario->nombre = $request->nombre;
            $usuario->nombre_usuario = $request->nombre_usuario;
            $usuario->apellidos = $request->apellidos;
            $usuario->correo = $request->correo;
            $usuario->experiencia = $request->experiencia;


            // Verificar si se está actualizando la contraseña
            if ($request->contrasena) {
                $usuario->contrasena = ($request->contrasena);
            }

    if ($request->hasFile('imagen')) {
        $imageName = time() . '.' . $request->imagen->extension();
        $request->imagen->move(public_path('images'), $imageName);
        $usuario->imagen = $imageName;
    }
            // Guardar los cambios en la base de datos
            $usuario->save();
            Session::put('nombre', $usuario->nombre);
            Session::put('nombre_usuario', $usuario->nombre_usuario);
            Session::put('apellidos', $usuario->apellidos);
            Session::put('correo', $usuario->correo);
            Session::put('experiencia', $usuario->experiencia);
            Session::put('imagen', $usuario->imagen);
            // Redirigir a alguna página o mostrar un mensaje de éxito
            return redirect('/VerPerfil')->with('success', 'Usuario actualizado correctamente.');

        } else {
            // Manejar el caso en que no se encuentre al usuario
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        } 
    } else {
        // Manejar el caso en que no se obtenga el ID del usuario de la sesión
        return redirect()->back()->with('error', 'No se pudo obtener el ID del usuario de la sesión.');
    }
}
public function eliminar($id)
{
    // Buscar al usuario por su ID
    $usuario = Usuario::find($id);

    // Verificar si se encontró al usuario
    if ($usuario) {
        // Eliminar al usuario
        $usuario->delete();

        // Redirigir o mostrar un mensaje de éxito
        return redirect('/controlPanel')->with('success', 'Usuario eliminado correctamente.');
    } else {
        // Manejar el caso en que el usuario no se encuentre
        return redirect('/')->with('error', 'No se pudo encontrar al usuario.');
    }
}
public function darseBaja()
{
    $idUsuario = Session::get('id'); // Obtener el ID del usuario autenticado

    if ($idUsuario) {
        $usuario = Usuario::find($idUsuario); // Buscar al usuario en la base de datos

        if ($usuario) { 
            // Eliminar al usuario
            $usuario->delete();

            // Cerrar la sesión del usuario
            Session::flush();

            // Redirigir al usuario a la página de inicio o mostrar un mensaje de éxito
            return redirect('/')->with('success', 'Tu perfil ha sido eliminado correctamente.');
        } else {
            // Manejar el caso en que no se encuentre al usuario
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }
    } else {
        // Manejar el caso en que no se obtenga el ID del usuario autenticado
        return redirect()->back()->with('error', 'No se pudo obtener el ID del usuario autenticado.');
    }
}

public function hacerAdmin($id)
{
    // Verificar si el usuario autenticado tiene permisos de administrador
  
        // Buscar al usuario por su ID
        $usuario = Usuario::find($id);
        if ($usuario) {
            // Cambiar el estado de administrador del usuario
            $usuario->esAdmin = true;
            $usuario->save();
            return redirect()->back()->with('success', 'El usuario ahora es administrador.');
        }
        return redirect()->back()->with('error', 'No se encontró al usuario.');
    
    return redirect()->back()->with('error', 'No tienes permisos para realizar esta acción.');
}

public function quitarAdmin($id)
{
    // Verificar si el usuario autenticado tiene permisos de administrador
   
        // Buscar al usuario por su ID
        $usuario = Usuario::find($id);
        if ($usuario) {
            // Cambiar el estado de administrador del usuario
            $usuario->esAdmin = false;
            $usuario->save();
            return redirect()->back()->with('success', 'Se han quitado los permisos de administrador al usuario.');
        }
        return redirect()->back()->with('error', 'No se encontró al usuario.');
    
    return redirect()->back()->with('error', 'No tienes permisos para realizar esta acción.');
}

}





?>
