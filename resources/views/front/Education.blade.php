@extends('layouts.app')

@section('content')
	<div class="clr"> </div>
	
	<article style="position:relative;top:45px;" class="education-education">
		<section>
		<h1>EDUCATION</h1>
		<p>Need information? CommunAbility offers educational information and resources on topics and issues relevent to post-secondary education and students with disabilities. Check out our podcasts, learning modules, and resource library.</p>
		<img src="image/Education.svg">
		</section>
	</article>
	<div class="clr"></div>
	<article  class="podcasts">
		<section>
			<img class="section-image" src="image/mic.svg"/>
			<div class="section-div">
				<h1>PODCASTS AND WEBINARS</h1>
				<p>Our podcasts and webinars explore key topics and strategies to inform and help CommunAbility members. Experience our digital narrative series profiling students and graduates with disabilities and get inspired!</p>
			
			</div>
			<div class="clr"></div>
			<a href="Podcasts.html"><button class="fom">BROWSE PODCASTS</button></a><a href="Webinars.html"><button class="fom">BROWSE WEBINARS</button></a>
		</section>
	</article>
	<div class="clr"></div>
	
	<article class=" learning-modules">
		<section>
			<img class="section-image" src="{{ asset('image/lego.svg') }}" />
			<div class="section-div">
				<h1>LEARNING MODULES</h1>
				<p>Explore e-learning modules designed to increase your knowledge on a growing list of topics, including mentoring and disability accommodation in post-secondary education.</p>
				<a href="LearningModules.html"><button class="fom">BROWSE MODULES</button></a>
			</div>	
		</section>
	</article>
	<div class="clr"></div>
	<article class="inspirational-profiles library">
		<section>
			<img  class="section-image" src="{{ asset('image/book.svg') }}">
			<div class="section-div">
				<h1>INSPIRATIONAL PROFILES</h1>
				<p>Whether you want to achieve educational or life success, inspiration is often the key! We hope these profiles of students and graduates with disabilities will inspire you.</p>
				<a href="InspirationalProfiles.html" ><button class="fom">READ PROFILES</button></a>
			</div>
		</section>
	</article>
	<div class="clr"></div>
@endsection