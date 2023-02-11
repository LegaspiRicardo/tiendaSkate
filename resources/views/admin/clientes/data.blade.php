@extends('admin.plantilla.plantilla')

@section ('titulo', 'Inventario Clientes')

@section('main')

    <div class="off-canvas-content" data-off-canvas-content>
        @section('inventarioCategoria','Registro de Clientes')

        <table>
            <thead>
              <tr>
                <th width="100">Nombre</th>
                <th  width="100">Apellido Paterno</th>
                <th width="100">Apellido Materno</th>
                <th width="100">FechaNacimiento  </th>
                <th width="100">Ubicacion  </th>
                <th width="100">Correo  </th>
                <th width="100">Imagen </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>David</td>
                <td>Legaspi</td>
                <td>Villaseñor</td>
                <td>23/12/2001</td>
                <td>Jalisco</td>
                <td>ola@gmail.com</td>
                <td>foto.jpg</td>

              </tr>

            </tbody>
          </table>
            <hr>

 

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    
@endsection