@extends('layouts.app')

@section('content')
	<div class="clr"></div>

	<article style="margin-top:43px;">

		<section>
			<div class="signup-image-1">

				<img src="{{ asset('') }}image/capture3.png" alt="alternative">
			</div>

		</section>
	</article>

	<article class="create-profile create-profile2">
		<section>
			<img src="image/whistle.svg" alt="">
			<h1>Become a Mentor</h1>
			<h3>What to expect after you join</h3>
			<p>We want to ensure that your mentorship experience is a successful one. Before you sign up, here are a few things you can expect.</p>
		</section>
	</article>

	<div class="clr"></div>

	<article class="get-mentor">
		<section>
			<h2>1</h2>
			<h3>16 Week Commitment</h3>
			<p>Joining the CommunAbility e-Mentorship Program requires a 16 week commitment. Mentor-mentee pairs meet online through a live chat application every other week for a minimum of 20-30 minutes. Watch this quick video to find out more about the program cycle.</p>
		</section>
		<section>
			<h2>2</h2>
			<h3>Eligibility Criteria</h3>
			<p>Our program is for and about people with disabilities. To participate mentors must be 18 years or older and have completed a college or university program.</p>
		</section>
		<section>
			<h2>3</h2>
			<h3>Screening and Training</h3>
			<p>As part of the application process, we carefully screen potential mentors to ensure they are the right fit for our e-mentorship program. Mentors must also complete online training tailored to mentors.</p>
		</section>
		<section style="border:0px;">
			<h2>4</h2>
			<h3>Evaluation Research</h3>
			<p>As a mentor you will be invited to participate in research about your mentorship experience in the program; you may choose to not participate in the study.
				As part of the application process, we carefully screen potential mentors to ensure they are the right fit for our e-mentorship program. Mentors must also complete online training tailored to their role.</p>
		</section>
	</article>
	<div class="clr"></div>
	@if (Auth::check() && Auth::user()->confirmed == 0)
		<article class="unverified unverified2">
			<section>
				<h3>Your account is still unverified</h3>
				<p>Please check your inbox for the verification email and confirm your account.</P>
				<p>Never got the message? Click <a href="{{ route('sendmail') }}"> here</a> and we'll send another.</P>
			</section>
		</article>
	@endif
	<div class="clr"></div>
	<article class="unverified-cancel">
		<section>
			<a href="{{ route('mentorship') }}">CANCEL</a>
			@if (Auth::check() && Auth::user()->confirmed == 0)
				<a style="background:#CCCCCC;" href="#">CONTINUE</a>
			@else
				<a style="background:#EF4F5B;" href="{{ route('becomamentorstep2') }}">CONTINUE</a>
			@endif
		</section>
	</article>
	<div class="clr"></div>
@endsection