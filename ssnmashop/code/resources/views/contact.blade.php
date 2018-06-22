@extends('layouts.master')
@section('content')
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col mt-5 mb-5">
                <h1>CONTACT</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4 mb-5">
                <h2 class="mb-4">VISIT US</h2>
                <p>500 Terry Francois St.
                    <br>
                    San Francisco, CA 94158
                    <br>
                    123-456-7890
                </p>
            </div>
            <div class="col-4">
                <h2 class="mb-4">OPENING HOURS</h2>
                <p>
                    Mon - Fri: 7am - 10pm
                    <br>
                    ​​Saturday: 8am - 10pm
                    <br>
                    ​Sunday: 8am - 11pm
                </p>
            </div>
            <div class="col-4">
                <h2 class="mb-4">CUSTOMER SERVICE</h2>
                 <p>
                    1-800-000-000
                    <br>
                    123-456-7890
                    <br>
                    info@my-domain.com
                </p>
            </div>
        </div>
        <div class="map">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <a href="javascript:void(0)" onclick="myFunction()">
                            <img src="{{asset( 'images/contact/placeholder.png')}}" alt="map" class="img-fluid">
                            <h2>OPEN MAP</h2>
                        </a>

                        <div id="map" style="display:none">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.640737429422!2d100.55217541483024!3d13.740187590354896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d10aaebe6612135!2sPRANEAT+Co.%2C+Ltd.!5e0!3m2!1sen!2sth!4v1528864700897 "width="100%" height="500px " frameborder="0 " style="border:0 " allowfullscreen></iframe>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>
@endsection

@section('script')
<script type="text/javascript">
     // SHOW-HIDE MAP
     function myFunction() {
        if (document.getElementById('map').style.display == 'none') {
            document.getElementById('map').style.display = ''
        } else {
            document.getElementById('map').style.display = 'none'
        }
    }
</script> 
@endsection