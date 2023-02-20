<?php

namespace App\Http\Controllers;

use App\Models\carruselNoticia;
use App\Http\Requests\StorecarruselNoticiaRequest;
use App\Http\Requests\UpdatecarruselNoticiaRequest;

class CarruselNoticiaController extends Controller
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
     * @param  \App\Http\Requests\StorecarruselNoticiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecarruselNoticiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carruselNoticia  $carruselNoticia
     * @return \Illuminate\Http\Response
     */
    public function show(carruselNoticia $carruselNoticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carruselNoticia  $carruselNoticia
     * @return \Illuminate\Http\Response
     */
    public function edit(carruselNoticia $carruselNoticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecarruselNoticiaRequest  $request
     * @param  \App\Models\carruselNoticia  $carruselNoticia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecarruselNoticiaRequest $request, carruselNoticia $carruselNoticia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carruselNoticia  $carruselNoticia
     * @return \Illuminate\Http\Response
     */
    public function destroy(carruselNoticia $carruselNoticia)
    {
        //
    }
}
