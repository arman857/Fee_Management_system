<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>

</head>
<body>
    <center><table border="2px" cellspacing="0" cellpadding="5px"></center>
        <h2> Table of Laravel</h2>
   
        <hr>
    <tr>
        
        <th>Name</th>
         <th>Father_Name</th>
         <th>Mother_Name</th>
         <th>DOB</th>
         <th>Mobile_Number</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Class</th>
    </tr>
    @foreach($check as $key=>$data)
    <tr>
<td>{{$data->Name}}</td>
<td>{{$data->Father_Name}}</td>
<td>{{$data->Mother_Name}}</td>
<td>{{$data->DOB}}</td>
<td>{{$data->Mobile_Number}}
<td>{{$data->Gender}}</td>
<td>{{$data->Address}}</td>
<td>{{$data->Class}}</td>
    </tr>
    @endforeach
   
</table>
</body>
</html>