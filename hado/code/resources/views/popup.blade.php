<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> {{-- fonts --}}
    <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}"> {{-- css --}}

    <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('js/slick/slick-theme.css')}}">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">


    <title>- hado -</title>
</head>

<body>
    <section class="backgrond-popup">
        <section class="slide-picture">
            <div class="container">
                <div class="title">
                    <div class="row">
                        <div class="col">
                            <h1>HADO Rookie Challenge 2</h1>
                        </div>
                    </div>
                </div>
                <div class="slide-pic">
                    <div class="row">
                        <div class="col-12">
        
                            <div id="big-pic" class="slider slider-for">
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/slide.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin1.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin2.gif')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin3.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/slide.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin1.jpg')}}" alt="hado-pic">
                                </div>
                            </div>

                            <div class="slide-count-wrap">
                                <span class="current"></span> /
                                <span class="total"></span>
                            </div>

                            <div  id="small-pic" class="slider slider-nav">
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/slide.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin1.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin2.gif')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin3.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/slide.jpg')}}" alt="hado-pic">
                                </div>
                                <div>
                                    <img class="img-fluid" src="{{asset('image/popup/cin1.jpg')}}" alt="hado-pic">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="detail">
            <div class="container">
                <div class="title2">
                    <div class="row">
                        <div class="col">
                            <h2>HADO Rookie Challenge 2</h2>
                        </div>
                    </div>
                </div>

                <div class="date">
                    <div class="row">
                        <div class="col">
                            <ul class="horiz">
                                <li>
                                    <img id="calender" class="img-fluid" src="{{asset('image/popup/bag.png')}}" alt="calender">
                                    <span>May 19, 2018</span>
                                </li>
                                <li>
                                    <img id="calender" class="img-fluid" src="{{asset('image/popup/clock.png')}}" alt="clock">
                                    <span>12:00 pm – 5:00 pm </span>
                                </li>
                                <li>
                                    <img id="calender" class="img-fluid" src="{{asset('image/popup/pin.png')}}" alt="pin">
                                    <span>Central World Thailand</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="row">
                        <div class="col">
                            <p>
                                AR Exergaming! (Exercise + Gaming) Getting ready for Rookie Cup in June? May monthly Rookie Challenge is up! Mark down your
                                calendar, 19 May (Sat). Hone your skills and get ready for one of our main cup this 2018
                                beginning with Rookie Cup at Asia Game Festival, Suntec City. Form your teams of 3 and win
                                the cash prizes of up to $300!! Registration starts at 12pm. For you to get familiarise with
                                a competition size of 10m, participants will commence trial sessions from 1215pm to 1245pm.
                                Tournament will start from 1pm!
                            </p>

                            <p>
                                Our competition will be at *SCAPE, 5th floor function room. Want to get physical and active and yet win some money? What
                                are you waiting for?
                            </p>

                            <p>Registration form with your team of 3, click here:
                                <a href="https://goo.gl/9gD9vn">https://goo.gl/9gD9vn</a>
                                <br>
                                <span>#ARnotVR #Exergaming #DigitalDodgeball #HADOSingapore #getactive #ARTechnoSport</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="button-close">
                    <div class="row ">
                        <div class="col mt-2">
                            <button type="button" class="btn btn-outline-danger">
                                CLOSE
                                <img id="close" class="img-fluid" src="{{asset('image/popup/close.png')}}" alt="close">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/slick/slick.min.js')}}"></script>
   


    <script type="text/javascript">
        $(document).ready(function(){
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                nextArrow: '<img id="arrow-next" src="{{asset('image/popup/arrowR.png')}}" alt="arrow-next">',
                prevArrow: '<img id="arrow-back" src="{{asset('image/popup/arrowL.png')}}" alt="arrow-back">',
                fade: true,
                asNavFor: '.slider-nav'
            });

            $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                centerMode: true,
                focusOnSelect: true,
            });
        });
        
        // count slide pic
        var $gallery = $('.slider-nav');
        var slideCount = null;

        $gallery.on('init', function(event, slick){
            slideCount = slick.slideCount;
            setSlideCount();
            setCurrentSlideNumber(slick.currentSlide);
        });

        $gallery.on('beforeChange', function(event, slick, currentSlide, nextSlide){
            setCurrentSlideNumber(nextSlide);
        });

        function setSlideCount() {
            var $el = $('.slide-count-wrap').find('.total');
            $el.text(slideCount);
        }

        function setCurrentSlideNumber(currentSlide) {
            var $el = $('.slide-count-wrap').find('.current');
            $el.text(currentSlide + 1);
        }


    </script>
</body>

</html>