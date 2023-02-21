@extends('website.piezas.plantilla')
<link href="css/signin.css" rel="stylesheet">
@section('titulo', 'Tienda de Skate Cool')

@section('main')

<!-- Buttons trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#clienteModal">
    Registrar Cliente
</button>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productoModal">
    Registrar Producto
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
                <div class="modal-body mr-2 ml-2 ">
                    <form data-abide novalidate>
                        <div data-abide-error class="alert callout" style="display: none;">
                            <p><i class="fi-alert"></i> There are some errors in your form.</p>
                        </div>
                        <h5 class="txtNegro">Información personal</h5>
                        <div class="row">
                            <!-- Nombre y telefono-->
                            <div class="row">
                                <div class="form-group col-6">
                                    <input type="text" placeholder="Nombres y apellidos" class="form-control" name="nombre">
                                    <label for="Nombre" class="helpText">Nombre completo</label>
                                </div>

                                <div class="form-group col-6">
                                    <input type="text" placeholder="+52 *** **** ***" class="form-control" name="Telefono">
                                    <label for="Telefono" class="helpText">Telefono / celular</label>
                                </div>
                            </div>
                            <!-- Correo electronico y contraseña-->
                            <div class="row">
                                <div class="form-group col-6">
                                    <input type="email" class="form-control" id="Email" placeholder="@">
                                    <label for="Email" class="helpText">Correo electronico</label>
                                </div>

                                <div class="form-group col-3">
                                    <input type="password" class="form-control" id="Clave" placeholder="******">
                                    <label for="Clave" class="helpText">Contraseña</label>
                                </div>

                                <div class="form-group col-3">
                                    <input type="password" class="form-control" id="Clave1" placeholder="******">
                                    <label for="Clave1" class="helpText">Confirmar contraseña</label>
                                </div>
                            </div>
                        </div>

                        <h5 class="txtNegro">Domicilio</h5>
                        <div class="row">
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
    <div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                            <div class="col-5 text-center">
                                <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                            </div>



                            <div class="form-group col-7 ml-auto">
                                <div class="row">
                                    <!---------- Modelo ------------>
                                    <div class="col-6">
                                        <input type="text" placeholder="Código completo" class="form-control" name="modelo">
                                        <label for="modelo" class="helpText">Modelo</label>
                                    </div>
                                    <!---------- Marca ------------>
                                    <div class="col-6">
                                        <select name="marca" class="custom-select form-control" id="marca" placeholder="Selecciona">
                                            <option value="" class="select-option" selected hidden>Selecciona</option>
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
                                        <select name="tamano" class="custom-select form-control" id="tamano" placeholder="Selecciona">
                                            <option value="" class="select-option" selected hidden>Selecciona</option>
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
                                        <input type="text" placeholder="$ 00.00" class="form-control" name="precio">
                                        <label for="precio" class="helpText">Precio</label>
                                    </div>
                                </div>


                            </div>


                                    <div class="col-10 mx-auto">
                                        <input type="text" class="form-control input-descripcion" name="descripcion">
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





</main>







@endsection