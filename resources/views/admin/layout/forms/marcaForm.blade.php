    <!-- Buttons trigger modal CARRUSEL MARCAS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#carruselMarcasModal">
        Registrar marca
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
