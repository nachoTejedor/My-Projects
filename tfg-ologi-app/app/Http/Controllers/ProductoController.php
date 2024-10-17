<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Importa Auth en lugar de Session

class ProductoController extends Controller
{
    public function listarSudaderas()
    {
        $sudaderas = Producto::where('tipo', 'sudadera')->get();
        return view('productos.sudaderas', ['productos' => $sudaderas]);
    }

    public function listarCamisetas()
    {
        $camisetas = Producto::where('tipo', 'camiseta')->get();
        return view('productos.camisetas', ['productos' => $camisetas]);
    }

    public function listarZapatillas()
    {
        $zapatillas = Producto::where('tipo', 'zapatilla')->get();
        return view('productos.zapatillas', ['productos' => $zapatillas]);
    }

    public function listarTodos()
    {
        $productos = Producto::all();
        return view('productos.todos', ['productos' => $productos]);
    }

    public function show($id)
    {
        // Encuentra el producto por su ID
        $producto = Producto::findOrFail($id);

        // Encuentra productos relacionados, excluyendo el producto actual
        $productosRelacionados = Producto::where('tipo', $producto->tipo)
                                         ->where('id', '!=', $id)
                                         ->get();

        // Selecciona la vista basada en el tipo de producto
        switch ($producto->tipo) {
            case 'camiseta':
                return view('producto_camisetas', compact('producto', 'productosRelacionados'));
            case 'sudadera':
                return view('producto_sudadera', compact('producto', 'productosRelacionados'));
            case 'zapatilla':
                return view('producto_zapatilla', compact('producto', 'productosRelacionados'));
            default:
                abort(404, 'Tipo de producto no encontrado');
        }
    }

    public function create()
    {
        return view('añadirProducto');
    }
    public function store(Request $request)
{
    // Validación de los datos del formulario
    $request->validate([
        'nombre' => 'required',
        'tiempo' => 'required',
        'talla' => 'required',
        'tipo' => 'required',
        'capucha'=>'required',
        'imagen' => ['image', 'mimes:png,jpg,jpeg'], // Validación para la imagen
        'id_usuario' => 'required',
    ]);

    // Crear una nueva instancia de Producto con los datos del formulario
    $producto = new Producto();
    $producto->nombre = $request->nombre;
    $producto->tiempo = $request->tiempo;
    $producto->talla = $request->talla;
    $producto->tipo = $request->tipo;
    $producto->capucha = $request->capucha;
    $producto->id_usuario = $request->id_usuario;

    // Asignar la descripción basada en el tipo de producto
    switch ($request->tipo) {
        case 'camiseta':
            $producto->texto = 'Esta camiseta es perfecta para cualquier ocasión, hecha de materiales de alta calidad que garantizan comodidad y estilo.';
            break;
        case 'sudadera':
            $producto->texto = 'Nuestra sudadera te mantendrá cálido y a la moda. Ideal para esos días fríos, está hecha de un tejido suave y duradero.';
            break;
        case 'zapatilla':
            $producto->texto = 'Las zapatillas perfectas para cualquier actividad, combinando confort y durabilidad para un rendimiento óptimo.';
            break;
        default:
            $producto->texto = $request->texto; // En caso de que el tipo no coincida con ninguno de los especificados
    }

    // Procesamiento de la imagen
    if ($request->hasFile('imagen')) {
        $imageName = time() . '.' . $request->imagen->extension();
        $request->imagen->move(public_path('images'), $imageName);
        $producto->imagen = $imageName;
    }

    // Guardar el producto en la base de datos
    $producto->save();

    // Redireccionar a la lista de productos con un mensaje de éxito
    return redirect('/')->with('success', 'Producto agregado exitosamente.');
}


    public function addComment(Request $request, $id)
    {
        $request->validate([
            'valoracion' => 'required|integer|min:1|max:5',
            'comentario' => 'required|string',
        ]);

        $comentario = new Comentario();
        $comentario->texto = $request->input('comentario');
        $comentario->valoracion = $request->input('valoracion');
        $comentario->id_producto = $id;
        $comentario->id_usuario = $request->input('id_usuario'); // Obtener el ID de usuario del formulario
        $comentario->save();

        return redirect()->route('producto.show', $id)->with('success', 'Comentario añadido con éxito');
    }
    public function eliminarProducto($id)
    {
        // Encuentra el producto por su ID
        $producto = Producto::findOrFail($id);
    
        // Verifica que el usuario esté autenticado y sea administrador
        if (session('esAdmin') == 1) {
            // Elimina el producto
            $producto->delete();
    
            // Redirige a la lista de productos con un mensaje de éxito
            return redirect('/')->with('success', 'Producto eliminado exitosamente.');
        } else {
            // Redirige con un mensaje de error si el usuario no tiene permiso
            return redirect('/')->with('error', 'No tienes permiso para eliminar este producto.');
        }
    }
    
}




// public function crearProducto()
// {
//     // Crear una camiseta predeterminada
//     $camiseta = new Producto();
//     $camiseta->nombre = 'Camiseta Ologi Básica';
//     $camiseta->tiempo = 2;
//     $camiseta->talla = 's';
//     $camiseta->tipo = "camiseta";
//     $camiseta->texto = "Descubre la esencia de la comodidad y el estilo con nuestra camiseta básica. Confeccionada con los mejores materiales, esta camiseta ofrece un ajuste perfecto y una sensación suave al tacto. Perfecta para cualquier ocasión, ya sea para combinar con tus jeans favoritos o para un look más casual con unos pantalones chinos. Añade un toque de versatilidad a tu armario con nuestra camiseta esencial.";
//     $camiseta->imagen = 'camiseta.png';
//     $camiseta->capucha = false;
//     $camiseta->id_compra = null;
//     $camiseta->id_usuario = null; 
//     $camiseta->save();

//     // Crear una sudadera predeterminada
//     $sudadera = new Producto();
//     $sudadera->nombre = 'Sudadera Ologi Básica';
//     $sudadera->tiempo = 3;
//     $sudadera->talla = 'xl';
//     $sudadera->tipo = " sudadera";
//     $sudadera->texto = "Sumérgete en la comodidad y el estilo con nuestra sudadera clásica. Confeccionada con tejidos suaves y cálidos, esta sudadera te mantendrá abrigado en cualquier clima. Perfecta para relajarte en casa o para salir con amigos, su diseño versátil se adapta a cualquier ocasión. Añade un toque de confort y elegancia a tu estilo con nuestra sudadera imprescindible.";
//     $sudadera->imagen = '/public/img/sudadera.png';
//     $sudadera->capucha = true;
//     $sudadera->id_compra = null;
//     $sudadera->id_usuario = null; 
//     $sudadera->save();

//     // Crear una zapatilla predeterminada
//     $zapatilla = new Producto();
//     $zapatilla->nombre = 'Zapatilla Ologi Urbana';
//     $zapatilla->tiempo = 4;
//     $zapatilla->talla = '44';
//     $zapatilla->tipo = "zapatilla";
//     $zapatilla->texto = "Explora el equilibrio perfecto entre comodidad y estilo con nuestras zapatillas urbanas. Diseñadas con materiales de primera calidad y una atención impecable al detalle, estas zapatillas ofrecen un ajuste cómodo y un estilo versátil. Ya sea para tus aventuras diarias en la ciudad o para relajarte los fines de semana, estas zapatillas serán tu compañero perfecto. Eleva tu look con el máximo confort y un toque de elegancia con nuestras zapatillas esenciales.";
//     $zapatilla->imagen = 'zapatilla.png';
//     $zapatilla->capucha = false;
//     $zapatilla->id_compra = null;
//     $zapatilla->id_usuario = null; 
//     $zapatilla->save();

