@extends('layouts.app')

@section('content')
	<div class="clr"></div>

	<article style="margin-top:43px;">
		<section>
			<div class="signup-image-1">
				<img src="{{ asset('image/capture4.png') }}" alt="alternative">
			</div>
		</section>
	</article>

	<article class="create-profile create-profile3">
		<section>
			<img src="{{ asset('image/clipboard.svg') }}" alt="">
			<h1>Almost There!</h1>
			<p>Thank you for your interest in the CommunAbility e-Mentorship Program. To complete the application process, fill out and submit the form below.</p>
		</section>
	</article>

	<div class="clr"></div>
	<article class="ribbon ribbon2">
		<section>
			<h3>Complete the sections below:</h3>
		</section>
	</article>
	<div class="clr"></div>
	<article class="form-1 form-2">
		<form class="form-horizontal" method="POST" action="{{ route('becomamentorstep3') }}">
			<input type="hidden" name="type" value="Mentor">
			{{ csrf_field() }}
			<section class="profile-image-name">
				<img src="{{ asset('image/profile-icon.svg') }}" alt="profile">
				@if (Auth::check() && Auth::user()->confirmed == 0)
					<h3>{{  Auth::user()->username }}</h3>
				@else
					<h3>No Display Name</h3>
				@endif
			</section>
			<div class="clr"></div>
			<section>
				<fieldset class="fieldset-border">
					<legend class="legend-border">CONTACT INFORMATION</legend>

					<label for="">First Name</label><br>
					<input class="text-box" placeholder="first name" name="first_name" value="" type="text"><br>
					<label for="">Middle Name</label><br>
					<input class="text-box" placeholder="middle name" name="middle_name" value="" type="text"><br>
					<label for="">Last Name</label><br>
					<input class="text-box" placeholder="last name" name="last_name" value="" type="text"><br>
					<label for="">Contact Phone</label><br>
					<input class="text-box" placeholder="contact phone" name="phone" value="" type="text"><br>
					<label for="">Email Address</label><br>
					<input class="text-box" placeholder="work email" name="work_email" value="" type="text"><br><br>

				</fieldset>
			</section>
			<section>
				<fieldset class="fieldset-border">
					<legend class="legend-border">BACKGROUND INFORMATION</legend>

					<p>What is your gender identity (check all that apply)?</p>
					<input type="checkbox" name="gender[]" value="Female" style="margin:8px 7px 8px 12px;"> Female<br>
					<input type="checkbox" name="gender[]" value="Male" style="margin:8px 7px 8px 12px;"> Male<br>
					<input type="checkbox" name="gender[]" value="Trans,Female" style="margin:8px 7px 8px 12px;"> Trans, Female<br>
					<input type="checkbox" name="gender[]" value="Trans,Male" style="margin:8px 7px 8px 12px;"> Trans, Male<br>
					<input type="checkbox" name="gender[]" value="Non-binary/third-gender" style="margin:8px 7px 8px 12px;"> Non-binary / third gender<br>
					<input type="checkbox" name="gender[]" value="Gender-Fluid" style="margin:8px 7px 8px 12px;"> Gender Fluid<br>
					<input type="checkbox" name="gender[]" value="Genderqueer" style="margin:8px 7px 8px 12px;"> Genderqueer<br>
					<input type="checkbox" name="gender[]" value="Prefer-to-self-describe" style="margin:8px 7px 8px 12px;"> Prefer to self-describe<br>
					<input type="checkbox" name="gender[]" value="Prefer-not-to-say" style="margin:8px 7px 8px 12px;"> Prefer not to say<br>
					<label>Age (Years): Note: Applicants must be 18 years or older to participate as a mentor in the e-mentorship program</label>
					<input class="text-box" placeholder="age" name="age" value="" type="number">

					<label>What is the highest level of education you have attained?</label>
					<select class="select-list" name="education_level">
						<option disabled selected>--Select Education Level--</option>
						<option value="College Certificate">College Certificate</option>
						<option value="College Diploma">College Diploma</option>
						<option value="Bachelor's Degree">Bachelor's Degree</option>
						<option value="Master's Degree">Master's Degree</option>
						<option value="Doctrate Degree">Doctrate Degree</option>
						<option value="Other Option">Other Option</option>
					</select>

					<label>What is type of post-secondary institution did you last attend?</label>
					<select class="select-list" name="post_secondary_institution">
						<option disabled selected>--Select Institution Type--</option>
						<option value="college">College</option>
						<option value="College  denseignement general et professional (Cepeg)">College  denseignement general et professional (Cepeg)</option>
						<option value="Private Career College">Private Career College</option>
						<option value="University">University</option>
						<option value="Vocational/Technical Institute">Vocational/Technical Institute</option>
						<option value="Other Institute Type">Other Institute Type</option>
					</select>

					<label>Area of academic study:</label>
					<select class="select-list" name="areaofacadmic">
						<option disabled selected>--Select area of Study--</option>
						<option value="Natural Sciences">Natural Sciences</option>
						<option value="Health Sciences">Health Sciences</option>
						<option value="Humanities & Arts">Humanities & Arts</option>
						<option value="Engineering">Engineering</option>
						<option value="Social Sciences">Social Sciences</option>
						<option value="Economics/Business">Economics/Business</option>
						<option value="Policy">Policy</option>
						<option value="Other Area of Study">Other Area of Study</option>
					</select>

					<label>What is your current field/sector of employment/volunteer experience?</label>
					<select style="margin-bottom:25px;" class="select-list" name="areaofexperience">
						<option disabled selected>--Select Field--</option>
						<option value="Sciences - Biology, Chemistry, Physics">Sciences - Biology, Chemistry, Physics</option>
						<option value="Engineering & Computer Science">Engineering & Computer Science</option>
						<option value="Mathematics">Mathematics</option>
						<option value="Arts & Entertainment">Arts & Entertainment</option>
						<option value="Health & Medicine (physician, nurse, pharmacist, etc.)">Health & Medicine (physician, nurse, pharmacist, etc.)</option>
						<option value="Business (banking, marketing, sales, etc.)">Business (banking, marketing, sales, etc.)</option>
						<option value="Communications (journalism, hospitality, etc.)">Communications (journalism, hospitality, etc.) </option>
						<option value="Government">Government</option>
						<option value="Industry">Industry</option>
						<option value="Non-Profit">Non-Profit</option>
						<option value="Education (teacher, professor, etc.)">Education (teacher, professor, etc.)</option>
						<option value="Law & public policy">Law & public policy</option>
						<option value="Environment">Environment</option>
						<option value="Architecture, Planning and Environmental Design">Architecture, Planning and Environmental Design</option>
						<option value="Other Field">Other Field</option>
					</select>

					<label>Number of years of experience you have working/voluntering in this field/sector:</label>
					<input class="text-box" placeholder="years of experience" name="yearsofexperience" value="" type="number">

				</fieldset>
			</section>

			<section>
				<fieldset class="fieldset-border">
					<legend class="legend-border">MENTORING INTEREST</legend>

					<label for="">Why are you interested in the becoming a mentor?</label><br>
					<textarea class="text-area" placeholder="response"  name="whyyouapply" ></textarea><br>

					<label for="">Have you been, or are your currently, part of a mentorship relationship (informally or in a program) as a mentor or mentee?</label><br><br>
					&nbsp &nbsp &nbsp &nbsp <input placeholder="middle name" type="radio" name="alreadypart" value="Yes"> &nbsp Yes
					&nbsp &nbsp <input placeholder="middle name" type="radio" name="alreadypart" value="No"> &nbsp No
					<br>
					<label for="">Participating in a mentoring program as a mentor comes with some responsibilities, and can have an impact on both the mentee and the mentor. What do you hope to gain from this experience?</label><br>
					<textarea class="text-area" placeholder="response" name="experiences"></textarea><br>

					<br>
					<label for="">What do you hope a mentee would gain from a mentoring relationship?</label><br>
					<textarea class="text-area" placeholder="response" name="mentoring_relationship"></textarea><br>

					<label for="">Are you willing and able to commit to communicating through online chat with your mentor on a regular basis (i.e., biweekly for 16 weeks)?</label><br><br>
					&nbsp &nbsp &nbsp &nbsp <input placeholder="middle name" type="radio" name="comunication" value="Yes"> &nbsp Yes
					&nbsp &nbsp <input placeholder="middle name" type="radio" name="comunication" value="No"> &nbsp No
					<br>
					<label for="">Tell us something about yourself that we can share with mentees you might be matched with.</label><br>
					<textarea name="about" class="text-area" placeholder="For example: I am full time registered nurse at a tertiary hospital in Toronto. I live in Barie Ontario now, But I grew up in Calgary as a young child. In my free time I enjoy reading, film, music, visual arts, volunteering and writing. Being a mentor is not a new experience to me. I have successfully mentored many nursing students. I am prepared to learn new things that I may not be aware of and collaborating with my mentee in PSDnet e-mentoring program."></textarea><br>
					<br/>
					<input type="checkbox" style="margin:8px 7px 8px 12px;" name="permission" value="Yes"><p style="float:right;color:#7f7f7f;  width:90%;">I give communability.ca permission to display on the public pages of the website all or part of my response to the above question asking for information about myself.</p><br>
					<div class="clr"></div>

				</fieldset>
			</section>

			<section>
				<fieldset class="fieldset-border">
					<legend class="legend-border">MATCHING INFORMATION</legend>
					<h3 style="color:#004F71;font-weight:bold;">(Voluntary Section)</h3>
					<p>To better facilitate an effective match between mentors and mentees, we invite you to provide us as much of the following information about yourself as you feel comfortable. This information will be used for matching purposes only and will not be shared with mentee matches.</p>
					<label for="">Do you have any particular kind of disability(s)?:</label>

					&nbsp <input type="checkbox" name="disability[]" value="Physical" style="margin:8px 7px 8px 12px;"> Physical<br>
					<input type="checkbox" name="disability[]" value="Hearing" style="margin:8px 7px 8px 12px;"> Hearing<br>
					<input type="checkbox" name="disability[]" value="Intellectual" style="margin:8px 7px 8px 12px;"> Intellectual<br>
					<input type="checkbox" name="disability[]" value="Learning" style="margin:8px 7px 8px 12px;"> &nbsp Learning<br>
					<input type="checkbox" name="disability[]" value="Invisible" style="margin:8px 7px 8px 12px;"> &nbsp Invisible<br>
					<input type="checkbox" name="disability[]" value="Communication" style="margin:8px 7px 8px 12px;"> &nbsp Communication<br>
					<input type="checkbox" name="disability[]" value="Mental" style="margin:8px 7px 8px 12px;"> &nbsp Mental<br>
					<input type="checkbox" name="disability[]" value=" Other Disability" style="margin:8px 7px 8px 12px;"> &nbsp Other Disability<br>
					<input type="checkbox" name="disability[]" value="Prefer not to say" style="margin:8px 7px 8px 12px;"> &nbsp Prefer not to say<br>

					<label>Who do you feel you would be most comfortable mentoring? (Check all that apply)</label>

					<table class="table form-table">
						<tr>
							<td class="column-1"></td>
							<td>very important</td>
							<td>somewhat important</td>
							<td>not important</td>
						</tr>
						<tr>
							<td class="column-1">A mentee with the same gender identity</td>
							<td><input type="radio" name="samegender" value="very Important"></td>
							<td><input type="radio" name="samegender" value="somewhat important"></td>
							<td><input type="radio" name="samegender" value="not important"></td>
						</tr>
						<tr>
							<td class="column-1">A mentee interested in my educational background and/or career field</td>
							<td><input type="radio"  name="sameeducational" value="very Important"></td>
							<td><input type="radio"  name="sameeducational" value="somewhat important"></td>
							<td><input type="radio"  name="sameeducational" value="not important"></td>
						</tr>
						<tr>
							<td class="column-1">A mentee with the same disability type(s)</td>
							<td><input type="radio" name="samedisability" value="very Important"></td>
							<td><input type="radio" name="samedisability" value="somewhat important"></td>
							<td><input type="radio" name="samedisability" value="not important"></td>
						</tr>
						<tr>
							<td class="column-1"><input type="checkbox" name="noprference" value="no"> No Preference</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</fieldset>
			</section>

			<section>
				<fieldset class="fieldset-border">
					<legend class="legend-border">REFERENCE CONTACT INFORMATION</legend>

					<label>We require two (2) references who have known you for at least six (6) months and are 21 years or older. Relatives are not eligible as references. Your application cannot be process if all information is not provided.</label>

					<div class="reference-heading"><h3>REFERENCE #1</h3></div>
					<label for="">Name</label><br>
					<input class="text-box" placeholder="name" name="p1_name" value="" type="text"><br>
					<label for="">Relationship</label><br>
					<input class="text-box" placeholder="relationship to reference" name="p1_relation" value="" type="text"><br>
					<label for="">Phone Number</label><br>
					<input class="text-box" placeholder="reference's phone number" name="p1_phone" value="" type="text"><br>
					<label for="">Email</label><br>
					<input class="text-box" placeholder="reference's email address" name="p1_email" value="" type="text"><br><br>

					<div class="reference-heading"><h3>REFERENCE #2</h3></div>
					<label for="">Name</label><br>
					<input class="text-box" placeholder="name" name="p2_name" value="" type="text"><br>
					<label for="">Relationship</label><br>
					<input class="text-box" placeholder="relationship to reference" name="p2_relation" value="" type="text"><br>
					<label for="">Phone Number</label><br>
					<input class="text-box" placeholder="reference's phone number" name="p2_phone" value="" type="text"><br>
					<label for="">Email</label><br>
					<input class="text-box" placeholder="reference's email address" name="p2_email" value="" type="text"><br><br>

				</fieldset>
			</section>

			<section>
				<fieldset class="fieldset-border">
					<legend class="legend-border">DECLERATION</legend>


					<label for="">Thank you for applying to the CommunAbility Mentorship program. Before submitting your application, please confirm the following declarations by ticking the box beside each statement:</p></label>

					&nbsp <input type="checkbox" name="deceleration1" value="1" style="margin:8px 7px 8px 12px;"><p style="float:right;color:#7f7f7f; width:90%;">I acknowledge that I have reviewed and agree to the Terms of Use of communability.ca, its <a href="#">Privacy Policy</a> and the <a href="#">Mentorship Program User Agreement.</a></p><br>
					<div class="clr"></div>
					<input type="checkbox" name="deceleration2" value="2" style="margin:8px 7px 8px 12px;"><p style="float:right;color:#7f7f7f;  width:90%;"> I acknowledge that a CommunAbility.ca team member may contact me to verify or discuss any of the information provided in this application form.</p><br>
					<div class="clr"></div>
					<input type="checkbox" name="deceleration3" value="3" style="margin:8px 7px 8px 12px;"><p style="float:right; color:#7f7f7f; width:90%;"> If approved as a mentee and matched with a mentor, I commit to following the timeline of the mentoring program and communicating through online chat with my mentor on a biweekly basis for a 16-week period.</p><br>
					<div class="clr"></div>
					<input type="checkbox" name="deceleration4" value="4" style="margin:8px 7px 8px 12px;"><p style="float:right;color:#7f7f7f; width:90%;"> I understand that pairing me with a mentor will depend on the availability of suitable candidates.</p><br>
					<div class="clr"></div>
					<input type="checkbox" name="deceleration5" value="5" style="margin:8px 7px 8px 12px;"><p style="float:right; color:#7f7f7f; width:90%;"> I acknowledge that if approved as a mentee, I may be approached to participate in research; however, participation is voluntary and I can choose not to participate and remain in the program.</p><br>
					<div class="clr"></div>
					<br>
				</fieldset>
			</section>
			<section style="text-align:center;">
				<p>By summiting this application, you attest that the information you have provided on this form is complete, true, and accurate.</p>
				<input class="fom" type="submit" value="SUBMIT">
			</section>




		</form>
	</article>
	<div class="clr"></div>
@endsection