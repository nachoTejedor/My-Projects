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
<script src="funcion.js"></script>
<body>
  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
      <li><a href="camisetas.html">Camisetas</a></li>
      <li><a href="sudaderas.html">Sudaderas</a></li>
      <li><a href="zapatillas.html">Zapatillas</a></li>
      <li><a href="#footer">Ir a Contacto</a></li>
      <li><a href="index.html"><img class="logo" src="logo.png" alt="Logo de Ologi Designs"></a></li>
      <li id="traducir"><a href="en/index_en.html" lang="en">Traducir a Inglés</a></li>
      <li>
        <div class="search-container">
          <input type="text" name="q" placeholder="Buscar...">
          <button type="submit">Buscar</button>
        </div>
      </li>
    </ul>
  </nav>
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
          <img src="img/sudadera.png" alt="Sudadera Ologi">
        </label>
        <label class="card" for="item-2" id="selector-2">
          <img src="img/camiseta negra ologi por delante.jpg" alt="Camiseta negra Ologi">
        </label>
        <label class="card" for="item-3" id="selector-3">
          <img src="img/veni vidi vinci.jpg" alt="Camiseta Veni Vidi Vinci">
        </label>
      </div>
    </div>
  </div>
    </div>
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23851.413033967645!2d-0.914706385248021!3d41.64652342664411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5914ccf92a64fb%3A0xb219bb254a7f5998!2sRufama%20S.L.!5e0!3m2!1ses!2ses!4v1700768605762!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" alt="Ubicación de Ologi Designs en Google Maps"></iframe>
    </div>
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

            <li><a href="https://www.facebook.com/ologidesigns" target="_blank" title="Ologi Designs en Facebook">Facebook</a></li>
            <li><a href="https://www.instagram.com/ologidesigns" target="_blank" title="Ologi Designs en Instagram">Instagram</a></li>
            <li><a href="https://twitter.com/ologidesigns" target="_blank" title="Ologi Designs en Twitter">Twitter</a></li>

        </div>

        <div class="footer-section">
          <h4>Enlaces Rápidos</h4>
 
            <li><a href="index.html" title="Ir al inicio">Inicio</a></li>
            <li><a href="catalogo.html" title="Ver nuestro catálogo">Catálogo</a></li>
            <li><a href="ofertas.html" title="Ver nuestras ofertas">Ofertas</a></li>
            <li><a href="privacidad.html" title="Leer nuestra política de privacidad">Privacidad</a></li>
            <li><a href="terminos.html" title="Leer nuestros términos y condiciones">Términos</a></li>

        </div>
      </div>

      <div class="copyright">
        <p>&copy; 2023 Ologi Designs. Todos los derechos reservados.</p>
      </div>
    </footer>

    </body>
    </html>