    <!-- Buttons trigger modal CLIENTES -->
 

    @extends('admin.layout.plantilla')

    @section ('titulo', 'Clientes tienda Skate')
    
    @section('main')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Empleados</h2>
        </div>


                        <h4 class="text-center txtNegro">Editar</h4>
                        <form data-abide novalidate method="POST" action="/equipoAdmin/{{ $empleado->id}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="form-group col-11 mx-auto">
                                    <div class="row">
                                        <!---------- Nombre ------------>
                                        <div class="col-6">
                                            <input type="text" placeholder="Nombre completo" class="form-control"
                                                name="nombres" value="{{ $empleado->nombres}}">
                                            <label for="nombres" class="helpText">Nombre y Apellidos</label>
                                        </div>
                                        <!---------- Marca ------------>
                                        <div class="col-6">
                                            <input type="email" class="form-control" name="correo" placeholder="@" value="{{ $empleado->correo}}" >
                                            <label for="correo" class="helpText">Correo electronico</label>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <!---------- Teléfono ------------>
                                        <div class="col-6 ">
                                            <input type="number" class="form-control" name="telefono" value="{{ $empleado->telefono}}" >
                                            <label for="telefono" class="helpText">Teléfono</label>
                                        </div>
                                        <!---------- Puesto ------------>
                                        <div class="col-6">
                                            <select name="puesto" class="custom-select form-control" id="puesto"
                                                placeholder="{{ $empleado->puesto}}">
                                             
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
                                                placeholder="{{ $empleado->estatus}}">
                                               
                                                <option value="activo" class="select-option">Activo</option>
                                                <option value="baja" class="select-option">Baja</option>
                                            </select>
                                            <label for="estatus" class="helpText">Estatus</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <button type="submit" class="btn btn-editar m-0">!</button>
                        </form>
                    </main>
                    @endsection