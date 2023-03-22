




@extends('website.piezas.plantillaDash')

@section('titulo', 'Radical Boards ')

@section('main')

<!-- -----  Bigger View --------->
<main class="d-none d-sm-block">

    <div class="row portada m-0 p-0">
        <img src="images/skatePark2.jpg" alt="" class="imagen-portada">
        <div class="col-10 mx-auto">
            <div class="col-8 texto-portada p-0">
                <p class="">Tablas, tenis, adrenalina y diversión.</p>
                <h1 class="">Nuestro estilo de vida</h1>
                <p class="fuente-gris-claro">Visita la tienda en linea y conoce todos nuestros productos.</p>
                <a class="mt-2 boton-portada" href="{{url('productos')}}">Ver más</a>
            </div>
        </div>
    </div>

    <div class="row col-10 mx-auto categorias">
        <div class="col-3 p-0 categoriaItem" href="Varios">
            <img src="images/scooterDalle.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias">Scooters</h3>
        </div>
        <div class="col-3 p-0 categoriaItem">
            <img src="images/skateDalle1.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias">Tablas</h3>
        </div>
        <div class="col-3 p-0 categoriaItem">
            <img src="images/playeraDalle1.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias">Ropa y Calzado</h3>
        </div>
        <div class="col-3 p-0 categoriaItem">
            <img src="images/cascoDalle.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias" href="Varios">Accesorios</h3>
        </div>
    </div>

    <div class="row carrusel-tablas">
        <div class="col-6 ml-auto">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla11.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness Mind 1989</h5>
                                <p class="card-text mx-auto text-center">$499.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla2.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">SpringBreak ABC</h5>
                                <p class="card-text mx-auto text-center">$450.00</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($producto->where('categoria.nombre', 'tablas') as $producto_tabla)
                    <div class="item">
                        <div class="card">
                            <img src="/admin/files/productos/{{$producto_tabla->img1}}" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title"> {{$producto_tabla->modelo}}</h5>
                                <p class="card-text mx-auto text-center"><span>$</span>{{$producto_tabla->precio}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla3.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Flip Out K-097</h5>
                                <p class="card-text mx-auto text-center">$559.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla11.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Skills Kingdom 3.0</h5>
                                <p class="card-text mx-auto text-center">$799.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla6.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">SpaceShip Apol</h5>
                                <p class="card-text mx-auto text-center">$209.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla11.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">InDreams flip</h5>
                                <p class="card-text mx-auto text-center">$699.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla11.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness Mind 1989</h5>
                                <p class="card-text mx-auto text-center">$499.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla11.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness Mind 1989</h5>
                                <p class="card-text mx-auto text-center">$499.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla11.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness Mind 1989</h5>
                                <p class="card-text mx-auto text-center">$499.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/tablas/tabla11.png" class="img-tabla-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness Mind 1989</h5>
                                <p class="card-text mx-auto text-center">$499.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary leftLst"><</button>
                        <button class="btn btn-primary rightLst">></button>
            </div>
        </div>

        <div class="col-5 text-center texto-carrusel-tablas">
            <h2>Tablas más vendidas</h2>
            <p class="col-8 mx-auto mt-5 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Aperiam a quos consequuntur eligendi commodi neque laboriosam minus explicabo adipisci deserunt!</p>
            <button class="boton-portada mt-4">Ver más</button>
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
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    @foreach ($producto->where('categoria.nombre', 'ropa') as $producto_ropa)
                    <div class="item">
                        <div class="card">
                            <img src="/admin/files/productos/{{$producto_ropa->img1}}" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">{{$producto_ropa->modelo}}</h5>
                                <p class="card-text mx-auto text-center"><span>$</span>{{$producto_ropa->precio}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="item">
                        <div class="card">
                            <img src="images/playeras/playera2.png" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Fit & Skate</h5>
                                <p class="card-text mx-auto text-center">$249.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/playeras/playera4.png" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Chacahual</h5>
                                <p class="card-text mx-auto text-center">$159.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/playeras/playera5.png" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Fresh Skate</h5>
                                <p class="card-text mx-auto text-center">$349.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/playeras/playera6.png" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/emptyStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness</h5>
                                <p class="card-text mx-auto text-center">$299.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/playeras/playera7.png" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness</h5>
                                <p class="card-text mx-auto text-center">$299.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/playeras/playera8.png" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness</h5>
                                <p class="card-text mx-auto text-center">$299.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card">
                            <img src="images/playeras/playera1.png" class="img-ropa-carrusel text-start mb-3" alt="...">
                            <div class="card-body text-center p-0">
                                <div class="estrellas col-10 mx-auto mb-2">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                    <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                </div>
                                <h5 class="card-title">Maddness</h5>
                                <p class="card-text mx-auto text-center">$299.00</p>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="btn btn-primary leftLst"><</button>
                <button class="btn btn-primary rightLst">></button>
            </div>
        </div>
    </div>

    <div class="row text-center blog ">
        <img src="images/vigas.jpg" alt="" class="imagen-fondo-blog ">
        <div class="col-4 mx-auto mt-5 p-0">
            <a href="{{ url('blog') }}">
                <img src="images/skater2.jpg" alt="" class="img-blog">
                <h3 class="btn-blog mt-3">Blog</h3>
            </a>
        </div>
        <div class="col-4 mx-auto mt-5 p-0">
            <a href="{{ url('eventos') }}">
                <img src="images/skateFriends.jpg" alt="" class="img-blog">
                <h3 class="btn-blog mt-3">Eventos</h3>
            </a>
        </div>
    </div>



    <div class="row tendencias-carrusel ">
        <div class="col-8 mx-auto mt-3 mb-4">
            <h2 class="text-center mb-5">Tendencias</h2>
            <div id="carouselTendenciaControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/playeras/playeras2.png" class="card-img-top img-tabla-carrusel text-start" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$299.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla9.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$390.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playeras3.png" class="card-img-top img-tabla-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$390.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla10.png" class="card-img-top img-producto-tendencia" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$89.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playeras1.png" class="card-img-top img-producto-tendencia" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$89.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla18.png" class="card-img-top img-producto-tendencia" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$89.00</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/playeras/playeras5.png" class="card-img-top img-producto-tendencia" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$89.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla16.png" class="card-img-top img-producto-tendencia" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$89.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera7.png" class="card-img-top img-producto-tendencia" alt="...">
                                <div class="card-body text-center p-0">
                                    <div class="estrellas col-10 mx-auto mb-2">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/star.png" class="estrella d-inline" alt="">
                                        <img src="PNGs/halfStar.png" class="estrella d-inline" alt="">
                                    </div>
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text mx-auto text-center">$89.00</p>
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


    
    <div class="row marcas-carrusel ">
        <img src="images/grafiti2.jpg" alt="" class="imagen-fondo-marcas ">
        <div class="col-8 mt-4 mx-auto">

            <h2 class="text-center mb-4">Marcas disponibles</h2>
            <div id="carouselBrandsControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            
                            <div class="card mx-auto">
                                <img src="images/logos/toyMachine.png" class="element img-marca-carrusel " alt="...">
                            </div>
                            <div class="card ml-auto">
                                <img src="images/logos/element.png" class="img-marca-carrusel mt-2" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/RnD.png" class=" img-marca-carrusel" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/dc.png" class=" img-marca-carrusel mt-3" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="cards-wrapper">
                            <div class="card mx-auto">
                                <img src="images/logos/chocolate.png" class="card-img-top img-marca-carrusel mt-1" alt="...">
                            </div>
                            <div class="card ml-auto">
                                <img src="images/logos/antifashion.png" class="card-img-top img-marca-carrusel mt-3" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/santaCruz.png" class="card-img-top img-marca-carrusel" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/spitFire.png" class=" img-marca-carrusel mt-2" alt="...">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row contacto-form mb-5">
        <div class="col-6 ml-auto ">
            <div class="col-10 mx-auto">
                <h2 class="  mb-2">Contactanos</h2>
                <p class="mb-3">Te responderemos lo más pronto posible :)</p>
                <form class="formulario mx-auto needs-validation" method="POST">
                    <div class="row">
                        <label for="correo" class="col-6 mb-1 mt-2 ">Correo:</label>
                        <label for="telefono" class="col-5 ml-auto mb-1 mt-2">Telefono:</label>

                        <input type="mail" name="correo" class="col-6 form-input">
                        <input type="text" name="telefono" class="col-5 ml-auto form-input">

                        <label for="mensaje" class="col-12 mb-0 mt-5">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" cols="25" rows="5" class="col-12 form-input"></textarea>
                        <input type="text" name="estatus" class="col-12 form-input" value="Pendiente" hidden>

                        <input type="submit" value="Enviar" class="col-2 ml-auto form-btn ">
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

                <img src="images/skateGirl5.jpg" class="img-formulario" alt="">


            </div>


        </div>
    </div>
</main>


<!-- -----  Smaller View --------->

<main class="d-block d-sm-none">
    <div class="row portada m-0 p-0">
        <img src="images/skatePark2.1.jpg" alt="" class="imagen-portada">
        <div class="col-11 mx-auto">
            <div class="col-10 mx-auto text-center texto-portada p-0">
                <p class="fuente-gris-claro m-0">Tablas, tenis, adrenalina y diversión.</p>
                <h1 class="text-center">Nuestro estilo de vida</h1>
                <button class="mt-2 boton-portada">Ver más</button>
            </div>
        </div>
    </div>

    <div class="row col-10 mx-auto categorias">
        <div class="col-6 p-0 text-center categoriaItem">
            <img src="images/scooterDalle.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias">Scooters</h3>
        </div>
        <div class="col-6 p-0 text-center categoriaItem mb-2">
            <img src="images/skateDalle1.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias">Tablas</h3>
        </div>
        <div class="col-6 p-0 text-center categoriaItem">
            <img src="images/playeraDalle1.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias">Playeras</h3>
        </div>
        <div class="col-6 p-0 text-center categoriaItem">
            <img src="images/cascoDalle.png" alt="" class="img-categorias">
            <h3 class="titulo-categorias">Accesorios</h3>
        </div>
    </div>

    <div class="row carrusel-tablas">
        <div class="col-10 mx-auto text-center texto-carrusel-tablas">
            <h2 class="mb-1">Tablas más vendidas</h2>
            <button class="boton-portada d-inline ml-auto">Ver más</button>
        </div>
        <div class="col-12 mx-auto mt-3 mb-2">
            <div id="carouselTablas" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla11.png" class="card-img-top img-tabla-carrusel  mb-3" alt="...">
                                <div class="card-body  p-0">
                                    <h5 class="card-title">Maddness</h5>
                                    <p class="card-text">Gray/green head.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla12.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body  p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla13.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla17.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
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
                                <img src="images/tablas/tabla9.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somef the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla10.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Som the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla18.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla16.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla6.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Sf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla8.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some q of the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla8.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somthe card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla2.png" class="card-img-top img-tabla-carrusel mb-3" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somee card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#carouselTablas" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTablas" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row carrusel-ropa">
        <div class="col-10 mx-auto text-center texto-carrusel-tablas">
            <h2>Playeras favoritas</h2>
            <button class="boton-portada ">Ver más</button>
        </div>

        <div class="col-12 mx-auto">
            <div id="carouselClothesControlsSmall" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper ">
                            <div class="card ">
                                <img src="images/playeras/playera1.png" class="card-img-top img-ropa-carrusel " alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">T-Shirt cool</h5>
                                    <p class="card-text">Some quiche card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera2.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera3.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
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
                                    <p class="card-text">Some quiche card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera8.png" class="card-img-top img-ropa-carrusel" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quiche card's content.</p>
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
                                    <p class="card-text">Some quiche card's content.</p>
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

                    <a class="carousel-control-prev" href="#carouselClothesControlsSmall" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselClothesControlsSmall" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center blog ">
        <img src="images/vigas.jpg" alt="" class="imagen-fondo-blog ">
        <div class="col-10 mb-4 mt-4 mx-auto p-0">

            <h3 class="btn-blog">Blog</h3>
            <img src="images/tablaCuadros.jpg" alt="" class="img-blog">
        </div>
        <div class="col-10 mx-auto mt-2 p-0">

            <h3 class="class=" btn-blog">Eventos</h3>
            <img src="images/skating.jpg" alt="" class="img-blog">
        </div>
    </div>

    <div class="row tendencias-carrusel">
        <div class="col-11 mx-auto mb-3 mt-3">

            <h2 class="text-center mb-2">Tendencias</h2>
            <div id="carouselTendenciasControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/playeras/playeras2.png" class="card-img-top img-tendencias text-start" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quiche card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla9.png" class="card-img-top img-tendencias" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playeras3.png" class="card-img-top img-tendencias" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">$390.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="images/tablas/tabla10.png" class="card-img-top img-tendencias" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Som the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playeras1.png" class="card-img-top img-tendencias" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somef the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla18.png" class="card-img-top img-tendencias" alt="...">
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
                                <img src="images/playeras/playeras5.png" class="card-img-top img-tendencias" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Sf the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/tablas/tabla16.png" class="card-img-top img-tendencias" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some q of the card's content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="images/playeras/playera7.png" class="card-img-top img-tendencias" alt="...">
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Somthe card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <a class="carousel-control-prev" href="#carouselTendenciasControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselTendenciasControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row marcas-carrusel ">
        <img src="images/grafiti2.jpg" alt="" class="imagen-fondo-marcas ">
        <div class="col-12 m-0 p-0">

            <h2 class="text-center mb-1 mt-3">Marcas disponibles</h2>
            <div id="carouselMarcasControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner carrusel-marcas ">
                    <div class="carousel-item active">
                        <div class="cards-wrapper">
                            <div class="card ">
                                <img src="images/logos/santaCruz.png" class="img-marca-carrusel ml-2" alt="...">
                            </div>
                            <div class="card ">
                                <img src="images/logos/element.png" class="img-marca-carrusel " alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/dc.png" class=" img-marca-carrusel mt-3  " alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/RnD.png" class=" img-marca-carrusel mr-5" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item ">
                        <div class="cards-wrapper">
                            <div class="card ">
                                <img src="images/logos/chocolate.png" class="img-marca-carrusel " alt="...">
                            </div>
                            <div class="card ">
                                <img src="images/logos/toyMachine.png" class="element img-marca-carrusel" alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/antifashion.png" class="img-marca-carrusel  " alt="...">
                            </div>
                            <div class="card">
                                <img src="images/logos/spitFire.png" class=" img-marca-carrusel" alt="...">
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselMarcasControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon  mr-4" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselMarcasControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row contacto-form mt-4 p-0 m-0 mb-5">
        <div class="col-10 mx-auto p-0">
            <div class="col-12 mx-auto p-0 mb-5">
                <h2 class="text-center mb-2 mt-3">¿Encontraste lo que buscabas?</h2>
                <p class="mb-5 fuente-gris-claro text-center">¡Dejanos un mensaje aquí y te responderemos pronto! </p>

                <form class="formulario mx-auto needs-validation" method="POST">
                    <div class="row form-group">
                        <input type="mail" name="correo" class="col-11 mx-auto form-input-mobile mb-1">
                        <label for="correo" class="col-10 label-form ">Correo electronico:</label>
                    </div>

                    <div class="row form-group">
                        <input type="text" name="telefono" class="col-11 mx-auto form-input-mobile mb-1">
                        <label for="telefono" class="col-10 label-form ">Telefono:</label>
                    </div>

                    <div class="row form-group">
                        <textarea name="mensaje" id="mensaje" cols="25" rows="5" class="col-11 mx-auto form-input-mobile"></textarea>
                        <label for="mensaje" class="col-10 label-form mb-0 ">Mensaje:</label>
                    </div>

                    <input type="submit" value="Enviar" class="col-3 mr-auto form-btn ">
                </form>
            </div>
        </div>

        <div class="col-10 mx-auto p-0">

            <div class="col-12 p-0">
                <h2 class="text-center mb-2">Llamanos</h2>
                <p class="mb-2 fuente-gris-claro text-center">Podemos ayudarte a buscar existencia y personalizar tu pedido :)</p>
                <div class="row">
                    <div class="col">
                        <p class="text-center">33 1585 8748</p>
                    </div>
                    <div class="col mr-auto">
                        <p>33 1345 8748</p>
                    </div>
                </div>

                <!-- <div class="row">
                    <img src="images/skateBoy.jpg" class="img-formulario" alt="">
                </div> -->

            </div>


        </div>




    </div>
</main>



<script>
    $(document).ready(function() {
        var itemsMainDiv = ('.MultiCarousel');
        var itemsDiv = ('.MultiCarousel-inner');
        var itemWidth = "";

        $('.leftLst, .rightLst').click(function() {
            var condition = $(this).hasClass("leftLst");
            if (condition)
                click(0, this);
            else
                click(1, this)
        });

        ResCarouselSize();




        $(window).resize(function() {
            ResCarouselSize();
        });

        //this function define the size of the items
        function ResCarouselSize() {
            var incno = 0;
            var dataItems = ("data-items");
            var itemClass = ('.item');
            var id = 0;
            var btnParentSb = '';
            var itemsSplit = '';
            var sampwidth = $(itemsMainDiv).width();
            var bodyWidth = $('body').width();
            $(itemsDiv).each(function() {
                id = id + 1;
                var itemNumbers = $(this).find(itemClass).length;
                btnParentSb = $(this).parent().attr(dataItems);
                itemsSplit = btnParentSb.split(',');
                $(this).parent().attr("id", "MultiCarousel" + id);


                if (bodyWidth >= 1200) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 992) {
                    incno = itemsSplit[2];
                    itemWidth = sampwidth / incno;
                } else if (bodyWidth >= 768) {
                    incno = itemsSplit[1];
                    itemWidth = sampwidth / incno;
                } else {
                    incno = itemsSplit[0];
                    itemWidth = sampwidth / incno;
                }
                $(this).css({
                    'transform': 'translateX(0px)',
                    'width': itemWidth * itemNumbers
                });
                $(this).find(itemClass).each(function() {
                    $(this).outerWidth(itemWidth);
                });

                $(".leftLst").addClass("over");
                $(".rightLst").removeClass("over");

            });
        }


        //this function used to move the items
        function ResCarousel(e, el, s) {
            var leftBtn = ('.leftLst');
            var rightBtn = ('.rightLst');
            var translateXval = '';
            var divStyle = $(el + ' ' + itemsDiv).css('transform');
            var values = divStyle.match(/-?[\d\.]+/g);
            var xds = Math.abs(values[4]);
            if (e == 0) {
                translateXval = parseInt(xds) - parseInt(itemWidth * s);
                $(el + ' ' + rightBtn).removeClass("over");

                if (translateXval <= itemWidth / 2) {
                    translateXval = 0;
                    $(el + ' ' + leftBtn).addClass("over");
                }
            } else if (e == 1) {
                var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
                translateXval = parseInt(xds) + parseInt(itemWidth * s);
                $(el + ' ' + leftBtn).removeClass("over");

                if (translateXval >= itemsCondition - itemWidth / 2) {
                    translateXval = itemsCondition;
                    $(el + ' ' + rightBtn).addClass("over");
                }
            }
            $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
        }

        //It is used to get some elements from btn
        function click(ell, ee) {
            var Parent = "#" + $(ee).parent().attr("id");
            var slide = $(Parent).attr("data-slide");
            ResCarousel(ell, Parent, slide);
        }

    });
</script>

@endsection