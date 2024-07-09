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
            align-items: flex-end; /* Alinea hacia abajo */
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 60%;
            text-align: center;
            margin-bottom: 20px; /* Separación del borde inferior */
        }

        .row {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .col-md-4 {
            flex: 1;
            margin: 0 10px;
        }

        .btn {
            display: block;
            width: 100%;
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
        <div class="row mt-3">
            <div class="col-md-4">
                <a href="{{ route('administradores.create') }}" class="btn btn-primary">Ir a Administradores</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('profesores.create') }}" class="btn btn-secondary">Ir a Profesores</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('formulario_crear_cliente') }}" class="btn btn-success">Ir a Estudiantes</a>
            </div>
        </div>
    </div>
</body>
</html>
