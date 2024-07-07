<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;

class AdministradorController extends Controller
{
    public function create()
    {
        // Obtener todos los administradores
        $administradores = Administrador::all();

        // Pasar los administradores a la vista
        return view('administradores.create', compact('administradores'));
    }

    public function store(Request $request)
    {


        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'rut' => 'required|string|max:255|unique:administradores,rut',
            'email' => 'required|email|max:255|unique:administradores,email',
        ]);

  

        // Crear un nuevo administrador
        Administrador::create($validated);


        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('administradores.create')->with('success', 'Administrador creado exitosamente');
    }
}



