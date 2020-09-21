<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1><a href="/">HOME</a></h1>
	
	<a href="/expense-items/{{ $expense_item->id }}/edit">Edit Expense Item</a>
	
	<h4>ID =  {{ $expense_item->id }}</h2>
	<h4>Description =  {{ $expense_item->description }} </h1>
	<h4>Date =  {{ $expense_item->date }}</h2>
	<h4>Amount =  {{ $expense_item->amount }}</h2>
	<h4>Approved Amount = {{ $expense_item->approved_amount }}</h2>
	<h4>Submit User ID =  {{ $expense_item->submit_user_id }}</h2>
	<h4>Expenses ID = {{ $expense_item->expenses_id }}</h2>
	<h4>Expenses Category ID = {{ $expense_item->expenses_category_id }}</h2>
	<h4>Asset ID = {{ $expense_item->asset_id }}</h2>
	
	<form action="/expense-items/{{ $expense_item->id }}" method="POST">

		@csrf
		@method('DELETE')
		<button class="btn" type="submit">Delete</button>

	</form>

</body>
</html>