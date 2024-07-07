<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function create()
    {
        return view('administradores.create');
    }

    public function store(Request $request)
    {
        // Log de entrada de datos

        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'rut' => 'required|string|max:255|unique:administradores,rut',
            'email' => 'required|email|max:255|unique:administradores,email',
        ]);

        // Log después de la validación

        // Crear un nuevo administrador
        Administrador::create($validated);

        // Log después de intentar crear el administrador

        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('administradores.create')->with('success', 'Administrador creado exitosamente');
    }
}


