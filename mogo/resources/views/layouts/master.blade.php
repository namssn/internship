<html>
    <head>
        <title>Mogo - @yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/fontawesome-free-5.0.13/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css')}}">
        

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:200,400,700,800" rel="stylesheet">
    </head>
    <body>
            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>