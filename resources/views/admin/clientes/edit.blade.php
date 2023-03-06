    <!-- Buttons trigger modal CLIENTES -->
 

        @extends('admin.layout.plantilla')

        @section ('titulo', 'Clientes tienda Skate')
        
        @section('main')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="h2">Clientes</h2>
            </div>
        
   
         


    

                            <h4 class="text-center txtNegro">Editar</h4>
                   
                            <form data-abide novalidate method="POST" action="/clienteAdmin/{{ $cliente->id}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <h5 class="txtNegro">Información personal</h5>
                                <div class="row  mx-auto">
                                    <!-- Nombre y telefono-->
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <input type="text" placeholder="Nombres y apellidos" class="form-control"
                                                name="nombre" value="{{$cliente->nombre}}">
                                            <label for="Nombre" class="helpText">Nombre completo</label>
                                        </div>
                                        <div class="form-group col-6">
                                            <input type="text" placeholder="+52 *** **** ***" class="form-control"
                                                name="telefono" value="{{$cliente->telefono}}">
                                            <label for="Telefono" class="helpText">Telefono / celular</label>
                                        </div>
                                    </div>
                                    <!-- Correo electronico y contraseña-->
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <input type="email" class="form-control" id="Email" placeholder="@"
                                                name="correo" value="{{$cliente->correo}}">
                                            <label for="Email" class="helpText">Correo electronico</label>
                                        </div>
                                        <div class="form-group col-3">
                                            <input type="password" class="form-control" id="Clave" placeholder="******"
                                                name="clave" value="{{$cliente->clave}}">
                                            <label for="Clave" class="helpText">Contraseña</label>
                                        </div>
                                      
                                    </div>
                                </div>

                                <h5 class="txtNegro">Domicilio</h5>
                                <div class="row mx-auto">
                                    <!-- Calle y  número-->
                                    <div class="row">
                                        <div class="form-group col-7">
                                            <input type="text" class="form-control" id="calle" name="calle" value="{{$cliente->calle}}">
                                            <label for="calle" class="helpText">Calle</label>
                                        </div>
                                        <div class="form-group col-5 ">
                                            <input type="text" class="form-control" id="numero" name="numero" value="{{$cliente->numero}}">
                                            <label for="numero" class="helpText">Número</label>
                                        </div>
                                    </div>
                                    <!-- Colonia y codigo postal  -->
                                    <div class="row">
                                        <div class="col-7">
                                            <input type="text" class="form-control" id="colonia" name="colonia" value="{{$cliente->colonia}}">
                                            <label for="colonia" class="helpText">Colonia</label>
                                        </div>
                                        <div class="col-5">
                                            <input type="text" class="form-control" id="cp" name="cp" value="{{$cliente->cp}}">
                                            <label for="colonia" class="helpText">Código Postal</label>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                                
                                                        <button type="submit" class="btn btn-editar m-0">!</button>
                            </form>
                  

       
        
        
        
        
        </main>
        @endsection
        