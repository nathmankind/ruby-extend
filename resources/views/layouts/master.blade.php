<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') </title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('styles')
    <style>
        .nav-item .active>.nav-link {
            color: #FF6700;
        }
        .navbar-light .navbar-nav .nav-link {
            /*color: #ff670069; */
            text-transform: uppercase;
        }.navbar-light .navbar-nav .nav-link:hover {
             color: #FF6700;
         }
        .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .active>.nav-link {
            color: #FF6700;
        }
    </style>
</head>
<body>
@include('includes.header')
@yield('content')
@include('includes.footer')
<script src="js/jquery.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
@yield('scripts')
</body>
</html>