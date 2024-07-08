<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use Log;

class ProfesorController extends Controller
{
    public function create()
    {
        // Obtener todos los profesores
        $profesores = Profesor::all();

        // Pasar los profesores a la vista
        return view('profesores.create', compact('profesores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'rut' => 'required|string|max:255|unique:profesores,rut',
            'email' => 'required|email|max:255|unique:profesores,email',
        ]);
        Profesor::create($validated);
        return redirect()->route('profesores.create')->with('success', 'Profesor creado exitosamente');
    }
}