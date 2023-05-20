@php

@endphp
<!DOCTYPE html>
<htm llang="en">

<head>
     <!--  Ba sic
     
-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile
 Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Site Metas -->
     <title>Castle Milk
     
Rentals</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
     <meta name="author
    "
 content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- Site CSS -->
    <link rel="stylesheet" href="/style.css">
    <!-- Colors CSS -->
    {{-- <link rel="stylesheet" href="/css/colors.css"> --}}
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="/css/custom.css"> --}}
    <!-- Modernizer for Portfolio -->
    {{-- <script src="js/modernizer.js"></script> --}}
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

</head>

<body class="realestate_version">
    <style>
        .position-absolute {
            position: absolute !important;
        }
    </style>
    <div id="toast-target"></div>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="/images/loaders/loader-realestate.gif" alt="">
    </div>

    <!-- end loader -->
    <!-- END LOADER -->
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default" data-spy="affix">
            <div class="container-fluid">
           
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img width="80px" style="border-radius:50%" src="/images/main-logo.jpeg" width="220" alt="image" />
                    </a>
                </div>

                @if($_auth!="")
                <div id="navbar" class="navbar-collapsex collapse show">
                    <ul class="nav navbar-dark navbar-right">
                        <li><a data-scroll href="#home">Home</a></li>
                        <li><a data-scroll href="#features">Features <span class="hidden-xs">*</span></a></li>
                        <li><a data-scroll href="#agent">About Seller</a></li>
                        <li><a data-scroll href="#gallery">Gallery</a></li>
                        <li><a data-scroll href="#support">Contact</a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-twitter global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-facebook global-radius"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fa fa-linkedin global-radius"></i></a></li>
                        <!-- Authentication Links -->

                    </ul>
                </div>
                @endif
            </div>
        </nav>
    </header>


    <section id="afb_main">
        @yield('content')
    </section>


    <style>
        .afb_list{
            display: flex !important;
            list-style-type: none;
        }
        .afb_list > li {
            margin-left: 10px;
            padding-right: 10px;
            border-right: 1px solid grey;
        }
        .afb_list a{
            color: grey;
            margin-left: 3px
        }
    </style>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="d-flex @if($_auth!='') justify-content-between @else justify-content-center @endif">
                    <p class="footer-company-name ">All Rights Reserved MiamiBeach.News
                        &copy;
                        2023
                    </p>

                    @if($_auth!="")
                    <div class="text-align:center">
                        <ul class="afb_list">
                            <li class="list-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg> <a href="tel:(786) 248-1055">(786) 248-1055</a></li>

<li class="list-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
 <a href="https://wa.me/13472449996">(347) 244-9996</a></li>
                            <li class="list-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>
 <a href="mailto:mickael@mbdv.us">mickael@mbdv.us</a></li>
                        </ul>
                    </div>
                    @endif
                </div>

            </div>
        </div>
        <!-- end container -->
    </div>
    <!-- end copyrights -->
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


    <!-- ALL JS FILES -->
    <script src="/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="/js/custom.js"></script>
    <!-- <script src="/js/portfolio.js"></script> -->
    <!-- <script src="/js/hoverdir.js"></script>     -->
    <!-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script> -->
    <!-- MAP & CONTACT -->
    <!-- <script src="/js/map.js"></script> -->

    @if (session('message'))
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.all.min.js"></script>
    @endif
    <script>
        @if (session('message'))
            Swal.fire({
                text: '{{ session('message') }}',
                target: '#custom-target',
                customClass: {
                    container: 'position-absolute'
                },
                toast: true,
                showConfirmButton: false,
                showCloseButton: true,
                position: 'top-right'
            })
        @endif
    </script>
</body>

</html>
