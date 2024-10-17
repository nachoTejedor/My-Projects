<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/css/listaUsuarios.css">
  
  
    <title>Listar Usuarios</title>
</head>
<body>
  <?php
if (session()->has('nombre_usuario')||session()->has('id')){
 ?>
<div class ="container">

    <table class="table table-striped">
    <tr>  
      <th>id</th>  
      <th>Nombre Usuario</th>
      <th >Nombre</th>
      <th >Apellidos</th>
      <th >Contrasena</th>
      <th >Es admin?</th>
      <th >Correo</th>
      <th >Experiencia</th>
      <th >creado</th>
      <th >actualizado</th>
      <th >Ver/Eliminar</th>
      <th >Hacer/quitar</th>


    </tr>
  <tbody>
     @include('Usuarios')
   
  </tbody>
</table>
</div>
<div class="center-button">
        <a class="back-button" href="/">Volver al Inicio</a>
    </div>
    <?php }?>
</body>
</html>