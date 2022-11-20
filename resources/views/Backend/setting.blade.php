@extends('Backend.components.layout')
@section('student','active')
@section('title','Setting')
@section('contain')
       @if (session('success'))
        <span class="alert alert-success"> {{ session('success') }}
         </span>
           @endif
             @if (session('danger'))
              <div class="alert alert-danger"> {{ session('danger') }}
                </div>
                   @endif
    {{-- <div class="container"> --}}
                    <div class="card mr-5 ml-5">
                     <div class="card-header">
                      <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i>Add Setting</i></button>
                       </div>
                        <div class="card-body">
                          <table class="table caption-top">               
                            <tr>
                             <th scope="col"><i>s.n</i></th>
                              <th scope="col"><i>Company_Name</i></th>
                               <th scope="col"><i>Logo</i></th>
                                <th scope="col"><i>Email</i></th>
                                  <th scope="col"><i>Phone</i></th>
                                   <th scope="col"><i>Description</i></th>
                                     <th scope="col"><i>Facebook_Link</i></th>
                                      <th scope="col"><i>Google_Link</i></th>
                                        <th scope="col"><i>Youtube_Link</i></th> 
                                          <th scope="col"><i>Action</i></th>
                                            </tr>
                                              </thead>
                                               <tbody>
                                                  @foreach($settings as $key=>$data)
                                                    <tr class=" text-info">
                                                      <th scope="row"><i>{{$key++}}</i></th>
                                                        <td><i>{{$data->Company_Name}}</i></td>
                                                          <td><i>{{$data->Logo}}</i></td>
                                                            <td><i>{{$data->Email}}</i></td>
                                                             <td><i>{{$data->Phone}}</i></td>
                                                               <td><i>{{$data->Description}}</i></td>
                                                                 <td><i>{{$data->Facebook_Link}}</i></td>
                                                                   <td><i>{{$data->Google_Link}}</i></td>
                                                                     <td><i>{{$data->Youtube_Link}}</i></td>
                                                                      <td>
<a href="{{url('delete',$data->id)}}"> <button class="btn btn-danger btn-bg-light btn-sm">Delete</button></a>
  <a href="{{url('edit',$data->id)}}"> <button class="btn btn-primary btn-bg-light btn-sm">edit</button></a>
    </td>
      </tr>
        @endforeach
          </tbody>
            </table>
              {{-- {{$settings->links()}} --}}
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
                                   <form action="" method="POST">
                                    @csrf
                                     <div class="row">
                                       <div class="form-group col-6">
                                         <label for="exampleFormControlInput1" class="text-dark"><i>Company Name</i></label>
                                           <input type="text" class="form-control  text-center" Name="Company_Name" required>
                                            </div>
                                              <div class="form-group col-6">
                                                <label for="exampleFormControlInput"class="text-dark"><i>Logo</i></label>
  <input type="text" class="form-control text-center" Name="Logo" required>
    </div>
      </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleFormControlInput1" class="text-dark"><i>Email</i></label>
              <input type="text" class="form-control  text-center" Name="Email"erequired>
                </div>
                  <div class="form-group col-6">
                    <label for="exampleFormControlInput1" class="text-dark"><i>Phone</i></label>
                      <input type="text" class="form-control  text-center" Name="Phone" required>
                        </div>
                          </div>     
                            <div class="row">
                              <div class="form-group col-6">
                                 <label for="exampleFormControlInput1" class="text-dark"><i>Description</i></label>
                                   <textarea type="textarea" class="form-control text-center" Name="Description" required></textarea>
                                    </div>
                                      <div class="form-group col-6">
                                         <label for="exampleFormControlInput1" class="text-dark"><i>Facebook_Link</i></label>
<input type="text" class="form-control  text-center" name="Facebook_Link"required>
  </div>
    <div class="row">
      <div class="form-group col-6">
        <label for="exampleFormControlInput1" class="text-dark"><i>Google_Link</i></label>
          <input type="text" class="form-control  text-center" Name="Google_Link" required>
            </div> 
              <div class="form-group col-6">
                <label for="exampleFormControlInput1" class="text-dark"><i>Youtube_Link</i></label>
                  <input type="text" class="form-control text-center" name="Youtube_Link"required>
                    </div>
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