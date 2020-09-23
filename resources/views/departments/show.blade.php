<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><a href="/departments">HOME</a></h1>
	
	<h3><a href="/departments/{{ $departments->id }}/edit">Edit Department</a></h3>
	
	<h4>ID =  {{ $departments->id }}</h4>
	<h4>Name =  {{ $departments->name }} </h4>
	<h4>Parent Department ID =  {{ $departments->parent_department_id }}</h4>
	
	<form action="/departments/{{ $departments->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>

	</form>

</body>
</html>