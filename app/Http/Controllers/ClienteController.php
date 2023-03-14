<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.clientes.index')->with('cliente',Cliente::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clientes.index')->with('cliente',Cliente::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $cliente = new Cliente();

        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->clave = $request->clave;
        $cliente->telefono = $request->telefono;
        $cliente->calle = $request->calle;
        $cliente->numero = $request->numero;
        $cliente->colonia = $request->colonia;
        $cliente->cp = $request->cp;

        $cliente->save();
        return view('admin.clientes.index')->with('cliente',Cliente::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $cliente=Cliente::find($id);
            return view('admin.clientes.show')->with('cliente',$cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $cliente=Cliente::find($id);
        return view('admin.clientes.edit')->with('cliente',$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClienteRequest  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente =  Cliente::find($id);

        
        $cliente->nombre = $request->nombre;
        $cliente->correo = $request->correo;
        $cliente->clave = $request->clave;
        $cliente->telefono = $request->telefono;
        $cliente->calle = $request->calle;
        $cliente->numero = $request->numero;
        $cliente->colonia = $request->colonia;
        $cliente->cp = $request->cp;

        $cliente->save();
        return view('admin.clientes.index')->with('cliente',Cliente::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
           $cliente =  Cliente::find($id);
           $cliente->delete();
           return view('admin.clientes.index')->with('cliente',Cliente::all());
    }
}
