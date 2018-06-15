<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- fonts --}}
     <link rel="stylesheet" href="{{asset('fonts/stylesheet.css')}}"> 
     {{-- css --}}
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
                            <img src="{{asset('image/popup/slide.jpg')}}" alt="hado-pic">
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
                        <div class="col-4">
                            <div class="row">
                                <div class="col-2">
                                    <img id="calender" class="img-fluid" src="{{asset('image/popup/bag.png')}}" alt="calender">
                                </div>
                                <div class="col-10">
                                    <p>May 19, 2018</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-2">
                                    <img id="clock" class="img-fluid" src="{{asset('image/popup/clock.png')}}" alt="clock">
                                </div>
                                <div class="col-10">
                                    <p>12:00 pm – 5:00 pm</p> 
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <div class="col-2">
                                    <img id="pin" class="img-fluid" src="{{asset('image/popup/pin.png')}}" alt="pin">
                                </div>
                                <div class="col-10">
                                    <p>Central World Thailand</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paragraph">
                    <div class="row">
                        <div class="col">
                            <p>
                                AR Exergaming! (Exercise + Gaming) Getting ready for Rookie Cup in June? 
                                May monthly Rookie Challenge is up! Mark down your calendar, 19 May (Sat). 
                                Hone your skills and get ready for one of our main cup this 2018 beginning 
                                with Rookie Cup at Asia Game Festival, Suntec City. Form your teams of 3
                                and win the cash prizes of up to $300!! Registration starts at 12pm. 
                                For you to get familiarise with a competition size of 10m, participants 
                                will commence trial sessions from 1215pm to 1245pm. Tournament will start from 1pm!
                            </p>

                             <p>
                                Our competition will be at *SCAPE, 5th floor function room. Want to get physical 
                                and active and yet win some money? What are you waiting for?
                            </p>

                            <p>Registration form with your team of 3, click here: <a href="https://goo.gl/9gD9vn">https://goo.gl/9gD9vn</a>
                            <br><span>#ARnotVR #Exergaming #DigitalDodgeball #HADOSingapore #getactive #ARTechnoSport</span>
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
</body>
</html>