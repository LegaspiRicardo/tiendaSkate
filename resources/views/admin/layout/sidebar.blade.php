<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
    <div class="sidebar-sticky ">
        <ul class="nav flex-column ">

            <li class="sidebarItem col-10 mx-auto text-left ">
                <a href="{{ url('/panelControl') }}" class="col-10 mx-auto sidebarA">  
                    Inicio 
                </a>
            </li>


            <li class="sidebarItem col-10 mx-auto text-left">
                <a href="{{ url('/inventario') }}" class="col-10 mx-auto sidebarA">
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
                </div>
            </div>






            <li class="sidebarItem col-10 mx-auto text-left">
                <a href="{{ url('/clienteAdmin') }}" class="col-10 mx-auto sidebarA"> 
                Clientes 
                </a>
            </li>

            <li class="sidebarItem col-10 mx-auto text-left">
                <a href="{{ url('/equipo') }}" class="col-10 mx-auto sidebarA"> 
                    Equipo 
                </a>
            </li>
        </ul>
    </div>
</nav>


