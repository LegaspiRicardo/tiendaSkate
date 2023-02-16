@extends('admin.plantilla.plantilla')

@section ('titulo', 'Inventario tienda Skate')

@section('main')

<div class="off-canvas-content" data-off-canvas-content>
    @section('inventarioCategoria','Productos ')

    <!-- ---BOTON PARA MOSTRAR MODAL DE REGISTRO ------->
    <p><button class="button registroProducto" data-open="registroProducto">+</button></p>
    <!-- ---MODAL PARA REGISTRAR CLIENTE ------->
    <div class="reveal" id="registroProducto" data-reveal>
        <form data-abide novalidate>
            <div data-abide-error class="alert callout" style="display: none;">
                <p><i class="fi-alert"></i> There are some errors in your form.</p>
            </div>
            <div class="grid-container">
                <h4 class="text-center">Registrar producto</h4>
                <br>


                <div class="grid-x grid-margin-x align-spaced">

                    <div class="cell small-3">
                        <label>
                            <input type="text" placeholder="Nombres y apellidos" id="nombreHelpText" name="nombre">
                        </label>
                        <p class="help-text" id="nombreHelpText">Nombre completo </p>
                    </div>

                    <div class="cell small-7 ">
                        <div class="grid-x grid-margin-x">
                            <!---------- Modelo ------------>
                            <div class="cell small-7 ">
                                <label>
                                    <input type="text" placeholder="Código completo" id="modeloHelpText" name="modelo">
                                </label>
                                <p class="help-text" id="modeloHelpText">Modelo </p>
                            </div>
                            <!---------- Marca ------------>
                            <div class="cell small-5">
                                <label>
                                    <input type="text" placeholder="select" id="marcaHelpText" name="marca">
                                </label>
                                <p class="help-text" id="marcaHelpText">Marca</p>
                            </div>
                            <!---------- Material ------------>
                            <div class="cell small-3 ">
                                <label>
                                    <input type="text" placeholder="select" id="materialHelpText" name="material">
                                </label>
                                <p class="help-text" id="materialHelpText">Material</p>
                            </div>
                            <!---------- Color ------------>
                            <div class="cell small-3 ">
                                <label>
                                    <input type="color" name="color" id="colorHelpText">
                                </label>
                                <p class="help-text" id="colorHelpText">Color</p>
                            </div>
                            <!---------- Precio ------------>
                            <div class="cell small-5">
                                <label>
                                    <input type="text" placeholder="$ 00.00">
                                </label>
                                <p class="help-text" id="precio">Precio</p>
                            </div>



                        </div>
                    </div>




                </div>






                <br>
            </div>





            <div class="grid-container">
                <div class="grid-x grid-margin-x">
                    <fieldset class="cell large-12 text-center">
                        <button class="button" type="submit" value="Submit">Enviar</button>
                    </fieldset>
                </div>
            </div>

        </form>
    </div>



    <!--------  TABLA ----------->


    <div class="media-object align-center">

        <div class="media-object-section">
            <table class="hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Calle</th>
                        <th>Numero</th>
                        <th>Colonia</th>
                        <th>Codigo Postal</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>Content Goes Here</td>
                        <td>This is longer content D.</td>
                        <td>33 5847 8745</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                    <tr>
                        <td>Content Goes Here</td>
                        <td>This ismetus.</td>
                        <td>33 7848 5487</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                    <tr>
                        <td>Content Goes Here</td>
                        <td>Tet metus.</td>
                        <td>33 5986 5487</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                    <tr>
                        <td>Content Goes Here</td>
                        <td>Tet metus.</td>
                        <td>33 5986 5487</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                    <tr>
                        <td>Content Goes Here</td>
                        <td>Tet metus.</td>
                        <td>33 5986 5487</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                    <tr>
                        <td>Content Goes Here</td>
                        <td>Tet metus.</td>
                        <td>33 5986 5487</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                    <tr>
                        <td>Content Goes Here</td>
                        <td>Tet metus.</td>
                        <td>33 5986 5487</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                    <tr>
                        <td>Content Goes Here</td>
                        <td>Tet metus.</td>
                        <td>33 5986 5487</td>
                        <td>Content Goes Here</td>
                        <td>4578</td>
                        <td>Content Goes Here</td>
                        <td>44875</td>
                    </tr>
                </tbody>
            </table>
        </div>



    </div>













    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();
    </script>

    @endsection