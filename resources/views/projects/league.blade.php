@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium has-text-centered">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				League UX Research
			</h1>
			<h2 class="subtitle">
				User Experience Research
			</h2>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5" v-cloak>
	<template slot="title">Storytelling</template>
	<template slot="content">LEAGUE INC. is a new personal health platform that designed to help people healthier, happier lives -- every day. I worked in a group of three with LEAGUE’s strategic advisor to complement user experience research.</template>
	<lz-image slot="image" src="{{ asset('images/league/banner-disable') }}">
		<p slot="bottom">LEAGUE connects people with the best preventative health professionals.</p>
	</lz-image>
</lz-section>

<section class="section" v-cloak>
	<div class="container">
		<div class="columns is-multiline has-text-centered">
			<div class="column is-8 is-offset-2 portfolio-detail">
				<h3 class="title is-4">Interviews and a Persona</h3>
				<p class="is-6">Our team interviewed acquaintances who use wellness professionals and individuals who were introduced to League in a workplace setting. We created a persona to determine our target users. It provided our team with insight that guided us through the decision-making procces.</p>
				<lz-image slot="image" src="{{ asset('images/league/persona') }}">
				</lz-image>	
				<hr>
				<h3 class="title is-4">Pain Points Map</h3>
				<p class="is-6">Mapping a user's journey can give great insights into improving their experience. We created a user pain points map to quickly understand pain points at various phases in LEAGUE’s journey.</p>
				<lz-image slot="image" src="{{ asset('images/league/pain-point') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">User Process Map</h3>
				<p class="is-6">Our team delivered the first sprint of UX related deliverables and a real basic journey map to describe user process for LEAGUE.</p>
				<lz-image slot="image" src="{{ asset('images/league/user-process') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">User Process Visulization</h3>
				<p class="is-6">We created a few low-fidelity mockups by visulizing the user process map to identify the key elements in our design.</p>
				<lz-image slot="image" src="{{ asset('images/league/user-process-design') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">The Pivot</h3>
				<p class="is-6">As a startup company, LEAGUE’s business direction must be able to shift and change as needed. The focus on the mobile platform was changed into web app halfway. However, a key factor that would remain unchanged was user behavior.</p>
				<lz-image slot="image" src="{{ asset('images/league/pivot-user-flow') }}">
				</lz-image>
				<lz-image slot="image" src="{{ asset('images/league/pivot') }}">
				</lz-image>
				<hr>
				<h3 class="title is-4">Design and Crafts</h3>
				<div class="columns is-multiline" slot="image">
					<div class="column is-half">
						<lz-image src="{{ asset('images/league/design-01') }}">
							<p slot="top">Landing Page</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/league/design-02') }}">
							<p slot="top">Package List Page</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/league/design-03') }}">
							<p slot="top">Package Detail Page <br> (Choose Service)</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/league/design-04') }}">
							<p slot="top">Package Detail Page<br>(Choose Professionals)</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/league/design-05') }}">
							<p slot="top">Professionals Map Page</p>
						</lz-image>
					</div>
					<div class="column is-half">
						<lz-image src="{{ asset('images/league/design-06') }}">
							<p slot="top">Professional Detail Page</p>
						</lz-image>
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Poster</h3>
				<p class="is-6">We created a poster to demonstrate what we found during our research. We were given the Runner-up in KMDI Poster Session Spring 2016 in the end.</p>
				<lz-image slot="image" src="{{ asset('images/league/poster') }}"></lz-image>
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
				<p>September 2015 - April 2016</p>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Group Member</strong></p>
				<ul>
					<li>Benjamin Caughran</li>
					<li><a href="https://www.linkedin.com/in/gulily/">Lily Gu</a></li>
					<li><a href="https://www.linkedin.com/in/lishuoz/">Lishuo Zhang</a></li>
				</ul>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Achivement</strong></p>
				<p>Runner-up in <a href="http://kmdi.utoronto.ca/poster-session-gallery-from-past-to-present/">KMDI Poster Session Spring 2016</a></p>
			</div>
			
		</div>
	</template>
</lz-section>

<lz-section>
	<template slot="content">
		<a class="button is-large is-link" href="/projects">Go Back</a>
		<a class="button is-large is-primary">Next Project</a>
	</template>
</lz-section>
@endsection