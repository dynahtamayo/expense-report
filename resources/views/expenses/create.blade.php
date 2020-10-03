<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/">EXPENSE</a></h1>
	
	<h5>Create Expense</h5>
				<form action="/expenses" method="POST">
					  @csrf
					  @include ('errors');
			      
			          <input placeholder="Description" id="description" type="text" name="description">
			          <label for="description"></label>
			       
			          <input placeholder="Date Submitted" id="date_submitted" type="Date" name="date_submitted">
			          <label for="date_submitted"></label>

					  <input placeholder="Date Status" id="date_status" type="Date" name="date_status">
			          <label for="date_status"></label>

					  <input placeholder="Status" id="status" type="text" name="status">
			          <label for="status"></label>

			          <input placeholder="Submit User ID" id="submit_user_id" type="number" name="submit_user_id">
			          <label for="submit_user_id"></label>

			          <input placeholder="Approval User ID" id="approval_user_id" type="number" name="approval_user_id">
			          <label for="expenses_id"></label>
			        			      
			          <button  type="submit" name="action">Submit
			          	
			          </button>
			         
			    </form>
</body>
</html>