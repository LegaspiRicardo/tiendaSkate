@extends('admin.layout.plantilla')

@section ('titulo', 'Panel de Control')

@section('main')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2">Panel de control</h2>
    </div>
<div class="row">

    <div class="col-4 mx-auto">
        <div class="table-responsive tablaPanel">
            <table class="table table-hover table-sm">
            <h3 class="text-center cabezal-tabla m-0">Pedidos nuevos</h3>

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Domicilio</th>
                        <th>Productos</th>
                        <th>Total</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1501</td>
                        <td>Eduardo</td>
                        <td>Colinas Sur</td>
                        <td class="text-center">3</td>
                        <td class="text-center">$1,289</td>
                        <td>Pendiente envio</td>
                    </tr>
                    <tr>
                        <td>1502</td>
                        <td>Eduardo</td>
                        <td>Colinas Sur</td>
                        <td class="text-center">3</td>
                        <td class="text-center">$1,289</td>
                        <td>Pendiente envio</td>
                    </tr>
                    <tr>
                        <td>1503</td>
                        <td>Eduardo</td>
                        <td>Colinas Sur</td>
                        <td class="text-center">3</td>
                        <td class="text-center">$1,289</td>
                        <td>Pendiente envio</td>
                    </tr>
                    <tr>
                        <td>1504</td>
                        <td>Eduardo</td>
                        <td>Colinas Sur</td>
                        <td class="text-center">3</td>
                        <td class="text-center">$1,289</td>
                        <td>Pendiente envio</td>
                    </tr>
                    <tr>
                        <td>1505</td>
                        <td>Eduardo</td>
                        <td>Colinas Sur</td>
                        <td class="text-center">3</td>
                        <td class="text-center">$1,289</td>
                        <td>Pendiente envio</td>
                    </tr>
                    <tr>
                        <td>1501</td>
                        <td>Eduardo</td>
                        <td>Colinas Sur</td>
                        <td class="text-center">3</td>
                        <td class="text-center">$1,289</td>
                        <td>Pendiente envio</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-6 mx-auto">
        <div class="table-responsive tablaPanel">
            <table class="table table-hover table-sm">
            <h3 class="text-center cabezal-tabla m-0">Top 10 ventas</h3>

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Imagen</th>
                        <th>Existencia</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>
                    <tr>
                        <td>1701</td>
                        <td>T-Shirt Crux </td>
                        <td>Element</td>
                        <td>imagen.jpg</td>
                        <td class="text-center">32</td>
                        <td class="text-center">$1,289</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>



</main>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
<script src="dashboard.js"></script>

@endsection