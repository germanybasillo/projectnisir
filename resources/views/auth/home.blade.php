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
							<h3 class="text-uppercase">Hell0</h3>
							<h1 class="text-uppercase">Welcome {{ auth()->user()->name }}</h1>
							@if(auth()->user()->isAdmin())
							<h5 class="text-uppercase">{{ auth()->user()->isAdmin() ? 'Administrator' : 'User' }}</h5>
							@else
							<h5 class="text-uppercase">{{ auth()->user()->isAdmin() ? 'Administrator' : 'User' }}</h5>
       						@endif
							<div class="d-flex align-items-center">
								@if(auth()->user()->isAdmin())
								<a class="primary_btn" href="admin"><span>Dashboard</span></a>
								@else
								<a class="primary_btn tr-bg" href="user"><span>Dashboard</span></a>
								@endif
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="home_right_img">
							<img class="" src="webpage/img/banner/home-right.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
@endsection