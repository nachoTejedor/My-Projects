<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutLink extends Component
{
    public function logout()
    {
        // Ejecuta el logout
        Auth::guard('web')->logout();
    
        // Invalida la sesión
        Session::invalidate();
        Session::regenerateToken();
    
        // Redirige a la ruta con nombre 'home'
        return redirect()->route('home')->with('reload', true);
    }
    

    public function render()
    {
        return view('livewire.logout-link');
    }
}

