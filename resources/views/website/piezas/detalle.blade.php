@extends('website.piezas.plantilla')

@section('titulo', 'Detalle')

@section('main')
    <div class="container--flex mb-5 pb-5">


        <div class="detalle-card row ">


            <div class="col-6 m-0 p-0">
                <div class="sketchfab-embed-wrapper text-center mx-auto"> <iframe title="Untitled" class="modelo" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/ff2ef0b619bf4a95a6515ad265853435/embed?autostart=1&ui_hint=0"> </iframe> </div>
            </div>



            <div class="card-info col-6 p-0">
                <div class="titulo-detalle">
                    Tabla cuadros 1
                </div>
                <p class="info-producto"> Color blanco, baleros acero</p>
                <div class="comprar">
                    <p class="precio-producto">$333</p>
                </div>
            </div>
        </div>




    </div>
@endsection
