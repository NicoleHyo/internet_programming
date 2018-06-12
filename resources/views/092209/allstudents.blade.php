<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
</head>
<body>
 
<table border="1">
    <tr>
        <th>Fullname</th>
        <th>Date of Birth</th>
        <th>Address</th>
    </tr>
    @for($i = 0; $i < count($student); $i++)
        <tr>
            <td>{{ $student[$i]->fullname }}</td>
            <td>{{ $student[$i]->date_of_birth }}</td>
            <td>{{ $student[$i]->address }}</td>
        </tr>
    @endfor
</table>
 
</body>
</html>

