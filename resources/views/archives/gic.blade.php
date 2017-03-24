@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="hero is-medium has-text-centered">
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
		<div class="columns">
			<div class="column is-8 is-offset-2 has-text-centered portfolio-detail">
				<h3 class="title is-4">Storytelling</h3>
				<p class="is-6">I was invited to re-design the official website for Global Intellect Consulting (GIC) in 2015. The final goal was delivering a clean and simple UI which consists with GIC’s company culture.</p>
				<figure class="image">
					<img src="{{ asset('images/gic/banner.png') }}" alt="Image">
				</figure>
				<p>Brief Description</p>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-8 is-offset-2 has-text-centered portfolio-detail">
				<h3 class="title is-4">Storytelling</h3>
				<p class="is-6">I was invited to re-design the official website for Global Intellect Consulting (GIC) in 2015. The final goal was delivering a clean and simple UI which consists with GIC’s company culture.</p>

				<figure class="image">
					<a href="{{ asset('images/gic/origin-lightbox.png') }}" data-lity>
						<img src="{{ asset('images/gic/origin.png') }}" alt="Image">
					</a>
				</figure>
				<p>GIC Original Website</p>	
			</div>
		</div>
	</div>
</section>
@endsection