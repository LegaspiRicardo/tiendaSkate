@extends('admin.layout.plantilla')

@section ('titulo', 'Inventario tienda Skate')

@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    @include ('admin.layout.forms.productoForm')
    @section ('contenidoBoton', 'producto')

</main>

    @endsection