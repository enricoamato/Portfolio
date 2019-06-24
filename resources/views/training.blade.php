@extends("frontend.layouts.master-default")

@section('content')

	@foreach ($tasks as $task)
		<ul>
			<li>{{ $task }}</li>
		</ul>
	@endforeach

@endsection