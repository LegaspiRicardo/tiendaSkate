<?php

namespace App\Http\Controllers;

use App\Models\clienteProducto;
use App\Http\Requests\StoreclienteProductoRequest;
use App\Http\Requests\UpdateclienteProductoRequest;

class ClienteProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreclienteProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclienteProductoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clienteProducto  $clienteProducto
     * @return \Illuminate\Http\Response
     */
    public function show(clienteProducto $clienteProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clienteProducto  $clienteProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(clienteProducto $clienteProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclienteProductoRequest  $request
     * @param  \App\Models\clienteProducto  $clienteProducto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclienteProductoRequest $request, clienteProducto $clienteProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clienteProducto  $clienteProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(clienteProducto $clienteProducto)
    {
        //
    }
}
