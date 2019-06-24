@extends("frontend.layouts.master-$layout")

@section('content')
	<div class="jumbotron">
		<h1 class="display-4">This is component No. 1</h1>
		<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
		<hr class="my-4">
		<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
		<p class="lead">
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
		</p>
	</div>
@endsection

@section('button')
	<h4>This is component No. 2</h4>
	<button type="button" class="btn btn-primary">Primary</button>
	<button type="button" class="btn btn-secondary">Secondary</button>
	<button type="button" class="btn btn-success">Success</button>
	<button type="button" class="btn btn-danger">Danger</button>
	<button type="button" class="btn btn-warning">Warning</button>
	<button type="button" class="btn btn-info">Info</button>
	<button type="button" class="btn btn-light">Light</button>
	<button type="button" class="btn btn-dark">Dark</button>
@endsection

@section('footer')
	<div class="card">
		<div class="card-header">
			This is component No.3
		</div>
		<div class="card-body">
			<blockquote class="blockquote mb-0">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
			<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
			</blockquote>
		</div>
	</div>
@endsection