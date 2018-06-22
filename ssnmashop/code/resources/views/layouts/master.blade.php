<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ssnmashop</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    {{-- css --}}
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick.css')}}"/>
    {{-- Add the new slick-theme.css if you want the default styling --}}
    <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick-theme.css')}}"/>

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css?family=Jua|Titillium+Web" rel="stylesheet">
</head>
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slick/slick.min.js')}}"></script>

    @yield('script')
    {{-- changing text auto --}}
    <script type="text/javascript">
        // Array of words
        var words = ['Get 10% Off - Use Coupon Code HAPPY123', 'Free Shipping'];
        // Function that executes every 2000 milliseconds
        var t = setInterval(function() {
        // Random number generator
        var randomNumber = Math.round( Math.random() * (words.length-1) );
        // Change the word in the span for a random one in the array of words
        $('#changing').html( words[ randomNumber ] );
        }, 700);
    </script> 

</body>
</html>