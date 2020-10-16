@extends('layouts.master')

@section('content')

<div class="container">

	<h1>Categories</h1>

	<a href="/category/create" class="btn waves-effect waves-light green">Create Category<i class="material-icons right">create</i></a> <br> <br>

		<table class="striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Money</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Categories as $Categories)
				<tr>
					<td>
						
							<a href="/category/{{ $Categories ->id }}">{{ $Categories->id }}</a><br>
					</td>
					<td>						
							{{ $Categories->name }} <br>			
					</td>
					<td>						
							{{ $Categories->money }} <br>					
						
					</td>

				</tr>@endforeach
			</tbody>	
		</table>

	</div>

@endsection