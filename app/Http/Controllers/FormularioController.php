<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Resources\ClienteCollection;
use App\Http\Resources\ClienteResource;

class FormularioController extends Controller
{
    public function formularioCrear()
    {
        return view('crear_cliente');
    }

    public function guardarCliente(Request $request)
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

        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->rut = $request->rut;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->edad = $request->edad;
        $cliente->direccion = $request->direccion;
        $cliente->region = $request->region;
        $cliente->comuna = $request->comuna;
        $cliente->problemas_medicos = $request->problemas_medicos;
        $cliente->problema_medico = $request->problema_medico;
        $cliente->necesita_equipo = $request->necesita_equipo;
        $cliente->tiene_experiencia = $request->tiene_experiencia;
        $cliente->genero = $request->genero;
        $cliente->usuario = $request->usuario;
        $cliente->save();
        

        return redirect()->route('formulario_crear_cliente')->with('success', 'Cliente creado exitosamente.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes=Cliente::all();
        return new ClienteCollection($clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        //
        return new ClienteResource(Cliente::create($request->all()));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
        return new  ClienteResource($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}



