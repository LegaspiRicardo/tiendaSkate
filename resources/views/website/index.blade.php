@extends('website.piezas.plantilla')

@section('titulo', 'Tienda de Skate Cool')

@section('main')
<main>


    <div class="row portada">
        <div class="col-5 ">
            <div class="col-10 ml-auto texto-portada p-0">
                <p class="fuente-verde">Tablas, tenis, adrenalina y diversión.</p>
                <h1 class="">Nuestro estilo de vida</h1>
                <p class="fuente-gris-claro">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vtio ex omnis
                    maiores error eveniet fugiat molestiae similique illo velit dolores?</p>
                <button class="mt-4 boton-portada">Ver mas</button>
            </div>



        </div>
        <div class="col-7 ">
            <div class="col">
                <img src="images/skatt.png" alt="" class="imagen-portada">
            </div>
        </div>
    </div>



    <div class="row text-center categorias">

        <div class="col-3 p-0">
            <img src="images/vansVerdes.jpg" alt="" class="img-categorias">
            <h3 class="btn-portada">Tenis</h3>
        </div>
        <div class="col-3 p-0">
            <img src="images/longboardPov.jpg" alt="" class="img-categorias">
            <h3>Tablas</h3>
        </div>
        <div class="col-3 p-0">
            <img src="images/hoddie2.jpg" alt="" class="img-categorias">
            <h3>Playeras</h3>
        </div>
    </div>


    <div class="row tablas-carrusel mb-5">
        <div class="col-6 ml-auto">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla11.png" class="card-img-top img-tabla-carrusel text-start" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quiche card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla12.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla13.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla17.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somelk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla9.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somef the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla10.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Som the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla18.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quik of the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla16.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somee bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla6.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Sf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla8.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some q of the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla8.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somthe card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla2.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somee card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-5 text-center texto-carrusel-tablas">
            <h2>Tablas en tendencia</h2>
            <p class="col-8 mx-auto mt-5 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aperiam a quos consequuntur eligendi commodi neque laboriosam minus explicabo adipisci deserunt!</p>
            <button class="boton-portada mt-4">Ver más</button>
        </div>


    </div>

    <div class="row carrusel-noticias">

        <div id="carouselExampleIndicators" class="carousel slide col-9 mx-auto" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/skatePark1.jpg" class="d-block img-carrusel-noticias" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/skateFriends.jpg" class="d-block img-carrusel-noticias" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/skatePerfil.jpg" class="d-block img-carrusel-noticias" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/vansYcalceta.jpg" class="d-block img-carrusel-noticias" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

    </div>


</main>



@endsection