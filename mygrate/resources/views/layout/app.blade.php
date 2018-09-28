<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mygrate</title>

    <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css"
          integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Estilo do Bootstrap -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap-4/css/bootstrap.css')}}">
    <!-- Estilo de trabalho -->
    <link rel="stylesheet" href="{{asset('css/estilo2.css')}}">    
    @stack('header-scripts')
</head>
<body>

@yield('header')
@yield('content')
@yield('footer')
<script type="text/javascript" src="{{asset('vendor/bootstrap-4/js/bootstrap.min.js')}}"></script>
@stack('footer-scripts')
</body>
</html>