    @extends('admin.layout.plantilla')

    @section('titulo', 'Marcas Disponibles')

    @section('main')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="h2">Editar marca</h2>
            </div>




            <form data-abide novalidate method="POST" action="/marcasAdmin/{{ $marca->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6 mr-auto text-center ">
                        <div class="col imagen-formulario-chiquita">
                            <img src="/admin/files/marcas/{{ $marca->imagen }}" id="preview2" src="#" alt="Preview Image" class="img-form-actualizar mt-2">
                        </div>
                        <div class="col">
                            <input type="file" data-preview-id="preview1" data-position="1"
                                class="form-control btn-input-img" name="imagen" accept="image/*" required>
                        </div>
                        <label class="helpText " for="img">Seleccionar Archivo</label>
                    </div>
                    <div class="col-6 ml-auto  ">
                        <input type="text" class="form-control" name="nombre" value="{{ $marca->nombre }}">
                        <label for="nombre" class="helpText mb-4">Titulo</label>

                        <textarea class="form-control" id="texto" rows="5" name="texto" value="{{ $marca->texto }}" placeholder=""> {{$marca->texto}} </textarea>
                        <label for="texto" class="helpText">Descripción</label>
                    </div>
                    <br>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn mx-auto btn-editar m-0">Editar Marca</button>
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
