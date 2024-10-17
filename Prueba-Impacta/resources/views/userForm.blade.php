    <style>
    .containerUserForm {
            margin-top: 3px;
            background-color: #e2001a;
            display: flex;
            width: 100%;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            align-items: center;
            justify-content: center;
        }

        .form-container {
            background-color: #e2001a;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 600px;
            padding: 20px;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
            width: 100%;
        }

        .form-group {
            flex: 1;
            width: 100%;
        }

        input[type="text"], input[type="email"], select, textarea {
            width: 100%;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* Estilo para placeholder en bold */
        ::placeholder { /* Firefox, Chrome, Opera, Edge */
            font-weight: bold;
            color: #e2001a;
        }

        :-ms-input-placeholder { /* Internet Explorer 10-11 */
            font-weight: bold;
        }

        ::-ms-input-placeholder { /* Microsoft Edge */
            font-weight: bold;
        }

        textarea {
            height: 150px;
            resize: none;
        }

        button {
            background-color: #e2001a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #c20017;
        }

        /* Estilos para incluir el selectForm a la derecha */
        .select-container {
            margin-top: 100px;
            width: 600px;
            display: flex;
            align-items: flex-start; /* Alineado al inicio superior */
            justify-content: center;
        }

        /* Estilos del contenedor de la selección */
        .containerSelectForm {
            background-color: #e2001a;
            padding: 20px;
            border-radius: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .containerSelectForm h3 {
            margin-bottom: 20px;
            font-weight: normal;
            color: white;
            font-size: 16px;
        }

        .option-group {
            margin-bottom: 10px;
            position: relative;
            padding-left: 50px; /* Espacio para el círculo */
        }

        .option-group input[type="radio"] {
            display: none;
        }

        .option-group label {
            border: 1px solid white;
            color: white;
            display: flex;
            align-items: center;
            background-color: #c30018;
            padding: 10px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 14px;
            position: relative;
        }

        .option-group label::before {
            content: "";
            position: absolute;
            left: -30px; /* Posición a la izquierda del contenedor */
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 2px solid white;
            border-radius: 50%;
            background-color: transparent;
        }

        .option-group label:hover {
            color: white;
            background-color: #b00014;
        }

        .option-group input[type="radio"]:checked + label {
            background-color: #ffffff;
            color: #e2001a;
            border: 2px solid #e2001a;
        }

        .option-group label span {
            margin-left: 10px;
            font-size: 14px;
        }

        .checkbox-group {
            margin-top: 100px;
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 12px;
        }
        .checkbox-group label {
            color: white;
        }

        .checkbox-group input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        .submit-btn {
            background-color: #ffcc00;
            color: #e2001a;
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #ffdb4d;
        }
        .tituloForm {
            font-family: 'Outfit';
            font-size: 30px;
            color: white;
            margin-bottom: 20px;
        }
        .terms {
            font-size: 12px;
            color: white;
        }
    </style>
</head>
<body>

<div class="containerUserForm">
    <div class="form-container">
        <p class="tituloForm"><strong>ENVIANOS TU</strong> MENSAJE</p>
        <form action="{{ route('mensaje.store') }}" method="post">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <input type="text" id="name" name="name" placeholder="Nombre" required>
                </div>
                <div class="form-group">
                    <input type="text" id="phone" name="phone" placeholder="Teléfono" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <select id="planet" name="planet" required>
                        <option value="" disabled selected>Planeta de Nacimiento</option>
                        <option value="Mercurio">Mercurio</option>
                        <option value="Venus">Venus</option>
                        <option value="Tierra">Tierra</option>
                        <option value="Marte">Marte</option>
                        <option value="Júpiter">Júpiter</option>
                        <option value="Saturno">Saturno</option>
                        <option value="Urano">Urano</option>
                        <option value="Neptuno">Neptuno</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <textarea id="message" name="message" placeholder="Mensaje" required></textarea>
                </div>
            </div>
            <p class="terms">Sus datos serán tratados por IMPACTA para la atención de las consultas o solicitudes de información realizadas.
            Puede ejercer sus derechos conforme a lo dispuesto en la Política de Privacidad. Más información aquí.</p>
            <!-- Contenedor del selectForm a la derecha -->
    </div>
    <div class="select-container">
                <div class="containerSelectForm">
                    <h3>SELECCIONA SOLO UN RESULTADO</h3>
                    <div class="option-group">
                        <input type="radio" id="option1" name="result" value="feliz" required>
                        <label for="option1">
                            <span>Quiero ser feliz</span>
                        </label>
                    </div>
                    <div class="option-group">
                        <input type="radio" id="option2" name="result" value="rico" required>
                        <label for="option2">
                            <span>Quiero ser rico</span>
                        </label>
                    </div>
                    <div class="option-group">
                        <input type="radio" id="option3" name="result" value="avion" required>
                        <label for="option3">
                            <span>Quiero ser un avión</span>
                        </label>
                    </div>
                    <div class="option-group">
                        <input type="radio" id="option4" name="result" value="dormir" required>
                        <label for="option4">
                            <span>Quiero dormir todo el día</span>
                        </label>
                    </div>
                    <div class="checkbox-group">
    <!-- Campo oculto para el valor predeterminado cuando el checkbox no está marcado -->
    <input type="hidden" name="privacy" value="0">
    <input type="checkbox" id="privacy" name="privacy" value="1">
    <label for="privacy">He leído y acepto el aviso legal y la política de privacidad</label>
    <button type="submit" class="submit-btn">ENVIAR MENSAJE</button>
</div>

                </div>
            </div>
    </form>
</div>

</body>
</html>
