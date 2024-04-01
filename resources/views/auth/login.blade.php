@extends('auth.main')
@section('content')
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Sign In</h3>
                  <form action="{{ route('authenticate') }}" method="post">
                    @csrf
		      		<div class="form-group">
		      			<input type="text" name="email" class="form-control rounded-left @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                          @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left @error('password') is-invalid @enderror" placeholder="Password">
                  @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
	            </div>
                    <a href="register">Dont have an Account?Register</a>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>
    @endsection