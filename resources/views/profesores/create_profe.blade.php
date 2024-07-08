<!DOCTYPE html>
<html>
<head>
    <title>Crear Profesor</title>
</head>
<body>
    <h1>Crear Profesor</h1>
    <form action="{{ route('profesores.store') }}" method="POST">
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

    <h2>Profesores</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>RUT</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profesores as $profesor)
                <tr>
                    <td>{{ $profesor->nombre }}</td>
                    <td>{{ $profesor->rut }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>