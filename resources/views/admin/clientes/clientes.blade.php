@extends('admin.plantilla.plantilla')

@section ('titulo', 'Clientes tienda Skate')

@section('main')

<div class="off-canvas-content" data-off-canvas-content>
  @section('inventarioCategoria','Clientes ')

  <!-- ---BOTON PARA MOSTRAR MODAL DE REGISTRO ------->
  <p ><button class="button registroClienteButon" data-open="registroClienteModal">+</button></p>
  <!-- ---MODAL PARA REGISTRAR CLIENTE ------->
  <div class="reveal" id="registroClienteModal" data-reveal>
    <form data-abide novalidate >
      <div data-abide-error class="alert callout" style="display: none;">
        <p><i class="fi-alert"></i> There are some errors in your form.</p>
      </div>
      <div class="grid-container">
        <h4 class="text-center">Registrar cliente</h4>
        <br>
        <h5>Información personal</h5>
        <div class="grid-x grid-margin-x">
          <div class="cell small-7 ">
            <label>
              <input type="text" placeholder="Nombres y apellidos" id="nombreHelpText" name="nombre">
            </label>
            <p class="help-text" id="nombreHelpText">Nombre completo </p>
          </div>

          <div class="cell small-5">
            <label>
              <input type="text" placeholder="+52 *** **** ***" id="telefonoHelpText" name="telefono">
            </label>
            <p class="help-text" id="telefonoHelpText">Teléfono / celular</p>
          </div>


          <div class="cell small-6 ">
            <label>
              <input type="text" placeholder="@" id="correoHelpText" name="correo">
            </label>
            <p class="help-text" id="correoHelpText">Correo electronico</p>
          </div>


          <div class="cell small-3">
            <label>
              <input type="password" id="password" name="clave" placeholder="******" aria-describedby="example1Hint2" aria-errormessage="example1Error2" required>
              <span class="form-error">
                I'm required!
              </span>
            </label>
            <p class="help-text" id="password">Contraseña</p>
          </div>
          <div class="cell small-3">
            <label>
              <input type="password" placeholder="*****" aria-describedby="example1Hint3" aria-errormessage="example1Error3" required pattern="alpha_numeric" data-equalto="password">
              <span class="form-error">
                Las contraseñas no coinciden!
              </span>
            </label>
            <p class="help-text" id="password">Confirmar contraseña</p>
          </div>



        </div>
        <br>
      </div>
      <div class="grid-container">
        <h5>Domicilio</h5>
        <div class="grid-x grid-margin-x">
          <div class="cell large-7">
            <label>
              <input type="text" id="calle" name="calle">
            </label>
            <p class="help-text" id="calle">Calle </p>
          </div>

          <div class="cell large-5 ">
            <label>
              <input type="text" id="numero" name="numero">
            </label>
            <p class="help-text" id="numero">Número </p>
          </div>

          <div class="cell large-7">
            <label>
              <input type="text" id="colonia" name="colonia">
            </label>
            <p class="help-text" id="colonia">Colonia </p>
          </div>

          <div class="cell large-5 ">
            <label>
              <input type="text" id="cp" name="cp">
            </label>
            <p class="help-text" id="cp">Código Postal </p>
          </div>


        </div>
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
            <th >Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th >Calle</th>
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
          <tr >
            <td>Content Goes Here</td>
            <td>Tet metus.</td>
            <td>33 5986 5487</td>
            <td>Content Goes Here</td>
            <td>4578</td>
            <td>Content Goes Here</td>
            <td >44875</td>
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