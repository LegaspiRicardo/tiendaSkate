<!DOCTYPE html>
<html lang="en">
<head>
    @include ('admin.plantilla.head')
    <title>@yield('titulo')</title>
</head>
<body>
    @include ('admin.plantilla.sidebar')
    @include ('admin.plantilla.nav')
    @yield('main')
    
</body>
</html>