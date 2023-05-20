@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="/css/single-property-css.css">
    <style>
        .header {
            background: white !important;
            position: relative !important;
            border-bottom: 2px solid #eee;
            padding: 5px 40px 0px 40px !important;
        }

        .header a {
            color: #1f1f1f !important;
            font-weight: bold
        }

        #afb_main {
            margin-top: 50px
        }

        .title-d {
            font-weight: bold
        }

        .carousel.x img {
            max-height: 550px
        }

        .color-text-a{
            color: grey !important
        }
        .navbar-header > button{
            display:none !important
        }

        .navbar-header .navbar-brand img{
            border: 1px solid grey;
        }
    </style>
    <!--/ Intro Single star /-->
    <section class="intro-single pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">3744 NE 167th St #43</h1>
                        <span class="color-text-a">North Miami Beach, FL 33160-3532</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                3744 NE 167th St #43    
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-12 col-md-9">
                            <div id="property-single-carousel" class="carousel x slide owl-carousel owl-arrow gallery-property"
                                data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-interval="10000">
                                        <img src='{{asset("images/slider_images/GetMedia_0.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_0.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_1.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_1.jpeg")}}'>
                                    </div>
                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_2.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_2.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_3.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_3.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_4.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_4.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_5.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_5.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_6.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_6.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_7.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_7.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_8.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_8.jpeg")}}'>
                                    </div>


                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_9.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_9.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_10.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_10.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_11.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_11.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_12.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_12.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_13.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_13.jpeg")}}'>
                                    </div>

                                    <div class="carousel-item">
                                        <img src='{{asset("images/slider_images/GetMedia_14.jpeg")}}' class="d-block w-100" alt='{{asset("images/slider_images/GetMedia_14.jpeg")}}'>
                                    </div>
                                    
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#property-single-carousel"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#property-single-carousel"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>

                        </div>
                        <div class="col-12 col-md-3">
                            <div class="property-price d-flex justify-content-center foo mb-4">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money">$</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c" style="border-bottom: 3px solid #2d2d2d;">770,000</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h2 class="title-d">Quick Summary</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>&nbsp;North Miami Beach, FL 33160-3532</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>Condominium</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Size:</strong>
                                            <span>1,486 sqft</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>340m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Beds:</strong>
                                            <span>2</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span>3</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Days on Market:</strong>
                                            <span>10</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="">
                                <div class="row section-t3">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Contact Seller</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img style="border-radius:50%" src="https://www.castlemilk.rentals/wp-content/uploads/2023/02/mickael.jpg"
                                            alt="" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="property-agent">
                                            <ul class="list-unstyled">
                                                <li class="d-flex justify-content-between">
                                                    <strong>Phone:</strong>
                                                    <span class="color-text-a"><a href="tel:(786) 248-1055">(786) 248-1055</a></span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>WhatsApp:</strong>
                                                    <span class="color-text-a"><a href="https://wa.me/13472449996">(347) 244-9996</a></span>
                                                </li>
                                                <li class="d-flex justify-content-between">
                                                    <strong>Email:</strong>
                                                    <span class="color-text-a"><a href="mailto:mickael@mbdv.us">mickael@mbdv.us</a></span>
                                                </li>
                                                <!-- <li class="d-flex justify-content-between">
                                                    <strong>Skype:</strong>
                                                    <span class="color-text-a">Annabela.ge</span>
                                                </li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                                    </div>
                                    <div class="col-md-7 col-lg-7 section-md-t3">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="title-box-d">
                                                    <h3 class="title-d">Property Description</h3>
                                                </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                Corner townhouse with 20-foot dock in the beautiful, gated community of Eastern Shores. Unrestricted ocean access. Just minutes to Haulover cut. The bedrooms each with their own bathroom are located on the second level. Half bathroom on first level. Porcelain flooring throughout the property. Hurricane impact sliding glass door. Entertain your guests on the patio overlooking the water. Two assigned parking spaces just outside your front door. 
                                </p>
                                <p class="description color-text-a no-margin">
                                Walking distance to numerous restaurants, shopping and IPEC movie theater. Special assessment has been passed for installation of a new seawall. Roof is 5 years old. Photos with furniture are staged photos. There is no furniture. Kitchen is a staged photo.
                                </p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Amenities</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    <li>Heating</li>
                                    <li>Cooling</li>
                                    <li>Utilities</li>
                                    <li>Pool</li>
                                    <li>Pets Allowed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video"
                                role="tab   " aria-controls="pills-video" aria-selected="true">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans"
                                role="tab" aria-controls="pills-plans" aria-selected="false">Floor Plans</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab"
                                aria-controls="pills-map" aria-selected="false">Ubication</a>
                        </li> -->
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-video" role="tabpanel"
                            aria-labelledby="pills-video-tab">
                            <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460"
                                frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <img src="img/plan2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                                width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>
    <!--/ Property Single End /-->
@endsection
