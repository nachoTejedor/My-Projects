<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras - Confirmación</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .confirmation-message {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .confirmation-message div {
            max-width: 600px;
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="confirmation-message">
        <div>
            <h1 class="display-4">¡Compra realizada con exito!</h1>
            <p class="lead">La compra ha sido realizada correctamente.</p>
            <hr class="my-4">
            <p>¿Deseas seguir comprando o ir al carrito?</p>
            <a class="btn btn-primary btn-lg" href="{{ url('/') }}" role="button">Seguir Comprando</a>
            <a class="btn btn-secondary btn-lg" href="{{ url('/carrito') }}" role="button">Ir al Carrito</a>
        </div>
    </div>
    <!-- Incluye Bootstrap JS y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
