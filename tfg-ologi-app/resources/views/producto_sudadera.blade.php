<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camisetas Ologi - Ologi Designs</title>
    <meta name="description" content="Descubre nuestras camisetas Ologi. Diseños únicos y de alta calidad.">
    <link rel="stylesheet" href="/css/producto_sudadera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a class="active" href="/camisetas">Camisetas</a></li>
            <li><a href="/sudaderas">Sudaderas</a></li>
            <li><a href="/zapatillas">Zapatillas</a></li>
            <li><a href="#footer">Contacto</a></li>
        </ul>
    </nav>
    <div class="container-title">SUDADERAS</div>

    <main>
        <div class="container-img">
            <img src="{{ asset('images/' . $producto->imagen) }}" alt="imagen-producto">
        </div>
        <div class="container-info-product">
            <div class="container-price">
                <span>30€</span>
                <i class="fa-solid fa-angle-right"></i>
            </div>

            <div class="container-details-product">
                <div class="form-group">
                    <label for="colour">Color</label>
                    <select name="colour" id="colour">
                        <option disabled selected value="">Escoge una opción</option>
                        <option value="blanco">Blanco</option>
                        <option value="proximamente">Próximamente...</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="size">Talla</label>
					<p>{{ strtoupper($producto->talla) }}</p>

                </div>
                <button class="btn-clean">Limpiar</button>
            </div>


			<div class="container-add-cart">
    <form action="{{ route('carrito.agregar') }}" method="POST">
        @csrf
        <input type="hidden" name="producto_id" value="{{ $producto->id }}">
        <input type="hidden" name="id_usuario" value="{{ session('id') }}"> <!-- Campo oculto para el ID del usuario -->
        <div class="container-quantity">
            <input type="number" name="n_productos" value="1" min="1" class="input-quantity">
            <div class="btn-increment-decrement">
                <i class="fa-solid fa-chevron-up" id="increment"></i>
                <i class="fa-solid fa-chevron-down" id="decrement"></i>
            </div>
        </div>
        <div class="form-group">
            <label for="guardados">Guardar Producto</label>
            <select name="guardados" id="guardados">
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
        </div>
        <?php if(session()->has('nombre_usuario')):?>
        <button type="submit" class="btn-add-to-cart">
            <i class="fa-solid fa-plus"></i>
            Añadir al carrito
        </button>
        <?php  endif;?>
    </form>
</div>



            <div class="container-description">
                <div class="title-description">
                    <h4>Descripción</h4>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="text-description">
                    <p>{{ $producto->texto }}</p>
                </div>
            </div>
        </div>
    </main>

    <section id="comentarios">
    <h2>Comentarios:</h2>
    @foreach($producto->comentarios as $comentario)
        <div class="comentario">
            <p><strong>{{ $comentario->autor->nombre_usuario }}:</strong> {{ $comentario->texto }}</p>
            <p><strong>Valoración: {{ $comentario->valoracion }}</strong></p>
        </div>
    @endforeach

    <div class="nuevo-comentario">
        <h3>Añadir Comentario:</h3>
        <form action="{{ route('producto.addComment', $producto->id) }}" method="post">
            @csrf
            <input type="hidden" name="id_usuario" value="{{ auth()->id() }}"> <!-- Agrega el ID del usuario autenticado -->
            <label for="valoracion">Valoración:</label>
            <div class="valoracion-estrellas">
                <input type="radio" id="estrella1" name="valoracion" value="5">
                <label for="estrella1">&#9733;</label>

                <input type="radio" id="estrella2" name="valoracion" value="4">
                <label for="estrella2">&#9733;</label>

                <input type="radio" id="estrella3" name="valoracion" value="3">
                <label for="estrella3">&#9733;</label>

                <input type="radio" id="estrella4" name="valoracion" value="2">
                <label for="estrella4">&#9733;</label>

                <input type="radio" id="estrella5" name="valoracion" value="1">
                <label for="estrella5">&#9733;</label>
            </div>
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" required></textarea>
            <button type="submit">Publicar Comentario</button>
            <input type="hidden" name="id_producto" value="{{ $producto->id }}">
			<input type="hidden" name="id_usuario" value="{{ session('id') }}">
        </form>
    </div>
</section>
  

    <footer id="footer">
        <div class="container">
            <div class="footer-section">
                <h4>Contacto</h4>
                <p>Correo electrónico: ologi@gmail.com</p>
                <p>Teléfono: +34 666456743</p>
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
            <div class="footer-section newsletter">
                <h4>Boletín</h4>
                <p>Suscríbete para recibir nuestras últimas novedades y ofertas especiales.</p>
                <form action="#" method="post">
                    <input type="email" name="email" placeholder="Tu correo electrónico" required>
                    <button type="submit">Suscribirse</button>
                </form>
            </div>
        </div>
        <div class="copyright">
            <p>&copy; 2023 Ologi Designs. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
	