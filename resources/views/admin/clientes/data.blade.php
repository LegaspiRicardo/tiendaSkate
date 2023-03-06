<!--Table-->
<table class="table table-hover table-sm">

    
    <!--Table head-->
    <thead>
        
    <h3 class="text-center cabezal-tabla m-0">Clientes nuevos </h3>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Clave</th>
            <th>Telefono</th>
            <th>Calle</th>
            <th>Numero</th>
            <th>Colonia</th>
            <th>CP</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ($cliente as $cliente)
        <tr>
            <th scope="row">{{ $cliente->id }}</th>
            <td class="text-center">{{ $cliente->nombre }}</td>
            <td>{{ $cliente->correo }}</td>
            <td>{{ $cliente->clave }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>{{ $cliente->calle }}</td>
            <td>{{ $cliente->numero }}</td>
            <td>{{ $cliente->colonia }}</td>
            <td>{{ $cliente->cp }}</td>
            <td><a class="badge badge-warning" href="{{ url('/clienteAdmin/'. $cliente->id.'/edit')}}"><span class="text-white">Editar</span> <img src="PNGs/editar.png" class="iconoTabla" alt=""></a></td>
            <td><a class="badge badge-danger" href="{{ url('/clienteAdmin/'. $cliente->id)}}"><span class="text-white">Borrar</span> <img src="PNGs/delete.png" class="iconoTabla" alt=""></a></td>
        </tr>
        @endforeach
        


    </tbody>
    <!--Table body-->

</table>
<!--Table-->
