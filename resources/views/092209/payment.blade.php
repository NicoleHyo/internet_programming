<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fees</title>
</head>
<body>
	<form method="post" action="{{url('fees/search')}}">
		{{ csrf_field() }}
	<input type="number" name="search" placeholder="Enter a student number">
	<button type="submit">SEARCH</button>
 </form>
 <a href='/home'>Home:</a>
</body>
</html>