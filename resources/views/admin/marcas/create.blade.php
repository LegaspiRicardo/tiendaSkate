    <!-- Buttons trigger modal CARRUSEL MARCAS -->
    <button type="button" class="btn btn-registro" data-toggle="modal" data-target="#carruselMarcasModal">
        +
    </button>


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
                        <form data-abide novalidate="POST" action="/marcasAdmin" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6 mr-auto text-center ">
                                        <div class="col imagen-formulario-chiquita">
                                            <img src="/PNGs/image.png" id="preview1" src="#" alt="Preview Image" class="img-form-registro mt-2">
                                        </div>
                                        <div class="col">
                                            <input type="file" data-preview-id="preview1" data-position="1" class="form-control btn-input-img" name="imagen" accept="image/*" required>
                                        </div>
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