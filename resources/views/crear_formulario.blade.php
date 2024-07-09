<!DOCTYPE html>
<html>
<head>
    <title>Crear Cliente</title>
    <!-- Incluir jQuery desde una CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Incluir un script para cargar regiones y comunas -->
    <script>
        $(document).ready(function() {
            // Aquí puedes cargar dinámicamente las regiones y comunas de Chile
            const regionesComunas = {
                "Region1": ["Comuna1", "Comuna2"],
                "Region2": ["Comuna3", "Comuna4"]
                // Agrega todas las regiones y comunas aquí
            };

            const regionesSelect = $('#region');
            const comunasSelect = $('#comuna');

            // Cargar las regiones
            for (const region in regionesComunas) {
                regionesSelect.append(new Option(region, region));
            }

            // Cambiar las comunas según la región seleccionada
            regionesSelect.change(function() {
                const selectedRegion = $(this).val();
                comunasSelect.empty();
                regionesComunas[selectedRegion].forEach(comuna => {
                    comunasSelect.append(new Option(comuna, comuna));
                });
            });

            // Generar usuario
            $('#nombre').on('input', function() {
                generarUsuario();
            });

            function generarUsuario() {
                var nombreCompleto = $('#nombre').val().trim();
                var partes = nombreCompleto.split(' ');

                if (partes.length >= 2) {
                    var nombre = partes[0];
                    var apellido = partes[1];
                    var primerasLetrasNombre = nombre.substring(0, 3);
                    var primerasLetrasApellido = apellido.substring(0, 3);
                    var usuario = primerasLetrasNombre + primerasLetrasApellido;
                    $('#usuario').text(usuario);
                    $('#usuario_oculto').val(usuario);
                } else {
                    $('#usuario').text('');
                    $('#usuario_oculto').val('');
                }
            }

            // Mostrar u ocultar el campo de problema médico
            $('#problemas_medicos').change(function() {
                if ($(this).val() === 'Sí') {
                    $('#problema_medico').show();
                } else {
                    $('#problema_medico').hide();
                }
            }).trigger('change');
        });

        function enviarFormulario(event) {
            event.preventDefault(); // Previene el envío del formulario

            const necesitaEquipo = $('#necesita_equipo').val();
            const actionUrl = $('#clienteForm').attr('action');

            $.post(actionUrl, $('#clienteForm').serialize(), function(response) {
                if (necesitaEquipo === 'Sí') {
                    window.location.href = 'http://skiclubweb-729587da3a63.herokuapp.com/comprar-arriendo';
                } else {
                    alert('Formulario enviado correctamente.');
                    // Aquí puedes agregar cualquier otra lógica para manejar el envío exitoso
                }
            }).fail(function() {
                alert('Error al enviar el formulario.');
            });
        }
    </script>
</head>
<body>
    <h1>Crear Cliente</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form id="clienteForm" method="post" action="{{ route('guardar_formulario') }}" onsubmit="enviarFormulario(event)">
        @csrf
        <label for="nombre">Nombre completo:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="fecha_nacimiento">Fecha de nacimiento:</label><br>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento"><br>

        <label for="rut">Rut:</label><br>
        <input type="text" id="rut" name="rut"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="telefono">Número de teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br>

        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad"><br>

        <label for="direccion">Dirección:</label><br>
        <input type="text" id="direccion" name="direccion"><br>

        <label for="region">Región:</label><br>
        <select id="region" name="region">
            <option value="">Selecciona una región</option>
        </select><br>

        <label for="comuna">Comuna:</label><br>
        <select id="comuna" name="comuna">
            <option value="">Selecciona una comuna</option>
        </select><br>

        <label for="problemas_medicos">Problemas médicos:</label><br>
        <select id="problemas_medicos" name="problemas_medicos">
            <option value="No">No</option>
            <option value="Sí">Sí</option>
        </select><br>

        <label id="problema_medico_label" for="problema_medico" style="display: none;">Problema médico:</label><br>
        <input type="text" id="problema_medico" name="problema_medico" style="display: none;"><br>

        <label for="necesita_equipo">¿Necesita equipo?</label><br>
        <select id="necesita_equipo" name="necesita_equipo">
            <option value="No">No</option>
            <option value="Sí">Sí</option>
        </select><br>

        <label for="tiene_experiencia">¿Tiene experiencia?</label><br>
        <select id="tiene_experiencia" name="tiene_experiencia">
            <option value="No">No</option>
            <option value="Sí">Sí</option>
        </select><br>

        <label for="genero">Género:</label><br>
        <select id="genero" name="genero">
            <option value="Otro">Otro</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select><br>

        <label for="usuario">Usuario:</label><br>
        <span id="usuario"></span><br>
        <input type="hidden" id="usuario_oculto" name="usuario"><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
