
 @extends('website.piezas.plantilla')
 <link href="css/signin.css" rel="stylesheet">
@section('titulo', 'Tienda de Skate Cool')

@section('main')


      
  <main class="main-cuenta">
    <img src="/images/grafiti1.jpg" alt="" class="imagen-login-fondo">

    
    <h1 class="titulo"> Inicia Sesión</h1>

    <div class="caja-inicio-sesion">

          <div class="caja-foto">
              <div class="caja-formulario-cuenta">

                    <div class="flex-column">
                      <label class="label-formulario" for="correo">Tu correo</label>
                      <input class="input-formulario" id="correo" type="email" name="correo" placeholder="dudas@gmail.com">

                    </div>
                    <div  class="flex-column">
                      <label class="label-formulario" for="contraseña">Tu contraseña</label>
                      <input class="input-formulario" id="contraseña" type="password" name="contraseña" placeholder="tu contraseña">

                    </div>
                    <div class="botones-cuenta botones-cuenta-sesion">
                      <button class="btn-selector">Acceder</button>
                      <a href="{{ url('crearcuenta') }}">¿No tienes cuenta? Crea una aquí</a>
                    </div>


              </div>

              

          </div>

    </div>


  </main>


 
        



@endsection