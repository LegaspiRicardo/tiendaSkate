<!--Table-->
<table class="table table-striped table-hover table-sm">

    <!--Table head-->
    <thead>

        <tr class="cabezal-tabla sticky-top">
            <th class="titulo-columna-marca">#</th>
            <th class="text-center titulo-columna-marca">Marca</th>
            <th class="text-center titulo-columna-marca">Imagen</th>
            <th class="text-center titulo-columna-marca">Descripción</th>
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
        <td class="text-center"><img src="/admin/files/marcas/{{ $marca->imagen }}" alt="" class="imagen-tabla-marcas"></td>
        <td class="text-center">{{ $marca->texto }}</td>
        <td><a class="badge badge-warning" href="{{ url('/marcasAdmin/'. $marca->id.'/edit')}}"><span class="text-white">Editar</span> <img src="PNGs/editar.png" class="iconoTabla" alt=""></a></td>
        <td><a class="badge badge-danger" href="{{ url('/marcasAdmin/'. $marca->id)}}"><span class="text-white">Borrar</span> <img src="PNGs/delete.png" class="iconoTabla" alt=""></a></td>
    </tr>
    @endforeach
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
