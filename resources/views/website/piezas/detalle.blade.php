@extends('website.piezas.plantilla')

@section('titulo', 'Detalle')

@section('main')
<div class="container--flex mb-5 pb-5">

    <div class=" boton-regreso col-2 mr-auto text-center">
        <a class="enlace-icono-volver" href="{{ url('/productos') }}"> <img src="PNGs/izquierda.png" alt="" class="icono-volver mt-4"></a>
    </div>



    <div class="detalle-card row ">


        <div class="col-6 m-0 p-0">

        <div class="wrap-gallery-article modelo mx-auto mt-3">
        <div id="myCarouselArticle" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarouselArticle" data-slide-to="0" class="active"></li>
                <li data-target="#myCarouselArticle" data-slide-to="1"></li>
                <li data-target="#myCarouselArticle" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="img-fluid" src="images/tablas/tabla8.png" alt="Card image cap" title="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="images/tablas/tabla5.png" alt="Card image cap" title="">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="images/tablas/tabla6.png" alt="Card image cap" title="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarouselArticle" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarouselArticle" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="row hidden-xs mx-auto" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="reset-ul d-flex mx-auto flex-wrap list-thumb-gallery">
                <li class="col-sm-3">
                    <a class="thumbnail" data-target="#myCarouselArticle" data-slide-to="0">
                        <img class="img-fluid" src="images/tablas/tabla8.png">
                    </a>
                </li>

                <li class="col-sm-3">
                    <a class="thumbnail" data-target="#myCarouselArticle" data-slide-to="1">
                        <img class="img-fluid" src="images/tablas/tabla5.png" alt="">
                    </a>
                </li>

                <li class="col-sm-3">
                    <a class="thumbnail" data-target="#myCarouselArticle" data-slide-to="2">
                        <img class="img-fluid" src="images/tablas/tabla6.png" alt="">
                    </a>
                </li>

            </ul>
        </div>

    </div>
        </div>



        <div class="card-info col-6 ml-auto p-0 ">
            <p class="marca-detalle text-left mr-auto mb-0 mt-4">Element</p>
            <h3 class="titulo-detalle mt-0"> Fly Sky 1998 </h3>
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