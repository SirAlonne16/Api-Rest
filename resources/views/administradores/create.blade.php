<!DOCTYPE html>
<html>
<head>
    <title>Crear Administrador</title>
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



