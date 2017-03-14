@extends('layouts.app')

@section('navbar')

@endsection

@section('content')
<section class="hero is-fullheight has-text-centered">
	<div class="hero-body">
		<div class="container">
			<h1 class="title is-1">
				Full Height title
			</h1>
			<h2 class="subtitle is-3">
				Full Height subtitle
			</h2>
			<p id="download" class="hero-buttons">
				<a class="button is-link is-medium" href="./projects">
					Download
				</a>
			</p>
		</div>
	</div>
	<!-- Hero footer: will stick at the bottom -->
	<div class="hero-foot is-hidden-touch">
		<nav class="tabs is-boxed is-fullwidth">
			<div class="container">
				<ul>
					<li>
						<figure class="image is-128x128">
							<img src="http://bulma.io/images/placeholders/128x128.png">
						</figure>
					</li>
				</ul>
			</div>
		</nav>
	</div>

	
</section>
@endsection