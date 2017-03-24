@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Medium title
			</h1>
			<h2 class="subtitle">
				Medium subtitle
			</h2>
		</div>
	</div>
</section>
<section class="section" style="background-color: #f5f5f5">
	<div class="container">
		<div class="columns is-multiline">
			<lz-gallery src="{{ asset('images/league/cover.png') }}" href="/projects/league">
				<template slot="title">League UX Research</template>
				<template slot="client">League Inc.</template>
			</lz-gallery>
			<lz-gallery src="{{ asset('images/open-government/cover.png') }}" href="/projects/open-government">
				<template slot="title">Open Goverment Web Design</template>
				<template slot="client">City of Toronto</template>
			</lz-gallery>
			<lz-gallery src="{{ asset('images/playwalk/cover.png') }}" href="/projects/playwalk">
				<template slot="title">Playwalk Mobile Design</template>
				<template slot="client">Playwalk</template>
			</lz-gallery>
			<lz-gallery src="{{ asset('images/frontend-demos/cover.png') }}" href="/projects/frontend-demos">
				<template slot="title">Frontend Demos</template>
				<template slot="client">Personal Project</template>
			</lz-gallery>
		</div>
	</div>
</section>
@endsection