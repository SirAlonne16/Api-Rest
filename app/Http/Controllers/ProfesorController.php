<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function create()
    {
        // Obtener todos los administradores
        $profesores = Profesor::all();

        // Pasar los administradores a la vista
        return view('profesores.create', compact('profesores'));
    }

    public function store(Request $request)
    {


        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'rut' => 'required|string|max:255|unique:profesores,rut',
            'email' => 'required|email|max:255|unique:profesores,email',
        ]);

  

        // Crear un nuevo administrador
        Profesor::create($validated);


        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('profesores.create')->with('success', 'Profesor creado exitosamente');
    }
}



