@extends('website.piezas.plantilla')
<link href="css/signin.css" rel="stylesheet">
<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@section('titulo', 'Mi cuenta Radical Boards')

@section('main')


<main class="main-cuenta">
    <img src="/images/grafiti4.jpg" alt="" class="imagen-cuenta-fondo">

    <h2 class="mx-auto text-center titulo-cuenta">Mi cuenta</h2>
    <div class="row col-6 mx-auto text-center m-0 p-0 mb-5">
        <div class="col-6 ">
            <div class="col-10 mx-auto caja-enlace-cuenta">
                <img src="PNGs/checkout.png" alt="" class="icono-cuenta">
                <h5 class="subtitulo-cuenta">Mis pedidos</h5>
            </div>
        </div>

        <div class="col-6 ">
            <div class="col-10 mx-auto caja-enlace-cuenta">
                <img src="PNGs/wish-list.png" alt="" class="icono-cuenta">
                <h5 class="subtitulo-cuenta">Lista deseos</h5>
            </div>
        </div>
    </div>

    <div class="row col-6 mx-auto text-center m-0 p-0 mb-4">
        <div class="col-6 ">
            <div class="col-10 mx-auto caja-enlace-cuenta">
                <img src="PNGs/tag.png" alt="" class="icono-cuenta">
                <h5 class="subtitulo-cuenta">Promociones</h5>
            </div>
        </div>

        <div class="col-6 ">
            <div class="col-10 mx-auto caja-enlace-cuenta">
                <img src="PNGs/chat.png" alt="" class="icono-cuenta">
                <h5 class="subtitulo-cuenta">Ayuda</h5>
            </div>
        </div>
    </div>

    <div class="row col-6 mx-auto text-center m-0 p-0 mb-4">
        <div class="col-6 mx-auto text-center">
            <div class="col-10 mx-auto caja-enlace-cuenta">
                <img src="PNGs/settings.png" alt="" class="icono-cuenta">
                <h5 class="subtitulo-cuenta">Configuración</h5>
            </div>
        </div>
    </div>


</main>







@endsection