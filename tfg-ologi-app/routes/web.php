<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\IndexController;




Route::get('/', [IndexController::class, 'index']);

Route::get('/carrito', function () {
    return view('carrito_index');
});
Route::get('/Registro', function () {
    return view('Registro');
});
Route::get('/productoCamisetas', function () {
    return view('producto_camisetas');
});
Route::get('/productoSudaderas', function () {
    return view('producto_sudadera');
});
Route::get('/productoZapatillas', function () {
    return view('producto_zapatilla');
});
Route::get('/VerPerfil', function () {
    return view('VerPerfil');
});
Route::get('/confirmacionCarrito', function () {
    return view('confirmacion_carrito');
});

Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');


Route::post('/realizarCompra', [CompraController::class, 'realizarCompra'])->name('realizarCompra');

Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::get('/insertaProducto', [ProductoController::class, 'create']);
Route::post('/insertaProducto', [ProductoController::class, 'store']);
Route::get('/compra', [CompraController::class, 'index'])->name('compra');


Route::get('/sudaderas', [ProductoController::class, 'listarSudaderas'])->name('sudaderas');
Route::get('/camisetas', [ProductoController::class, 'listarCamisetas'])->name('camisetas');
Route::get('/zapatillas', [ProductoController::class, 'listarZapatillas'])->name('zapatillas');

Route::get('producto/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::post('producto/{id}', [ProductoController::class, 'addComment'])->name('producto.addComment');
Route::delete('/productos/{id}', [ProductoController::class, 'eliminarProducto'])->name('producto.eliminar');


Route::post('/carrito/agregar', [CarritoController::class, 'agregarProducto'])->name('carrito.agregar');

Route::get('/registrar', [RegistroController::class, 'miMetodo']);
Route::post('/registrar', [RegistroController::class, 'crearUsuario']);

Route::post('insertaProducto', [ProductoController::class, 'store'])->name('insertaProducto');

Route::get('/controlPanel', [UsuarioController::class, 'listarUsuarios'])->name('listar_usuarios');
Route::post('/usuarios/{id}/hacer-admin', [UsuarioController::class, 'hacerAdmin'])->name('usuarios.hacer_admin');
Route::post('/actualizarUsuario', [UsuarioController::class, 'actualizar'])->name('actualizar.usuario');
Route::delete('usuarios/{id}', [UsuarioController::class, 'eliminar'])->name('usuarios.eliminar');
Route::get('/VerPerfilAdmin/{id}', [UsuarioController::class, 'verPerfil'])->name('ver.perfil');

Route::get('/modificar-usuario', [UsuarioController::class, 'editar'])->name('modificar.usuario');
Route::post('/usuarios/{id}/quitar-admin', [UsuarioController::class, 'quitarAdmin'])->name('usuarios.quitar_admin');

Route::post('/loguear', [LoginController::class, 'checkLogin']);

Route::get('/logout', [LoginController::class, 'logoutLaravel']);
Route::get('/crearProducto', [ProductoController::class, 'crearProducto']);
Route::post('/crearProducto', [ProductoController::class, 'crearProducto']);
