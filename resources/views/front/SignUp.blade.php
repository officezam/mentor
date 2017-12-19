@extends('layouts.app')

@section('content')

	<div class="clr"></div>

	<article style="margin-top:43px;">

		<section>
			<div class="signup-image-1">

				<img src="image/capture.png" alt="alternative">
			</div>

		</section>
	</article>

	<article class="create-profile">
		<section>
			<img src="image/profile_circle.svg" alt="">
			<h1>Create Your Profile</h1>
			<h3>Take the first step towards gaining access.</h3>
			<p>Already have an account? Click <a href="#" data-toggle="modal" data-target="#myModal">here</a> to log in.</p>
			<p>As a community member you’ll gain access to our podcasts, webinars, and resource library. You’ll also be able to access the community forum.</p>
			<p>Interested in getting involved in our e-mentorship program? Creating a profile is the first step to gaining access.</p>
		</section>
	</article>

	<div class="clr"></div>
	<article class="ribbon">
		<section>
			<h3>Fill out the form to create a basic Profile:</h3>
		</section>
	</article>
	<div class="clr"></div>
	<article class="form-1">
		<section>
{{--			{{ dd($errors) }}--}}
			{{--<form id="logout-form" action="{{ route('logout') }}" method="POST" >--}}
				{{--{{ csrf_field() }}--}}
				{{--<button type="submit" name="logout" value="Logout">Logout</button>--}}
			{{--</form>--}}
			<form class="form-horizontal" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }}
				<label for="">Display Name <span>(6-24 characters long)</span></label><br>
				<input class="text-box" placeholder="Display Name" name="username" type="text" value="{{ old('username') }}" required autofocus><br>
				@if ($errors->has('username'))
					<div class=" has-error">
						<span class="control-label has-error">
							<strong>{{ $errors->first('username') }}</strong>
						</span>
					</div>
				@endif

				<label for="">Email</label><br>
				<input class="text-box" placeholder="email" type="text" name="email" value="{{ old('email') }}" required><br>
				@if ($errors->has('email'))
					<div class=" has-error">
						<span class="control-label has-error">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
					</div>
				@endif
				<label for="">Password <span> (8-32 characters long)</span></label><br>
				<input class="text-box" placeholder="password" type="password" name="password" required><br>
				@if ($errors->has('password'))
					<div class=" has-error">
						<span class="control-label has-error">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
					</div>
				@endif
				<label for="">Confirm Password <span></span></label><br>
				<input class="text-box" placeholder="confirm password" name="cpassword" value="" required type="password"><br>
				@if ($errors->has('cpassword'))
					<div class=" has-error">
						<span class="control-label has-error">
							<strong>{{ $errors->first('cpassword') }}</strong>
						</span>
					</div>
				@endif
				<br>
				<input class="check-box" name="terms" value="1" type="checkbox">
				<span style="padding-left:10px;height:50px;color:black;">I have read, understand and accept the <a href="{{ route('termsandcondition') }}">Terms and Conditions</a></span>
				@if ($errors->has('terms'))
					<div class=" has-error">
						<span class="control-label has-error">
							<strong>{{ $errors->first('terms') }}</strong>
						</span>
					</div>
				@endif
				<br><br>
				<button type="submit" name="Next" class="fom submit-button" value="Next">Next</button>
				{{--<a class="fom submit-button" href="{{ route('member') }}">Next</a>--}}
			</form>
			<br/>
			<br/>
		</section>
	</article>
	<div class="clr"></div>
@endsection
