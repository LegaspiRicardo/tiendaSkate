 

    @extends('admin.layout.plantilla')

    @section ('titulo', 'Clientes tienda Skate')
    
    @section('main')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Productos</h2>
        </div>


                        <h4 class="text-center txtNegro">Editar</h4>

                    <form data-abide novalidate method="POST" action="/productoAdmin/{{ $producto->id}}"" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <div class="row">

                            <div class="col-5 text-center imagenes-form">

                                <div class="row carrusel-noticias">
                                    <div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto" data-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="col imagen-formulario">
                                                    <img src="/admin/files/productos/{{ $producto->img1 }}" id="preview1" src="#" alt="Preview Image" class="img-form-registro mt-2">
                                                </div>
                                                
                                            </div>

                                            <div class="carousel-item">
                                                <div class="col imagen-formulario">
                                                    <img src="/admin/files/productos/{{ $producto->img2 }}" id="preview2" src="#" alt="Preview Image" class="img-form-registro mt-2">
                                                </div>
                                             

                                            </div>

                                            <div class="carousel-item">
                                                <div class="col imagen-formulario">
                                                    <img src="/admin/files/productos/{{ $producto->img3 }}" id="preview3" src="#" alt="Preview Image" class="img-form-registro mt-2">
                                                </div>
                                              

                                            </div>


                                        </div>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>





                            <div class="form-group col-7 ml-auto">
                                <div class="row">
                                    <!---------- Modelo ------------>
                                    <div class="col-6">
                                        <input type="text" placeholder="Código completo" class="form-control" name="modelo" value="{{ $producto->modelo }}" readonly>
                                        <label for="modelo" class="helpText">Modelo</label>
                                    </div>
                                    <!---------- Marca ------------>
                                    <div class="col-6">
                                        <input type="text" name="marca"
                                        id="marca" placeholder="{{ $producto->marca }}" readonly>
                                        
                                        <label for="marca" class="helpText">Marca</label>
                                    </div>
                                </div>
                                <br>

                                <div class="row">
                                    <!---------- Material ------------>
                                    <div class="col-6 ">
                                        <input type="text" class="form-control" name="material" value="{{ $producto->material }}" readonly>
                                        <label for="material" class="helpText">Material</label>
                                    </div>
                                    <!---------- Categoría ------------>
                                    <div class="col-6">
                                        <input type="text" name="categoria" id="categoria" placeholder="{{ $producto->categoria }}" readonly>
                                        
                                        <label for="categoria" class="helpText">Categoría</label>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <!---------- Tamaño ------------>
                                    <div class="col-6 mr-auto">
                                        <input type="text" name="tamano" id="tamano" placeholder="{{ $producto->tamano }}" readonly>
                                        
                                        <label for="tamano" class="helpText">Tamaño</label>
                                    </div>

                                    <!---------- Precio ------------>
                                    <div class="col-6 ml-auto">
                                        <input type="number" placeholder="$ 00.00" class="form-control" name="precio" value="{{ $producto->precio }}" readonly>
                                        <label for="precio" class="helpText">Precio</label>
                                    </div>
                                      <!---------- Precio ------------>
                                      <div class="col-6 ml-auto">
                                        <input type="cantidad" class="form-control" name="cantidad" value="{{ $producto->cantidad }}" readonly>
                                        <label for="cantidad" class="helpText">Cantidad</label>
                                    </div>
                                    <div class="col-6 ml-auto">
                                        <input type="text" name="estatus" id="estatus" placeholder="{{ $producto->estatus }}" readonly>
                                

                                        <label for="estatus" class="helpText">Estatus</label>
                                    </div>
                                    
                                </div>


                                <div class="col-3 mx-auto mt-2">
                                    <input type="color" class="form-control" name="color" value="{{ $producto->color }}" readonly>
                                    <label for="color" class="helpText">Color</label>
                                </div>
                            </div>


                            <div class="col-10 mx-auto mt-4">
                                <textarea class="form-control" name="descripcion" rows="3" placeholder="{{ $producto->descripcion }} "readonly></textarea>
                                <label for="descripcion" class="helpText">Descripción</label>

                            </div>
                            <br>
                        </div> 
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-borrar m-0">-</button>
                    </div>
                    </form>
                </main>
                @endsection



    <script>
        function previewImage() {
            var input = this;
            var file = input.files[0];
            var position = input.dataset.position;
            var previewId = "preview" + position;
            var preview = document.getElementById(previewId);
            var reader = new FileReader();

            reader.addEventListener("load", function() {
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }

        var inputs = document.getElementsByClassName('btn-input-img');

        for (var i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('change', previewImage, false);
        }
    </script>