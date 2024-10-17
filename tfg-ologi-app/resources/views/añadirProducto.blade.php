<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Insertar Producto</title>
   <link rel="stylesheet" href="/css/añadirProducto.css">
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
			<li id="Registro"><a class="active" href="#footer">Añadir Producto</a></li>
		</ul>
	</nav>  
      <div class="search-container">
         <form action="/buscar" method="GET">
            <input type="text" name="q" placeholder="Buscar...">
            <button type="submit">Buscar</button>
         </form>
      </div>
   </nav>

   <div id="formulario-crear-receta">
      <form action="/insertaProducto" method="post" enctype="multipart/form-data" id="formulario-crear-receta-interno">
         @csrf
         <h1>Inserta un nuevo producto:</h1>
			<input type="hidden" name="id_usuario" value="{{ session('id') }}">

         <label for="nombre" id="label-nombre">Nombre del producto:</label>
         <input type="text" id="nombre" name="nombre" required>

         <label for="tiempo" id="label-tiempo">Tiempo:</label>
         <input type="text" id="tiempo" name="tiempo" required>

         <label for="talla" id="label-talla">Talla:</label>
         <input type="text" id="talla" name="talla" required>

         <label for="tipo" id="label-tipo">Tipo:</label>
         <input type="text" id="tipo" name="tipo" required>

         <label for="imagen">Imagen:</label> 
         <input type="file" id="imagen" name="imagen" size="30" required />

         <label for="capucha" id="label-capucha">Capucha:</label>
         <select id="capucha" name="capucha" required>
            <option value="1">Sí</option>
            <option value="0">No</option>
         </select>
         <p></p>
         <input type="submit" value="Insertar Producto" />
      </form>
   </div>   
</body>
</html>
