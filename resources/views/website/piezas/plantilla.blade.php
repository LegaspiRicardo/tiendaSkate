<!DOCTYPE html>
<html lang="en">
<head>
    @include ('website.piezas.head')
    <title>@yield('titulo')</title>
</head>
<body>
    @include ('website.piezas.navbar')
    
    @yield('main')
    
    @include ('website.piezas.footer')
</body>
</html>