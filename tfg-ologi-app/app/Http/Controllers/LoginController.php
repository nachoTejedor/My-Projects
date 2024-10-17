<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

class LoginController extends Controller
{
    public function checkLogin(){
        $parametros=request()->validate([
            'nombre_usuario'=>['required'],
            'contrasena'=>['required','min:6']
        ]);
        $user=Usuario::where('nombre_usuario',$parametros['nombre_usuario'])->first();


        if($user && Hash::check($parametros['contrasena'], $user->contrasena)){
            session()->put($user->getAttributes());
            return redirect ('/');
        } else {
            return redirect ('/')->with(alert('error', 'El usuario o la contraseña son incorrectos. Por favor, inténtalo de nuevo.'));
        }
    }

public function logoutLaravel(){
    Session::flush();
    return redirect('/');
}
}
?>
<script src="js/funcion.js"></script>
