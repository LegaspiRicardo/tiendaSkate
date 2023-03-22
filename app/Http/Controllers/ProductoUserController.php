<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductoUserController extends Controller
{
     public function index()
    {
  
            return view('website.productos')->with('producto',Producto::where('estatus','existencia')->get());

    }

       public function show($id)
    {
        
        $producto=Producto::find($id);
            return view('website.detalle')->with('producto',$producto);
    }

}
