<?php

namespace App\Http\Controllers;

use App\Models\empleadoProducto;
use App\Http\Requests\StoreempleadoProductoRequest;
use App\Http\Requests\UpdateempleadoProductoRequest;

class EmpleadoProductoController extends Controller
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
     * @param  \App\Http\Requests\StoreempleadoProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreempleadoProductoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleadoProducto  $empleadoProducto
     * @return \Illuminate\Http\Response
     */
    public function show(empleadoProducto $empleadoProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleadoProducto  $empleadoProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(empleadoProducto $empleadoProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateempleadoProductoRequest  $request
     * @param  \App\Models\empleadoProducto  $empleadoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateempleadoProductoRequest $request, empleadoProducto $empleadoProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleadoProducto  $empleadoProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleadoProducto $empleadoProducto)
    {
        //
    }
}
