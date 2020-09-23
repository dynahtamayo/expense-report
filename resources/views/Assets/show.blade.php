<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><a href="/">HOME</a></h1>
	<a href="/assets/{{$asset->id}}/edit">Edit Asset</a>

	<h4>ID={{$asset->id }}</h2>
	<h4>Description={{$asset->description}}</h2>
		
	<form action="/assets/{{$asset->id}}" method="POST">
		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>

	</form>

</body>
</html> 