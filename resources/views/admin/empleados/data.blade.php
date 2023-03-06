<!--Table-->
<table class="table table-hover table-sm">

    <!--Table head-->
    <thead>
    <h3 class="text-center cabezal-tabla m-0">Empleados  </h3>

        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Estatus</th>
            <th>Puesto</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        @foreach ($empleado as $empleado)
        <tr>
            <th scope="row">{{ $empleado->id }}</th>
            <td class="text-center">{{ $empleado->nombres }}</td>
            <td>{{ $empleado->correo }}</td>
            <td>{{ $empleado->telefono }}</td>
            <td>{{ $empleado->estatus }}</td>
            <td>{{ $empleado->puesto }}</td>
          
            <td><a class="badge badge-warning" href="{{ url('/equipoAdmin/'. $empleado->id.'/edit')}}"><span class="text-white">Editar</span> <img src="PNGs/editar.png" class="iconoTabla" alt=""></a></td>
            <td><a class="badge badge-danger" href="{{ url('/equipoAdmin/'. $empleado->id)}}"><span class="text-white">Borrar</span> <img src="PNGs/delete.png" class="iconoTabla" alt=""></a></td>
        </tr>
        @endforeach
        


    </tbody>
    <!--Table body-->

</table>
<!--Table-->
