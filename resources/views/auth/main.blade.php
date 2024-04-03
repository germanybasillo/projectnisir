<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZeHa_Web - @yield('title')</title>
    <link rel="icon" href="{{ asset('webpage/img/z.png') }}" type="image/png">
    <!-- Bootstrap CSS -->

    <!-- form style -->
<link href="{{asset('form/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('formhttps://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('form/css/style.css')}}">
    <!-- end -->
    <link rel="stylesheet" href="{{ asset('webpage/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('webpage/vendors/linericon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('webpage/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webpage/vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('webpage/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('webpage/vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('webpage/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
 #loader {
    position: fixed;
    z-index: 9999;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: opacity 0.5s ease-in-out;
    opacity: 1;
}

.loader-inner {
    width: 50px;
    height: 50px;
    position: relative;
    animation: spin 2s linear infinite;
}
.loader-line {
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: #800080;
    animation: stretch 1s infinite ease-in-out;
}

.loader-line:nth-child(1),
.loader-line:nth-child(3) {
    top: calc(50% - 1px);
    left: 0;
    transform: rotate(45deg);
}

.loader-line:nth-child(2),
.loader-line:nth-child(4) {
    top: calc(50% - 1px);
    right: 0;
    transform: rotate(-45deg);
}


.loader-line:nth-child(1) { top: 0; }
.loader-line:nth-child(2) { top: 8px; }
.loader-line:nth-child(3) { top: 16px; }
.loader-line:nth-child(4) { top: 24px; }
.loader-line:nth-child(5) { top: 32px; }
.loader-line:nth-child(6) { top: 40px; }
.loader-line:nth-child(7) { top: 48px; }
.loader-line:nth-child(8) { top: 56px; }

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

@keyframes stretch {
    0%, 40%, 100% { transform: scaleY(0.4); }
    20% { transform: scaleY(1.0); }
}
        .user-icon {
    color: blue;
}

.admin-icon {
    color: black;
}
    </style>
    <script>
    window.addEventListener("load", function () {
        const loader = document.getElementById("loader");
        loader.style.opacity = "0";
        setTimeout(() => {
            loader.style.display = "none";
        }, 500);
    });
</script>
</head>
<body>
<div id="loader">
        <div class="loader-inner">
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
            <div class="loader-line"></div>
        </div>
    </div>

    
@if ($errors->any())
    <!-- Display the first error message -->
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif
<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
    
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="/"><img src="{{ asset('webpage/img/zeha.png') }}" alt="" style="width: 100px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item active"><a class="nav-link" href="home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                   aria-expanded="false">Portfolio Details</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="portfolio">Portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog">Single-Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="services">Services</a></li>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
    <span style="font-size: 0.8em;">({{ auth()->user()->isAdmin() ? 'Admin' : 'User' }})</span>
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
       aria-expanded="false">
        @if(auth()->user()->isAdmin())
            <i class="fa fa-shield-alt admin-icon"></i>
        @else
            <i class="fa fa-user user-icon"></i>
        @endif
    </a>
    <ul class="dropdown-menu">
    <span style="display: block; padding: 10px 30px; color: #333; font-weight: bold;">{{ auth()->user()->email }}</span>
        @if(auth()->user()->isAdmin())
            <li class="nav-item"><a class="nav-link" href="admin">Dashboard</a></li>
        @else
            <li class="nav-item"><a class="nav-link" href="user">Dashboard</a></li>
        @endif
        <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();"
            >Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
        </li>
    </ul>
</li>

@endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->
<main>
    @yield('content')
</main>
<!--================ Footer Area =================-->
<footer class="text-center">
    <span style="color:blue;"><img src="{{ asset('webpage/img/zeha.png') }}" alt="" style="width: 100px;">All rights reserved.</span>
</footer>
<!--================End Footer Area =================-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<!-- formjs -->
<script src="{{asset('form/js/jquery.min.js')}}"></script>
  <script src="{{asset('form/js/popper.js')}}"></script>
  <script src="{{asset('form/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('form/js/main.js')}}"></script>
<!-- end -->
<script src="{{ asset('webpage/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('webpage/js/popper.js') }}"></script>
<script src="{{ asset('webpage/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('webpage/js/stellar.js') }}"></script>
<script src="{{ asset('webpage/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('webpage/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('webpage/vendors/isotope/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('webpage/vendors/isotope/isotope-min.js') }}"></script>
<script src="{{ asset('webpage/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('webpage/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('webpage/js/mail-script.js') }}"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="{{ asset('webpage/js/gmaps.min.js') }}"></script>
<script src="{{ asset('webpage/js/theme.js') }}"></script>

</body>
</html>
