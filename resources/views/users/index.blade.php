<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
</style>

</head>
<body>
	<h1>HOME</h1>

	<h3><a href="/users/create">Create User</a> </h3>
		<table border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Password</th>
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
							{{ $user->password }} <br>					
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

</body>
</html>