    <!-- Buttons trigger modal CLIENTES -->
    <button type="button" class="btn-registro" data-toggle="modal" data-target="#clienteModal">
        +
    </button>


    
        <!-- Modal Cliente-->
        <div class="modal fade" id="clienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar nuevo</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form data-abide novalidate method="POST" action="/clienteAdmin" enctype="multipart/form-data">
                            @csrf
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
                            
                            
                                              
                                                    <button type="submit" class="btn btn-guardar m-0">+</button>
                        </form>
                    </div>





                </div>
            </div>
        </div>

