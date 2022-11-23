@extends('Backend.components.layout')
@section('setting','active')
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
                                      <th scope="col"><i>Twitter_Link</i></th>
                                        <th scope="col"><i>Instagram_Link</i></th>
                                        <th scope="col"><i>Linkedin_Link</i></th> 
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
                                                                   <td><i>{{$data->Twitter_Link}}</i></td>
                                                                     <td><i>{{$data->Instagram_Link}}</i></td>
                                                                     <td><i>{{$data->Linkedin_Link}}</i></td>
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
                        <h3 class="modal-title  text-dark" id="exampleModalLabel"><i>Company- Information</i></h3>
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
                                           <input type="text" class="form-control  text-center" Name="Company_Name" value="{{old('Company_Name')}}">
                                           <ul>
                                            @error('Company_Name')
                                             <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                                               @enderror
                                         </ul>
                                            </div>
                                              <div class="form-group col-6">
                                                <label for="exampleFormControlInput"class="text-dark"><i>Logo</i></label>
  <input type="file" class="form-control text-center" Name="Logo" value="{{old('Logo')}}">
  <ul>
    @error('Logo')
     <li><span style=color:blue><i>{{$message}}</i></span></li><br>
       @enderror
     </ul>
    </div>
      </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleFormControlInput1" class="text-dark"><i>Email</i></label>
              <input type="text" class="form-control  text-center" Name="Email" value="{{old('Email')}}">
              <ul>
                @error('Email')
                 <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                   @enderror
                 </ul>
                </div>
                  <div class="form-group col-6">
                    <label for="exampleFormControlInput1" class="text-dark"><i>Phone</i></label>
                      <input type="text" class="form-control  text-center" Name="Phone" value="{{old('Phone')}}">
                      <ul>
                        @error('Phone')
                         <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                           @enderror
                           </ul>
                        </div>
                          </div>     
                            <div class="row">
                              <div class="form-group col-6">
                                 <label for="exampleFormControlInput1" class="text-dark"><i>Description</i></label>
                                   <textarea type="textarea" class="form-control text-center" Name="Description" value="{{old('Description')}}"></textarea>
                                   <ul>
                                    @error('Description')
                                     <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                                       @enderror
                                     </ul>
                                    </div>
                                      <div class="form-group col-6">
                                         <label for="exampleFormControlInput1" class="text-dark"><i>Facebook_Link</i></label>
<input type="text" class="form-control  text-center" name="Facebook_Link" value="{{old('Facebook_Link')}}">
<ul>
  @error('Facebook_Link')
   <li><span style=color:blue><i>{{$message}}</i></span></li><br>
     @enderror
   </ul>
  </div>
</div>
    <div class="row">
      <div class="form-group col-6">
        <label for="exampleFormControlInput1" class="text-dark"><i>Twitter_Link</i></label>
          <input type="text" class="form-control  text-center" Name="Twitter_Link" value="{{old('Twitter_Link')}}">
          <ul>
            @error('Twitter_Link')
             <li><span style=color:blue><i>{{$message}}</i></span></li><br>
               @enderror
             </ul>
            </div> 
              <div class="form-group col-6">
                <label for="exampleFormControlInput1" class="text-dark"><i>Instagram_Link</i></label>
                  <input type="text" class="form-control text-center" name="Instagram_Link" value="{{old('Intsagram_Link')}}">
                  <ul>
                    @error('Instagram_Link')
                     <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                       @enderror
                     </ul>
                    </div>
                      </div>
                   
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="exampleFormControlInput1" class="text-dark"><i>Linkedin_Link</i></label>
                            <input type="text" class="form-control  text-center" Name="Linkedin_Link" value="{{old('Linkedin_Link')}}">
                            <ul>
                              @error('Linkedin_Link')
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