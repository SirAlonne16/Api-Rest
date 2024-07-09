<!DOCTYPE html>
<html>
<head>
    <title>Crear Administrador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        input[type="text"],
        input[type="email"] {
            width: calc(100% - 20px); /* Adjusted for padding */
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button[type="submit"] {
            background-color: #007bff; /* Primary color */
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        button[type="submit"]:hover {
            background-color: #0056b3; /* Darker shade for hover */
        }
        h2 {
            margin-top: 30px;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Crear Administrador</h1>
    <form action="{{ route('administradores.store') }}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">Guardar</button>
    </form>

    <h2>Administradores</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>RUT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($administradores as $administrador)
                <tr>
                    <td>{{ $administrador->nombre }}</td>
                    <td>{{ $administrador->rut }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
