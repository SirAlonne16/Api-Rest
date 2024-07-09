<!DOCTYPE html>
<html>

<head>
    <title>Página Principal</title>
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
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 60%;
            text-align: center;
        }

        .btn-container {
            display: flex;
            flex-direction: column;
            /* Alinea verticalmente */
            align-items: center;
            /* Centra horizontalmente */
            gap: 20px;
            /* Espacio entre los botones */
        }

        .btn {
            display: block;
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 16px;
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            background-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .btn-success {
            background-color: #28a745;
        }

        .btn-success:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Página Principal</h1>
        <div class="btn-container mt-3">
            <a href="{{ route('administradores.create') }}" class="btn btn-primary">Ir a Administradores</a>
            <a href="{{ route('profesores.create') }}" class="btn btn-secondary">Ir a Profesores</a>
            <a href="{{ route('formulario_crear_cliente') }}" class="btn btn-success">Ir a Estudiantes</a>
            <a href="{{ route('formulario_crear') }}" class="btn btn-success btn-block">Ir a Formulario-Prueba</a>

        </div>
    </div>
</body>

</html>