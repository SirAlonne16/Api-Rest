<!DOCTYPE html>
<html>

<head>
    <title>Crear Cliente</title>
    <!-- Incluir jQuery desde una CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Estilos CSS para el formulario -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            margin-bottom: 8px;
        }

        input[type=text],
        input[type=email],
        input[type=number],
        select {
            width: calc(100% - 20px);
            /* Reduce el ancho para acomodar el usuario */
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
            display: inline-block;
            /* Permite que los elementos estén en línea */
        }

        select {
            height: 40px;
        }

        input[type=submit] {
            background-color: #007bff;
            /* Color primary */
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 25px;


        }

        input[type=submit]:hover {
            background-color: #0056b3;
            /* Color hover */
        }

        .hidden {
            display: none;
        }

        #usuario {
            display: inline-block;
            vertical-align: top;
            /* Alinear verticalmente al mismo nivel */
            margin-left: 10px;
            /* Espacio entre el texto y el campo oculto */
            font-weight: bold;
        }

        input[type=date] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
    </style>
    <!-- Incluir un script para cargar regiones y comunas -->
    <script>
        $(document).ready(function () {
            // Datos ficticios de regiones y comunas de Chile
            const regionesComunas = {
                "Región de Arica y Parinacota": [
                    "Arica", "Camarones", "Putre", "General Lagos"
                ],
                "Región de Tarapacá": [
                    "Iquique", "Alto Hospicio", "Pozo Almonte", "Camiña", "Colchane", "Huara", "Pica"
                ],
                "Región de Antofagasta": [
                    "Antofagasta", "Mejillones", "Sierra Gorda", "Taltal", "Calama", "Ollagüe", "San Pedro de Atacama", "María Elena", "Tocopilla"
                ],
                "Región de Atacama": [
                    "Copiapó", "Caldera", "Tierra Amarilla", "Chañaral", "Diego de Almagro", "Vallenar", "Alto del Carmen", "Freirina", "Huasco"
                ],
                "Región de Coquimbo": [
                    "La Serena", "Coquimbo", "Andacollo", "La Higuera", "Paiguano", "Vicuña", "Illapel", "Canela", "Los Vilos", "Salamanca", "Ovalle", "Combarbalá", "Monte Patria", "Punitaqui", "Río Hurtado"
                ],
                "Región de Valparaíso": [
                    "Valparaíso", "Casablanca", "Concón", "Juan Fernández", "Puchuncaví", "Quintero", "Viña del Mar", "Isla de Pascua", "Los Andes", "Calle Larga", "Rinconada", "San Esteban", "La Ligua", "Cabildo", "Papudo", "Petorca", "Zapallar", "Quillota", "Calera", "Hijuelas", "La Cruz", "Nogales", "San Antonio", "Algarrobo", "Cartagena", "El Quisco", "El Tabo", "San Bernardo", "Buin", "Calera de Tango", "Paine", "Melipilla", "Alhué", "Curacaví", "María Pinto", "San Pedro", "Talagante", "El Monte", "Isla de Maipo", "Padre Hurtado", "Peñaflor"
                ],
                "Región Metropolitana de Santiago": [
                    "Santiago", "Cerrillos", "Cerro Navia", "Conchalí", "El Bosque", "Estación Central", "Huechuraba", "Independencia", "La Cisterna", "La Florida", "La Granja", "La Pintana", "La Reina", "Las Condes", "Lo Barnechea", "Lo Espejo", "Lo Prado", "Macul", "Maipú", "Ñuñoa", "Pedro Aguirre Cerda", "Peñalolén", "Providencia", "Pudahuel", "Quilicura", "Quinta Normal", "Recoleta", "Renca", "San Joaquín", "San Miguel", "San Ramón", "Vitacura", "Puente Alto", "Pirque", "San José de Maipo", "Colina", "Lampa", "Tiltil", "San Bernardo", "Buin", "Calera de Tango", "Paine", "Melipilla", "Alhué", "Curacaví", "María Pinto", "San Pedro", "Talagante", "El Monte", "Isla de Maipo", "Padre Hurtado", "Peñaflor"
                ],
                "Región de O'Higgins": [
                    "Rancagua", "Codegua", "Coinco", "Coltauco", "Doñihue", "Graneros", "Las Cabras", "Machalí", "Malloa", "Mostazal", "Olivar", "Peumo", "Pichidegua", "Quinta de Tilcoco", "Rengo", "Requínoa", "San Vicente", "Pichilemu", "La Estrella", "Litueche", "Marchihue", "Navidad", "Paredones", "San Fernando", "Chépica", "Chimbarongo", "Lolol", "Nancagua", "Palmilla", "Peralillo", "Placilla", "Pumanque", "Santa Cruz"
                ],
                "Región del Maule": [
                    "Talca", "Constitución", "Curepto", "Empedrado", "Maule", "Pelarco", "Pencahue", "Río Claro", "San Clemente", "San Rafael", "Cauquenes", "Chanco", "Pelluhue", "Curicó", "Hualañé", "Licantén", "Molina", "Rauco", "Romeral", "Sagrada Familia", "Teno", "Vichuquén", "Linares", "Colbún", "Longaví", "Parral", "Retiro", "San Javier", "Villa Alegre", "Yerbas Buenas"
                ],
                "Región de Ñuble": [
                    "Chillán", "Bulnes", "Cobquecura", "Coelemu", "Ninhue", "Portezuelo", "Quirihue", "Ránquil", "Treguaco", "San Carlos", "San Fabián", "San Ignacio", "San Nicolás"
                ],
                "Región del Biobío": [
                    "Concepción", "Coronel", "Chiguayante", "Florida", "Hualqui", "Lota", "Penco", "San Pedro de la Paz", "Santa Juana", "Talcahuano", "Tomé", "Hualpén", "Lebu", "Arauco", "Cañete", "Contulmo", "Curanilahue", "Los Álamos", "Tirúa", "Los Ángeles", "Antuco", "Cabrero", "Laja", "Mulchén", "Nacimiento", "Negrete", "Quilaco", "Quilleco", "San Rosendo", "Santa Bárbara", "Tucapel", "Yumbel", "Alto Biobío"
                ],
                "Región de La Araucanía": [
                    "Temuco", "Carahue", "Cunco", "Curarrehue", "Freire", "Galvarino", "Gorbea", "Lautaro", "Loncoche", "Melipeuco", "Nueva Imperial", "Padre Las Casas", "Perquenco", "Pitrufquén", "Pucón", "Saavedra", "Teodoro Schmidt", "Toltén", "Vilcún", "Villarrica", "Cholchol"
                ],
                "Región de Los Ríos": [
                    "Valdivia", "Corral", "Lanco", "Los Lagos", "Máfil", "Mariquina", "Paillaco", "Panguipulli", "La Unión", "Futrono", "Lago Ranco", "Río Bueno"
                ],
                "Región de Los Lagos": [
                    "Puerto Montt", "Calbuco", "Cochamó", "Fresia", "Frutillar", "Los Muermos", "Llanquihue", "Maullín", "Puerto Varas", "Castro", "Ancud", "Chonchi", "Curaco de Vélez", "Dalcahue", "Puqueldón", "Queilén", "Quellón", "Quemchi", "Quinchao", "Osorno", "Puerto Octay", "Purranque", "Puyehue", "Río Negro", "San Juan de la Costa", "San Pablo", "Chaitén", "Futaleufú", "Hualaihué", "Palena"
                ],
                "Región de Aysén del General Carlos Ibáñez del Campo": [
                    "Coyhaique", "Lago Verde", "Aysén", "Cisnes", "Guaitecas", "Cochrane", "O'Higgins", "Tortel", "Chile Chico", "Río Ibáñez"
                ],
                "Región de Magallanes y de la Antártica Chilena": [
                    "Punta Arenas", "Laguna Blanca", "Río Verde", "San Gregorio", "Cabo de Hornos", "Antártica", "Porvenir", "Primavera", "Timaukel", "Natales", "Torres del Paine"
                ]
            };


            const regionesSelect = $('#region');
            const comunasSelect = $('#comuna');

            // Cargar las regiones
            for (const region in regionesComunas) {
                regionesSelect.append(new Option(region, region));
            }

            // Cambiar las comunas según la región seleccionada
            regionesSelect.change(function () {
                const selectedRegion = $(this).val();
                comunasSelect.empty();
                regionesComunas[selectedRegion].forEach(comuna => {
                    comunasSelect.append(new Option(comuna, comuna));
                });
            });
        });


        // Generar usuario
        $('#nombre').on('input', function () {
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

        $('#problemas_medicos').change(function () {
            // Cuando cambia el valor del select con id problemas_medicos
            if ($(this).val() === 'Sí') {

                $('#problema_medico').show(); // Mostrar el campo de entrada para problemas médicos
            } else {

                $('#problema_medico').hide(); // Ocultar el campo de entrada para problemas médicos
            }
        }).trigger('change'); // Disparar el evento change para ejecutar la función al cargar la página



        function enviarFormulario(event) {
            event.preventDefault(); // Previene el envío del formulario

            const necesitaEquipo = $('#necesita_equipo').val();
            const actionUrl = $('#clienteForm').attr('action');

            $.post(actionUrl, $('#clienteForm').serialize(), function (response) {
                if (necesitaEquipo === 'Sí') {
                    window.location.href = 'http://skiclubweb-729587da3a63.herokuapp.com/comprar-arriendo';
                } else {
                    alert('Formulario enviado correctamente.');
                    // Aquí puedes agregar cualquier otra lógica para manejar el envío exitoso
                }
            }).fail(function () {
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
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">

        <label for="rut" style="display: block;">Rut:</label>
        <input type="text" id="rut" name="rut">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="telefono">Número de teléfono:</label>
        <input type="text" id="telefono" name="telefono">

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad">

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion">

        <label for="region">Región:</label>
        <select id="region" name="region">
            <option value="">Selecciona una región</option>
        </select>

        <label for="comuna">Comuna:</label>
        <select id="comuna" name="comuna">
            <option value="">Selecciona una comuna</option>
        </select>

        <label for="problemas_medicos">Problemas médicos:</label>
        <select id="problemas_medicos" name="problemas_medicos">
            <option value="No">No</option>
            <option value="Sí">Sí</option>
        </select>

        <label id="problema_medico_label" for="problema_medico" class="hidden">Problema médico:</label>
        <input type="text" id="problema_medico" name="problema_medico" class="hidden">

        <label for="necesita_equipo">¿Necesita equipo?</label>
        <select id="necesita_equipo" name="necesita_equipo">
            <option value="No">No</option>
            <option value="Sí">Sí</option>
        </select>

        <label for="tiene_experiencia">¿Tiene experiencia?</label>
        <select id="tiene_experiencia" name="tiene_experiencia">
            <option value="No">No</option>
            <option value="Sí">Sí</option>
        </select>

        <label for="genero">Género:</label>
        <select id="genero" name="genero">
            <option value="Otro">Otro</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>

        <label for="usuario">Usuario:</label>
        <span id="usuario" style="display: inline-block;"></span>
        <input type="hidden" id="usuario_oculto" name="usuario">


        <div>
            <input type="submit" value="Guardar">
        </div>
    </form>

</body>

</html>