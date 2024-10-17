<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Registro</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
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
            <li><a href="/camisetas">Camisetas</a></li>
            <li><a href="/sudaderas">Sudaderas</a></li>
            <li><a href="/zapatillas">Zapatillas</a></li>
            <li><a  class="active"  href="">Registro</a></li>
            <?php if(session()->has('nombre_usuario')): ?>
            <li id="traducir"><a href="/carrito" lang="en">Toca para ver el carrito</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    
    <main>
        <div class="container" id="login">
            <div class="registration-form">
                <form action="/registrar" enctype="multipart/form-data" method="post">
                    @csrf
                    <h2>Regístrate</h2>
                    <label for="nombre_usuario">Nombre de Usuario:</label>
                    <input type="text" id="nombre_usuario" name="nombre_usuario" required aria-required="true">

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required aria-required="true">

                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required aria-required="true">

                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" required aria-required="true">

                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono" title="Introduce un número de teléfono válido de 10 dígitos.">

                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required aria-required="true">

                    <label for="imagen">Elige una imagen para tu perfil:</label>
                    <input id="imagen" name="imagen" size="30" type="file" aria-label="Subir imagen de perfil"/>

                    <button type="submit" value="Registrate">Registrar</button>
                </form>
                <p></p>
                <a href="/login">¿Ya tienes cuenta? Haz clic aquí</a>
                <p></p>
                <a href="/">¿No estás seguro? Haz clic para volver al inicio</a>
            </div>
        </div>
    </main>
  
    <footer id="footer">
        <p>&copy; 2023 Página de Registro</p>
        <p>Contacto: 31131231231</p>
        <p>Email: ologidesigns@gmail.com</p>
    </footer>
</body>
</html>
