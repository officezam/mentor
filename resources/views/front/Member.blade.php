@extends('layouts.app')

@section('content')
	<div class="clr"></div>

	<article style="margin-top:43px;">
		
		<section>
		<div class="signup-image-1">
		
		<img src="{{ asset('image/capture2.png')}}" alt="alternative">
		</div>
			
		</section>
	</article>
	
	<article class="create-profile create-profile1">
		<section>
		<img src="image/congrats.svg" alt="">
			<h1>Congratulations!</h1>
			<h3>You are now a member of CommunAbility</h3>
			@if (Auth::check() && Auth::user()->confirmed == 0)
			<p>Please verify and claim your account to take full advantage of all the site's features - we've sent you a confirmation email with the instructions. If you didn't get the message, click

				<a href="{{ route('sendmail') }}"> here</a>
					and we'll send another.</p>
			@endif
			<p>In addition to gaining access to our forums and resources, you can also join our e-mentorship program.</p>
		</section>
	</article>
	
	<div class="clr"></div>
	<article class="ribbon"> 
	<section>
	<h3 style="color:#00C7B1;">Make a selection below:</h3>
	</section>
	</article>
	<div class="clr"></div>
	<article class="mentor">
		<section>
			<div>
				<img src="{{ asset('image/jersey.svg') }}"alt="">
				<h2>Get a Mentor</h2>
				<p>Having a mentor provides opportunities for personal growth and development that will help you to reach your goals.</P>
				<a href="{{ route('getmentor') }}" class="fom">JOIN!</a>
				<br>
				<br>
			</div>
			<div>
				<img src="{{ asset('image/whistle.svg') }}"alt="">
				<h2>Become a Mentor</h2>
				<p>Mentoring a university or college student with a disability provides opportunities to make a difference, and to learn more about yourself and grow.</P>
				<a href="{{ route('becomementor') }}" class="fom">JOIN!</a>
				<br>
				<br>
			</div>
		</section>
		<div class="clr"></div>
		<section class="section-two">
			<h3>No Thanks.</h3>
			<h3>Take me to:</h3>
			<div class="three-links" style="background:#FFB81C;"> 
				
				<a href="{{ route('community') }}"><h3>COMMUNITY</h3>
				<img src="{{ asset('image/Community.svg') }}"></a>
			</div>
			<div class="three-links" style="background:#004F71;"> 
				<a href="{{ route('education') }}"><h3>EDUCATION</h3>
				<img src="{{ asset('image/Education.svg') }}"></a>
			</div>
			<div class="three-links" style="background:#999999;"> 
				<a href="#"><h3>MY HUB</h3>
				<img src="{{ asset('image/Profile.svg') }}"></a>
			</div>
			
		</section>
		<div class="clr"></div>
		<br>
	</article>
	<div class="clr"></div>
@endsection