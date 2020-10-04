<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/budget-items">HOME</a></h1>

	<h5>Create Budget Items</h5>
				<form action="/budget-items" method="POST">
					@csrf

			          <input placeholder="Description" id="id" type="number" name="id">
			          <label for="id"></label>

			          <input placeholder="Year" id="date" type="date" name="year">
			          <label for="year"></label>

			          <input placeholder="Amount" id="amount" type="number" step="0.01" name="amount">
			          <label for="amount"></label>

			          <input placeholder="Total Expenses" id="total_expenses" type="number" step="0.01" name="total_expenses">
			          <label for="total_expenses"></label>

			          <input placeholder="Department ID" id="department_id" type="number" name="department_id">
			          <label for="department_id"></label>

			          <input placeholder="Category ID" id="category_id" type="number" name="expenses_id">
			          <label for="category_id></label>

			          < button type="submit">Submit</button>

			    </form>
</body>
</html> 