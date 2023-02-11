@extends('admin.plantilla.plantilla')

@section ('titulo', 'Registro Clientes')

@section('main')

    <div class="off-canvas-content" data-off-canvas-content>
        @section('inventarioCategoria','Registro de Clientes')


        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-10 mb-6 ">
              <!-- Replace with your content -->
              <div class="px-8 py-3 sm:px-0 ">
                <div class="h-108 rounded-lg border-4 border-dashed border-gray-200   ">
  
                <div class="flex space-x-4">
                  <div class="w-full md:w-1/3 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Nombre
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Elias">
                  </div>
  
  
                  
                  <div class="w-full md:w-1/3 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Apellido paterno
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Estrada">
                  </div>
                  
                  <div class="w-full md:w-1/3 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Apellido materno
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Cortes">
                  </div>
  
                </div>
                
                <div class="flex space-x-4">
  
                  <div class="w-full md:w-1/2 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Fecha de nacimiento  
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="dd/mm/aaaa">
                  </div>
  
                  <div class="w-full md:w-1/2 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Ubicacion    
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Miravalle">
                  </div>
  
                </div>
              </div>
  
                 
  
                  <div class="w-full md:w-1/2 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Correo
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                  </div>
  
                  <div class="w-full md:w-1/6 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Contraseña  
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="">
                  </div>
  
                  <div class="w-full md:w-1/2 px-3 py-4">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name" >
                      Imagen  
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-1 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" >
                  </div>
  
  
                  
                </div>

            <hr>

            <input type="submit" class="button expanded" value="Registrar">


    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
    <script>
        $(document).foundation();
    </script>
    
@endsection