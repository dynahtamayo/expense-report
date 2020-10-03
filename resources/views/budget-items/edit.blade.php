<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">HOME</a></h1>

	<h5>Update Expense Item</h5>
				<form action="/budget-items/{{ $budget_item->id }}" method="POST">
					@method("PUT")
					@csrf

			          <input placeholder="ID" id="id" type="number" name="id" value='{{ $budget-items->id }}'>
			          <label for="id"></label>

			          <input placeholder="Year" id="year" type="date" name="year" value='{{ $budget-items->year }}'>
			          <label for="year"></label>

			          <input placeholder="Amount" id="amount" type="number" step="0.01" name="amount" value='{{ $budget-items->amount }}'>
			          <label for="amount"></label>

			          <input placeholder="Total Expenses" id="total_expenses" type="number" step="0.01" name="total_expenses" value='{{ $budget-items->total_expenses }}'>
			          <label for="total_expenses"></label>

			          <input placeholder="Department ID" id="department_id" type="number" name="department_id" value='{{ $budget-items->department_id }}'>
			          <label for="department_id"></label>

			          <input placeholder="Category ID" id="category_id" type="number" name="category_id" value='{{ $budget-items->category_id }}'>
			          <label for="category_id"></label>

			           <button  type="submit">Submit</button>
			    </form>
</body>
</html> 