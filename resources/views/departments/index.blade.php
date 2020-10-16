@extends('layouts.master')

@section('content')

<div class="container">

	<h1>Departments</h1>
	<a href="/departments/create" class="btn waves-effect waves-light green">Create Department<i class="material-icons right">create</i></a> <br> <br>

		<table class="striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Parent Department ID</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>
						@foreach($departments as $department)
							<a href="/departments/{{ $department -> id }}">{{ $department->id }}</a><br>		
						@endforeach
					</td>
					<td>
						@foreach($departments as $department)					
							{{ $department->name }} <br>					
						@endforeach
					</td>
					<td>
						@foreach($departments as $department)						
							{{ $department->parent_department_id }} <br>	
						@endforeach
					</td>
				</tr>
			</tbody>
		</table>

</div>

@endsection