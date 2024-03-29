<!doctype html>
<html lang="en">


	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('webpage/img/z.png')}}" type="image/png">



  
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('webpage/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('webpage/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('webpage/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('webpage/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('webpage/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('webpage/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('webpage/css/style.css')}}">

    <head>
        <title>ZeHa_Web - @yield('title')</title>
     </head>

<body>

    <nav class="navbar navbar-light navbar-expand-lg mb-5">
        <div class="container">
        <a class="navbar-brand logo_h" href="/"><img src="webpage/img/zeha.png" alt="" style="width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                    
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    </li>
                    @else
                    <li class="nav-item active"><a class="nav-link" href="home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                    <li class="nav-item">
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
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
    aria-expanded="false">
        <i class="fa fa-user"></i>
        <span style="font-size: 0.8em;">({{ auth()->user()->isAdmin() ? 'Admin' : 'User' }})</span>
    </a>
    <ul class="dropdown-menu">
        <li style="margin-left:10px;">{{ auth()->user()->email }}</li>
        @if(auth()->user()->isAdmin())
            <li class="nav-item">
                <a class="nav-link" href="admin">Dashboard</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="user">Dashboard</a>
            </li>
        @endif
         <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
         </li>
            </ul>
        </li>
        @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

     <footer class="text-center">
        <span style="color:blue;"><img src="webpage/img/zeha.png" alt="" style="width: 100px;">All rights reserved.</span>
    </footer>

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
	<script src="{{asset('webpage/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
	<script src="{{asset('webpage/js/gmaps.min.js')}}"></script>
	<script src="{{asset('webpage/js/theme.js')}}"></script>
</body>
</html>