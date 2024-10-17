<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sitio web de Ologi Designs - Ropa y accesorios de moda">
  <meta name="keywords" content="Ologi Designs, moda, ropa, accesorios">
  <title>Ologi Designs - Ropa y Accesorios de Moda</title>
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<script src="/js/funcion.js"></script>
<body>
  @include('navbar')
  <section class="banner">
    <div class="banner-content">
      <h1>Bienvenido a Ologi Designs</h1>
      <a href="#slider">Ver articulos</a>	
    </div>
  </section>
  <h1 class="productos">Productos destacados</h1>
  <div class="container__slider" id="slider" class="slider">
    <div class="container">
      <input type="radio" name="slider" id="item-1" checked>
      <input type="radio" name="slider" id="item-2">
      <input type="radio" name="slider" id="item-3">
      <div class="cards">
        <label class="card" for="item-1" id="selector-1">
          <img src="/img/sudadera.png" alt="Sudadera Ologi">
        </label>
        <label class="card" for="item-2" id="selector-2">
          <img src="/img/camiseta negra ologi por delante.jpg" alt="Camiseta negra Ologi">
        </label>
        <label class="card" for="item-3" id="selector-3">
          <img src="/img/veni vidi vinci.jpg" alt="Camiseta Veni Vidi Vinci">
        </label>
      </div>
    </div>
  </div>
  <div class="tittleProductsContainerMain">
    <h1>Resto de productos</h1>
  </div>
  <section class="product-slider">
    <div class="product-slider-container">
      <div class="tittleProductsContainer">
        <h1>Camisetas</h1>
      </div>
      <div class="products">
        @foreach($camisetas as $camiseta)
          <a href="{{ url('/producto/' . $camiseta->id) }}">
            <img src="{{ asset('images/' . $camiseta->imagen) }}" alt="{{ $camiseta->nombre }}">
          </a>
        @endforeach
      </div>
      <div class="tittleProductsContainer">
        <h1>Sudaderas</h1>
      </div>
      <div class="products">
        @foreach($sudaderas as $sudadera)
          <a href="{{ url('/producto/' . $sudadera->id) }}">
            <img src="{{ asset('images/' . $sudadera->imagen) }}" alt="{{ $sudadera->nombre }}">
          </a>
        @endforeach
      </div>
      <div class="tittleProductsContainer">
        <h1>Zapatillas</h1>
      </div>
      <div class="products">
        @foreach($zapatillas as $zapatilla)
          <a href="{{ url('/producto/' . $zapatilla->id) }}">
            <img src="{{ asset('images/' . $zapatilla->imagen) }}" alt="{{ $zapatilla->nombre }}">
          </a>
        @endforeach
      </div>
    </div>
    <button class="prev-button">&#10094;</button>
    <button class="next-button">&#10095;</button>
  </section>
  <footer id="footer">
    <div class="copyright">
      <p>email: ologi@gmail.com</p>
      <p>telefono: 666666666</p>
      <p>&copy; 2023 Ologi Designs. Todos los derechos reservados.</p>
    </div>
  </footer>
  <div class="container_login" id="container_login" style="display: none;">
    @if (session('error'))
      <script>alert("{{ session('error') }}");</script>
    @endif
    @include('login')
  </div>
</body>
</html>
