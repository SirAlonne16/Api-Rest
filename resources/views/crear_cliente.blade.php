<!DOCTYPE html>
<html>
<head>
    <title>Crear Cliente</title>
    <!-- Incluir jQuery desde una CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#nombre').on('input', function() {
                generarCorreo();
            });

            function generarCorreo() {
                var nombreCompleto = $('#nombre').val().trim();
                var partes = nombreCompleto.split(' ');

                if (partes.length >= 2) {
                    var nombre = partes[0];
                    var apellido = partes[1];
                    var primerasLetrasNombre = nombre.substring(0, 3);
                    var primerasLetrasApellido = apellido.substring(0, 3);
                    var correo = primerasLetrasNombre + primerasLetrasApellido + '@gmail.com';
                    $('#email').val(correo);
                } else {
                    $('#email').val('');
                }
            }
        });
    </script>
</head>
<body>
    <h1>Crear Cliente</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form method="post" action="{{ route('guardar_cliente') }}">
        @csrf
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="rut">Rut:</label><br>
        <input type="text" id="rut" name="rut"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" readonly><br>

        <label for="talla">Talla:</label><br>
        <input type="text" id="talla" name="talla"><br>

        <input type="submit" value="Guardar">
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>
