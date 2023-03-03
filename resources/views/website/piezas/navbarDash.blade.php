<nav class="navbarDash navbar-expand-lg row m-0" id="navbar">
    <div class="col-3 text-center">
        <a class="navbar-brand" href="{{ url('/tiendaSkate') }}">Radical Boards logo</a>
    </div>

    <div class="col-9 " >
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

<script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {

        if (document.body.scrollTop = 130 || document.documentElement.scrollTop < 130) {
            document.getElementById("navbar").style.top = "-200px";
            document.getElementById("navbar").style.zIndex = "-1";
        }

        
        if (document.body.scrollTop >= 100 || document.documentElement.scrollTop < 100) {
            document.getElementById("navbar").style.backgroundColor = "transparent";
            document.getElementById("navbar").style.zIndex = "3";
        }

        if (document.body.scrollTop >= 1300 || document.documentElement.scrollTop >= 1300) {
            document.getElementById("navbar").style.backgroundColor = "#212426";
            document.getElementById("navbar").style.top = "0";
            document.getElementById("navbar").style.zIndex = "1";
        } 
        
        else {
            document.getElementById("navbar").style.backgroundColor = "transparent";
        }
    }
</script>