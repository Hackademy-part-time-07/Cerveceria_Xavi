<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->

    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>

    <!--<link rel="stylesheet" href="{{ asset ('css/app.css') }}">-->
    
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning sticky-top">
        <div class="container-fluid">
            <div class="container d-flex justify-content-between">
                <a class="navbar-brand" href="{{ route ('home') }}"><img src="{{ asset ('/img/craneo.png') }}"
                        alt="logo" style="height: 4rem"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" aria-current="page" href="{{ route ('breweries') }}">Cervecerías</a>
                        <a class="nav-link" href="#">Cervezas</a>
                        <a class="nav-link" href="{{ route ('contact.create') }}">Contacto</a>
                        <a class="nav-link" href="{{ route ('about') }}">Quienes somos</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <article class="container">
        @yield('content')
    </article>


    <div class="container-fluid bg-secondary fixed-bottom">
        <footer class="container text-white p-2">
            Pie de pagina
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>


</body>

</html>
