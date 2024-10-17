<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubre nuestras camisetas más vendidas y nuevos productos en Ologi Designs.">
    <meta name="keywords" content="Ologi, Diseños, Camisetas, Nuevos productos, Más vendidos">
    <link rel="canonical" href="http://www.ologi.com/camisetas.html" />
    <link rel="stylesheet" href="/css/camisetas.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Camisetas Más Vendidas y Nuevos Productos | Ologi Designs</title>
</head>
<body>
    <nav>
    <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a  href="/camisetas">Camisetas</a></li>
            <li><a class="active" href="/sudaderas">Sudaderas</a></li>
            <li><a href="/zapatillas">Zapatillas</a></li>
            <li><a href="#footer">Contacto</a></li>
            <?php if(session()->has('nombre_usuario')):?>
            <li id="traducir"><a href="/carrito" lang="en">Toca para ver el carrito</a></li>
            <?php  endif;?>
        </ul>
    </nav>
    
    <main>
        <div class="ProductosMostrados" id="Tshirts">
            <h1 class="titulo24">SUDADERA MÁS VENDIDAS</h1>
            <div class="contenedorProductosTotales">
                @foreach($productos as $producto)
                @if($producto)
                <div class="contenedorProducto">
                    <div class="contenedorImagenProducto">
                        <a href="{{ url('/producto/' . $producto->id) }}">
                        <img src="{{ asset('images/' . $producto->imagen) }}" alt="Imagen del producto">
                        </a>
                    </div>
                    <div class="contenedorPrecio">
                        <h3 class="precioOriginal">{{ $producto->precio }}$</h3>
                    </div>
                    <?php if(session()->has('nombre_usuario')):
if(session()->has('esAdmin') && session('esAdmin') == 1):?>
 <form action="{{ route('producto.eliminar', $producto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">Eliminar</button>
            </form>
            <?php  else:
 endif;
 else:
 endif;?>
                </div>
                @endif
                @endforeach
            </div>
        </div>

        <div class="ProductosMostrados" id="camisetas">
            <h1 class="titulo24">PRODUCTOS NUEVOS</h1>
            <div class="contenedorProductosTotales">
                @foreach($productos as $producto)
                @if($producto)
                <div class="contenedorProducto">
                    <div class="contenedorImagenProducto">
                        <a href="{{ url('/producto/' . $producto->id) }}">
                            <img src="{{ asset('images/' . $producto->imagen) }}" alt="{{ $producto->imagen }}">
                        </a>
                    </div>
                    <div class="contenedorPrecio">
                        <h3 class="precioViejo">{{ $producto->precio_viejo }}$</h3>
                        <h3 class="precioOriginal">{{ $producto->precio }}$</h3>
                    </div>
                    <?php if(session()->has('nombre_usuario')):
if(session()->has('esAdmin') && session('esAdmin') == 1):?>
 <form action="{{ route('producto.eliminar', $producto->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">Eliminar</button>
            </form>
            <?php  else:
 endif;
 else:
 endif;?>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </main>
    
    <footer id="footer">
        <div class="container">
            <div class="footer-section">
                <h4>Contacto</h4>
                <p>Correo electrónico: ologi@gmail.com</p>
                <p>Teléfono: #34 666456743</p>
                <p>Dirección: Calle Principal, Ciudad</p>
            </div>

            <div class="footer-section">
                <h4>Síguenos</h4>
                <ul>
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Instagram</a></li>
                    <li><a href="#" target="_blank">Twitter</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Enlaces Rápidos</h4>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Catálogo</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="#">Privacidad</a></li>
                    <li><a href="#">Términos</a></li>
                </ul>
            </div>

           
        </div>
        <div class="copyright">
            <p>&copy; 2023 Ologi Designs. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>