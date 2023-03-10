<?php

namespace App\Http\Controllers;

use App\Models\Producto;
// use App\Http\Requests\StoreProductoRequest;
// use App\Http\Requests\UpdateProductoRequest;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.productos.index')->with('producto',Producto::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productos.index')->with('producto',Producto::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();

        $producto->modelo = $request->modelo;
        $producto->marca = $request->marca;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->color = $request->color;
        $producto->material = $request->material;
        $producto->tamano = $request->tamano;
        $producto->estatus = $request->estatus;
        $producto->descripcion = $request->descripcion;
        if($request->hasFile('img1')){
            $img1= $request->file('img1');
            $destino='admin/files/productos/';
            $origen=$img1->getClientOriginalName();
            $img1->move( $destino,$origen);
            $producto->img1 = $origen;
        }
        if($request->hasFile('img2')){
            $img2= $request->file('img2');
            $destino='admin/files/productos/';
            $origen=$img2->getClientOriginalName();
            $img2->move( $destino,$origen);
            $producto->img2 = $origen;
        }
        if($request->hasFile('img3')){
            $img3= $request->file('img3');
            $destino='admin/files/productos/';
            $origen=$img3->getClientOriginalName();
            $img3->move( $destino,$origen);
            $producto->img3 = $origen;
        }
    
        $producto->save();


        
        return view('admin.productos.index')->with('producto',Producto::all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $producto=Producto::find($id);
        return view('admin.productos.show')->with('producto',$producto);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $producto=Producto::find($id);
        return view('admin.productos.edit')->with('producto',$producto);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $producto=Producto::find($id);

        $producto->modelo = $request->modelo;
        $producto->marca = $request->marca;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->color = $request->color;
        $producto->material = $request->material;
        $producto->tamano = $request->tamano;
        $producto->estatus = $request->estatus;
        $producto->descripcion = $request->descripcion;
      
      

        if($request->hasFile('img1')){
            $img1= $request->file('img1');
            $destino='admin/files/productos/';
            $origen=$img1->getClientOriginalName();
            $img1->move( $destino,$origen);
            unlink('admin/files/productos/'.$producto->img1);
            $producto->img1 = $origen;
        }
        if($request->hasFile('img2')){
            $img2= $request->file('img2');
            $destino='admin/files/productos/';
            $origen=$img2->getClientOriginalName();
            $img2->move( $destino,$origen);
            unlink('admin/files/productos/'.$producto->img2);
            $producto->img2 = $origen;
        }
        if($request->hasFile('img3')){
            $img3= $request->file('img3');
            $destino='admin/files/productos/';
            $origen=$img3->getClientOriginalName();
            $img3->move( $destino,$origen);
            unlink('admin/files/productos/'.$producto->img3);
            $producto->img3 = $origen;
        }
       
        $producto->save();
        return view('admin.productos.index')->with('producto',Producto::all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $producto=Producto::find($id);
        unlink('admin/files/productos/'.$producto->img1);
        unlink('admin/files/productos/'.$producto->img2);
        unlink('admin/files/productos/'.$producto->img3);
        $producto->delete();
        return view('admin.productos.index')->with('producto',Producto::all());

    }
}
