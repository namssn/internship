<html>
    <head>
        <title> - Mogo - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Custom styles for this template -->
        
        {{-- css --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        {{-- img --}}
        <link rel="stylesheet" href="{{asset('fonts/fontawesome-free-5.0.13/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css')}}">

        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:200,400,700,800" rel="stylesheet">
        
    </head>
    <body>
            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')

            <script src="{{asset('js/app.js')}}"></script>

            @yield('script')
        
    </body>
</html>