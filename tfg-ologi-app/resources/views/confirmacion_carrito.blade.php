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
            <h1 class="display-4">Confirmacion del carrito</h1>
            <p class="lead">Selecciona metodo de pago para realizar una compra</p>
            <hr class="my-4">

            <!-- Formulario para seleccionar el método de pago y realizar la compra -->
            <form action="{{ route('realizarCompra') }}" method="POST" class="mt-4">
                @csrf
                <div class="form-group">
                    <label for="metodo_pago">Selecciona el método de pago:</label>
                    <select class="form-control" id="metodo_pago" name="metodo_pago">
                        <option value="efectivo">Efectivo</option>
                        <option value="tarjeta">Tarjeta</option>
                        <option value="paypal">PayPal</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-lg">Realizar Compra</button>
            </form>
        </div>
    </div>
    <!-- Incluye Bootstrap JS y sus dependencias -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
