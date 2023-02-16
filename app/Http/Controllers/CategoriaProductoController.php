<?php

namespace App\Http\Controllers;

use App\Models\categoriaProducto;
use App\Http\Requests\StorecategoriaProductoRequest;
use App\Http\Requests\UpdatecategoriaProductoRequest;

class CategoriaProductoController extends Controller
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
     * @param  \App\Http\Requests\StorecategoriaProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoriaProductoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function show(categoriaProducto $categoriaProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(categoriaProducto $categoriaProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoriaProductoRequest  $request
     * @param  \App\Models\categoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoriaProductoRequest $request, categoriaProducto $categoriaProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(categoriaProducto $categoriaProducto)
    {
        //
    }
}
