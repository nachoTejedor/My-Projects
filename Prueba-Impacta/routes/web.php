<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('index');
})->name('home'); // Añade un nombre a la ruta

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::post('/enviar-mensaje', [MensajeController::class, 'store'])->name('mensaje.store');

Route::get('/registeredUsers', function () {
    return view('dashboard');
})->middleware(['auth'])->name('registeredUsers');

// Ruta para el dashboard

Route::get('dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Ruta para el perfil
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    Route::post('/logout', function () {
        Auth::guard('web')->logout();
        return redirect('/');
    })->name('logout');    

require __DIR__.'/auth.php';
