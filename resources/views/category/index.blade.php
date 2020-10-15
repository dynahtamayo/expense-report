@extends('layouts.master')

@section('content')

<div class="container">

	<h1>Categories</h1>

	<a href="/expense-items/create" class="btn waves-effect waves-light green">Create Category<i class="material-icons right">create</i></a> <br> <br>

		<table class="striped">
			
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Money</th>
				</tr>
			
			
				<tr>
					<td>
						@foreach($Categories as $Categories)
							<a href="/category/{{ $Categories ->id }}">{{ $Categories->id }}</a><br>		@endforeach
					</td>
					<td>
						@foreach($Categories as $Category)							
							{{ $Categories->name }} <br>			
						@endforeach
					</td>
					<td>
						@foreach($Categories as $Category)							
							{{ $Categories->money }} <br>					
						@endforeach
					</td>

				</tr>
			
		</table>

	</div>

@endsection