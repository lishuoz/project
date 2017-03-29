@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium has-text-centered">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Focus Mobile Design
			</h1>
			<h2 class="subtitle">
				IOS Project
			</h2>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5" v-cloak>
	<template slot="title">Storytelling</template>
	<template slot="content">The idea of Focus came from situation where most students found it hard to focus on their assignments due to the distractions of their phones. The goal of Focus is to change mobile phones from distractions into helpers for students during the study.</template>
	<lz-image slot="image" src="{{ asset('images/focus/banner-disable') }}">
		<p slot="bottom">Smart phones have become the most distraction for students during study.</p>
	</lz-image>
</lz-section>

<section class="section" v-cloak>
	<div class="container">
		<div class="columns is-multiline has-text-centered">
			<div class="column is-8 is-offset-2 portfolio-detail">
				<h3 class="title is-4">1 Apper + 2 Developers</h3>
				<p class="is-6">Focus is a project for <a href="http://www.eecg.utoronto.ca/~jayar/ece1778/"><em>Creative Applications for Mobile Devices</em></a>. This course educated how designers and developers should work together and co-create a creative mobile applications. Our group consists of three members: one apper (i.e. product designer) and two developers. We brainstormed the idea and did research on similar products. As a designer, I figured out the user-flow and draw low-fidelity wireframes. With the wireframes, developers coded and implemented the application.</p>
				<hr>
				<h3 class="title is-4">Overall Design</h3>
				<p class="is-6">We want Focus to help students improve study efficiency by using <a href="https://en.wikipedia.org/wiki/Pomodoro_Technique">Pomodoro</a> technique, relax their body and minds by taking serveral deep breaths, and keep a right sitting posture during each pomodoro.</p>
				<lz-image src="{{ asset('images/focus/overall-design-disable') }}">
					<div class="columns is-multiline" slot="bottom">
						<div class="column is-one-third">
							<p><strong>Pomodoro Technique</strong></p>
							<p>The core function for Focus is a timer based on Pomodoro technique, which is to break down work into intervals traditionally 25 minutes in length, separated by short breaks. The method is based on the idea that frequent breaks can improve mental agility.</p>
						</div>
						<div class="column is-one-third">
							<p><strong>Relax Breathing</strong></p>
							<p>Before the user starts his task, Focus will ask him to take a deep breath to the microphone several times. This method is based on the idea that taking a deep breath can eliminate the worries and stresses that are distracting him and help to focus on his task easily.</p>
						</div>
						<div class="column is-one-third">
							<p><strong>Sitting Posture Detection</strong></p>
							<p>Focus can track user’s sitting posture by facial detection technique. Once  the user is too close to the laptop. A red rectangle will appear on the screen to remind him to sit correctly. This method is based on the idea that good posture benefits better memory retention.</p>
						</div>
					</div>
				</lz-image>
				<hr>
				<h3 class="title is-4">Low-fidelity Wireframes</h3>
				<p class="is-6">Mapping a user's journey can give great insights into improving their experience. We created a user pain points map to quickly understand pain points at various phases in LEAGUE’s journey.</p>
				<div class="columns is-multiline" slot="image">
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/focus/low-01') }}">
							<p slot="top">Step 1: Set Timer</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/focus/low-02') }}">
							<p slot="top">Step 2: Breathe and Relax</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/focus/low-03') }}">
							<p slot="top">Step 3: Sit Tight</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/focus/low-04') }}">
							<p slot="top">Sitting Posture Alert</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/focus/low-05') }}">
							<p slot="top">Pomodoro Collector</p>
						</lz-image>
					</div>
					<div class="column is-one-third">
						<lz-image src="{{ asset('images/focus/low-06') }}">
							<p slot="top">Pomodoro Garden</p>
						</lz-image>
					</div>
				</div>
				<hr>
				<h3 class="title is-4">Design and Crafts</h3>
				<p class="is-6"></p>
				<lz-image slot="image" src="{{ asset('images/focus/design-01') }}">
					<p slot="bottom">Set Timer: Users click Start button and type how many pomodoros they want to get.</p>
				</lz-image>
				<lz-image slot="image" src="{{ asset('images/focus/design-02') }}">
					<p slot="bottom">Completing a pomodoro will get users a red pomodoro and aborting will get the user a purple one. Users can share their achivement to social media.</p>
				</lz-image>
				<lz-image slot="image" src="{{ asset('images/focus/design-03') }}">
					<p slot="bottom">Focus requires users to take three deep breath before studying. With user exhaling to the microphone, the balloon will get bigger until it explodes. After three deep breaths, the grey button will be activated and users can get started to study.</p>
				</lz-image>
				<lz-image slot="image" src="{{ asset('images/focus/design-04') }}">
					<p slot="bottom">During each pomodoro, Focus will continuously monitor user’s sitting posture based on the distance data between his eyes and mouth from Facial Detector. If the user sits too inclined or too low, the main screen will turn semitransparent and a red rectangle will appear to alert the user put his head back to the area.</p>
				</lz-image>
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
				<p>September 2014 - April 2015</p>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>Group Member</strong></p>
				<ul>
					<li><a href="https://www.linkedin.com/in/lishuoz/">Lishuo Zhang</a></li>
					<li><a href="https://www.linkedin.com/in/yang-wang-860a6a90/">Yang Wang</a></li>
					<li><a href="https://www.linkedin.com/in/xinyun-lyu-353256b1/">Xinyun Lyv</a></li>
				</ul>
			</div>
			<div class="column is-one-third has-text-left">
				<p class="header"><strong>My Role</strong></p>
				<p>UI/UX Designer</p>
			</div>

		</div>
	</template>
</lz-section>

<lz-section>
	<template slot="content">
		<a class="button is-large is-link" href="/projects">Go Back</a>
		<a class="button is-large is-primary" href="/projects/frontend-demos">Next Project</a>
	</template>
</lz-section>
@endsection