@extends('layouts.master')

@section('content')

<div class="container">
	
	<a href="/assets/{{ $assets->id }}/edit" class="btn waves-effect waves-light green">Edit Asset<i class="material-icons right">edit</i></a><br><br>

	<form action="/assets/{{$assets->id}}" method="POST">
		@csrf
		@method('DELETE')
		<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>

	</form>


	<h4>ID={{ $assets->id }}</h2>
	<h4>Description={{ $assets->description }}</h2>
		
	
</body>
@endsection