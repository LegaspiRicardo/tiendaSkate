<!DOCTYPE html>
<html lang="en">

<head>
    @include ('admin.layout.head')
    <title>@yield('titulo')</title>
</head>

<body>
    @include ('admin.layout.nav')
    <div class="container-fluid">
        <div class="row">
        @include ('admin.layout.sidebar')
        @yield('main')

        </div>
    </div>


</body>

</html>