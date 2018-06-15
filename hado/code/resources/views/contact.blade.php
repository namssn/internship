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
    <section class="background-contact">
        <section class="contact">
            <div class="container">
                <div class="contact-title">
                    <div class="row">
                        <div class="col">
                            <h1>contact us</h1>
                        </div>
                    </div>
                </div>
                <div class="contact-detail">
                <div class="row">
                        <div class="col">
                            <p>
                                HADO makes use of Augmented Reality (AR) technology. <br>
                                Come on down and experience it yourself, <br>
                                We are the first and only concept store in the world!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <img id="mail" class="img-fluid" src="{{asset('image/contact/letter.png')}}" alt="mail">
                                <p>info@hadothailand.com</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <img id="tel" class="img-fluid" src="{{asset('image/contact/tel.png')}}" alt="tel">
                                <P>0 2445 6722</P>
                            </div>
                        </div>
                    </div>
                </div>

                    
        </section>

        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <hr class="line-footer"></hr>
                        <div class="logo">
                            <div class="row">
                                <div class="col">
                                    <img id="cpn" class="img-fluid" src="{{asset('image/footer/c.png')}}" alt="cpn">
                                </div>
                                <div class="col">
                                    <img id="centralworld" class="img-fluid" src="{{asset('image/footer/cw.png')}}" alt="centralworld">
                                </div>
                                <div class="col">
                                    <img id="praneat" class="img-fluid" src="{{asset('image/footer/praneat.png')}}" alt="praneat">
                                </div>
                                <div class="col">
                                    <img id="miryn" class="img-fluid" src="{{asset('image/footer/mr.png')}}" alt="miryn">
                                </div>
                            </div>
                        </div>

                        <div class="copyright ">
                            <p>	&copy;Copyright 2018 HADO Thailand - All rights reserved.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </section>
</body>

</html>