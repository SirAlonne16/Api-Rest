<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Página Principal</h1>
        <div class="row mt-3">
            <div class="col-md-4">
                <a href="{{ route('administradores.create') }}" class="btn btn-primary btn-block">Ir a Administradores</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('profesores.create') }}" class="btn btn-secondary btn-block">Ir a Profesores</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('formulario_crear_cliente') }}" class="btn btn-success btn-block">Ir a Clientes</a>
            </div>
        </div>
    </div>
</body>
</html>
