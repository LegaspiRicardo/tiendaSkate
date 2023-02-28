@extends('admin.layout.plantilla')

@section('titulo', 'Inventario tienda Skate')

@section('main')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="col-2 mx-auto">
            @include ('admin.layout.forms.productoForm')

        </div>

        <div class="col-10 mx-auto tablaProductos">
            @include ('admin.productos.data')
        </div>

    </main>

@endsection
