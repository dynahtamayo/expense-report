<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>

</style>

</head>
<body>
	<h1>HOME</h1>

	<a href="/category/create">Create Category</a> <br> <br>

		<table border="1">
			
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Money</th>
				</tr>
			
			
				<tr>
					<td>
						@foreach($Categories as $Categories)
							<a href="/category/{{ $Categories -> id }}">{{ $Categories->id }}</a><br>		
						@endforeach
					</td>
					<td>
						@foreach($Categories as $Category)							
							{{ $Categories->name }} <br>			
						@endforeach
					</td>
					<td>
						@foreach($Categories as $Category)							
							{{ $Categories->money }} <br>					
						@endforeach
					</td>

				</tr>
			
		</table>

</body>
</html>