@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium has-text-centered">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Vue.js vs. React
			</h1>
			<h2 class="subtitle">
				Personal Project
			</h2>
		</div>
	</div>
</section>

<lz-section style="background-color: #f5f5f5" v-cloak>
	<template slot="title">Storytelling</template>
	<template slot="content">As you can see, I'm also trying to learn React by comparing it with Vue.js</template>
	<lz-image slot="image" src="{{ asset('images/vuereact/banner-disable') }}"></lz-image>
</lz-section>

<section class="section" v-cloak>
	<div class="container">
		<div class="columns is-multiline has-text-centered">
			<div class="column is-8 is-offset-2 portfolio-detail">
				<h3 class="title is-4">Demos</h3>
				<ul class="has-text-left">
					<li><a href="{{ asset('vuereact/day01/index.html') }}" target="_blank">Day 01 Rendering Elements</li>
					<li><a href="{{ asset('vuereact/day02/index.html') }}" target="_blank">Day 02 Components</li>
					<li><a href="{{ asset('vuereact/day03/index.html') }}" target="_blank">Day 03 Handling Events</li>
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