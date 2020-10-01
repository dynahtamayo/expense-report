<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/departments">HOME</a></h1>
	
	<h3>Update Department</h3>
		<form action="/departments/{{ $departments->id }}" method="POST">
			@method("PUT")
			@csrf
			      
			<input placeholder="Name" id="name" type="string" name="name" value='{{ $departments->name }}'>
			<label for="name"></label>
			 
			<input placeholder="Parent Department ID" id="parent_department_id" type="number" name="parent_department_id" value='{{ $departments->parent_department_id }}'>
			<label for="parent_department_id"></label>

			<button  type="submit" name="action">Submit
			<i>send</i>
			</button>
			         
		</form>			
</body>
</html>