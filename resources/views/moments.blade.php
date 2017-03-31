@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-6 is-offset-3">
				<lz-card src="{{ asset('images/moments/pug.png') }}">
					My color pencil pug
					<br>
					<small>13 May, 2016</small>
				</lz-card>
				<lz-card src="{{ asset('images/moments/sunset.png') }}">
					My favourite sunset
					<br>
					<small>9 Sep, 2016</small>
				</lz-card>
				<lz-card src="{{ asset('images/moments/graduation.png') }}">
					My graduation
					<br>
					<small>16 June, 2016</small>
				</lz-card>
				<lz-card src="{{ asset('images/moments/rainbow.png') }}">
					My way home with a rainbow
					<br>
					<small>14 July, 2016</small>
				</lz-card>
				<lz-card src="{{ asset('images/moments/skydiving.png') }}">
					My skydiving
					<br>
					<small>16 June, 2016</small>
				</lz-card>
				<lz-card src="{{ asset('images/moments/back.png') }}">
					My time after work
					<br>
					<small>17 Jan, 2016</small>
				</lz-card>
				<lz-card src="{{ asset('images/moments/cat.png') }}">
					My 14-year-old cat in China
					<br>
					<small>15 Sep, 2016</small>
				</lz-card>
				<a class="button is-large is-link" href="#">Top</a>
			</div>
		</div>
	</div>
</section>

@endsection