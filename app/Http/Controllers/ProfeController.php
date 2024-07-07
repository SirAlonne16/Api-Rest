<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Profesores;
use App\Models\Administrador;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use App\Http\Resources\ClienteCollection;
use App\Http\Resources\ClienteResource;

class ProfeController extends Controller
{
    public function formularioCrear()
    {
        return view('crear_profe');
    }

    public function guardarProfe(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'rut' => 'required',
            'email' => 'required|email',
            'talla' => 'required',
        ]);

        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->rut = $request->rut;
        $cliente->email = $request->email;
        $cliente->save();

        return redirect()->route('formulario_crear_profe')->with('success', 'Profesor creado exitosamente.');
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
        return new ProfeController($clientes);
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



