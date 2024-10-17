<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/VerPerfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
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
			<li><a href="#footer">Contacto</a></li>
			<li id="traducir"><a class="active" href="#footer">Ver Perfil</a></li>
		</ul>
	</nav>  
<?php
if (session()->has('nombre_usuario')) {
    $perfilUsuario = [
        'id' => session('id'),
        'created_at' => session('created_at'),
        'updated_at' => session('updated_at'),
        'nombre_usuario' => session('nombre_usuario'),
        'nombre' => session('nombre'),
        'apellidos' => session('apellidos'),
        'contrasena' => session('contrasena'),
        'esAdmin' => session('esAdmin') ? 'Sí' : 'No',
        'correo' => session('correo'),
        'experiencia' => session('experiencia'),
        'imagen' => session('imagen')
    ];
?>
@if(session()->has('id'))
     <div class="divImagen">
        <p><img src="{{ asset('images/' . $perfilUsuario['imagen']) }}" class="img" alt="Foto de perfil"></p>
        <div class="datos-usuario">
            <h1><strong>Datos del usuario</strong></h1>
            <p><strong>ID:</strong><br>{{ $perfilUsuario['id'] }}</p>
            <p><strong>Nombre de usuario:</strong><br>{{ $perfilUsuario['nombre_usuario'] }}</p>
            <p><strong>Nombre:</strong><br>{{ $perfilUsuario['nombre'] }}</p>
            <p><strong>Apellidos:</strong><br>{{ $perfilUsuario['apellidos'] }}</p>
            <p><strong>Correo electrónico:</strong><br>{{ $perfilUsuario['correo'] }}</p>
            <p><strong>Experiencia:</strong><br>{{ $perfilUsuario['experiencia'] }}</p>
            <p><strong>Admin:</strong><br>{{ $perfilUsuario['esAdmin'] }}</p>
            <p><strong>Creado:</strong><br>{{ $perfilUsuario['created_at'] }}</p>
            <p><strong>Actualizado:</strong><br>{{ $perfilUsuario['updated_at'] }}</p>
            
</div>
</div>
@endif
<footer>
        <p>&copy; 2023 Página de Registro</p>
        <p>Contacto:31131231231</p>
        <p>email:foroplatos@gmail.com</p>
    </footer>
    <?php }else{ echo "<p class='mensaje'>No tienes permisos para acceder</p>";}?>
</body>

</html>







