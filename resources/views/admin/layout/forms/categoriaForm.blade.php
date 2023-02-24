    <!-- Buttons trigger modal CATEGORIAS -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#categoriaModal">
        Registrar Categoría
    </button>



            <!-- Modal Categoria-->
            <div class="modal fade" id="categoriaModal" tabindex="-1" aria-labelledby="exampleModalLabel2"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content ">
                    <div class="modal-header text-center">
                        <h4 class="text-center txtNegro">Registrar categoria</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mr-2 ml-2 ">
                        <form data-abide novalidate>
                            <div class="row">
                                <div class="row">
                                    <div class="col-8 mx-auto text-left ">
                                        <img src="/images/miniAzul.jpg" class="img-form-registro" alt="">
                                        {{-- <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLang"
                                                lang="es">
                                            <label class="custom-file-label" for="customFileLang">Seleccionar
                                                Archivo</label>
                                        </div> --}}
                                        <label class="helpText" for="img">Seleccionar Archivo</label>
                                        <input type="text" placeholder="input img" class="form-control" name="img">
                                    </div>

                                    <!---------- Modelo ------------>
                                    <div class="col-8 mx-auto mb-0 mt-4">
                                        <label for="nombre" class="helpText ">Nombre</label>
                                        <input type="text" placeholder="Categoria" class="form-control"
                                            name="nombre">
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
