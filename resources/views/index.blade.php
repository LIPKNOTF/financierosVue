<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">
    <title>@yield('titulo')</title>
    <!--
SOFTY PINKO
https://templatemo.com/tm-535-softy-pinko
-->

    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    {{-- <script src="https://unpkg.com/vue@latest"></script> --}}

    <script src="https://unpkg.com/vue-select@3.0.0"></script>
    <link rel="stylesheet" href="https://unpkg.com/vue-select@3.0.0/dist/vue-select.css">


</head>

<body>

    <div >
        <!-- Content Wrapper. Contains page content -->
        <div >
            <!-- Main content -->
            <div >
                <div >
                    @yield('contenido')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>

    @stack('scripts')
    <!-- Global Init -->
    {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}

    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/dataTables.buttons.min.js"></script>

    {{-- sweft --}}
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/vue-select@3.0.0"></script>



</body>

</html>