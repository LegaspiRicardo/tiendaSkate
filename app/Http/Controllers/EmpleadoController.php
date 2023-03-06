<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
// use App\Http\Requests\StoreEmpleadoRequest;
// use App\Http\Requests\UpdateEmpleadoRequest;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.empleados.index')->with('empleado',Empleado::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.empleados.index')->with('empleado',Empleado::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmpleadoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();

        $empleado->nombres = $request->nombres;
        $empleado->correo = $request->correo;
        $empleado->estatus = $request->estatus;
        $empleado->telefono = $request->telefono;
        $empleado->puesto = $request->puesto;

        $empleado->save();
        return view('admin.empleados.index')->with('empleado',Empleado::all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado=Empleado::find($id);
        return view('admin.empleados.show')->with('empleado',$empleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $empleado=Empleado::find($id);
        return view('admin.empleados.edit')->with('empleado',$empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmpleadoRequest  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado=Empleado::find($id);
        $empleado->nombres = $request->nombres;
        $empleado->correo = $request->correo;
        $empleado->estatus = $request->estatus;
        $empleado->telefono = $request->telefono;
        $empleado->puesto = $request->puesto;
        
        $empleado->save();
        return view('admin.empleados.index')->with('empleado',Empleado::all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $empleado=Empleado::find($id);
        $empleado->delete();
        return view('admin.empleados.index')->with('empleado',Empleado::all());

    }
}
