<!doctype html>
<html lang="en">
    <head>
    <title>Muftbytes :: {{$title}}</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/image/logo_blue.png')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-theme.css')}}">
    <link rel='stylesheet' type='text/css' href="{{asset('assets/css/bootsnip.css')}}">
    </head>
    <body>
        @yield('content')
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootbox.min.js')}}"></script>
    </body>
</html>
