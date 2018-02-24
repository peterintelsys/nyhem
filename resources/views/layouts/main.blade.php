<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nyhem</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>

    @include('includes/nav')

    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script> 
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIn8DrJAIemaZsKWlp5wbggn5aXM4e9B4&callback=initMap">
    </script>
       
    </body>
</html>