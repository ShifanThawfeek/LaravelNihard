<!doctype html>
<html>
    <head>
        <title></title>
        

    <script src="{{ URL::asset('vendor/jquery-ui/external/jquery/jquery.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('vendor/jquery-ui/jquery-ui.css') }}">

    <script src="{{ URL::asset('vendor/jquery-ui/jquery-ui.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/sb-admin.css') }}">
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </head>
    <body>
        <div class="container-fluid">
            @yield('content')
        </div>        
    </body>
</html>