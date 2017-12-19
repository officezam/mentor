@extends('layouts.app')

@section('content')
	
	<div class="clr"> </div>
	
	<article style="position:relative;top:45px;" class="community-community">
		
		<section>
		<h1>COMMUNITY</h1>
		<p>Looking to connect with others with disabilities? Our community forums bring post-secondary education students with disabilities together to discuss common experiences, discover resources and solutions, and share ideas, support and advice.</p>
		<img src="image/community.svg">
		</section>
	</article>
	<div class="clr"></div>
	<article  class="forums">
		<section>
			<img class="section-image" src="image/chat.svg"/>
			<div class="section-div">
				<h1>FORUMS</h1>
				<p>Looking to connect with others with disabilities? CommunAbility's forums bring post-secondary education students with disabilities together to share ideas, discuss common experiences, discover resources and solutions, and get support and advice.</p>
				<a href="Forums.html"><button class="fom">GO TO FORUMS</button></a>
			</div>
		</section>
	</article>
	<div class="clr"></div>
	<article class="digital-naratives">
		<section>
			<img class="section-image" src="image/clap.svg"/>
			<div class="section-div">
				<h1 style="width:300px">DIGITAL NARATIVES</h1>
				<p>Digital narratives are a form of personal storytelling that help build community! Experience stories shared by post-secondary education students and graduates with disabilities to learn about their educational journeys and lessons learned.</p>
				<a href="DigitalNaratives.html"><button class="fom">VIEW NARATIVES</button></a>
			</div>	
		</section>
	</article>
	<div class="clr"></div>
	<article class="inspirational-profiles">
		<section>
			<img  class="section-image" src="image/flag.svg">
			<div class="section-div">
				<h1 style="width:300px">INSPIRATIONAL PROFILES</h1>
				<p>Whether you want to achieve educational or life success, inspiration is often the key! We hope these profiles of students and graduates with disabilities will inspire you.</p>
				<a href="InspirationalProfiles.html"><button class="fom">READ PROFILES</button></a>
			</div>
		</section>
	</article>
	<div class="clr"></div>
@endsection