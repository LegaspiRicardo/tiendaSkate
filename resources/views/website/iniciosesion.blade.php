@extends('website.piezas.plantilla')
<link href="css/signin.css" rel="stylesheet">
@section('titulo', 'Tienda de Skate Cool')

@section('main')



<main class="main-cuenta">
  <img src="/images/grafiti1.jpg" alt="" class="imagen-login-fondo">



  <div class="caja-inicio-sesion">




    <div class="caja-foto">
      <div class="caja-formulario-cuenta">

      <h2 class="titulo"> Inicia sesión</h2>
        <div class="flex-column">
          <label class="label-formulario" for="correo">Correo:</label>
          <input class="input-formulario" id="correo" type="email" name="correo">

        </div>
        <div class="flex-column">
          <label class="label-formulario" for="contraseña">Contraseña:</label>
          <input class="input-formulario" id="contraseña" type="password" name="contraseña">

        </div>


        <div class="botones-cuenta botones-cuenta-sesion">
          <button class="btn-acceder ">Acceder</button>
          <br>
          <a href="{{ url('crearcuenta') }}">¿No tienes cuenta? Crea una aquí</a>
        </div>


      </div>



    </div>

  </div>


</main>







@endsection