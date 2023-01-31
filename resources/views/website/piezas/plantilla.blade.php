<!DOCTYPE html>
<html lang="en">
<head>
    @include ('website.piezas.head')
    <title>@yield('titulo')</title>






    
    <script src="https://kit.fontawesome.com/372eb0c4d2.js" crossorigin="anonymous"></script>
</head>
<body>
    @include ('website.piezas.navbar')
    
    @yield('main')
    
    @include ('website.piezas.footer')
</body>
</html>