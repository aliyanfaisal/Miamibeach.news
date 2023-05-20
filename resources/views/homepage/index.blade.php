@extends('layouts.app')

@section('content')
    <!-- TOP BANNER  style="background-image:url('uploads/parallax.jpg');"-->
    <div id="home" class="parallax_x first-section pt-0" data-stellar-background-ratio="0.4">
        <div style="filter: brightness(0.6);">
            <video id="homeHero--video" class="homeHero--video" style="width: 100%;" preload="true" loop="true"
                fullscreen="true" autoplay="true" muted="" poster="/videos/bg.png">
                <source data-video-src="/videos/bg.mp4" type="video/webm" src="/videos/bg.mp4">
            </video>
        </div>

        <div class="container center_absolute">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="big-tagline clearfix">
                        <h2>Book this Property with Castle Milk</h2>
                        <p class="lead">Book your reservation now with us. We will provide the best service. </p>
                        @if($_auth!="")<a data-scroll href="{{ route('property-details') }}#gallery" class="btn btn-light btn-radius grd1 btn-brd">View Gallery</a>@endif
                    </div>
                </div>
                @php
                    $cookie_user = json_decode(\Illuminate\Support\Facades\Cookie::get('curr_user'));
                    
                @endphp
                <div class="col-md-6 wow slideInRight hidden-xs hidden-sm">
                    <div class="contact_form">
                        {{-- {{ print_r(Session::all()) }} --}}
                        <h3><i class="fa fa-envelope-o grd1 global-radius"></i>
                            {{ $cookie_user != '' ? 'QUICK APPOINTMENT' : 'Get The Details Now!' }}</h3>


                        <form id="contactform1" class="row" name="contactform" method="post"
                            action="{{ route('submit-property-access') }}">
                            @if ($errors->any())
                                <div class="alert alert-danger flex-grow-1">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @csrf
                            <fieldset class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="name1" id="first_name1" class="form-control"
                                        placeholder="First Name" required {{ $cookie_user != '' ? 'readonly' : '' }}   
                                        value="{{ $cookie_user != '' ? $cookie_user->name : '' }}">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <input type="email" name="email1" id="email1" class="form-control"
                                        placeholder="Your Email" required {{ $cookie_user != '' ? 'readonly' : '' }}
                                        value="{{ $cookie_user != '' ? $cookie_user->email : '' }}">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-4">
                                    <input type="text" name="phone1" id="phone_number" class="form-control"
                                        placeholder="Your Phone" required {{ $cookie_user != '' ? 'readonly' : '' }}
                                        value="{{ $cookie_user != '' ? $cookie_user->phone_number : '' }}">
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    @if ($cookie_user == '')
                                        <button type="submit" value="SEND" id="submit1"
                                            class="btn btn-light btn-radius btn-brd grd1 btn-block">Get Access to
                                            Property</button>
                                    @else
                                        <a class="btn btn-light btn-radius btn-brd grd1 btn-block" href="{{ route('property-details') }}">Show Details </a>
                                    @endif
                                </div>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>



    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/css/intlTelInput.css" />
    <style>
        .iti {
            width: 100%
        }
    </style>

    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.19/js/intlTelInput.min.js"></script>
    <script>
        var input = document.querySelector("#phone_number");
        window.intlTelInput(input, {
            separateDialCode: true,
            preferredCountries: ["us", "uk", "pk", "no"]
        });

        let form = document.querySelector("#contactform1")
        form.addEventListener("submit", function(e) {

            let code = document.querySelector(".iti__selected-dial-code").innerHTML

            document.querySelector("#phone_number").value = code + document.querySelector("#phone_number").value

        })
    </script>
@endsection
