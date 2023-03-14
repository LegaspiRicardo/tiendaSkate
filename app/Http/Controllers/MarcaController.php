<?php

namespace App\Http\Controllers;

use App\Models\Marca;
// use App\Http\Requests\StoreMarcaRequest;
// use App\Http\Requests\UpdateMarcaRequest;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.marcas.index')
        ->with('marca',Marca::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marcas.index')
        ->with('marca',Marca::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMarcaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new Marca();
        $marca->nombre = $request->nombre;
        if($request->hasFile('imagen'))
            {
                $imagen= $request->file('imagen');
                $destino='admin/files/marcas/';
                $origen=$imagen->getClientOriginalName();
                $imagen->move( $destino,$origen);
                $marca->imagen = $origen;
            }
        $marca->texto = $request->texto;
        $marca->save();

        

        return view('admin.marcas.index')
        ->with('marca',Marca::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca=Marca::find($id);

        return view('admin.marcas.show')
        ->with('marca', $marca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca=Marca::find($id);
        return view('admin.marcas.edit')
        ->with('marca',$marca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMarcaRequest  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $marca = Marca::find($id);
        $marca->nombre = $request->nombre;
        if($request->hasFile('imagen'))
            {
                $imagen= $request->file('imagen');
                $destino='admin/files/marcas/';
                $origen=$imagen->getClientOriginalName();
                $imagen->move( $destino,$origen);
                unlink('admin/files/marcas/'.$marca->imagen);
                $marca->imagen = $origen;
            }
        $marca->texto = $request->texto;
        $marca->save();

        return view('admin.marcas.index')
        ->with('marca',Marca::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marca= Marca::find($id);
        unlink('admin/files/marcas/'. $marca->imagen);
        $marca->delete();

        
        return view('admin.marcas.index')
        ->with('marca',Marca::all());
    }
}
