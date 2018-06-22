@extends('layouts.master') @section('content')
<section class="home">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('images/bag/12.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/bag/11.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/bag/13.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/bag/14.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/bag/15.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/bag/16.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/bag/17.jpg')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('images/bag/18.jpg')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col">
                    <h2 class="mb-5 mt-5">New Arrivals</h2>

                    <div class="slide-pic">
                        <div><img class="pic d-block" src="{{asset('images/bag/6.jpg')}}" alt="bag"></div>
                        <div><img class="pic d-block" src="{{asset('images/bag/10.jpg')}}" alt="bag"></div>
                        <div><img class="pic d-block" src="{{asset('images/bag/9.jpg')}}" alt="bag"></div>
                        <div><img class="pic d-block" src="{{asset('images/bag/7.jpg')}}" alt="bag"></div>
                        <div><img class="pic d-block" src="{{asset('images/bag/8.jpg')}}" alt="bag"></div>
                        <div><img class="pic d-block" src="{{asset('images/bag/3.jpg')}}" alt="bag"></div>
                        <div><img class="pic d-block" src="{{asset('images/bag/2.jpg')}}" alt="bag"></div>
                        <div><img class="pic d-block" src="{{asset('images/bag/4.jpg')}}" alt="bag"></div>
                    </div>

                    <div class="row text-center mt-5">
                        <div class="col">
                            <a href="javascript:void(0)">
                                <button type="button" class="btn btn-outline-secondary">More Shop</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         

<section>
@endsection 

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $('.slide-pic').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 700,
            nextArrow: '<img id="arrow-next" src="{{asset('images/home/next.png')}}" alt="arrow-next">',
            prevArrow: '<img id="arrow-back" src="{{asset('images/home/back.png')}}" alt="arrow-back">',
        });
    });	
</script> 
@endsection