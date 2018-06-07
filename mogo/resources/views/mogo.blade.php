@extends('layouts.master') @section('content')


<section class="banner" id="home">
    <div id="slide-banner" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <div class="tab">
                <li class="li-banner" data-target="#slide-banner" data-slide-to="0" class="active"></li>
                <span class="number">01</span>&nbsp
                <span class="text">INTRO</span>
            </div>
            <div class="tab">
                <li class="li-banner" data-target="#slide-banner" data-slide-to="1"></li>
                <span class="number">02</span>&nbsp
                <span class="text">WORK</span>
            </div>
            <div class="tab">
                <li class="li-banner" data-target="#slide-banner" data-slide-to="2"></li>
                <span class="number">03</span>&nbsp
                <span class="text">ABOUT</span>
            </div>
            <div class="tab">
                <li class="li-banner" data-target="#slide-banner" data-slide-to="3"></li>
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

<section class="about" id="home">
    <div class="container"> 
        <div class="row">
            <div class="col">
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
                
                <div class="image-about">                   
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

<section class="service" id="home">
    <div class="container">
        <div class="row">
            <div class="col">
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

       
        <div class="detail">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/clock.png')}}" alt="clock" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>photography</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur
                            <br> adipiscing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/web.png')}}" alt="web" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>web design</h3>
                            <p>Ipsum dolor sit amet, consectetur adipiscing
                            <br> elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/com.png')}}" alt="com" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>creativity</h3>
                            <p>Dolor sit amet, consectetur adipiscing elit, sed
                            <br> do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="line-service"></hr>

            <div class="row">
            
                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/book.png')}}" alt="book" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>seo</h3>
                            <p>Ipsum dolor sit amet, consectetur
                            <br> adipiscing elit, sed do eiusmod.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/home.png')}}" alt="home" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>css/html</h3>
                            <p>Ipsum dolor sit amet, consectetur adipiscing
                            <br> elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="col-3">
                            <div class="pic">
                                <img src="{{asset('images/service/digital.png')}}" alt="digital" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-9">
                            <h3>digital</h3>
                            <br>
                            <p>Sit amet, consectetur adipiscing elit, sed
                            <br> do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</section>

<section class="design" id="home">
    <div class="container">
        <div class="row ">
            <div class="col">
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

<section class="servicr2" id="home">
    <div class="container">
        <div class="row">
            <div class="col">
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

    <div id="slide-qoute" class="carousel slide" data-ride="carousel">
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

<section class="team" id="home">
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
            <div class="logo">
                <div class="row">
                    <div class="col">
                        <img class="img-fluid" src="{{asset('images/group/logo1.png')}}" alt="logo">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="{{asset('images/group/logo2.png')}}" alt="logo">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="{{asset('images/group/logo3.png')}}" alt="logo">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="{{asset('images/group/logo4.png')}}" alt="logo">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="{{asset('images/group/logo5.png')}}" alt="logo">
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="{{asset('images/group/logo6.png')}}" alt="logo">
                    </div>
                </div> 
            </div>
        </div>
    </div>
</section>

<section class="work">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            What we do
                            <br>
                        </h3>
                        <h1 class="second-text">
                            some of our work
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

    <div class="pic-random">
        <div class="row">
            <div class="col">
                {{-- jQuery --}}
            </div>
        </div>
    </div>

    <div id="slide-qoute2" class="carousel slide" data-ride="carousel">
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

<section class="people">
    <div class="container">
        <div class="row">
            <div class="col">
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

        <div class="row">
            <div class="col">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people1.png')}}" alt="speech">&nbsp
                        </div>
                        <div class="col-8">
                            <h3>
                                matthew dix
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>
                            <br>
                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            <br> quis nostrud exercitation.”
                                        </p>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people2.png')}}" alt="speech">&nbsp
                        </div>
                        <div class="col-8">
                            <h3>
                                nick karvounis
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>
                            <br>
                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            <br> quis nostrud exercitation.”
                                        </p>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people3.png')}}" alt="speech">&nbsp
                        </div>
                        <div class="col-8">
                            <h3>
                                jaelynn castillo 
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>
                            <br>
                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            <br> quis nostrud exercitation.”
                                        </p>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="blog-small">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid" src="{{asset('images/people/people4.png')}}" alt="speech">&nbsp
                        </div>
                        <div class="col-8">
                            <h3>
                                mike petrucci
                            </h3>
                            <h5>
                                Graphic Design
                            </h5>

                            <hr class="line-people"></hr>
                            <br>
                            <div class="detail">
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            <br> quis nostrud exercitation.”
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

<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="group-title">
                    <div class="col-12">
                        <h3 class="first-text">
                            Our stories
                            <br>
                        </h3>
                        <h1 class="second-text">
                            latest blog
                            <br>
                        </h1>
                        <hr class="line-about"></hr>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="picture">
                    <img src="{{asset('images/blog/women.jpg')}}" alt="women" class="img-fluid">
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
                        <br> ut labore et dolore magna aliqua.</p>
                    <hr></hr>
                    
                    <div class="detail-blog">
                        <div class="row">
                            <span class="col-1.5">
                                <img src="{{asset('images/blog/view.png')}}" alt="view" class="img-fluid">
                            </span>
                            <span class="col-2">
                                <p>542</p>
                            </span>
                            <span class="col-1.5">
                                <img src="{{asset('images/blog/comment.png')}}" alt="comment" class="img-fluid">
                            </span>
                            <span class="col">
                                <p>17</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="picture">
                    <img src="{{asset('images/blog/com.jpg')}}" alt="com" class="img-fluid">
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
                        <br> ut labore et dolore magna aliqua.</p>
                    <hr></hr>
                    <div class="detail-blog">
                        <div class="row">
                            <span class="col-1.5">
                                <img src="{{asset('images/blog/view.png')}}" alt="view" class="img-fluid">
                            </span>
                            <span class="col-2">
                                <p>992</p>
                            </span>
                            <span class="col-1.5">
                                <img src="{{asset('images/blog/comment.png')}}" alt="comment" class="img-fluid">
                            </span>
                            <span class="col">
                                <p>42</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="picture">
                    <img src="{{asset('images/blog/ipad.jpg')}}" alt="ipad" class="img-fluid">
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
                        <br> ut labore et dolore magna aliqua.</p>
                    <hr></hr>                   
                    <div class="detail-blog">
                        <div class="row">
                            <span class="col-1.5">
                                <img src="{{asset('images/blog/view.png')}}" alt="view" class="img-fluid">
                            </span>
                            <span class="col-2">
                                <p>1560</p>
                            </span>
                            <span class="col-1.5">
                                <img src="{{asset('images/blog/comment.png')}}" alt="comment" class="img-fluid">
                            </span>
                            <span class="col">
                                <p>98</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>

</section>
@endsection