<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
    <div class="sidebar-sticky ">
        <ul class="nav flex-column ">

            <li class="sidebarItem col-10 mx-auto text-left ">
                <a href="{{ url('/panelControl') }}" class="col-10 mx-auto sidebarA">  
                    Inicio 
                </a>
            </li>

            <li class="sidebarItem col-10 mx-auto text-left">
                <a href="{{ url('/clienteAdmin') }}" class="col-10 mx-auto sidebarA"> 
                Clientes 
                </a>
            </li>

            <li class="sidebarItem col-10 mx-auto text-left">
                <a href="{{ url('/equipoAdmin') }}" class="col-10 mx-auto sidebarA"> 
                    Equipo 
                </a>
            </li>

            <li class="sidebarItem col-10 mx-auto text-left">
                <a href="{{ url('/productoAdmin') }}" class="col-10 mx-auto sidebarA">
                    Inventario
                </a>
                <button class="btn-collapse text-left col-2" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="false" aria-controls="collapse">
                    +
                </button>
            </li>

            <div class="collapse" id="collapse">
                <div class="card card-collapse">
                    <a href="{{ url('/inventarioTenis') }}" class="col-10 mx-auto sidebarA"><li class="text-center sidebarli"> Tenis </li></a>
                    <a href="{{ url('/inventarioTablas') }}" class="col-10 mx-auto sidebarA"><li class="text-center sidebarli"> Tablas </li></a>
                    <a href="{{ url('/inventarioRopa') }}" class="col-10 mx-auto sidebarA"><li class="text-center sidebarli"> Ropa </li></a>
                    <a href="{{ url('/inventarioRopa') }}" class="col-10 mx-auto sidebarA"><li class="text-center sidebarli"> Ropa </li></a>
                    <hr>
                    <a href="{{ url('/categoriasAdmin') }}" class="col-10 mx-auto sidebarA"><li class="text-center sidebarli"> Categorias </li></a>
                    <a href="{{ url('/marcasAdmin') }}" class="col-10 mx-auto sidebarA"><li class="text-center sidebarli"> Marcas </li></a>
                </div>
            </div>






        </ul>
    </div>
</nav>


