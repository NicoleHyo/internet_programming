<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fees Payment For Student</title>
</head>
<body>
 <div>@if(isset($details))
    <p>Results for student<b>{{$query}}</b>are:</p>
 </div>
 <div>
<table border="1">
    <tr>
        <th>Student ID</th>
        <th>Amount</th>
        <th>Date of Payment</th>
    </tr>
    @foreach($details as $fees_payment)
        <tr>
            <td>{{ $fees_payment->student_number }}</td>
            <td>{{ $fees_payment->amount }}</td>
            <td>{{ $fees_payment->date_of_payment }}</td>
        </tr>
    @endforeach
</table>
<h2>Total Fees:{{$TotalFees}}</h2>
@endif
</div>
<a href="/home">Home</a><br>
</body>
</html>

