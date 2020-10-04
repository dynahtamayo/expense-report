<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><a href="/budget-items">HOME</a></h1>

	<a href="/budget-items/{{ $budget-item->id }}/edit">Edit Budget Item</a>

	<h4>ID =  {{ $budget-item->id }}</h2>
	<h4>Year =  {{ $budget-item->year }} </h1>
	<h4>Amount =  {{ $budget-item->amount }}</h2>
	<h4>Total Expenses =  {{ $budget-item->total_expenses }}</h2>
	<h4>Departement ID = {{ $budget-item->department_id }}</h2>
	<h4>Category ID =  {{ $budget-item->category_id }}</h2>
	

	<form action="/budget-items/{{ $budget_item->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>

	</form>

</body>
</html> 