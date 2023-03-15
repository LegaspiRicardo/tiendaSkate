<!--Table-->
<table class="table table-striped table-hover table-sm">

    <!--Table head-->
    <thead>

        <tr class="cabezal-tabla sticky-top">
            <th class="titulo-columna-marca">#</th>
            <th class="text-center titulo-columna-marca">Categoria</th>
            <th class="text-center titulo-columna-marca">Imagen</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        
    @foreach ($categoria as $categoria)
    <tr>
        <th scope="row">{{ $categoria->id }}</th>
        <td class="text-center">{{ $categoria->nombre }}</td>
        <td class="text-center"><img src="/admin/files/categorias/{{ $categoria->img }}" alt="" class="imagen-tabla-marcas"></td>
        <td><a class="badge badge-warning" href="{{ url('/categoriasAdmin/'. $categoria->id.'/edit')}}"><span class="text-white">Editar</span> <img src="PNGs/editar.png" class="iconoTabla" alt=""></a></td>
        <td><a class="badge badge-danger" href="{{ url('/categoriasAdmin/'. $categoria->id)}}"><span class="text-white">Borrar</span> <img src="PNGs/delete.png" class="iconoTabla" alt=""></a></td>
    </tr>
    @endforeach
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
