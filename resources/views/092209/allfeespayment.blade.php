<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fees Payment</title>
</head>
<body>
 
<table border="1">
    <tr>
        <th>Student ID</th>
        <th>Amount</th>
        <th>Date of Payment</th>
    </tr>
    @for($i = 0; $i < count($fees); $i++)
        <tr>
            <td>{{ $fees[$i]->student_number }}</td>
            <td>{{ $fees[$i]->amount }}</td>
            <td>{{ $fees[$i]->date_of_payment }}</td>
        </tr>
    @endfor
</table>

<h2>Total Fees:{{$TotalFees}}</h2>
<a href='home'>Home:</a>
 
</body>
</html>

