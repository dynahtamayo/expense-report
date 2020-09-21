<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">HOME</a></h1>
	
	<h5>Update Expense Item</h5>
				<form action="/expense-items/{{ $expense_item->id }}" method="POST">
					@method("PUT")
					@csrf
			      
			          <input placeholder="Description" id="description" type="text" name="description" value='{{ $expense_item->description }}'>
			          <label for="description"></label>
			       
			          <input placeholder="Date" id="date" type="Date" name="date" value='{{ $expense_item->date }}'>
			          <label for="date"></label>

			          <input placeholder="Amount" id="amount" type="number" step="0.01" name="amount" value='{{ $expense_item->amount }}'>
			          <label for="amount"></label>

			          <input placeholder="Approved Amount" id="approved_amount" type="number" step="0.01" name="approved_amount" value='{{ $expense_item->approved_amount }}'>
			          <label for="approved_amount"></label>

			          <input placeholder="Submit User ID" id="submit_user_id" type="number" name="submit_user_id" value='{{ $expense_item->submit_user_id }}'>
			          <label for="submit_user_id"></label>

			          <input placeholder="Expenses ID" id="expenses_id" type="number" name="expenses_id" value='{{ $expense_item->expenses_id }}'>
			          <label for="expenses_id"></label>

			          <input placeholder="Expenses Category ID" id="expenses_category_id" type="number" name="expenses_category_id" value='{{ $expense_item->expenses_category_id }}'>
			          <label for="expenses_category_id"></label>

			          <input placeholder="Asset ID" id="asset_id" type="number" name="asset_id" value='{{ $expense_item->asset_id }}'>
			          <label for="asset_id"></label>
			        			      
			          <button  type="submit" name="action">Submit
			          	<i>send</i>
			          </button>
			         
			    </form>
</body>
</html>