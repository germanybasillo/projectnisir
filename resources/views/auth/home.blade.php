@extends('auth.main')
@section('title','HOME')
@section('content')


<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="banner_content">
                        <h3 class="text-uppercase">Hello</h3>
                        <h1 class="text-uppercase">Welcome, {{ auth()->user()->name }}</h1>
                        <h5 class="text-uppercase">
                            <p>User Type: {{ auth()->user()->user_type }}</p>
                            @if(auth()->user()->isStudent())
                              
                            @elseif(auth()->user()->isTeacher())
                               
                            @elseif(auth()->user()->isAdmin())
                               
                            @endif
                        </h5>
                        <!-- Additional content or buttons can be added here -->
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_right_img">
                        <img class="" src="{{ asset('webpage/img/banner/home-right.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


	<!--================ End Home Banner Area =================-->
@endsection