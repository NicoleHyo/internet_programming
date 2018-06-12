<!DOCTYPE html>
<html>
<head>
	<title>Fees Payment Page</title>
</head>
<body>
	<form method="post" action="{{url('fees')}}">
		{{ csrf_field() }}
		<fieldset>
			<legend>Pay Fees</legend>
			Student ID:<input type="text" name="student_id" placeholder="Enter your Student Number">
			Amount:<input type="number" name="amount">
			Date of Payment:<input type="date" name="payment_date" placeholder="Enter date of payment">
			<button>Add Payment</button>
		</fieldset>
	</form>	
	<a href='/home'>Home:</a>
	<a href='/fees/search'>Search for student payments:</a>
	<a href='/fees'>All Fee Payments</a>
</body>
</html>