<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use App\Http\Resources\AdministradorCollection;
use App\Http\Resources\AdministradorResource;

class AdminController extends Controller
{
    public function formularioCrear()
    {
        return view('crear_admin');
    }

    public function guardarAdmin(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'rut' => 'required',
            'email' => 'required|email',
        ]);

        $administrador = new Administrador;
        $administrador->nombre = $request->nombre;
        $administrador->rut = $request->rut;
        $administrador->email = $request->email;
        $administrador->save();

        return redirect()->route('formulario_crear_admin')->with('success', 'Administrador creado exitosamente.');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $administrador=Administrador::all();
        return new AdministradorCollection($administrador);
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
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
        return new AdministradorResource(Administrador::create($request->all()));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrador  $Administrador
     * @return \Illuminate\Http\Response
     */
    public function show(Administrador $administrador)
    {
        //
        return new  AdministradorResource($administrador);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrador  $Administrador
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrador $administrador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Administrador  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Administrador $administrador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrador  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrador $administrador)
    {
        //
    }
}



