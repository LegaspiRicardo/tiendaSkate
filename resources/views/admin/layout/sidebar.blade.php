<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
    <div class="sidebar-sticky ">
        <ul class="nav flex-column ml-4">
            <li class="text-left"><a href="{{ url('/panelControl') }}" class="sidebarli"> Inicio </a></li>
            <li class="text-left"><a href="{{ url('/inventario') }}" class="sidebarli"> Inventario </a></li>
            <li class="text-left"><a href="{{ url('/inventarioRopa') }}" class="sidebarli"> Ropa </a></li>
            <li class="text-left"><a href="{{ url('/inventarioTenis') }}" class="sidebarli"> Tenis </a></li>
            <li class="text-left"><a href="{{ url('/inventarioTablas') }}" class="sidebarli"> Tablas </a></li>
            <li class="text-left"><a href="{{ url('/clientes') }}" class="sidebarli"> Clientes </a></li>
            <li class="text-left"><a href="#" class="sidebarli"> Equipo </a></li>
        </ul>



        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>