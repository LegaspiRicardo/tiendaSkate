@extends('website.piezas.plantilla')

@section('titulo', 'Tienda de Skate Cool')

@section('main')
<main>


    <div class="row portada">
        <div class="col-5 ">
            <div class="col-10 ml-auto texto-portada p-0">
                <p class="">Tablas, tenis, adrenalina y diversión.</p>
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
            <h3>Tenis</h3>
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

    <div class="row carrusel-tablas">
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
            <h2>Tablas más vendidas</h2>
            <p class="col-8 mx-auto mt-5 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aperiam a quos consequuntur eligendi commodi neque laboriosam minus explicabo adipisci deserunt!</p>
            <button class="boton-portada mt-4">Ver más</button>
        </div>
    </div>

    <div class="row carrusel-noticias">
        <div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto" data-ride="carousel">
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

    <div class="row carrusel-ropa">
        <div class="col-5 text-center texto-carrusel-tablas">
            <h2>Playeras favoritas</h2>
            <p class="col-8 mx-auto mt-5 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aperiam a quos consequuntur eligendi commodi neque laboriosam minus explicabo adipisci deserunt!</p>
            <button class="boton-portada mt-4">Ver más</button>
        </div>

        <div class="col-6 mr-auto">
            <div id="carouselClothesControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/playeras/playera1.png" class="card-img-top img-ropa-carrusel text-start" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quiche card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera2.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera3.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera4.png" class="card-img-top img-ropa-carrusel" alt="...">
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
                                <img src="images/playeras/playera5.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somef the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera6.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Som the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera7.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quik of the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera8.png" class="card-img-top img-ropa-carrusel" alt="...">
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
                                <img src="images/playeras/playera9.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Sf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera10.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some q of the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera5.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somthe card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera11.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somee card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#carouselClothesControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselClothesControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row tendencias-carrusel ">

        <div class="col-8 mx-auto">

            <h2 class="text-center mb-5">Tendencias</h2>
            <div id="carouselTendenciaControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/playeras/playeras2.png" class="card-img-top img-tabla-carrusel text-start" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quiche card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla9.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playeras3.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quf the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla10.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Som the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playeras1.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somef the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla18.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quik of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/playeras/playeras5.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Sf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla16.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some q of the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera7.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somthe card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#carouselTendenciaControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTendenciaControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row marcas-carrusel mb-5">
        <div class="col-8 mx-auto">

            <h2 class="text-center mb-5">Marcas disponibles</h2>
            <div id="carouselBrandsControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card mx-auto">
                                <img src="images/logos/antifashion.png" class="card-img-top img-marca-carrusel mt-5" alt="...">
                            </div>
                            <div class="card ml-auto">
                                <img src="images/logos/element.png" class="img-marca-carrusel mt-5" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/RnD.png" class=" img-marca-carrusel" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/dc.png" class=" img-marca-carrusel mt-5" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="cards-wrapper">
                            <div class="card mx-auto">
                                <img src="images/logos/chocolate.png" class="card-img-top img-marca-carrusel " alt="...">
                            </div>
                            <div class="card ml-auto">
                                <img src="images/logos/toyMachine.png" class="element img-marca-carrusel" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/santaCruz.png" class="card-img-top img-marca-carrusel" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/spitFire.png" class=" img-marca-carrusel mt-5" alt="...">
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselBrandsControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselBrandsControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center blog ">

        <div class="col-4 ml-auto p-0">
            <img src="images/tablaCuadros.jpg" alt="" class="img-blog">
            <h3 class="btn-blog">Blog</h3>
        </div>
        <div class="col-4 mr-auto  p-0">
            <img src="images/skating.jpg" alt="" class="img-blog">
            <h3 class="class=" btn-blog">Eventos</h3>
        </div>
    </div>



    <div class="row contacto-form">
        <div class="col-6 ml-auto ">
            <div class="col-10 mx-auto">
                <h2 class="  mb-2">Contactanos</h2>
                <p class="mb-3">Te responderemos lo más pronto posible :)</p>
                <form class="formulario mx-auto needs-validation" method="POST">
                    <div class="row">
                        <label for="correo" class="col-6 mb-0 mt-2 ">Correo:</label>
                        <label for="telefono" class="col-5 ml-auto mb-0 mt-2">Telefono:</label>

                        <input type="mail" name="correo" class="col-6 form-input">
                        <input type="text" name="telefono" class="col-5 ml-auto form-input">

                        <label for="mensaje" class="col-12 mb-0 mt-5">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" cols="25" rows="5" class="col-12 form-input"></textarea>
                        <input type="text" name="estatus" class="col-12 form-input" value="Pendiente" hidden>

                        <input type="submit" value="Enviar" class="col-3 ml-auto form-btn ">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-6 p-0">

            <div class="col-10 ml-auto">
            <h2 class="  mb-2">Llamanos</h2>
            <p class="mb-2">Podemos ayudarte a buscar existencia y personalizar tu orden. :)</p>
                <div class="row">
                    <div class="col-4">
                        <p class="text-center">33 1585 8748</p>
                    </div>
                    <div class="col-4 mr-auto">
                        <p>33 1345 8748</p>
                    </div>
                </div>

                <div class="row">
                    <img src="images/skateBoy.jpg" class="img-formulario" alt="">
                </div>

            </div>


        </div>




    </div>


</main>



@endsection