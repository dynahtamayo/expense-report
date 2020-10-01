<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
</style>

</head>
<body>
	<h1>HOME</h1>

	<h3><a href="/departments/create">Create Department</a></h3> <br> <br>

		<table border="1">
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

</body>
</html>