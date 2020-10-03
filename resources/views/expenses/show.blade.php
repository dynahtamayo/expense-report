<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><a href="/">EXPENSE</a></h1>
	<a href="/expenses/{{$expense->id}}/edit">Edit Expense</a>
	
	<h4>ID={{$expense->id }}</h2>
	<h4>Description={{$expense->description}}</h2>
	<h4>Date Submitted={{$expense->date_submitted}}</h2>
	<h4>Date Status={{$expense->amount}}</h2>
	<h4>Status={{$expense->status}}</h2>
	<h4>Submit User ID={{$expense->submit_user_id}}</h2>
	<h4>Approval User ID={{$expense->approval_user_id}}</h2>	
	<form action="/expenses/{{$expense->id}}" method="POST">
		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>

	</form>

</body>
</html>