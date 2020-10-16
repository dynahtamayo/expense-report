@extends('layouts.master')

@section('content')

<div class="container">

	<h1>Categories</h1>

	<a href="/category/create" class="btn waves-effect waves-light green">Create Category<i class="material-icons right">create</i></a> <br> <br>

		<table class="striped">
			
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Money</th>
				</tr>
			
			
				<tr>
					<td>
						@foreach($Categories as $Category)
							<a href="/category/{{ $Categories ->id }}">{{ $Categories->id }}</a><br>
					</td>
					<td>						
							{{ $Categories->name }} <br>			
					</td>
					<td>						
							{{ $Categories->money }} <br>					
						@endforeach
					</td>

				</tr>
			
		</table>

	</div>

@endsection