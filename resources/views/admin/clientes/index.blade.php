@extends('admin.layout.plantilla')

@section ('titulo', 'Clientes tienda Skate')

@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="col-2 mx-auto">
    @include ('admin.layout.forms.clienteForm')
  </div>

  
  <div class="col-8 mx-auto tablaProductos p-0">
    @include ('admin.clientes.data')
</div>


</main>
@endsection
