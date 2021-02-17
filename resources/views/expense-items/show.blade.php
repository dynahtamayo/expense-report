<!DOCTYPE html>
<html>
<head>
	<title>Bluedit</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="logo.png">
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="/css/styles.css">
</head>
<body>
	<header>
		<div class="container mid">
	
	<a href="/expense-items/{{ $expense_item->id }}/edit" class="btn waves-effect waves-light green">Edit<i class="material-icons right">edit</i></a><br><br>
	<form action="/expense-items/{{ $expense_item->id }}" method="POST">

		@csrf
		@method('DELETE')
		
			<button  class="btn waves-effect waves-light red"type="submit" name="action">DELETE
				<i class="material-icons right">delete</i>
			</button>
		

	</form>

	<h3>Information:</h3>
		<br>
	<h4>ID =  {{ $expense_item->id }}</h4>
	<h4>Description =  {{ $expense_item->description }} </h4>
	
</div>

	</header>

	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize.js"></script>
  <script src="/js/init.js"></script>
</body>
</html>