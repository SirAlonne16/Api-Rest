<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <h1>Página Principal</h1>
    <form method="get" action="{{ route('vista1') }}">
        <button type="submit">Ir a Administradores</button>
    </form>
    <form method="get" action="{{ route('vista2') }}">
        <button type="submit">Ir a Profesores</button>
    </form>
    <form method="get" action="{{ route('vista3') }}">
        <button type="submit">Ir a Clientes</button>
    </form>
</body>
</html>