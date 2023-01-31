
<nav class="navbar navbar-expand-lg row text-center">
    <div class="col-3 text-center">
        <a class="navbar-brand" href="{{ url('/tiendaSkate') }}">Tienda Skate logo</a>
    </div>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav ml-auto mr-5 mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/tiendaSkate') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('productos') }}">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('sesion') }}">Tu cuenta</a>
            </li>
        </ul>
    </div>
</nav>