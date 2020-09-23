<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style>
</style>

</head>
<body>
	<h1>HOME</h1>

	<a href="/expenses/create">Create Asset</a> <br> <br>

		<table border="1">

				<tr>
					<th>ID</th>
					<th>Description</th>
				</tr>

				<tr>
					<td>
						@foreach($assets as $asset)
							<a href="/assets/{{$asset->id}}">{{$asset->id}}</a><br>
						@endforeach
					</td>
					<td>
						@foreach($assets as $asset)							
							{{$asset->description}} <br>					
						@endforeach
					</td>
				</tr>

		</table> 