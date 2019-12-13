<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>@yield('titulo') Fundacion San José Obrero</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/blade.css') }}">
        @yield('estilo')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('/js/jquery-3.1.1.slim.min.js') }}"></script>
        <script src="{{ asset('/js/tether.min.js') }}"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>  --}}
        {{-- <script src="{{ asset('jquery-validation/jquery.validate.min.js') }}"></script> --}}
        @yield('script')
        <!-- Fonts -->

    </head>
    <body class="cuerpo">
       <div id="app">
            <!-- Introducir Banner-->
        {{-- <img src="{{ asset('img/img (1).jpg')}}" style="height:250px; width:100%"> --}}

            @include('menu.principal')
            <div class="embed-responsive" style="height: 35px"></div>
            <main class="py-4">
        
            @yield('contenido')
            </main>
            <div class="separador"></div>
            
        </div>
        @include('principal.footer')
    </body>
</html>