<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><a href="/">HOME</a></h1>
	
	<h3><a href="/users/{{ $users->id }}/edit">Edit User</a></h3>
	
	<h4>ID =  {{ $users->id }}</h4>
	<h4>First Name =  {{ $users->first_name }} </h4>
	<h4>Last Name =  {{ $users->last_name }}</h4>
	<h4>Phone = {{ $users->phone }}</h4>
	<h4>Email =  {{ $users->email }}</h4>
	<h4>Department ID =  {{ $users->department_id }}</h4>
	
	<form action="/users/{{ $users->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>

	</form>

</body>
</html>