<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><a href="/">HOME</a></h1>
	
	<a href="/category/{{ $Categories->id }}/edit">Edit Category</a>
	
	<h4>ID =  {{ $Categories->id }}</h2>
	<h4>Name =  {{ $Categories->name }}</h2>
	<h4>Money =  {{ $Categories->money }}</h2>
	
	<form action="/category/{{ $Categories->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>

	</form>

</body>
</html>