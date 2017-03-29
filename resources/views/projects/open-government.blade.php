@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium has-text-centered">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Open Government Web Design
			</h1>
			<h2 class="subtitle">
				City of Toronto
			</h2>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5" v-cloak>
	<template slot="title">Storytelling</template>
	<template slot="content">The Corporate Information Management Services unit wanted to redesign an City of Toronto Open Government web page for the public. The web page is intended to highlight the City’s diverse Open Government initiatives and activities while making it easy for the public to access City information and services.</template>
	<lz-image slot="image" src="{{ asset('images/open-government/banner-disable') }}">
		<p slot="bottom">The City of Toronto is one of Canada’s leading public sector organizations with regards to Open Government.</p>
	</lz-image>
</lz-section>

<section class="section" v-cloak>
	<div class="container">
		<div class="columns is-multiline has-text-centered">
			<div class="column is-8 is-offset-2 portfolio-detail">
				<h3 class="title is-4">Interviews</h3>
				<p class="is-6">I interviewed 9 city clerks to find out their opinions and suggestions for the new web page. Gathering requirements from stakeholders helped me understand the design principles for this open government web page.</p>
				<div class="columns">
					<div class="column is-half">
						<h3 class="subtitle is-6"><strong>For city clerks, open government means…</strong></h3>
						<p class="is-6"><em>"Open Government is about improving the delivery of services, making information more accessible and supporting initiatives that build public trust and confidence in government."</em></p>
					</div>
					<div class="column is-half">
						<lz-image slot="image" src="{{ asset('images/open-government/interview-disable') }}">
						</lz-image>
					</div>
				</div>

				<hr>
				<h3 class="title is-4">Co-creation</h3>
				<p class="is-6">I worked with front-end developers, designers, and city clerks to co-design early prototypes. This session helped me understand internal constraints and transform suggestions into tangible deliverables.</p>
				<lz-image slot="image" src="{{ asset('images/open-government/co-creation') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">Design and Crafts</h3>
				<p class="is-6">I made four rapid iterations to the previous version after each discussion with stakeholders. The <a href="http://www1.toronto.ca/wps/portal/contentonly?vgnextoid=4550b9ca56ccf410VgnVCM10000071d60f89RCRD" target="_blank">new website</a> was launched in Oct 2015 to the public.</p>
				<a href="http://www1.toronto.ca/wps/portal/contentonly?vgnextoid=4550b9ca56ccf410VgnVCM10000071d60f89RCRD" target="_blank">
					<lz-image slot="image" src="{{ asset('images/open-government/design-00-disable') }}">
						<p slot="bottom">City of Toronto New Open Government Web Page</p>
					</lz-image>
				</a>
				<div class="columns is-multiline" slot="image">
					<div class="column is-half">
						<lz-image src="{{ asset('images/open-government/design-01') }}">
							<p class="title is-6" slot="top"><strong>1st Draft</strong></p>
							<p class="title is-6" slot="bottom">Created six entrance portals based on previous web page. Added live twitter plugin.
							</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/open-government/design-02') }}">
							<p slot="top"><strong>2nd Draft</strong></p>
							<p class="title is-6" slot="bottom">Highlighted three major portals. Removed text from banner. Added sublevel portals and contact us section.</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/open-government/design-03') }}">
							<p slot="top"><strong>3rd Draft</strong></p>
							<p class="title is-6" slot="bottom">Finalized terms and labels. Added a survey section.</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/open-government/design-04') }}">
							<p slot="top"><strong>4th Draft</strong></p>
							<p class="title is-6" slot="bottom">Checked content copyrights and typography. Changed survey into an external questionnaire.</p>
						</lz-image>
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Comparison</h3>
				<p class="is-6">The new open government web page looks more accessiable and easy to navigate.</p>
				<div class="columns is-multiline" slot="image">
					<div class="column is-half">
						<lz-image src="{{ asset('images/open-government/before') }}">
							<p class="title is-6" slot="top"><strong>Before</strong></p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/open-government/after') }}">
							<p slot="top"><strong>After</strong></p>
						</lz-image>
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Poster</h3>
				<p class="is-6">I created a poster to demonstrate my design process as a deliverable for my practicum course held by Faculty of Information, Universtiy of Toronto. My work was rated A+ at the end.</p>
				<lz-image slot="image" src="{{ asset('images/open-government/poster') }}"></lz-image>
			</div>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5">
	<template slot="title">Information</template>
	<template slot="content">
		<div class="columns">
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Time</strong></p>
				<p>May 2015 - July 2015</p>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>My Role</strong></p>
				<ul>
					<li>UI/UX Designer</li>
				</ul>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Website Link</strong></p>
				<p><a href="http://www1.toronto.ca/wps/portal/contentonly?vgnextoid=4550b9ca56ccf410VgnVCM10000071d60f89RCRD" target="_blank">Visit Site</a></p>
			</div>

		</div>
	</template>
</lz-section>

<lz-section>
	<template slot="content">
		<a class="button is-large is-link" href="/projects">Go Back</a>
		<a class="button is-large is-primary" href="/projects/playwalk">Next Project</a>
	</template>
</lz-section>
@endsection