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
<section class="section">
	<div class="container">
		<div class="columns is-multiline">
			<div class="column is-half">
				<a href="/projects/open-government">
					<div class="card-image">
						<figure class="image is-4by3">
							<img src="http://placehold.it/1280x960" alt="Image">
						</figure>
					</div>
				</a>
			</div>
			<div class="column is-half">
				<a href="projects/open-government">
					<div class="card-image">
						<figure class="image is-4by3">
							<img src="http://placehold.it/1280x960" alt="Image">
						</figure>
					</div>
					<div class="card-content">
						<div class="media">
							<div class="media-content">
								<p class="title is-4">John Smith</p>
								<p class="subtitle is-6">category 1 | category 2 | category 3</p>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="column is-half">
				<a href="projects/open-government">
					<div class="card-image box">
						<figure class="image is-4by3">
							<img src="http://placehold.it/1280x960" alt="Image">
						</figure>
					</div>
					<div class="card-content">
						<div class="media">
							<div class="media-content">
								<p class="title is-4">John Smith</p>
								<p class="subtitle is-6">category 1 | category 2 | category 3</p>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</section>
@endsection