<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" id="login">
    <i id="cerrar" class="fas fa-times close-icon" onclick="handleLoginChange()"></i>
        <div class="form-container">
            <h2>Inicio de Sesión</h2>
            <form action="/loguear" method="post" class="form">
                @csrf
                <div class="form-group">
                    <label for="nombre_usuario">Nombre de usuario:</label>
                    <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Escribe tu usuario" required>
                    @error('nombre_usuario')
                </div>
                @enderror
                <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Escribe la contraseña" required>
                </div>
                
                <button type="submit">Iniciar Sesión</button>
                <p></p>
                <a href="/Registro">¿No te has registrado?¡Pincha aqui!</a>
            </form>
        </div>
    </div>
</body>
</html>