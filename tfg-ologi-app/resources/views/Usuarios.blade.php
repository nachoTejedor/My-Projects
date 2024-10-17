<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Usuarios</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Usuarios Registrados</h1>
       
            <tbody>
            @foreach($usuarios as $usuario)
<tr>
    <td>{{ $usuario->id }}</td>
    <td>{{ $usuario->nombre_usuario }}</td>
    <td>{{ $usuario->nombre }}</td>
    <td>{{ $usuario->apellidos }}</td>
    <td>Oculto</td>
    <td>{{ $usuario->esAdmin ? 'Sí' : 'No' }}</td>
    <td>{{ $usuario->correo }}</td>
    <td>{{ $usuario->experiencia }}</td>
    <td>{{ $usuario->created_at }}</td>
    <td>{{ $usuario->updated_at }}</td>
    <td>
                        <form action="{{ route('usuarios.eliminar', ['id' => $usuario->id]) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar a este usuario?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                        <a href="{{ route('ver.perfil', ['id' => $usuario->id]) }}">Ver perfil</a>
                       
                    </td>
                    <td> 
                                    <form action="{{ route('usuarios.quitar_admin', ['id' => $usuario->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit">Quitar Admin</button>
                                    </form>
                    
                                    <form action="{{ route('usuarios.hacer_admin', ['id' => $usuario->id]) }}" method="POST">
                                        @csrf
                                        <button type="submit">Hacer Admin</button>
                                    </form>
                          
                                </td>
</tr>
@endforeach

            </tbody>
        </table>
    </div>
</body>
</html>

