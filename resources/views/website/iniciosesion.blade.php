@extends('website.piezas.plantilla')
<link href="css/signin.css" rel="stylesheet">
<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
@section('titulo', 'Tienda de Skate Cool')

@section('main')

    <!-- Buttons trigger modal CLIENTES -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clienteModal">
        Registrar Cliente
    </button>
    <!-- Buttons trigger modal PRODUCTOS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productoModal">
        Registrar Producto
    </button>
    <!-- Buttons trigger modal CATEGORIAS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoriaModal">
        Registrar Categoría
    </button>
    <!-- Buttons trigger modal EMPLEADOS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#empleadoModal">
        Registrar Empleado
    </button>
    <!-- Buttons trigger modal NOTAS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#notaModal">
        Registrar Nota
    </button>
    <!-- Buttons trigger modal EVENTOS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eventoModal">
        Registrar Evento
    </button>
    <!-- Buttons trigger modal CARRUSEL NOTICIAS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#carruselNoticiasModal">
        Registrar noticia
    </button>
    <!-- Buttons trigger modal CARRUSEL MARCAS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#carruselMarcasModal">
        Registrar marca
    </button>





    <main class="main-cuenta">
        <img src="/images/grafiti1.jpg" alt="" class="imagen-login-fondo">

        <div class="caja-inicio-sesion">
            <div class="caja-foto">
                <div class="caja-formulario-cuenta">

                    <h2 class="titulo"> Inicia sesión</h2>
                    <div class="flex-column">
                        <label class="label-formulario" for="correo">Correo:</label>
                        <input class="input-formulario" id="correo" type="email" name="correo">

                    </div>
                    <div class="flex-column">
                        <label class="label-formulario" for="contraseña">Contraseña:</label>
                        <input class="input-formulario" id="contraseña" type="password" name="contraseña">

                    </div>


                    <div class="botones-cuenta botones-cuenta-sesion">
                        <button class="btn-acceder ">Acceder</button>
                        <br>
                        <a href="{{ url('crearcuenta') }}">¿No tienes cuenta? Crea una aquí</a>
                    </div>


                </div>



            </div>
        </div>







        <!-- Modal Cliente-->
        <div class="modal fade" id="clienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar cliente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form data-abide novalidate>
                            <h5 class="txtNegro">Información personal</h5>
                            <div class="row  mx-auto">
                                <!-- Nombre y telefono-->
                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="text" placeholder="Nombres y apellidos" class="form-control"
                                            name="nombre">
                                        <label for="Nombre" class="helpText">Nombre completo</label>
                                    </div>
                                    <div class="form-group col-6">
                                        <input type="text" placeholder="+52 *** **** ***" class="form-control"
                                            name="telefono">
                                        <label for="Telefono" class="helpText">Telefono / celular</label>
                                    </div>
                                </div>
                                <!-- Correo electronico y contraseña-->
                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="email" class="form-control" id="Email" placeholder="@"
                                            name="correo">
                                        <label for="Email" class="helpText">Correo electronico</label>
                                    </div>
                                    <div class="form-group col-3">
                                        <input type="password" class="form-control" id="Clave" placeholder="******"
                                            name="clave">
                                        <label for="Clave" class="helpText">Contraseña</label>
                                    </div>
                                    <div class="form-group col-3">
                                        <input type="password" class="form-control" id="Clave1" placeholder="******">
                                        <label for="Clave1" class="helpText">Confirmar contraseña</label>
                                    </div>
                                </div>
                            </div>

                            <h5 class="txtNegro">Domicilio</h5>
                            <div class="row mx-auto">
                                <!-- Calle y  número-->
                                <div class="row">
                                    <div class="form-group col-7">
                                        <input type="text" class="form-control" id="calle" name="calle">
                                        <label for="calle" class="helpText">Calle</label>
                                    </div>
                                    <div class="form-group col-5 ">
                                        <input type="text" class="form-control" id="numero" name="numero">
                                        <label for="numero" class="helpText">Número</label>
                                    </div>
                                </div>
                                <!-- Colonia y codigo postal  -->
                                <div class="row">
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="colonia" name="colonia">
                                        <label for="colonia" class="helpText">Colonia</label>
                                    </div>
                                    <div class="col-5">
                                        <input type="text" class="form-control" id="cp" name="cp">
                                        <label for="colonia" class="helpText">Código Postal</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>





                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>


                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Producto-->
        <div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="exampleModalLabel1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar producto</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>
                            <div class="row">

                                <div class="col-5 text-left">
                                    <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                    {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="es"> 
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div> --}}
                                    <input type="text" placeholder="input img" class="form-control" name="img">
                                    <label class="helpText " for="img">Seleccionar Archivo</label>
                                </div>

                                <div class="form-group col-7 ml-auto">
                                    <div class="row">
                                        <!---------- Modelo ------------>
                                        <div class="col-6">
                                            <input type="text" placeholder="Código completo" class="form-control"
                                                name="modelo">
                                            <label for="modelo" class="helpText">Modelo</label>
                                        </div>
                                        <!---------- Marca ------------>
                                        <div class="col-6">
                                            <select name="marca" class="custom-select form-control" id="marca"
                                                placeholder="Selecciona">
                                                <option value="" class="select-option" selected hidden>Selecciona
                                                </option>
                                                <option value="" class="select-option">Volcom</option>
                                                <option value="" class="select-option">Antifashion</option>
                                                <option value="" class="select-option">DC</option>
                                            </select>
                                            <label for="marca" class="helpText">Marca</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <!---------- Material ------------>
                                        <div class="col-6 ">
                                            <input type="text" class="form-control" name="material">
                                            <label for="material" class="helpText">Material</label>
                                        </div>
                                        <!---------- Tamaño ------------>
                                        <div class="col-6">
                                            <select name="tamano" class="custom-select form-control" id="tamano"
                                                placeholder="Selecciona">
                                                <option value="" class="select-option" selected hidden>Selecciona
                                                </option>
                                                <option value="" class="select-option">XS</option>
                                                <option value="" class="select-option">S</option>
                                                <option value="" class="select-option">M</option>
                                                <option value="" class="select-option">LG</option>
                                                <option value="" class="select-option">XLG</option>
                                            </select>
                                            <label for="tamano" class="helpText">Tamaño</label>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <!---------- Color ------------>
                                        <div class="col-3 mx-auto">
                                            <input type="color" class="form-control" name="color">
                                            <label for="color" class="helpText">Color</label>
                                        </div>
                                        <!---------- Precio ------------>
                                        <div class="col-6 ml-auto">
                                            <input type="text" placeholder="$ 00.00" class="form-control"
                                                name="precio">
                                            <label for="precio" class="helpText">Precio</label>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-10 mx-auto mt-4">
                                    <textarea class="form-control" name="descripcion" rows="3"></textarea>
                                    <label for="descripcion" class="helpText">Descripción</label>

                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Categoria-->
        <div class="modal fade" id="categoriaModal" tabindex="-1" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar categoria</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>
                            <div class="row">
                                <div class="row">
                                    <div class="col-8 mx-auto text-left ">
                                        <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                        {{-- <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLang"
                                                lang="es">
                                            <label class="custom-file-label" for="customFileLang">Seleccionar
                                                Archivo</label>
                                        </div> --}}
                                        <label class="helpText" for="img">Seleccionar Archivo</label>
                                        <input type="text" placeholder="input img" class="form-control" name="img">
                                    </div>

                                    <!---------- Modelo ------------>
                                    <div class="col-8 mx-auto mb-0 mt-4">
                                        <label for="nombre" class="helpText ">Nombre</label>
                                        <input type="text" placeholder="Categoria" class="form-control"
                                            name="nombre">
                                    </div>
                                </div>

                            </div>


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Empleado-->
        <div class="modal fade" id="empleadoModal" tabindex="-1" aria-labelledby="exampleModalLabel3"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar Empleado</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0 mt-4 ">
                        <form data-abide novalidate>
                            <div class="row">
                                <div class="form-group col-11 mx-auto">
                                    <div class="row">
                                        <!---------- Nombre ------------>
                                        <div class="col-6">
                                            <input type="text" placeholder="Nombre completo" class="form-control"
                                                name="nombres">
                                            <label for="nombres" class="helpText">Nombre</label>
                                        </div>
                                        <!---------- Marca ------------>
                                        <div class="col-6">
                                            <input type="email" class="form-control" name="correo" placeholder="@">
                                            <label for="correo" class="helpText">Correo electronico</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <!---------- Teléfono ------------>
                                        <div class="col-6 ">
                                            <input type="text" class="form-control" name="telefono">
                                            <label for="telefono" class="helpText">Teléfono</label>
                                        </div>
                                        <!---------- Puesto ------------>
                                        <div class="col-6">
                                            <select name="puesto" class="custom-select form-control" id="puesto"
                                                placeholder="Selecciona">
                                                <option value="" class="select-option" selected hidden>Selecciona
                                                </option>
                                                <option value="" class="select-option">Ventas</option>
                                                <option value="" class="select-option">Administrador</option>
                                            </select>
                                            <label for="puesto" class="helpText">Puesto</label>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <!---------- Estatus ------------>
                                        <div class="col-3 mx-auto">
                                            <select name="estatus" class="custom-select form-control" id="estatus"
                                                placeholder="Selecciona">
                                                <option value="" class="select-option" selected hidden>Selecciona
                                                </option>
                                                <option value="" class="select-option">Activo</option>
                                                <option value="" class="select-option">Baja</option>
                                            </select>
                                            <label for="estatus" class="helpText">Estatus</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Nota-->
        <div class="modal fade" id="notaModal" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar nota</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>


                            <div class="row">
                                <div class="col-8 mx-auto text-left mb-3">
                                    <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                    {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang"
                                            lang="es">
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div> --}}
                                    <input type="text" placeholder="input img" class="form-control" name="img">
                                    <label class="helpText " for="img">Seleccionar Archivo</label>
                                </div>

                                <div class=" col-10 mx-auto mb-0">
                                    <div class="row mb-3">
                                        <!---------- Titulo ------------>
                                        <div class="col mx-auto mb-0">
                                            <label for="titulo" class="helpText ">Titulo</label>
                                            <input type="text" class="form-control" name="titulo">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!---------- Descripción ------------>
                                        <div class="col mx-auto mb-0">
                                            <label for="texto" class="helpText ">Descripción</label>
                                            <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <br>

                                </div>
                                <br>
                            </div>



                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Evento-->
        <div class="modal fade" id="eventoModal" tabindex="-1" aria-labelledby="exampleModalLabel5"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar evento</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>
                            <div class="row">
                                <div class="col-8 mx-auto text-center mb-3">
                                    <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                    {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang"
                                            lang="es">
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div> --}}
                                    <input type="text" placeholder="input img" class="form-control" name="img">
                                    <label class="helpText " for="img">Seleccionar Archivo</label>
                                </div>

                                <div class="form-group col-10 mx-auto mb-0">
                                    <div class="row mb-3">
                                        <!---------- Titulo ------------>
                                        <div class="col-6  ">
                                            <label for="titulo" class="helpText mb-0">Titulo</label>
                                            <input type="text" class="form-control" name="titulo">
                                        </div>
                                        <!---------- boton ------------>
                                        <div class="col-6  ">
                                            <label for="boton" class="helpText mb-0">Botón</label>
                                            <input type="text" class="form-control" name="boton">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!---------- Descripción ------------>
                                        <div class="col-12 mx-auto mb-0">
                                            <label for="texto" class="helpText mb-0">Descripción</label>
                                            <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <br>

                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Noticia-->
        <div class="modal fade" id="carruselNoticiasModal" tabindex="-1" aria-labelledby="exampleModalLabel6"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar noticia</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>
                            <div class="row">
                                <div class="col-8 mx-auto text-center mb-3">
                                    <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                    {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang"
                                            lang="es">
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div> --}}
                                    <input type="text" placeholder="input img" class="form-control" name="img">
                                    <label class="helpText " for="img">Seleccionar Archivo</label>
                                </div>

                                <div class="form-group col-10 mx-auto mb-0">
                                    <div class="row mb-3">
                                        <!---------- Titulo ------------>
                                        <div class="col-6  ">
                                            <label for="titulo" class="helpText ">Titulo</label>
                                            <input type="text" class="form-control" name="titulo">
                                        </div>
                                        <!---------- boton ------------>
                                        <div class="col-6  ">
                                            <label for="boton" class="helpText ">Botón</label>
                                            <input type="text" class="form-control" name="boton">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!---------- Descripción ------------>
                                        <div class="col-12 mx-auto mb-0">
                                            <label for="texto" class="helpText mb-0">Descripción</label>
                                            <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <br>

                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Marca-->
        <div class="modal fade" id="carruselMarcasModal" tabindex="-1" aria-labelledby="exampleModalLabel7"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar marca</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>
                            <div class="row">
                                <div class="col-6 mr-auto text-center ">
                                    <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                    {{-- <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang"
                                            lang="es">
                                        <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                    </div> --}}
                                    <input type="text" placeholder="input img" class="form-control" name="img">
                                    <label class="helpText " for="img">Seleccionar Archivo</label>
                                </div>
                                <div class="col-6 ml-auto  ">
                                    <input type="text" class="form-control" name="nombre">
                                    <label for="nombre" class="helpText mb-4">Titulo</label>

                                    <textarea class="form-control" id="texto" rows="5" name="texto"></textarea>
                                    <label for="texto" class="helpText">Descripción</label>
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-guardar m-0">+</button>
                    </div>
                </div>
            </div>
        </div>

    </main>







@endsection
