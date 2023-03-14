<!--Table-->
<table class="table table-striped table-hover table-sm">

    <!--Table head-->
    <thead>
    <h3 class="text-center cabezal-tabla m-0">Marcas  </h3>

        <tr>
            <th>#</th>
            <th>Marca</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        
    @foreach ($marca as $marca)
    <tr>
        <th scope="row">{{ $marca->id }}</th>
        <td class="text-center">{{ $marca->nombre }}</td>
        <td>{{ $marca->texto }}</td>
        <td><img src="/admin/files/marcas/{{ $marca->imagen }}" alt="" width="100"></td>
        <td><a class="badge badge-warning" href="{{ url('/marcasAdmin/'. $marca->id.'/edit')}}"><span class="text-white">Editar</span> <img src="PNGs/editar.png" class="iconoTabla" alt=""></a></td>
        <td><a class="badge badge-danger" href="{{ url('/marcasAdmin/'. $marca->id)}}"><span class="text-white">Borrar</span> <img src="PNGs/delete.png" class="iconoTabla" alt=""></a></td>
    </tr>
    @endforeach
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
