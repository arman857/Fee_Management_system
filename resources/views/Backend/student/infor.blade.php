@extends('Backend.components.layout')
@section('student','active')
@section('title','Student Details')
@section('contain')
<script>
  @if(Session::has('message'))
         toastr.options =
         {
        "closeButton" : true,
        "progressBar" : true
          }
            toastr.success("{{ session('message') }}");
           @endif
           @if(Session::has('success'))
           toastr.options =
         {
        "closeButton" : true,
        "progressBar" : true
          }
            toastr.error("{{ Session('success') }}");
           @endif
    </script>
  
    {{-- <div class="container"> --}}
<div class="card mr-5 ml-5">
  <div class="card-header">
    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i>Add Student</i></button>
      </div>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text"  name="search" placeholder="Search">
        <button class="btn btn-warning" type="submit">Search</button>
        </form>
        <div class="card-body">
          <table class="table caption-top">  
            <thead class="bg-info text-center text-light">
              <tr>
                <th scope="col"><i>s.n</i></th>
                  <th scope="col"><i>Name</i></th>
                     <th scope="col"><i>Father</i></th>
                       <th scope="col"><i>Mother</i></th>
                         <th scope="col"><i>DOB</i></th>
                          <th scope="col"><i>Class</i></th>
                           <th scope="col"><i>Address</i></th>
                             <th scope="col"><i>Mobile_Number</i></th>
                               <th scope="col"><i>actions</i></th> 
                                 </tr>
                                   </thead>
                                    <tbody>
                                      @foreach($students as $key=>$data)
                                       <tr class=" text-info">
                                         <th scope="row"><i>{{$key++}}</i></th>
                                          <td><i>{{$data->Name}}</i></td>
                                            <td><i>{{$data->Father_Name}}</i></td>
                                              <td><i>{{$data->Mother_Name}}</i></td>
                                                <td><i>{{$data->DOB}}</i></td>
                                                   <td><i>{{$data->Class}}</i></td>
                                                     <td><i>{{$data->Address}}</i></td>
                                                       <td><i>{{$data->Mobile_Number}}</i></td>
                                                       <td>
<a href="{{url('students/detail',$data->id)}}"> <button class="btn btn-warning btn-sm"><i>Details</i></button></a>          
  <a href="{{url('students/edit',$data->id)}}"> <button class="btn btn-primary btn-sm"><i>EDIT</i></button></a>
    <a href="{{url('student/delete',$data->id)}}"> <button class="btn btn-danger btn-sm"><i>Delete</i></button></a>
      </td>
        </tr>
          @endforeach
           </tbody>
            </table>
              {{-- {{$students->links()}} --}}
<div class="card-footer text-muted">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title  text-dark" id="exampleModalLabel"><i>Student- Information</i></h3>
           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
              </button>
                </div>
                 <div class="modal-body">
                  <form action="{{url('students')}}" method="POST">
                    @csrf
                     <div class="row">
<div class="form-group col-6">
  <label for="exampleFormControlInput1" class="text-dark"><i>Name</i></label>
    <input type="text" class="form-control  text-center" Name="Name" value="{{old('Name')}}" placeholder="Enter Name">
     <ul>
       @error('Name')
        <li><span style=color:blue><i>{{$message}}</i></span></li><br>
         @enderror
          </ul>
           </div>
      <div class="form-group col-6">
        <label for="exampleFormControlInput"class="text-dark"><i>Father_Name</i></label>
          <input type="text" class="form-control text-center" Name="Father_Name" value="{{old('Father_Name')}}" placeholder="Father_Name">
           <ul>
             @error('Father_Name')
             <li><span style=color:blue><i>{{$message}}</i></span></li><br>
               @enderror
                </ul>
                 </div>
                  </div>
                    <div class="row">
                     <div class="form-group col-6">
                       <label for="exampleFormControlInput1" class="text-dark"><i>Mother_Name</i></label>
                        <input type="text" class="form-control  text-center" Name="Mother_Name" value="{{old('Mother_Name')}}" placeholder="Mother_Name">
                         <ul>
                          @error('Mother_Name')
                          <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                            @enderror
                             </ul>
                              </div>
<div class="form-group col-6">
  <label for="exampleFormControlInput1" class="text-dark"><i>DOB</i></label>
    <input type="date" class="form-control  text-center" Name="DOB" value="{{old('DOB')}}" placeholder="Date Of Birth">
     <ul>
      @error('DOB')
       <li><span style=color:blue><i>{{$message}}</i></span></li><br>
        @enderror
         </ul>
           </div>
            </div>     
              <div class="row">
            <div class="form-group col-6">
              <label for="exampleFormControlInput1" class="text-dark"><i>Class</i></label>
                <input type="text" class="form-control text-center" Name="Class" value="{{old('Class')}}" placeholder="Class">
                 <ul>
                  @error('Class')
                  <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                  @enderror
                 </ul>
                  </div>
                    <div class="form-group col-6">
                      <label for="exampleFormControlInput1" class="text-dark"><i>Address</i></label>
                        <input type="text" class="form-control  text-center" name="Address" value="{{old('Address')}}" placeholder="Address">
                         <ul>
                          @error('Address')
                           <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                             @enderror
                              </ul>
                           </div>
                             <div class="form-group col-6">
                              <label for="exampleFormControlInput1" class="text-dark"><i>Mobile_Number</i></label>
<input type="number" class="form-control text-center" name="Mobile_Number" value="{{old('Mobile_Number')}}" placeholder="Mobile_Number">
 <ul>
   @error('Mobile_Number')
    <li><span style=color:blue><i>{{$message}}</i></span></li><br>
      @enderror
</ul>
  </div>
    </div>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-dismiss="modal"><i>Close</i></button>
            <button type="submit" class="btn btn-primary"><i>Save</i></button>
             </div>
           </form>
         </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection