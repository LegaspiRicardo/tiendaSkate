    <!-- Buttons trigger modal PRODUCTOS -->
    <button type="button" class="btn-registro" data-toggle="modal" data-target="#productoModal">
        +
    </button>



    <!-- Modal Producto-->
    <div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content ">
                <div class="modal-header text-center">
                    <h4 class="text-center ml-auto txtNegro">Registrar producto </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mr-2 ml-2 ">
                    <form data-abide novalidate method="POST" action="/productoAdmin" enctype="multipart/form-data">
                          @csrf
                        <div class="row">

                            <div class="col-5 text-center imagenes-form">

                                <div class="row carrusel-noticias">
                                    <div id="carouselExampleIndicators" class="carousel slide col-12 mx-auto" data-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="col imagen-formulario">
                                                    <img src="/PNGs/image.png" id="preview1" src="#" alt="Preview Image" class="img-form-registro mt-2">
                                                </div>
                                                <div class="col">
                                                    <input type="file" data-preview-id="preview1" data-position="1" class="form-control btn-input-img" name="img1" accept="image/*" required>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="col imagen-formulario">
                                                    <img src="/PNGs/image.png" id="preview2" src="#" alt="Preview Image" class="img-form-registro mt-2">
                                                </div>
                                                <div class="col">
                                                    <input type="file"  data-preview-id="preview2" data-position="2" class="form-control btn-input-img" name="img2" accept="image/*" required>
                                                </div>

                                            </div>

                                            <div class="carousel-item">
                                                <div class="col imagen-formulario">
                                                    <img src="/PNGs/image.png" id="preview3" src="#" alt="Preview Image" class="img-form-registro mt-2">
                                                </div>
                                                <div class="col">
                                                    <input type="file" data-preview-id="preview3" data-position="3" class="form-control btn-input-img" name="img3" accept="image/*" required>
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
                                        <input type="text" placeholder="Código completo" class="form-control" name="modelo">
                                        <label for="modelo" class="helpText">Modelo</label>
                                    </div>
                                    <!---------- Marca ------------>
                                    <div class="col-6">
                                        <select name="marca" class="custom-select form-control" id="marca" placeholder="Selecciona">
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
                                    <!---------- Categoría ------------>
                                    <div class="col-6">
                                        <select name="categoria" class="custom-select form-control" id="categoria" placeholder="Selecciona">
                                            <option value="" class="select-option" selected hidden>Selecciona
                                            </option>
                                            <option value="Tablas" class="select-option">Tablas</option>
                                            <option value="Tenis" class="select-option">Tenis</option>
                                            <option value="Scooter" class="select-option">Scooter</option>
                                            <option value="Ropa" class="select-option">Ropa</option>
                                        </select>
                                        <label for="categoria" class="helpText">Categoría</label>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <!---------- Tamaño ------------>
                                    <div class="col-6 mr-auto">
                                        <select name="tamano" class="custom-select form-control" id="tamano" placeholder="Selecciona">
                                            <option value="" class="select-option" selected hidden>Selecciona
                                            </option>
                                            <option value="XS" class="select-option">XS</option>
                                            <option value="S" class="select-option">S</option>
                                            <option value="M" class="select-option">M</option>
                                            <option value="LG" class="select-option">LG</option>
                                            <option value="XLG" class="select-option">XLG</option>
                                        </select>
                                        <label for="tamano" class="helpText">Tamaño</label>
                                    </div>

                                    <!---------- Precio ------------>
                                    <div class="col-6 ml-auto">
                                        <input type="text" placeholder="$ 00.00" class="form-control" name="precio">
                                        <label for="precio" class="helpText">Precio</label>
                                    </div>
                                </div>


                                <div class="col-3 mx-auto mt-2">
                                    <input type="color" class="form-control" name="color">
                                    <label for="color" class="helpText">Color</label>
                                </div>
                            </div>


                            <div class="col-10 mx-auto mt-4">
                                <textarea class="form-control" name="descripcion" rows="3"></textarea>
                                <label for="descripcion" class="helpText">Descripción</label>

                            </div>
                            <br>
                        </div> 
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-guardar m-0">+</button>
                    </div>
                    </form>
                </div>
            
            </div>
        </div>
    </div>



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