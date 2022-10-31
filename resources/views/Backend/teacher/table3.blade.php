
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
            <th>Address</th>
            <th>Class</th>
            <th>Roll_Number</th>
            <th>Exam_Fees</th>
            <th>Monthly_Fees</th>
            <th>School_Festival</th>
            <th>Light_Charge</th>
            <th>Fees_Paid</th>
            <th>Cash</th>
            <th>Due</th>
        </tr>
        @foreach($demo2 as $key=>$data)
        <tr>
            <td>{{$data->Name}}</td>
             <td>{{$data->Father_Name}}</td>
            <td>{{$data->Address}}</td>
            <td>{{$data->Class}}</td>
            <td>{{$data->Roll_Number}}</td>
            <td>{{$data->Exam_Fees}}</td>
            <td>{{$data->Monthly_Fees}}</td>
            <td>{{$data->School_Festival}}</td>
            <td>{{$data->Light_Charge}}</td>
            <td>{{$data->Fees_Paid}}</td>
            <td>{{$data->Cash}}</td>
            <td>{{$data->Due}}</td>
        </tr>
        @endforeach
    </body>
    </html>