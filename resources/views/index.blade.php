<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>

    <meta name="token" id="token" value="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">
    <title>@yield('titulo')</title>
    {{-- <script src="https://unpkg.com/vue@latest"></script> --}}
    <script src="https://unpkg.com/vue-select@3.0.0"></script>
    <link rel="icon" type="image/png" href="otros/path4490.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/datatable.css">
    <link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>
    <nav>
        <a href="#">Inicio</a>
        <a href="xml">xml</a>
        <a href="alumnos">Alumnos</a>
        <button class="modo" id="modoToggle"><i class="fa-solid fa-moon"></i></button>
    </nav>
    <div class="contenido">
        @yield('contenido')
    </div>

    @stack('scripts')
    <!-- Global Init -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jszip.min.js"></script>
    <script src="js/buttons.html5.min.js"></script>
    {{-- sweft --}}
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://unpkg.com/vue-select@3.0.0"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
</body>

</html>