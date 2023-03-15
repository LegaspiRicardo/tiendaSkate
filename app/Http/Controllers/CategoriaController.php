<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categorias.index')
        ->with('categoria',Categoria::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categorias.index')
        ->with('categoria',Categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        if($request->hasFile('img'))
            {
                $img= $request->file('img');
                $destino='admin/files/categorias/';
                $origen=$img->getClientOriginalName();
                $img->move( $destino,$origen);
                $categoria->img = $origen;
            }
            $categoria->save();

            return view('admin.categorias.index')
            ->with('categoria',Categoria::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria=Categoria::find($id);

        return view('admin.categorias.show')
        ->with('categoria',$categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=Categoria::find($id);
        return view('admin.categorias.edit')
        ->with('categoria',$categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriaRequest  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);

        $categoria->nombre = $request->nombre;
        if($request->hasFile('img'))
            {
                $img= $request->file('img');
                $destino='admin/files/categorias/';
                $origen=$img->getClientOriginalName();
                $img->move( $destino,$origen);
                $categoria->img = $origen;
            }
            $categoria->save();

            return view('admin.categorias.index')
            ->with('categoria',Categoria::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        unlink('admin/files/categorias/'. $categoria->img);
        $categoria->delete();

        return view('admin.categorias.index')
        ->with('categoria',Categoria::all());
    }
}
