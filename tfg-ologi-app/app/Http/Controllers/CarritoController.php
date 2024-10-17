<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\ProductoCarrito;

class CarritoController extends Controller
{
    public function agregarProducto(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'n_productos' => 'required|integer|min:1',
            'guardados' => 'required|boolean',
        ]);

        // Obtener los datos del formulario
        $productoId = $request->input('producto_id');
        $nProductos = $request->input('n_productos');
        $guardado = $request->input('guardados');
        $usuarioId = $request->input('id_usuario');

        // Crear una nueva entrada en el carrito
        $carrito = new Carrito();
        $carrito->id_producto = $productoId;
        $carrito->n_productos = $nProductos;
        $carrito->guardados = $guardado;
        $carrito->id_usuario = $usuarioId;
        
        // Guardar en la base de datos
        $carrito->save();

        // Crear una nueva entrada en la tabla ProductoCarrito
        $productoCarrito = new ProductoCarrito();
        $productoCarrito->id_producto = $productoId;
        $productoCarrito->id_carrito = $carrito->id;
        $productoCarrito->n_copias = $nProductos;
        
        // Guardar en la base de datos
        $productoCarrito->save();
        
        // Redirigir a la página de índice del carrito
        return redirect()->route('carrito.index')->with('success', 'Producto añadido al carrito');
    }

    public function index(Request $request)
    {
        // Obtener el ID del usuario desde la sesión
        $id_usuario = $request->session()->get('id');

        // Verificar si el ID del usuario existe en la sesión
        if (!$id_usuario) {
            // Manejar el caso en que no hay un ID de usuario en la sesión
            return redirect('/login')->with('error', 'Debe iniciar sesión primero');
        }

        // Obtener todos los items del carrito del usuario con los productos relacionados
        $carrito = Carrito::with('producto')->where('id_usuario', $id_usuario)->get();

        // Pasar los datos del carrito y el id_usuario a la vista
        return view('carrito_index', compact('carrito', 'id_usuario'));
    }
    public function eliminar($id)
    {
        $item = Carrito::find($id);

        if ($item) {
            $item->delete();
            return redirect()->back()->with('success', 'El producto ha sido eliminado del carrito.');
        }

        return redirect()->back()->with('error', 'El producto no pudo ser eliminado.');
    }
    
    }

