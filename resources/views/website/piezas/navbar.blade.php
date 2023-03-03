<nav class="navbar navbar-expand-lg row" id="navbar">
    <div class="col-3 text-center">
        <a class="navbar-brand" href="{{ url('/tiendaSkate') }}">Radical Boards logo</a>
    </div>

    <div class="col-9 collapse navbar-collapse" >
        <ul class="navbar-nav col-6 ml-auto mt-2">
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ url('/tiendaSkate') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="{{ url('productos') }}">Productos</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item mr-5">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link pl-0 pr-0" href="{{ url('sesion') }}">Inicia sesión</a>
            </li>
        </ul>
    </div>
</nav>

