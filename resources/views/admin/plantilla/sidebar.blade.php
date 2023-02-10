
    {{-- ---  Sidebar para dispositivos grandes ----- --}}
    <div class="off-canvas position-left reveal-for-large" data-position="left" id="offCanvasNestedOverlap" >
        <div class="grid-y grid-padding-x" style="height: 100%;">
            <br>
            <h5 class="text-center sidebarTi"><a href="{{ url('/panelControl') }}" class="sidebarTitle"> Tienda de Skate </a></h5>
            <ul class="sidebarLarge">
                <li class="text-left"><a href="{{ url('/inventarioRopa') }}" class="sidebarli"> Ropa </a></li>
                <li class="text-left"><a href="{{ url('/inventarioTenis') }}" class="sidebarli"> Tenis </a></li>
                <li class="text-left"><a href="{{ url('/inventarioTablas') }}" class="sidebarli"> Tablas </a></li>
                <li class="text-left"><a href="" class="sidebarli"> Clientes </a></li>
                <li class="text-left"><a href="" class="sidebarli"> Equipo </a></li>
            </ul>
        </div>
    </div>
    {{-- ---  Sidebar para dispositivos pequeños ----- --}}
    <div class="off-canvas position-right hide-for-large" data-position="right" id="my-info" data-off-canvas data-transition="overlap">
        <div class="row column">
            <br>
            <h5 class="text-center sidebarTi"><a href="{{ url('/panelControl') }}" class="sidebarTitle"> Tienda de Skate </a></h5>
            <ul class="sidebarSmall">
                <li class="liSmall"><a href="{{ url('/inventarioRopa') }}" class="sidebarli"> Ropa </a></li>
                <li class="liSmall"><a href="{{ url('/inventarioTenis') }}" class="sidebarli"> Tenis </a></li>
                <li class="liSmall"><a href="{{ url('/inventarioTablas') }}" class="sidebarli"> Tablas </a></li>
                <li class="liSmall"><a href="" class="sidebarli"> Clientes </a></li>
                <li class="liSmall"><a href="" class="sidebarli"> Equipo </a></li>
            </ul>
        </div>
    </div>