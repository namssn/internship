@extends('layouts.master') @section('content')

<div id="home">
<section class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <div class="tab">
                <li class="li-banner" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <span class="number">01</span>&nbsp
                <span class="text">INTRO</span>
            </div>
            <div class="tab">
                <li class="li-banner" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <span class="number">02</span>&nbsp
                <span class="text">WORK</span>
            </div>
            <div class="tab">
                <li class="li-banner" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <span class="number">03</span>&nbsp
                <span class="text">ABOUT</span>
            </div>
            <div class="tab">
                <li class="li-banner" data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <span class="number">04</span>&nbsp
                <span class="text">CONTACTS</span>
            </div>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="wrap-postition">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="card-img-overlay ">
                                    <div class="banner-text">
                                        <p class="card-title">Creative Template</p>
                                        <p class="card-text">WECOME</p>
                                        <p class="card-text">TO MOGO</p>
                                    </div>
                                    <hr class="line-banner"></hr>
                                    <div class="btn-banner">
                                        <button type="button" class="btn btn-outline-light">LEARN MORE</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="d-block w-100" src="{{asset('images/banner/banner-1.jpg')}}" alt="First slide">
            </div>

            <div class="carousel-item">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="card-img-overlay ">
                                <div class="banner-text">
                                    <p class="card-title">Creative Template</p>
                                    <p class="card-text">WECOME</p>
                                    <p class="card-text">TO MOGO</p>
                                </div>
                                <hr class="line-banner"></hr>
                                <div class="btn-banner">
                                    <button type="button" class="btn btn-outline-light">LEARN MORE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="d-block w-100" src="{{asset('images/banner/banner-1.jpg')}}" alt="First slide">
            </div>

            <div class="carousel-item">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="card-img-overlay ">
                                <div class="banner-text">
                                    <p class="card-title">Creative Template</p>
                                    <p class="card-text">WECOME</p>
                                    <p class="card-text">TO MOGO</p>
                                </div>
                                <hr class="line-banner"></hr>
                                <div class="btn-banner">
                                    <button type="button" class="btn btn-outline-light">LEARN MORE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="d-block w-100" src="{{asset('images/banner/banner-1.jpg')}}" alt="First slide">
            </div>

            <div class="carousel-item">
                <div class="container ">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="card-img-overlay ">
                                <div class="banner-text">
                                    <p class="card-title">Creative Template</p>
                                    <p class="card-text">WECOME</p>
                                    <p class="card-text">TO MOGO</p>
                                </div>
                                <hr class="line-banner"></hr>
                                <div class="btn-banner">
                                    <button type="button" class="btn btn-outline-light">LEARN MORE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="d-block w-100" src="{{asset('images/banner/banner-1.jpg')}}" alt="First slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



<section class="about">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            what we do
                            <br>
                        </h3>
                        <h1 class="second-text">
                            story about us
                            <br>
                        </h1>
                        <hr class="line-about"></hr>

                        <div class="description">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna ali ua. Ut enim ad minim veniam, quis
                                    <br>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-about">
                <div class="container">
                    <div class="row">

                        <div class="col">
                            <div class="blog-relative">
                                <a class="imghover" href="#">
                                    <img src="{{asset('images/about/com.jpg')}}" alt="Com" class="img-fluid">
                                </a>
                                <div class="blog-hover-color"></div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="blog-relative">
                                <a class="imghover" href="#">
                                    <img src="{{asset('images/about/headphone.jpg')}}" alt="Headphone" class="img-fluid">
                                </a>
                                <div class="blog-hover-color"></div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="blog-relative">
                                <a class="imghover" href="#">
                                    <img src="{{asset('images/about/camera.jpg')}}" alt="Camera" class="img-fluid">
                                </a>
                                <div class="blog-hover-color"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fact">
        <div class="container">
            <div class="row">
                <span class="col">
                    <h1 class="num">42</h1>
                    <p class="type">web design projects</p>
                </span>

                <span class="col">
                    <h1 class="num">123</h1>
                    <p class="type">happy client</p>
                </span>

                <span class="col">
                    <h1 class="num">15</h1>
                    <p class="type">award winner</p>
                </span>

                <span class="col">
                    <h1 class="num">99</h1>
                    <p class="type">cup of coffee</p>
                </span>

                <span class="col">
                    <h1 class="num">24</h1>
                    <p class="type">members</p>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="service">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            we work with
                            <br>
                        </h3>
                        <h1 class="second-text">
                            amazing services
                            <br>
                        </h1>
                        <hr class="line-about"></hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="detail">
            <div class="row">

                @for($i=1;$i<=5;$i++)
                <div class="col">
                    <div class="row">
                        <div class="col-4">
                            <div class="pic">
                                <img src="{{asset('images/service/clock.png')}}" alt="clock" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-8">
                            <h3>photography</h3>
                            <br>
                            <p>Lorem ipsum dolor sit amet, consectetur
                            <br> adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                @endfor

            </div>
        </div>
    </div>

                    {{-- <div class="pic">
                        <img src="{{asset('images/service/web.png')}}" alt="web">
                    </div>
                    <div class="col">
                        <h3>web design</h3>
                        <br>
                        <p>Ipsum dolor sit amet, consectetur adipiscing
                            <br> elit, sed do eiusmod tempor.</p>
                    </div>

                    <div class="pic">
                        <img src="{{asset('images/service/com.png')}}" alt="com">
                    </div>
                    <div class="col">
                        <h3>creativity</h3>
                        <br>
                        <p>Dolor sit amet, consectetur adipiscing elit, sed
                            <br> do eiusmod tempor.</p>
                    </div>
                </div>
                <br>
                <div>
                    <hr class="line-service"></hr>
                </div>

                <div class="container"></div>
                <div class="row">
                    <div class="pic">
                        <img src="{{asset('images/service/book.png')}}" alt="clock">
                    </div>
                    <div class="col">
                        <h3>seo</h3>
                        <br>
                        <p>Ipsum dolor sit amet, consectetur
                            <br> adipiscing elit, sed do eiusmod.</p>
                    </div>

                    <div class="pic">
                        <img src="{{asset('images/service/home.png')}}" alt="web">
                    </div>
                    <div class="col">
                        <h3>css/html</h3>
                        <br>
                        <p>Ipsum dolor sit amet, consectetur adipiscing
                            <br> elit, sed do eiusmod tempor.</p>
                    </div>

                    <div class="pic">
                        <img src="{{asset('images/service/digital.png')}}" alt="com">
                    </div>
                    <div class="col">
                        <h3>digital</h3>
                        <br>
                        <p>Sit amet, consectetur adipiscing elit, sed
                            <br> do eiusmod tempor.</p>
                    </div>
                </div> --}}
        
</section>

<section class="design">

    <div class="row ">
        <div class="col">
            <div class="container">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            for all devices
                            <br>
                        </h3>
                        <h1 class="second-text">
                            unique design
                            <br>
                        </h1>
                        <hr class="line-about"></hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="items-device">
        <img class="d-block img-fluid" src="{{asset('images/design/device.png')}}" alt="device">
    </div>

</section>

<section class="servicr2">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            Service
                            <br>
                        </h3>
                        <h1 class="second-text">
                            what we do
                            <br>
                        </h1>

                        <hr class="line-about"></hr>

                        <div class="description">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    <br>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="detail-service">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="{{asset('images/service2/man.jpg')}}" alt="Com" class="man">
                </div>

                <div class="col">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <div class="box">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <img class="img-fluid" src="{{asset('images/service2/picture.png')}}" alt="picture">&nbsp photography
                                            <div class="arrow">
                                                <img class="img-fluid" src="{{asset('images/service2/arrow.png')}}" alt="arrow">
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <div class="box">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <img class="img-fluid" src="{{asset('images/service2/creative.png')}}" alt="creative">&nbsp creativity
                                            <div class="arrow">
                                                <img class="img-fluid" src="{{asset('images/service2/arrow.png')}}" alt="arrow">
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <div class="box">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <img class="img-fluid" src="{{asset('images/service2/web.png')}}" alt="web">&nbsp web design
                                            <div class="arrow">
                                                <img class="img-fluid" src="{{asset('images/service2/arrow.png')}}" alt="arrow">
                                            </div>
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="quote">

                                    <div class="row">
                                        <div class="col">
                                            <img class="img-fluid" src="{{asset('images/service2/speech.png')}}" alt="speech">&nbsp
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                <br> quis nostrud exercitation.”
                                            </p>

                                            <hr class="line-about"></hr>

                                            <div class="name">Jon Doe</div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="quote">

                                    <div class="row">
                                        <div class="col">
                                            <img class="img-fluid" src="{{asset('images/service2/speech.png')}}" alt="speech">&nbsp
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                <br> quis nostrud exercitation.”
                                            </p>

                                            <hr class="line-about"></hr>

                                            <div class="name">Jon Doe</div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="quote">

                                    <div class="row">
                                        <div class="col">
                                            <img class="img-fluid" src="{{asset('images/service2/speech.png')}}" alt="speech">&nbsp
                                        </div>
                                        <div class="col-8">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                <br> quis nostrud exercitation.”
                                            </p>

                                            <hr class="line-about"></hr>

                                            <div class="name">Jon Doe</div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
</section>

<section class="team">
    <div class="row">
        <div class="col">
            <div class="container">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            Who we are
                            <br>
                        </h3>
                        <h1 class="second-text">
                            meet our team
                            <br>
                        </h1>

                        <hr class="line-about"></hr>

                        <div class="description">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    <br>nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="image-hover">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-relative">
                        <a class="imghover" href="#">
                            <img src="{{asset('images/group/people1.jpg')}}" alt="people1" class="img-fluid">
                        </a>
                        <div class="blog-hover-color"></div>
                    </div>
                    <h5 class="name-team">matthew dix</h5>
                    <p class="position-team">Graphic Design</p>
                </div>

                <div class="col">
                    <div class="blog-relative">
                        <a class="imghover" href="#">
                            <img src="{{asset('images/group/people2.jpg')}}" alt="people2" class="img-fluid">
                        </a>
                        <div class="blog-hover-color"></div>
                    </div>

                    <h5 class="name-team">christopher campbell</h5>
                    <p class="position-team">Branding/UX design</p>

                </div>

                <div class="col">
                    <div class="blog-relative">
                        <a class="imghover" href="#">
                            <img src="{{asset('images/group/people3.jpg')}}" alt="people3" class="img-fluid">
                        </a>
                        <div class="blog-hover-color"></div>
                    </div>

                    <h5 class="name-team">michael fertig </h5>
                    <p class="position-team">Developer</p>

                </div>

            </div>
        </div>
    </div>

    <div class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="logo">
                        <div class="row">
                            <img class="img-fluid" src="{{asset('images/group/logo.png')}}" alt="logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>





</section>
</div>
@endsection