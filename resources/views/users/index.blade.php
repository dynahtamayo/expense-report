@extends('layouts.master')

@section('content')

<div class="container">
	<h1>Users</h1>

	<a href="/expense-items/create" class="btn waves-effect waves-light green">Create User<i class="material-icons right">create</i></a> <br> <br>
		<table class="striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Department ID</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>
						@foreach($users as $user)
							<a href="/users/{{ $user -> id }}">{{ $user->id }}</a><br>		@endforeach
					</td>
					<td>
						@foreach($users as $user)							
							{{ $user->first_name }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($users as $user)							
							{{ $user->last_name }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($users as $user)							
							{{ $user->phone }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($users as $user)							
							{{ $user->email }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($users as $user)							
							{{ $user->department_id }} <br>					
						@endforeach
					</td>
				</tr>
			</tbody>
		</table>

	</div>

@endsection