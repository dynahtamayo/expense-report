<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1><a href="/expenses">EXPENSE</a></h1>
	
	<h5>Update Expenses</h5>
				<form action="/expenses/{{$expense->id}}" method="POST">
					  @method("PUT")
					  @csrf
					  @include ('errors')
			      
			          <input placeholder="Description" id="description" type="text" name="description" value='{{$expense->description}}'>
			          <label for="description"></label>
			       
			          <input placeholder="Date Submitted" id="date_submitted" type="Date" name="date_submitted" value='{{$expense->date_submitted}}'>
			          <label for="date_submitted"></label>

			          <input placeholder="Date Status" id="date_status" type="Date" name="date_status" value='{{$expense->date_status}}'>
			          <label for="date_status"></label>

			          <input placeholder="Status" id="status" type="text" name="status" value='{{ $expense->status}}'>
			          <label for="status"></label>

			          <input placeholder="Submit User ID" id="submit_user_id" type="number" name="submit_user_id" value='{{$expense->submit_user_id}}'>
			          <label for="submit_user_id"></label>

			          <input placeholder="Approval User ID" id="approval_user_id" type="text" name="approval_user_id" value='{{$expense->approval_user_id}}'>
			          <label for="approval_user_id"></label>
			        			      
			          <button  type="submit" name="action">Submit
			          </button>
			         
			    </form>
</body>
</html>