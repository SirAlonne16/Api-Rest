<!DOCTYPE html>
<html>

<head>
    <title>Agregar Estudiante</title>
    <!-- Incluir jQuery desde una CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 30%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .message {
            background-color: #dff0d8;
            color: #3c763d;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
        }

        .user-display {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Agregar Estudiante</h1>
        <div class="message" style="display: none;">¡Éxito!</div>
        <form method="post" action="#">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">

            <label for="rut">Rut:</label>
            <input type="text" id="rut" name="rut">

            <label for="usuario">Usuario:</label>
            <span class="user-display" id="usuario"></span>
            <input type="hidden" id="usuario_oculto" name="usuario">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="talla">Talla:</label>
            <input type="text" id="talla" name="talla">

            <input type="submit" value="Guardar">
        </form>
    </div>

    <script>
        $(document).ready(function () {
            $('#nombre').on('input', function () {
                generarUsuario();
            });

            function generarUsuario() {
                var nombreCompleto = $('#nombre').val().trim();
                var partes = nombreCompleto.split(' ');

                if (partes.length >= 2) {
                    var nombre = partes[0];
                    var apellido = partes[1];
                    var primerasLetrasNombre = nombre.substring(0, 3);
                    var primerasLetrasApellido = apellido.substring(0, 3);
                    var usuario = primerasLetrasNombre + primerasLetrasApellido;
                    $('#usuario').text(usuario);
                    $('#usuario_oculto').val(usuario);
                } else {
                    $('#usuario').text('');
                    $('#usuario_oculto').val('');
                }
            }
        });
    </script>
</body>

</html>