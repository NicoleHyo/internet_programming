<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Page</title>
</head>
<body>
	<form method="post" action="{{url('student')}}">
		{{ csrf_field() }}
		<fieldset>
			<legend>Register</legend>
			Full Name:<input type="text" name="fullname" placeholder="Enter your Full Name">
			Date of Birth:<input type="date" name="dob">
			Address:<input type="text" name="address" placeholder="Enter your Address">
			<button>Register</button>
		</fieldset>
	</form>	
	<a href='/student'>All Students:</a>
	<a href='/home'>Home:</a>
</body>
</html>