<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZeHa_Web - @yield('title')</title>
    <link rel="icon" href="{{ asset('webpage/img/z.png') }}" type="image/png">
    <!-- Bootstrap CSS -->

    <!-- form style -->
<link href="{{asset('form/https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('form/https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('form/css/style.css')}}">
    <!-- end -->
    <link rel="stylesheet" href="{{ asset('webpage/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('webpage/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{ asset('webpage/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('webpage/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('webpage/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('webpage/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset('webpage/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <head>
        <title>ZeHa_Web - @yield('title')</title>
    </head>
  

<body style="height:100vh;">




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
                <a class="navbar-brand logo_h" href="{{ url('/') }}">
                    <img src="{{ asset('webpage/img/zeha.png') }}" alt="Logo" style="width: 100px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item {{ request()->is('about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('about') }}">About</a>
                            </li>
                            <li class="nav-item {{ request()->is('blog') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('blog') }}">blog</a>
                            </li>
                            <li class="nav-item {{ request()->is('portfolio') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('portfolio') }}">portfolio</a>
                            </li>
                            <li class="nav-item {{ request()->is('services') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('services') }}">services</a>
                            </li>
                            @if(auth()->user()->user_type == 'admin')
                                <li class="nav-item">
                                    <a class="nav-link" href="admin/1">Dashboard</a>
                                </li>
                            @elseif(auth()->user()->user_type == 'student')
                                <li class="nav-item">
                                    <a class="nav-link" href="student">Student Dashboard</a>
                                </li>
                            @endif
                            @if(auth()->user()->user_type == 'teacher')
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Teacher Dashboard
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="teacher">Dashboard</a>
                                    </div>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>


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
<script src="{{asset('webpage/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('webpage/js/popper.js')}}"></script>
<script src="{{asset('webpage/js/bootstrap.min.js')}}"></script>
<script src="{{asset('webpage/js/stellar.js')}}"></script>
<script src="{{asset('webpage/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('webpage/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('webpage/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('webpage/vendors/isotope/isotope-min.js')}}"></script>
<script src="{{asset('webpage/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('webpage/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('webpage/js/mail-script.js')}}"></script>
<!--gmaps Js-->
<script src="{{asset('webpage/https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY')}}"></script>
<script src="{{asset('webpage/js/gmaps.min.js')}}"></script>
<script src="{{asset('webpage/js/theme.js')}}"></script>


</body>
</html>









  {{-- <li class="nav-item submenu dropdown">
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
                                    @if(auth()->user()->isAdmin())
                                        <li class="nav-item"><a class="nav-link" href="admin/1">Dashboard</a></li>
                                    @else
                                        <li class="nav-item"><a class="nav-link" href="user/1">Dashboard</a></li>
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
                        @endguest --}}