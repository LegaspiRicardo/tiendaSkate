@extends('website.piezas.plantillaDash')

@section('titulo', 'Radical Boards Landing Page')

@section('main')
<img class="imagen-fondo-landing" src="images/skatePark3.jpg" alt="">

<div class="container--flex">

    <h2 class="titulo-landing">¡Deslízate hacia la libertad!
        <p class="text-center">Visita nuestra tienda en línea y sé parte de la comunidad </p>
    </h2>

    <img src="images/landing/skaterGif.gif" class="gif" alt="">

    <div class="row col-8 mx-auto divisor-landing "></div>

    <div class="row col-12 seccion-categorias-landing">
        <div class="col-12 m-0 text-center p-0 ">
            <h6 class="subtitulo-landing text-center">Encuentra todo lo que necesitas para patinar</h6>
            <div class="col-11 d-inline-flex ">
                <div class="col-2 mx-auto categoria-landing">
                    <img src="PNGs/skateboard.png" alt="">
                    <h4 class="mt-4">Tablas</h4>
                </div>
                <div class="col-2 mx-auto categoria-landing">
                    <img src="PNGs/sneakers.png" alt="">
                    <h4 class="mt-4">Tenis</h4>
                </div>
                <div class="col-2 mx-auto categoria-landing">
                    <img src="PNGs/t-shirt.png" alt="">
                    <h4 class="mt-4">Ropa</h4>
                </div>
                <div class="col-2 mx-auto categoria-landing">
                    <img src="PNGs/scooter.png" alt="">
                    <h4 class="mt-4">Scooters</h4>
                </div>
                <div class="col-2 mx-auto categoria-landing">
                    <img src="PNGs/helmet.png" alt="">
                    <h4 class="mt-4">Accesorios</h4>
                </div>


            </div>
        </div>

    </div>

    <div class="row col-8 mx-auto divisor-landing mb-4"></div>

    <div class="row col-12 seccion-gancho-cliente">
        <div class="col-10 mx-auto">
            <h2 class="text-center subtitulo-gancho">Extensa variedad de productos</h2>

            <div class="row mt-5 pt-5">
                <div class="col-6 ml-auto text-right">
                    <div class="col-8 mx-auto">
                        <img src="images/landing/comodidad1.jpg" class="img-gancho" alt="">
                    </div>
                </div>
                <div class="col-6 mr-auto ">
                    <div class="col-10 mx-auto">
                        <h5 class="titulo-gancho">Comodidad y calidad </h5>
                        <p class="col-10 p-0 m-0 texto-gancho">Explora nuestra amplia variedad de productos y descubre por qué somos la mejor opción para los skaters más exigentes.
                            <br> <br> Atrévete a darlo todo
                        </p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mt-5 pt-5">
                <div class="col-6 mr-auto text-right">
                    <div class="col-10 mx-auto">
                        <h5 class="titulo-gancho">Seguridad y garantía </h5>
                        <p class="col-10 p-0 m-0 ml-auto text-justify texto-gancho">Diseñados con materiales resistentes y de alta calidad que te permitirán siempre patinar con confianza. <br>
                            <br> Con nuestros productos de skate duraderos y cómodos, el único límite es tu imaginación
                        </p>
                    </div>
                </div>

                <div class="col-6 mr-auto text-right">
                    <div class="col-8 text-center mr-auto">
                        <img src="images/landing/truco.jpg" class="img-gancho ml-5" alt="">
                    </div>
                </div>
            </div>
            <br>
            <div class="row mt-5 pt-5">
                <div class="col-6 ml-auto text-right">
                    <div class="col-8 mx-auto">
                        <img src="images/landing/nike1.jpg" class="img-gancho" alt="">
                    </div>
                </div>
                <div class="col-6 mr-auto ">
                    <div class="col-10 mx-auto">
                        <h5 class="titulo-gancho">Originales </h5>
                        <p class="col-10 p-0 m-0 texto-gancho">Nos enorgullece ofrecer una selección de productos de alta calidad que combinan funcionalidad y originalidad para ofrecerte una experiencia de skate única
                            <br> <br> Conquista las calles
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row col-12 seccion-invita-descarga mb-5 pb-5">
        <div class="col-12 m-0 text-center p-0">
            <h6 class="subtitulo-gancho text-center mb-3">No esperes más</h6>
            <p class="col-12 mx-auto text-center "> <b> 10% </b>de descuento en su primer compra con el codigo <br> <b> #Radical10 </b></p>

            <div class="row mt-5 ">
                <div class="col-6 mx-auto text-center">
                    <h5 class="titulo-gancho">Pagina Web </h5>
                    <p class="col-8 p-0 m-0 text-center mx-auto">Explora nuestra amplia variedad de productos y descubre por qué somos tu mejor opción.
                        <br> <br> <a href="{{url('/')}}" class="link-descarga"> Visitar Sitio Web</a>
                    </p>
                </div>
                <div class="col-6 mx-auto text-center">
                    <h5 class="titulo-gancho">Aplicación oficial </h5>
                    <p class="col-8 p-0 m-0 text-center mx-auto">Descarga nuestra app y mira los productos en tamaño real
                        <br> <br> <a href="" class="link-descarga"> Descarga <img src="PNGs/download.png" alt=""> </a>
                    </p>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection