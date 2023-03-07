    <!-- Buttons trigger modal EMPLEADOS -->
    <button type="button" class="btn btn-registro" data-toggle="modal" data-target="#empleadoModal">
        +   
    </button>

    
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
                        <form data-abide novalidate method="POST" action="/equipoAdmin" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-11 mx-auto">
                                    <div class="row">
                                        <div class="col-6">
                                            <input type="file"  class="form-control" name="img">
                                            <label for="img" class="helpText">Selecione su imagen</label>
                                        </div>
                                        <!---------- Nombre ------------>
                                        <div class="col-6">
                                            <input type="text" placeholder="Nombre completo" class="form-control"
                                                name="nombres">
                                            <label for="nombres" class="helpText">Nombre y Apellidos</label>
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
                                            <input type="number" class="form-control" name="telefono">
                                            <label for="telefono" class="helpText">Teléfono</label>
                                        </div>
                                        <!---------- Puesto ------------>
                                        <div class="col-6">
                                            <select name="puesto" class="custom-select form-control" id="puesto"
                                                placeholder="Selecciona">
                                                <option value="" class="select-option" selected hidden>Selecciona
                                                </option>
                                                <option value="ventas" id="ventas" class="select-option">Ventas</option>
                                                <option value="administrador" id="administrador" class="select-option">Administrador</option>
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
                                                <option value="activo" class="select-option">Activo</option>
                                                <option value="baja" class="select-option">Baja</option>
                                            </select>
                                            <label for="estatus" class="helpText">Estatus</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <button type="submit" class="btn btn-guardar m-0">+</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>