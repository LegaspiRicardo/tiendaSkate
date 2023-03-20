<!--Table-->
<table class="table table-striped table-hover table-sm">

    <!--Table head-->
    <thead>
    <h3 class="text-center cabezal-tabla m-0">Productos  </h3>

        <tr>
            <th>#</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Color</th>
            <th>Material</th>
            <th>Tamaño</th>
            <th>Estatus</th>
            <th>Descripción</th>
            <th>Imagen1</th>
            <th>Imagen2</th>
            <th>Imagen3</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        
    @foreach ($producto as $producto)
    <tr>
        <th scope="row">{{ $producto->id }}</th>
        <td class="text-center">{{ $producto->modelo }}</td>
        <td>{{ $producto->marca->nombre }}</td>
        <td>{{ $producto->categoria->nombre }}</td>
        <td>{{ $producto->precio }}</td>
        <td>{{ $producto->cantidad }}</td>
        <td>{{ $producto->color }}</td>
        <td>{{ $producto->material }}</td>
        <td>{{ $producto->tamano }}</td>
        <td>{{ $producto->estatus }}</td>
        <td>{{ $producto->descripcion }}</td>
        <td><img src="/admin/files/productos/{{ $producto->img1 }}" alt="" width="100"></td>
        <td><img src="/admin/files/productos/{{ $producto->img2 }}" alt="" width="100"></td>
        <td><img src="/admin/files/productos/{{ $producto->img3 }}" alt="" width="100"></td>
        <td><a class="badge badge-warning" href="{{ url('/productoAdmin/'. $producto->id.'/edit')}}"><span class="text-white">Editar</span> <img src="PNGs/editar.png" class="iconoTabla" alt=""></a></td>
        <td><a class="badge badge-danger" href="{{ url('/productoAdmin/'. $producto->id)}}"><span class="text-white">Borrar</span> <img src="PNGs/delete.png" class="iconoTabla" alt=""></a></td>
    </tr>
    @endforeach
    </tbody>
    <!--Table body-->

</table>
<!--Table-->
