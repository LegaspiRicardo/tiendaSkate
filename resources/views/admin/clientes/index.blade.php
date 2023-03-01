@extends('admin.layout.plantilla')

@section ('titulo', 'Clientes tienda Skate')

@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Clientes</h2>
    </div>

  <div class="col-2 mx-auto">
    @include ('admin.clientes.create')
  </div>

  
  <div class="col-8 mx-auto tablaProductos p-0">
    @include ('admin.clientes.data')
</div>


</main>
@endsection
