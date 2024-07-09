<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function guardar_cliente(Request $request)
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
        $cliente = new Cliente();
        $cliente->nombre = $validatedData['nombre'];
        $cliente->fecha_nacimiento = $validatedData['fecha_nacimiento'];
        $cliente->rut = $validatedData['rut'];
        $cliente->email = $validatedData['email'];
        $cliente->telefono = $validatedData['telefono'];
        $cliente->edad = $validatedData['edad'];
        $cliente->direccion = $validatedData['direccion'];
        $cliente->region = $validatedData['region'];
        $cliente->comuna = $validatedData['comuna'];
        $cliente->problemas_medicos = $validatedData['problemas_medicos'];
        $cliente->problema_medico = $validatedData['problema_medico'];
        $cliente->necesita_equipo = $validatedData['necesita_equipo'];
        $cliente->tiene_experiencia = $validatedData['tiene_experiencia'];
        $cliente->genero = $validatedData['genero'];
        $cliente->usuario = $validatedData['usuario'];
        $cliente->save();

        // Redirigir con un mensaje de éxito
        return redirect()->back()->with('success', 'Cliente guardado exitosamente');
    }
}
