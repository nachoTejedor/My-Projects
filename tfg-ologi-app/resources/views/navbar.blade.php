<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<?php if(session()->has('nombre_usuario')): ?>
        <?php if(session()->has('esAdmin') && session('esAdmin') == 1): ?>
    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
  <li><a href="/camisetas">Camisetas</a></li>
  <li><a href="/sudaderas">Sudaderas</a></li>
  <li><a href="/zapatillas">Zapatillas</a></li>
  <li><a href="#footer">Contacto</a></li>

  <li href="/"><img class="logo" src="/img/logo.png" ></li>
  <li><a href="/VerPerfil" class="account-link"><i class="fas fa-user"></i></i></a></li>
  <li><a href="/controlPanel"><i class="fas fa-desktop"></i></a></li>
  <li><a href="/carrito"><i class="fas fa-shopping-cart"></i></a></li>
  <li><a href="/insertaProducto"><i class="fas fa-tshirt"></i></a></li>
  <li><a href="/logout"><i class="fas fa-sign-out-alt"></i></a></li>
  
    </ul>
  </nav>
        <?php else: ?>
            <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
  <li><a href="/camisetas">Camisetas</a></li>
  <li><a href="/sudaderas">Sudaderas</a></li>
  <li><a href="/zapatillas">Zapatillas</a></li>
  <li><a href="#footer">Contacto</a></li>

  <li href="/"><img class="logo" src="/img/logo.png" ></li>
  <li><a href="/VerPerfil" class="account-link"><i class="fas fa-user"></i></i></a></li>
  <li><a href="/carrito"><i class="fas fa-shopping-cart"></i></a></li>
  <li><a href="/logout"><i class="fas fa-sign-out-alt"></i></a></li>

    </ul>
  </nav>
        <?php endif; ?>
    <?php else: ?>
    <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <ul>
  <li><a href="/camisetas">Camisetas</a></li>
  <li><a href="/sudaderas">Sudaderas</a></li>
  <li><a href="/zapatillas">Zapatillas</a></li>
  <li><a href="#footer">Contacto</a></li>
  <li href="/"><img class="logo" src="/img/logo.png" ></li>
  <li><a href="/Registro" class="account-link"><i class="fas fa-user-plus"></i></a></li>
  <li onclick=handleLoginChange()><a class="login-link"><i class="fas fa-sign-in-alt" ></i></a></li>

    </ul>
  </nav>
    <?php endif; ?>

 
</body>
</html>



