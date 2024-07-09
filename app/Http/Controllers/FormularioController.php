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
        $request->validate([
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

        $formulario = new Formulario;
        $formulario->nombre = $request->nombre;
        $formulario->fecha_nacimiento = $request->fecha_nacimiento;
        $formulario->rut = $request->rut;
        $formulario->email = $request->email;
        $formulario->telefono = $request->telefono;
        $formulario->edad = $request->edad;
        $formulario->direccion = $request->direccion;
        $formulario->region = $request->region;
        $formulario->comuna = $request->comuna;
        $formulario->problemas_medicos = $request->problemas_medicos;
        $formulario->problema_medico = $request->problema_medico;
        $formulario->necesita_equipo = $request->necesita_equipo;
        $formulario->tiene_experiencia = $request->tiene_experiencia;
        $formulario->genero = $request->genero;
        $formulario->usuario = $request->usuario;
        $formulario->save();
        

        return redirect()->route('formulario_crear')->with('success', 'Cliente creado exitosamente.');
    }
}



