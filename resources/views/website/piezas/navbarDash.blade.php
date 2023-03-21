Blog<nav class="navbarDash navbar-expand-lg row m-0" id="navbarBigger">
    <div class="col-3 text-center">
        <a class="navbar-brand align-self-center" href="{{ url('/') }}">Radical Boards logo</a>
    </div>

    <div class="col-9 d-none d-sm-flex " >
        <ul class="navbar-nav col-7 ml-auto justify-content-around  ">
            <li class="nav-item text-center">
                <a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="{{ url('productos') }}">Productos</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="{{ url('eventos') }}">Eventos</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="{{url('blog')}}">Blog</a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link pl-0 pr-0" href="{{ url('sesion') }}">Inicia sesión</a>
            </li>
        </ul>
    </div>
</nav>








<script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {

        if (document.body.scrollTop = 130 || document.documentElement.scrollTop < 130) {
            document.getElementById("navbarBigger").style.top = "-200px";
            document.getElementById("navbarBigger").style.zIndex = "-1";
        }

        
        if (document.body.scrollTop >= 100 || document.documentElement.scrollTop < 100) {
            document.getElementById("navbarBigger").style.backgroundColor = "transparent";
            document.getElementById("navbarBigger").style.zIndex = "3";
        }

        if (document.body.scrollTop >= 1300 || document.documentElement.scrollTop >= 1300) {
            document.getElementById("navbarBigger").style.backgroundColor = "#3c4245";
            document.getElementById("navbarBigger").style.top = "0";
            document.getElementById("navbarBigger").style.zIndex = "1";
        } 
        
        else {
            document.getElementById("navbarBigger").style.backgroundColor = "transparent";
        }
    }
</script>