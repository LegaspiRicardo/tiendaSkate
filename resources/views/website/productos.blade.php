@extends('website.piezas.plantillaDash')

@section('titulo', 'Tienda de Skate Cool')

@section('main')
    <div class="">

        <img class="img-fondo-blog" src="images/tablas.jpg" alt="">

        <h2 class="titulo-blog text-center">Productos Radical Boards </h2>

        <div class="row">

        <div class="col-2 m-0 aside-productos">
            <section class="">
                <div class="selector-producto ">
                    <div class="selector-links text-right">
                        <button id="btn-tablas" type="button" class="btn-selector">Tablas</button>
                        <button id="btn-ropa" type="button" class="btn-selector d-inline">Ropa</button>
                        <button id="btn-tenis" type="button" class="btn-selector">Tenis</button></a>
                        <button id="btn-accesorios" type="button" class="btn-selector">Accesorios</button>
                        <button id="btn-todo" class="btn-selector ">Todo</button>
                    </div>
                </div>
            </section>

        </div>

        <div class="col-9 ml-auto">
            <main class="main-productos">

              

                @foreach ($producto as $producto)
                    <div class="product-card todo {{ $producto->categoria->nombre }}">
                        <img class="foto-producto" src="/admin/files/productos/{{ $producto->img1 }}" alt="">
                        <div class="card-info">
                            <div class="titulo-producto">
                                {{ $producto->modelo }}
                            </div>
                            <p class="info-producto">{{ $producto->descripcion }}</p>
                            <div class="comprar">
                                <p class="precio-producto">${{ $producto->precio }}</p>
                                <a class="btn btn-light mb-4" href="{{ url('/detalle') }}">Ver más</a>
                            </div>
                        </div>
                    </div>
                @endforeach



                <div class="product-card todo tenis">
                    <img class="foto-tenis-vertical" src="images/tenis/tenis1v.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tenis Nike
                        </div>
                        <p class="info-producto"> Color rojo y negro, suela blanca</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera2.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera3.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tablas">
                    <img class="foto-producto" src="images/tablas/tabla2.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tabla cuadros
                        </div>
                        <p class="info-producto"> Color blanco, baleros acero</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tenis">
                    <img class="foto-tenis-vertical" src="images/tenis/tenis2v.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tenis Nike
                        </div>
                        <p class="info-producto"> Color rojo y negro, suela blanca</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera4.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera5.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tablas">
                    <img class="foto-producto" src="images/tablas/tabla3.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tabla cuadros
                        </div>
                        <p class="info-producto"> Color blanco, baleros acero</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tenis">
                    <img class="foto-tenis-vertical" src="images/tenis/tenis3v.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tenis Nike
                        </div>
                        <p class="info-producto"> Color rojo y negro, suela blanca</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera9.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera6.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tablas">
                    <img class="foto-producto" src="images/tablas/tabla4.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tabla cuadros
                        </div>
                        <p class="info-producto"> Color blanco, baleros acero</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera7.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tenis">
                    <img class="foto-tenis-vertical" src="images/tenis/tenis4v.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tenis Nike
                        </div>
                        <p class="info-producto"> Color rojo y negro, suela blanca</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>

                </div>

                <div class="product-card todo ropa">
                    <img class="foto-producto" src="images/playeras/playera8.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Playera Negro
                        </div>
                        <p class="info-producto"> Color negro talla XL</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>


                <div class="product-card todo tablas">
                    <img class="foto-producto" src="images/tablas/tabla5.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tabla cuadros
                        </div>
                        <p class="info-producto"> Color blanco, baleros acero</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tablas">
                    <img class="foto-producto" src="images/tablas/tabla6.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tabla cuadros
                        </div>
                        <p class="info-producto"> Color blanco, baleros acero</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>

                <div class="product-card todo tenis">
                    <img class="foto-tenis-vertical" src="images/tenis/tenis5v.png" alt="">
                    <div class="card-info">
                        <div class="titulo-producto">
                            Tenis Nike
                        </div>
                        <p class="info-producto"> Color rojo y negro, suela blanca</p>
                        <div class="comprar">
                            <p class="precio-producto">$333</p>
                        </div>
                    </div>
                </div>
            </main>

        </div>

    </div>
    </div>
@endsection
