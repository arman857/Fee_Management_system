
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
        <th>Subject</th>
        <th>Salary</th>
        <th>Mobile_Number</th>
        <th>Account_Number</th>
        <th>Email_Id</th>
        <th>Enter_Time</th>
        <th>Exit_Time</th>
        <th>Hobby</th>
        <th>Intrest_Subject</th>
        <th>Experiance</th>
        <th>Language</th>
        <th>Class_Lavel</th>
        <th>Qualification</th>
        <th>Degree_Place</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Good_Habbits</th>
        <th>Bad_Habbits</th>
    </tr>
    @foreach($demo as $key=>$data)
        <tr>
            <td>{{$data->Name}}</td>
         <td>{{$data->Subject}}</td>
         <td>{{$data->Salary}}</td>
         <td>{{$data->Mobile_Number}}</td>
         <td>{{$data->Account_Number}}</td>
         <td>{{$data->Email_Id}}</td>
         <td>{{$data->Enter_Time}}</td>
         <td>{{$data->Exit_Time}}</td>
         <td>{{$data->Hobby}}</td>
         <td>{{$data->Intrest_Subject}}</td>
         <td>{{$data->Experiance}}</td>
         <td>{{$data->Language}}</td>
         <td>{{$data->Class_Lavel}}</td>
         <td>{{$data->Qualification}}</td>
         <td>{{$data->Degree_Place}}</td>
         <td>{{$data->Gender}}</td>
         <td>{{$data->DOB}}</td>
         <td>{{$data->Good_Habbits}}</td>
         <td>{{$data->Bad_Habbits}}</td>
        </tr>
        @endforeach
     

   
</table>
</body>
</html>