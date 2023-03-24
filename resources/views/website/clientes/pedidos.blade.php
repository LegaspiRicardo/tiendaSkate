@extends('website.piezas.plantilla')
<link href="css/signin.css" rel="stylesheet">
<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@section('titulo', 'Mis pedidos Radical Boards')

@section('main')


<main class="main-cuenta">
    <div class=" boton-regreso col-2 mr-auto text-center">
        <a class="enlace-icono-volver" href="{{ url('/miCuenta') }}"> <img src="PNGs/izquierda.png" alt="" class="icono-volver mt-4"></a>
    </div>

    <img src="/images/grafiti4.jpg" alt="" class="imagen-cuenta-fondo">

    <h2 class="mx-auto text-center titulo-cuenta">Mis pedidos</h2>

    <div class="row col-8 mx-auto text-center m-0 p-0 mb-5 pb-5">
        <table class="table table-pedidos table-hover table-sm mb-5">

            <!--Table head-->
            <thead>
                <h3 class="text-center cabezal-tabla m-0">Pedidos realizados </h3>

                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Fecha orden</th>
                    <th>Entrega</th>
                    <th>Productos</th>
                    <th>Precio</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td class="text-center">Karla Perez</td>
                    <td>22-Marzo-2023</td>
                    <td>20-Abril-2023</td>
                    <td>4 Piezas</td>
                    <td>$1,280</td>
                    <td>Pendiente Entrega</td>
                </tr>
            </tbody>
            <!--Table body-->

        </table>
    </div>




</main>







@endsection