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
				League Inc.
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
<lz-section>
	<template slot="title">Interviews and a Persona</template>
	<template slot="content">Our team interviewed acquaintances who use wellness professionals and individuals who were introduced to League in a workplace setting. We created a persona to determine our target users. It provided our team with insight that guided us through the decision-making process.</template>
	<lz-image slot="image" src="{{ asset('images/league/persona') }}">
	</lz-image>
</lz-section>
<lz-section style="background-color: #f5f5f5">
	<template slot="title">Pain Points Map</template>
	<template slot="content">Mapping a user's journey can give great insights into improving their experience. We created a user pain points map to quickly understand pain points at various phases in LEAGUE’s journey.</template>
	<lz-image slot="image" src="{{ asset('images/league/pain-point') }}">
	</lz-image>
</lz-section>
<lz-section>
	<template slot="title">User Process Map</template>
	<template slot="content">Our team delivered the first sprint of UX related deliverables and a real basic journey map to describe user process for LEAGUE.</template>
	<lz-image slot="image" src="{{ asset('images/league/user-process') }}">
	</lz-image>
</lz-section>
<lz-section style="background-color: #f5f5f5">
	<template slot="title">User Process Visualization</template>
	<template slot="content">We created a few low-fidelity mockups by visualizing the user process map to identify the key elements in our design.</template>
	<lz-image slot="image" src="{{ asset('images/league/user-process-design') }}">
	</lz-image>
</lz-section>
<lz-section>
	<template slot="title">The Pivot</template>
	<template slot="content">As a startup company, LEAGUE’s business direction must be able to shift and change as needed. The focus on the mobile platform was changed into web app halfway. However, a key factor that would remain unchanged was user behavior.</template>
	<lz-image slot="image" src="{{ asset('images/league/pivot-user-flow') }}">
	</lz-image>
	<lz-image slot="image" src="{{ asset('images/league/pivot') }}">
	</lz-image>
</lz-section>

<lz-section style="background-color: #f5f5f5" v-cloak>
	<template slot="title">Design and Crafts</template>
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
</lz-section>

<lz-section>
	<template slot="title">Poster</template>
	<template slot="content">We created a poster to demonstrate what we found during our research. We were given the Runner-up in KMDI Poster Session Spring 2016 in the end.</template>
	<lz-image slot="image" src="{{ asset('images/league/poster') }}"></lz-image>
</lz-section>

<lz-section style="background-color: #f5f5f5">
	<template slot="title">Information</template>
	<template slot="content">
		<div class="columns">
			<div class="column is-half has-text-left">
				<p class="header"><strong>Group Member</strong></p>
				<ul>
					<li>Benjamin Caughran</li>
					<li><a href="https://www.linkedin.com/in/gulily/">Lily Gu</a></li>
					<li><a href="https://www.linkedin.com/in/lishuoz/">Lishuo Zhang</a></li>
				</ul>
			</div>
			<div class="column is-half has-text-left">
				<p class="header"><strong>Achievement</strong></p>
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