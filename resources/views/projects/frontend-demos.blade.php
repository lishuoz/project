@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium has-text-centered">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Frontend Demos
			</h1>
			<h2 class="subtitle">
				Personal Project
			</h2>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5" v-cloak>
	<template slot="title">Storytelling</template>
	<template slot="content">There's an amazing lady, <a href="https://jenniferdewalt.com/">Jennifer Dewalt</a>, who decided to dive into the software world after taking grad school in the fine art field. Jennifer successfully trained herself to code by building 180 websites in 180 days. What's more astonishing, she had zero experience in coding beforehand and started all from scratch. Inspired and motivated by her story, I decided to train myself into coding by going through the same process.</template>
	<lz-image slot="image" src="{{ asset('images/frontend-demos/banner-disable') }}">
		<!-- 	<p slot="bottom">Smart phones have become the most distraction for students during study.</p> -->
	</lz-image>
</lz-section>

<section class="section" v-cloak>
	<div class="container">
		<div class="columns is-multiline has-text-centered">
			<div class="column is-8 is-offset-2 portfolio-detail">
				<h3 class="title is-4">Demos</h3>
				<ul class="has-text-left">
					<li><a href="#">Day 01 This Page</li>
					<li><a href="{{ asset('demos/day02/make-a-deal.html') }}" target="_blank">Day 02 Make a Deal</a></li>
					<li><a href="{{ asset('demos/day03/random-bgcolor.html') }}" target="_blank">Day 03 Random Background Color</a></li>
					<li><a href="{{ asset('demos/day04/mondrian.html') }}" target="_blank">Day 04 Paint a Mondrian</a></li>
					<li><a href="{{ asset('demos/day05/secret_message.html') }}" target="_blank">Day 05 Secret Message</a></li>
					<li><a href="{{ asset('demos/day06/day_tracker.html') }}" target="_blank">Day 06 Day Tracker</a></li>
					<li><a href="{{ asset('demos/day07/tech-box.html') }}" target="_blank">Day 07 Technicolor Boxes</a></li>
					<li><a href="{{ asset('demos/day08/shadow.html') }}" target="_blank">Day 08 More Drop Shadow</a></li>
					<li><a href="{{ asset('demos/day09/bounce_ball.html') }}" target="_blank">Day 09 Bouncing Ball</a></li>
					<li><a href="{{ asset('demos/day10/puppy_jiggller.html') }}" target="_blank">Day 10 Puppy Jiggler</a></li>
					<li><a href="{{ asset('demos/day11/color_clock.html') }}" target="_blank">Day 11 Color Clock</a></li>
					<li><a href="{{ asset('demos/day12/dice-roller.html') }}" target="_blank">Day 12 Dice Roller</a></li>
					<li><a href="{{ asset('demos/day13/rspls.html') }}" target="_blank">Day 13 Rock Scissors Paper Lizard Spock</a></li>
					<li><a href="{{ asset('demos/day14/tough_love.html') }}" target="_blank">Day 14 Tough Love</a></li>
					<li><a href="{{ asset('demos/day15/dropping_boxes.html') }}" target="_blank">Day 15 Dropping Boxes</a></li>
				</ul>
			</div>
		</div>
	</div>
</lz-section>

<lz-section style="background-color: #f5f5f5">
	<template slot="content">
		<a class="button is-large is-link" href="/projects">Go Back</a>
		<a class="button is-large is-primary" href="/projects/league">Next Project</a>
	</template>
</lz-section>
@endsection