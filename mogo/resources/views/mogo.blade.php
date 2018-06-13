@extends('layouts.master') 

@section('content')
<section class="banner" id="home">

    <div id="slide-banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <div class="row">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <li class="li-banner" data-target="#slide-banner" data-slide-to="0" class="active"></li>
                    <span class="number">01</span>
                    <span class="text">INTRO</span>
                </div>
            
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <li class="li-banner" data-target="#slide-banner" data-slide-to="1"></li>
                    <span class="number">02</span>
                    <span class="text">WORK</span>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <li class="li-banner" data-target="#slide-banner" data-slide-to="2"></li>
                    <span class="number">03</span>
                    <span class="text">ABOUT</span>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <li class="li-banner" data-target="#slide-banner" data-slide-to="3"></li>
                    <span class="number">04</span>
                    <span class="text">CONTACTS</span>
                </div>
            </div>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <h1>Creative Template</h1>
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p>WECOME</p> 
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p>MOGO</p>
                                        </div> 
                                        <hr class="line-banner"></hr>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                            <button type="button" id="btn-learn-more" class="btn btn-outline-light">LEARN MORE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="img-fluid w-100% h-auto d-block" src="{{asset('images/banner/banner-1.jpg')}}" alt="First slide">
            </div>

            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <h1>Creative Template</h1>
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p>WECOME</p> 
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p>MOGO</p>
                                        </div> 
                                        <hr class="line-banner"></hr>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                            <button type="button" id="btn-learn-more" class="btn btn-outline-light">LEARN MORE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="img-fluid w-100% h-auto d-block" src="{{asset('images/banner/banner-2.jpg')}}" alt="Second slide">
            </div>

            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <h1>Creative Template</h1>
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p>WECOME</p> 
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p>MOGO</p>
                                        </div> 
                                        <hr class="line-banner"></hr>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                            <button type="button" id="btn-learn-more" class="btn btn-outline-light">LEARN MORE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="img-fluid w-100% h-auto d-block" src="{{asset('images/banner/banner-3.jpg')}}" alt="Third slide">
            </div>

            <div class="carousel-item">
                <div class="container ">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="carousel-caption">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <h1>Creative Template</h1>
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <p>WECOME</p> 
                                        </div>
                                        <div class="col-6 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                                            <p>MOGO</p>
                                        </div> 
                                        <hr class="line-banner"></hr>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                                            <button type="button" id="btn-learn-more" class="btn btn-outline-light">LEARN MORE</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="img-fluid w-100% h-auto d-block" src="{{asset('images/banner/banner-4.jpg')}}" alt="Four slide">
            </div>
        </div>

        <a class="carousel-control-prev" href="#slide-banner" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide-banner" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>

<section class="about" id="about">
    <div class="container"> 
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            what we do
                        </h3>
                        <h1 class="second-text">
                            story about us
                        </h1>
                        <hr class="line-about"></hr>

                        <div class="description">
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna ali ua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="image-about">                   
                    <div class="row">
                        <div class="col-12	col-sm-12	col-md-4	col-lg-4	col-xl-4">
                            <div class="blog-relative">
                                <a class="imghover" href="javascript:void(0)">
                                    <img src="{{asset('images/about/com.jpg')}}" alt="Com" class="img-fluid">
                                </a>
                                <div class="blog-hover-color">
                                    <p>SUPER TEAM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12	col-sm-12	col-md-4	col-lg-4	col-xl-4">
                            <div class="blog-relative">
                                <a class="imghover" href="javascript:void(0)">
                                    <img src="{{asset('images/about/headphone.jpg')}}" alt="Headphone" class="img-fluid">
                                </a>
                                <div class="blog-hover-color">
                                    <p>SUPER TEAM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12	col-sm-12	col-md-4	col-lg-4	col-xl-4">
                            <div class="blog-relative">
                                <a class="imghover" href="javascript:void(0)">
                                    <img src="{{asset('images/about/camera.jpg')}}" alt="Camera" class="img-fluid">
                                </a>
                                <div class="blog-hover-color">
                                    <p>SUPER TEAM</p>
                                </div>
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
                <span class="col-12	col-sm-12 col-md  col-lg  col-xl">
                    <h1 class="num">42</h1>
                    <p class="type">web design projects</p>
                </span>

                <span class="col-12	col-sm-12 col-md  col-lg  col-xl">
                    <h1 class="num">123</h1>
                    <p class="type">happy client</p>
                </span>

                <span class="col-12	col-sm-12 col-md  col-lg  col-xl">
                    <h1 class="num">15</h1>
                    <p class="type">award winner</p>
                </span>

                <span class="col-12	col-sm-12 col-md  col-lg  col-xl">
                    <h1 class="num">99</h1>
                    <p class="type">cup of coffee</p>
                </span>

                <span class="col-12	col-sm-12 col-md  col-lg  col-xl">
                    <h1 class="num">24</h1>
                    <p class="type">members</p>
                </span>
            </div>
        </div>
    </div>
</section>

<section class="service" id="service">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            we work with
                        </h3>
                        <h1 class="second-text">
                            amazing services
                        </h1>
                        <hr class="line-about"></hr>
                    </div>
                </div>
            </div>
        </div>

       
        <div class="detail">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/clock.png')}}" alt="clock" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>photography</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur
                             adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/web.png')}}" alt="web" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>web design</h3>
                            <p>Ipsum dolor sit amet, consectetur adipiscing
                             elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/com.png')}}" alt="com" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>creativity</h3>
                            <p>Dolor sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="line-service"></hr>

            <div class="row">
            
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/book.png')}}" alt="book" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>seo</h3>
                            <p>Ipsum dolor sit amet, consectetur
                             adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/home.png')}}" alt="home" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>css/html</h3>
                            <p>Ipsum dolor sit amet, consectetur adipiscing
                             elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/digital.png')}}" alt="digital" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>digital</h3>
                           
                            <p>Sit amet, consectetur adipiscing elit, sed
                            do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</section>

<section class="design" id="design">
    <div class="container">
        <div class="row ">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            for all devices
                        </h3>
                        <h1 class="second-text">
                            unique design
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

<section class="servicr2" id="servicr2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            Service
                        </h3>
                        <h1 class="second-text">
                            what we do
                        </h1>

                        <hr class="line-about"></hr>

                        <div class="description">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
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
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img class="img-fluid mb-5" src="{{asset('images/service2/man.jpg')}}" alt="Com" class="man">
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <div class="box">
                                    <h5 class="mb-2">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <img class="img-fluid" src="{{asset('images/service2/picture.png')}}" alt="picture">photography
                                            <div class="arrow">
                                                <a href="javascript:void(0)" onclick="myFunction2()"> 
                                                    <img class="img-fluid" src="{{asset('images/service2/arrow.png')}}" alt="arrow">
                                                </a>
                            
                            
                                                <div id="arrow2" style="display:none">
                                                    <img class="img-fluid" src="{{asset('images/service2/arrow2.png')}}" alt="arrow">
                                                </div>
                                              
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
                                            <img class="img-fluid" src="{{asset('images/service2/creative.png')}}" alt="creative">
                                            creativity
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
                                            <img class="img-fluid" src="{{asset('images/service2/web.png')}}" alt="web">web design
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

    <div id="slide-qoute" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="bg-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="quote">
                                    <div class="row">
                                        <div id="box-pic" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <img class="img-fluid" src="{{asset('images/service2/speech.png')}}" alt="speech">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 mt-4">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.”
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
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="quote">
                                    <div class="row">
                                        <div id="box-pic" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <img class="img-fluid" src="{{asset('images/service2/speech.png')}}" alt="speech">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 mt-4">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.”
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
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="quote">
                                    <div class="row">
                                        <div id="box-pic" class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <img class="img-fluid" src="{{asset('images/service2/speech.png')}}" alt="speech">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 mt-4">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                 quis nostrud exercitation.”
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
        <a class="carousel-control-prev" href="#slide-qoute" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide-qoute" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
   
</section>

<section class="team" id="team">
  
    <div class="container">
        <div class="group-title">
            <div class="col-12">
                <h3 class="first-text">
                    Who we are
                </h3>
                <h1 class="second-text">
                    meet our team
                </h1>
                <hr class="line-about"></hr>
                <div class="description">
                    <div class="col">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                </div>
            </div>
        </div>
  
    
    
        <div class="image-hover">
            <div class="row">
                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                    <div class="blog-relative">
                        <a class="imghover" href="javascript:void(0)">
                            <img src="{{asset('images/group/people1.jpg')}}" alt="people1" class="img-fluid">
                        </a>
                        <div class="blog-hover-color">
                            <div class="row">
                                <a href="javascript:void(0)"><img  src="{{asset('images/group/fb.png')}}" alt="facebook"></a>
                                <a href="javascript:void(0)"><img  src="{{asset('images/group/tw.png')}}" alt="twitter"></a>
                                <a href="javascript:void(0)"><img  src="{{asset('images/group/p.png')}}" alt="p"></a>
                                <a href="javascript:void(0)"><img  src="{{asset('images/group/ig.png')}}" alt="instrgram"></a>
                            </div>
                        </div>
                    </div>
                    <h5 class="name-team">matthew dix</h5>
                    <p class="position-team">Graphic Design</p>
                </div>
                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                    <div class="blog-relative">
                        <a class="imghover" href="javascript:void(0)">
                            <img src="{{asset('images/group/people2.jpg')}}" alt="people2" class="img-fluid">
                        </a>
                        <div class="blog-hover-color">
                            <div class="row">
                                <a href="javascript:void(0)"><img src="{{asset('images/group/fb.png')}}" alt="facebook"></a>
                                <a href="javascript:void(0)"><img src="{{asset('images/group/tw.png')}}" alt="twitter"></a>
                                <a href="javascript:void(0)"><img src="{{asset('images/group/p.png')}}" alt="p"></a>
                                <a href="javascript:void(0)"><img src="{{asset('images/group/ig.png')}}" alt="instrgram"></a>
                            </div>
                        </div>
                    </div>

                    <h5 class="name-team">christopher campbell</h5>
                    <p class="position-team">Branding/UX design</p>
                </div>
                <div class="col-12 col-sm-12 col-md col-lg col-xl">
                    <div class="blog-relative">
                        <a class="imghover" href="javascript:void(0)">
                            <img src="{{asset('images/group/people3.jpg')}}" alt="people3" class="img-fluid">
                        </a>
                        <div class="blog-hover-color">
                            <div class="row">
                                <a href="javascript:void(0)"><img src="{{asset('images/group/fb.png')}}" alt="facebook"></a>
                                <a href="javascript:void(0)"><img src="{{asset('images/group/tw.png')}}" alt="twitter"></a>
                                <a href="javascript:void(0)"><img src="{{asset('images/group/p.png')}}" alt="p"></a>
                                <a href="javascript:void(0)"><img src="{{asset('images/group/ig.png')}}" alt="instrgram"></a>
                            </div>
                        </div>
                    </div>
                    <h5 class="name-team">michael fertig </h5>
                    <p class="position-team">Developer</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray">
        <div class="logo">
            <div class="row">
                <div class="col-6 col-sm-6 col-md col-lg col-xl">
                    <a href="javascript:void(0)"><img class="img-fluid" src="{{asset('images/group/logo1.png')}}" alt="logo"></a>
                </div>
                <div class="col-6 col-sm-6 col-md col-lg col-xl">
                    <a href="javascript:void(0)"><img class="img-fluid" src="{{asset('images/group/logo2.png')}}" alt="logo"></a>
                </div>
                <div class="col-6 col-sm-6 col-md col-lg col-xl">
                    <a href="javascript:void(0)"><img class="img-fluid" src="{{asset('images/group/logo3.png')}}" alt="logo"></a>
                </div>
                <div class="col-6 col-sm-6 col-md col-lg col-xl">
                    <a href="javascript:void(0)"><img class="img-fluid" src="{{asset('images/group/logo4.png')}}" alt="logo"></a>
                </div>
                <div class="col-6 col-sm-6 col-md col-lg col-xl">
                    <a href="javascript:void(0)"><img class="img-fluid" src="{{asset('images/group/logo5.png')}}" alt="logo"></a>
                </div>
                <div class="col-6 col-sm-6 col-md col-lg col-xl">
                    <a href="javascript:void(0)"><img class="img-fluid" src="{{asset('images/group/logo6.png')}}" alt="logo"></a>
                </div>
            </div> 
        </div>
    </div>
</section>

<section class="work" id="work">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            What we do
                        </h3>
                        <h1 class="second-text">
                            some of our work
                        </h1>
                        <hr class="line-about"></hr>
                        <div class="description">
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div id="ran-pic" class="row">
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man">
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man">
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man" >
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man" >
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man">
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man">
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man">
            </div>
            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  mb-4">
                <img class="img-fluid" src="{{asset('images/work/man.jpg')}}" alt="man">
            </div>
        </div>
    </div>


    <div id="slide-qoute2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="quote2">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <img class="circle img-fluid" src="{{asset('images/work/back.png')}}" alt="back">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 mt-4">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.”
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
                <div class="bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="quote2">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                            <img class="circle img-fluid" src="{{asset('images/work/back.png')}}" alt="back">
                                        </div>
                                        <div id="text"  class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 mt-4">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.”
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
                <div class="bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                <div class="quote2">
                                    <div class="row">
                                        <div class="col-12 col-sm-11 col-md-3 col-lg-3 col-xl-3">
                                            <img class="circle img-fluid" src="{{asset('images/work/back.png')}}" alt="back">
                                        </div>
                                        <div id="text" class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 mt-4">
                                            <p>
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation.”
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
        <a class="carousel-control-prev" href="#slide-qoute2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide-qoute2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section class="people" id="people">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            for all devices
                        </h3>
                        <h1 class="second-text">
                            unique design
                        </h1>
                        <hr class="line-about"></hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people1.png')}}" alt="speech">
                        </div>
                        <div class="col-8">
                            <h3>
                                matthew dix
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>

                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                           quis nostrud exercitation.”
                                        </p>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people2.png')}}" alt="speech">
                        </div>
                        <div class="col-8">
                            <h3>
                                nick karvounis
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>
                          
                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation.”
                                        </p>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people3.png')}}" alt="speech">
                        </div>
                        <div class="col-8">
                            <h3>
                                jaelynn castillo 
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>
    
                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                           quis nostrud exercitation.”
                                        </p>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people4.png')}}" alt="speech">
                        </div>
                        <div class="col-8">
                            <h3>
                                mike petrucci
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>
                            
                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                           quis nostrud exercitation.”
                                        </p>
                                    </div>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      

    </div>
</section>

<section class="blog" id="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            Our stories
                        
                        </h3>
                        <h1 class="second-text">
                            latest blog
                          
                        </h1>
                        <hr class="line-about"></hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                <div class="picture">
                    <a href="javascript:void(0)">
                        <img src="{{asset('images/blog/women.jpg')}}" alt="women" class="img-fluid">
                    </a>
                </div>
                <div class="blue-box">
                    <div class="text">
                        <h3>15</h3>
                        <p>Jan</p>
                    </div>
                </div>
                <div class="detail-pic">
                    <h5>lorem ipsum dolor sit amet</h5>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                    <hr></hr>
                    <div class="detail-blog">
                        <div class="row">
                            <img src="{{asset('images/blog/view.png')}}" alt="view" class="img-fluid">
                            <p>542</p>
                            <img src="{{asset('images/blog/comment.png')}}" alt="comment" class="img-fluid">
                            <p>17</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                <div class="picture">
                    <a href="javascript:void(0)">
                        <img src="{{asset('images/blog/com.jpg')}}" alt="com" class="img-fluid">
                    </a>
                </div>
                <div class="blue-box">
                    <div class="text">
                        <h3>14</h3>
                        <p>Jan</p>
                    </div>
                </div>
                <div class="detail-pic">
                    <h5>lorem ipsum dolor sit amet</h5>
                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                    <hr></hr>
                    <div class="detail-blog">
                        <div class="row">
                            <img src="{{asset('images/blog/view.png')}}" alt="view" class="img-fluid">
                            <p>992</p>
                            <img src="{{asset('images/blog/comment.png')}}" alt="comment" class="img-fluid">
                            <p>42</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md col-lg col-xl">
                <div class="picture">
                    <a href="javascript:void(0)">
                        <img src="{{asset('images/blog/ipad.jpg')}}" alt="ipad" class="img-fluid">
                    </a>
                </div>
                <div class="blue-box">
                    <div class="text">
                        <h3>12</h3>
                        <p>Jan</p>
                    </div>
                </div>
                <div class="detail-pic">
                        <h5>lorem ipsum dolor sit amet</h5>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                        <hr></hr>   
                    <div class="detail-blog">
                        <div class="row">
                            <img src="{{asset('images/blog/view.png')}}" alt="view" class="img-fluid">
                            <p>1560</p>
                            <img src="{{asset('images/blog/comment.png')}}" alt="comment" class="img-fluid">
                            <p>98</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col">

                     <a href="javascript:void(0)" onclick="myFunction()"> 
                        <img src="{{asset('images/blog/map.png')}}" alt="map" class="img-fluid">
                        <h1>OPEN MAP</h1>
                        <hr class="line-map"></hr>
                    </a>


                    <div id="map" style="display:none">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.640737429422!2d100.55217541483024!3d13.740187590354896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d10aaebe6612135!2sPRANEAT+Co.%2C+Ltd.!5e0!3m2!1sen!2sth!4v1528864700897" width="100%" height="500px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                  
                </div>
            </div>
        </div>
    </div>   
</section>
@endsection



@section('script')
<script type="text/javascript">  
    // SHOW-HIDE 
    function myFunction() {
        if(document.getElementById('map') .style.display=='none') {
            document.getElementById('map') .style.display=''
        }else{
            document.getElementById('map') .style.display='none'
        }
    }


     // SHOW-HIDE-arrow 
     function myFunction2() {
        if(document.getElementById('arrow2') .style.display=='none') {
            document.getElementById('arrow2') .style.display=''
        }else{
            document.getElementById('arrow2') .style.display='none'
        }
    }
    
    

    // page scroll
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
        ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000, function() {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
  });

   
</script>

@endsection


