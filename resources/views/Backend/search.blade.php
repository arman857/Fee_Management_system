@extends('Backend.components.layout')

@section('contain')
<body>
    <div class="container">
        <label for="">student name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Search student name">
    </div id="student">
    </div>
</div>
    <script>
     $(document).ready(function(){
        $("#name").on('keyup',function(){
           var val=$(this).val();
           $.ajax({
            url:"{{route('search')}}",
            type:"GET",
            data:{'name':valu},
            success:function(data){
                $("#student").html(data);
            }
           });
        });
        $(document).on('click','li',function(){
            var value =$(this).text();
            $("#name"). val(value);
            $("#student").html("")
        })
     });
    </script>
@endsection