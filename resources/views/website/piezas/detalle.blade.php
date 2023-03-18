@extends('website.piezas.plantilla')

@section('titulo', 'Detalle')

@section('main')
<div class="container--flex mb-5 pb-5">


    <div class="detalle-card row ">


        <div class="col-6 m-0 p-0">
            <div class="sketchfab-embed-wrapper mt-3 text-center mx-auto"> <iframe title="Untitled" class="modelo" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking execution-while-out-of-viewport execution-while-not-rendered web-share src="https://sketchfab.com/models/ff2ef0b619bf4a95a6515ad265853435/embed?autostart=1&ui_hint=0"> </iframe> </div>
        </div>



        <div class="card-info col-6 ml-auto p-0 ">
            <h3 class="titulo-detalle mt-4"> Tabla cuadros galacticos </h3>
            <div class="col-10 mr-auto text-justify p-0 ">
                <p class="info-producto"> Modelo especial para realizar todos los trucos posibles y
                    por haber dentro del mundo del skate. <br> Sus trucks marca Element harán que
                    sientas esta tabla como una nube.</p>

                <div class="row mt-5 mb-5">


                    <div class="col-8">
                        <h6 class="titulo-tamaño-detalle">Seleccione tamaño:</h6>
                        <div class="form-check form-check-inline  pr-2">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <p class="letra-tamano form-check-label" for="inlineRadio1">S</p>
                        </div>
                        <div class="form-check form-check-inline pr-2">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <p class="letra-tamano form-check-label" for="inlineRadio1">M</p>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                            <p class="letra-tamano form-check-label" for="inlineRadio3">L</p>
                        </div>
                    </div>



                    <div class="col-4 text-left">
                        <p class="precio-titulo">Total:</p>
                        <p class="precio-detalle ">$333</p>
                    </div>



                </div>


                <div class="col-10 mx-auto text-center">
                    <button class="btn btn-detalle" type="submit">Agregar al carrito</button>
                </div>


            </div>
        </div>

    </div>




</div>
@endsection