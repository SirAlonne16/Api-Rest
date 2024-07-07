<!DOCTYPE html>
<html>
<head>
    <title>Agregar administrador</title>
</head>
<body>
    <h1>Agregar administrador</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form method="post" action="{{ route('guardar_admin') }}">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="rut">Rut:</label><br>
        <input type="text" id="rut" name="rut"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <input type="submit" value="Guardar">
    </form>
    <br>
    <br>

</body>
</html>
