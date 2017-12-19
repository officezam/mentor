@extends('layouts.app')

@section('content')
    <article class="about">
        <section>
            <h1>ABOUT</h1>
            <p>CommunAbility is an online community for post-secondary education students with disabilities. We offer connection opportunities that foster community building and social support, mentoring experiences that carousel-text students with disabilities, and resources to educate students on a range of topics.</p>
            <a href="About.html"><button class="fom">FOUND OUT MORE</button></a>
            <img src="image/about.svg">
        </section>
    </article>
    <article class="mentorship">
        <section>
            <h1>MENTORSHIP</h1>
            <p>Need help navigating the post-secondary education experience? Our e-mentorship program matches you with graduates with disabilities to get support and advice. Create a profile to get started!</p>
            <a href="Mentorship.html"><button class="fom">FOUND OUT MORE</button></a>
            <img src="image/mentorship.svg"></section>
    </article>
    <article class="education">
        <section>
            <h1>EDUCATION</h1>
            <p>Need information? CommunAbility offers educational information and resources on topics and issues relevant to post-secondary education and students with disabilities. Check out our learning modules, podcasts, and resource library.</p>
            <a href="Education.html"><button class="fom">FOUND OUT MORE</button></a>
            <img src="image/education.svg"></section>
    </article>
    <article class="community">
        <section>
            <h1>COMMUNITY</h1>
            <p>Looking to connect with others with disabilities? Our community forums bring post-secondary education students with disabilities together to discuss common experiences, discover resources and solutions, and share ideas, support and advice.</p>
            <a href="Community.html"><button class="fom">FOUND OUT MORE</button></a>
            <img src="image/community.svg"></section>
    </article>
    <div class="clr"></div>
@endsection