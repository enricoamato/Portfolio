@extends('books.master')

@section('content')
	<h1>Books</h1>
	@foreach ($books as $book)
		<li class="list-group">
			<ul class="list-group-item">{{ $book->title }}<span> with a rating of {{ $book->rating }}/10</span></ul>
		</li>
	@endforeach
	
@endsection
	