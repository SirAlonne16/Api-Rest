<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function formularioCrear()
    {
        return view('crear_formulario');
    }

    public function guardarFormulario(Request $request)
    {
        // Validar los datos
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'rut' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'edad' => 'required|integer',
            'direccion' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'comuna' => 'required|string|max:255',
            'problemas_medicos' => 'required|string',
            'problema_medico' => 'nullable|string|max:255',
            'necesita_equipo' => 'required|string',
            'tiene_experiencia' => 'required|string',
            'genero' => 'required|string',
            'usuario' => 'required|string|max:6'
        ]);

        // Crear un nuevo cliente
        $formulario = new Formulario();
        $formulario->nombre = $validatedData['nombre'];
        $formulario->fecha_nacimiento = $validatedData['fecha_nacimiento'];
        $formulario->rut = $validatedData['rut'];
        $formulario->email = $validatedData['email'];
        $formulario->telefono = $validatedData['telefono'];
        $formulario->edad = $validatedData['edad'];
        $formulario->direccion = $validatedData['direccion'];
        $formulario->region = $validatedData['region'];
        $formulario->comuna = $validatedData['comuna'];
        $formulario->problemas_medicos = $validatedData['problemas_medicos'];
        $formulario->problema_medico = $validatedData['problema_medico'];
        $formulario->necesita_equipo = $validatedData['necesita_equipo'];
        $formulario->tiene_experiencia = $validatedData['tiene_experiencia'];
        $formulario->genero = $validatedData['genero'];
        $formulario->usuario = $validatedData['usuario'];
        $formulario->save();
        

        return redirect()->route('formulario_crear')->with('success', 'Cliente creado exitosamente.');
    }
}



