<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h1>Página Principal</h1>
    <form method="get" action="{{ route('formulario_crear_admin') }}">
        <button type="submit">Ir a Administradores</button>
    </form>
    <form method="get" action="{{ route('formulario_crear_profe') }}">
        <button type="submit">Ir a Profesores</button>
    </form>
    <form method="get" action="{{ route('formulario_crear_cliente') }}">
        <button type="submit">Ir a Clientes</button>
    </form>
</body>
</html>