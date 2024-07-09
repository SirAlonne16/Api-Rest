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
            display: block;
            margin-bottom: 8px;
        }

        input[type=text],
        input[type=email],
        input[type=number],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            height: 40px;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .hidden {
            display: none;
        }
    </style>
    <!-- Incluir un script para cargar regiones y comunas -->
    <script>
        // Tu script jQuery aquí...
    </script>
</head>

<body>
    <h1>Crear Cliente</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    <form id="clienteForm" method="post" action="{{ route('guardar_formulario') }}">
        @csrf
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre">

        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">

        <label for="rut">Rut:</label>
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
        <span id="usuario"></span>
        <input type="hidden" id="usuario_oculto" name="usuario">

        <input type="submit" value="Guardar">
    </form>
</body>

</html>