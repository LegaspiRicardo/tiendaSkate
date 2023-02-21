@extends('website.piezas.plantilla')
<link href="css/signin.css" rel="stylesheet">
@section('titulo', 'Tienda de Skate Cool')

@section('main')



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





        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Registrar Cliente
        </button>

        <!-- Modal Cliente-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center">Registrar cliente</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>
                            <div data-abide-error class="alert callout" style="display: none;">
                                <p><i class="fi-alert"></i> There are some errors in your form.</p>
                            </div>
                            <br>
                            <h5>Información personal</h5>


                            <div class="row">
                                <!-- Nombre y telefono-->
                                <div class="row">
                                    <div class="form-group col-6">
                                        <input type="text" placeholder="Nombres y apellidos" class="form-control"
                                            name="nombre">
                                        <label for="Nombre" class="helpText">Nombre completo</label>
                                    </div>

                                    <div class="form-group col-6">
                                        <input type="text" placeholder="+52 *** **** ***" class="form-control"
                                            name="Telefono">
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

                            <br>

                            <div class="row">
                                <h5>Domicilio</h5>
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


                            <div class="grid-container">
                                <div class="grid-x grid-margin-x">
                                    <fieldset class="cell large-12 text-center">
                                        <button class="button" type="submit" value="Submit">Enviar</button>
                                    </fieldset>
                                </div>
                            </div>

                        </form>
                    </div>





                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


    </main>







@endsection
