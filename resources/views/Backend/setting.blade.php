@extends('Backend.components.layout')
@section('setting','active')
@section('title','Setting')
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
                      <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add Setting</button>
                       </div>
                        <div class="card-body">
                          <table class="table caption-top">               
                            <tr>
                             <th scope="col">s.n</th>
                              <th scope="col">Company_Name</th>
                               <th scope="col">Logo</th>
                                <th scope="col">Email</th>
                                  <th scope="col">Phone</th>
                                   <th scope="col">Description</th>
                                     <th scope="col">Facebook_Link</th>
                                      <th scope="col">Twitter_Link</th>
                                        <th scope="col">Instagram_Link</th>
                                        <th scope="col">Linkedin_Link</th> 
                                          <th scope="col">Action</th>
                                            </tr>
                                              </thead>
                                               <tbody>
                                                  @foreach($settings as $key=>$data)
                                                    <tr class=" text-info">
                                                      <th scope="row">{{$key++}}</th>
                                                        <td>{{$data->Company_Name}}</td>
                                                          <td>
                              <img src="{{ asset('uploads/settings/'.$data->Logo) }}"  width="100" height="80">
                            </td>
                              <td>{{$data->Email}}</td>
                                <td>{{$data->Phone}}</td>
                                  <td>{{$data->Description}}</td>
                                    <td>{{$data->Facebook_Link}}</td>
                                      <td>{{$data->Twitter_Link}}</td>
                                        <td>{{$data->Instagram_Link}}</td>
                                        <td>{{$data->Linkedin_Link}}</td>
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
                        <h3 class="modal-title  text-dark" id="exampleModalLabel">Company- Information</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                             </button>
                               </div>
                                 <div class="modal-body">
                                   <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                     <div class="row">
                                       <div class="form-group col-6">
                                         <label for="exampleFormControlInput1" class="text-dark">Company Name</label>
                                           <input type="text" class="form-control  text-center" name="Company_Name" value="{{old('Company_Name')}}">
                                           <ul>
                                            @error('Company_Name')
                                             <li><span style=color:blue>{{$message}}</span></li><br>
                                               @enderror
                                         </ul>
                                            </div>
                                              <div class="form-group col-6">
                                                <label for="exampleFormControlInput"class="text-dark">Logo</label>
  <input type="file" class="form-control text-center" name="Logo" value="{{old('Logo')}}">
  <ul>
    @error('Logo')
     <li><span style=color:blue>{{$message}}</span></li><br>
       @enderror
     </ul>
    </div>
      </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleFormControlInput1" class="text-dark">Email</label>
              <input type="text" class="form-control  text-center" name="Email" value="{{old('Email')}}">
              <ul>
                @error('Email')
                 <li><span style=color:blue>{{$message}}</span></li><br>
                   @enderror
                 </ul>
                </div>
                  <div class="form-group col-6">
                    <label for="exampleFormControlInput1" class="text-dark">Phone</label>
                      <input type="text" class="form-control  text-center" name="Phone" value="{{old('Phone')}}">
                      <ul>
                        @error('Phone')
                         <li><span style=color:blue>{{$message}}</span></li><br>
                           @enderror
                           </ul>
                        </div>
                          </div>     
                            <div class="row">
                              <div class="form-group col-6">
                                 <label for="exampleFormControlInput1" class="text-dark">Description</label>
                                   <textarea type="textarea" class="form-control text-center" name="Description" value="{{old('Description')}}"></textarea>
                                   <ul>
                                    @error('Description')
                                     <li><span style=color:blue>{{$message}}</span></li><br>
                                       @enderror
                                     </ul>
                                    </div>
                                      <div class="form-group col-6">
                                         <label for="exampleFormControlInput1" class="text-dark">Facebook_Link</label>
<input type="text" class="form-control  text-center" name="Facebook_Link" value="{{old('Facebook_Link')}}">
<ul>
  @error('Facebook_Link')
   <li><span style=color:blue>{{$message}}</span></li><br>
     @enderror
   </ul>
  </div>
</div>
    <div class="row">
      <div class="form-group col-6">
        <label for="exampleFormControlInput1" class="text-dark">Twitter_Link</label>
          <input type="text" class="form-control  text-center" name="Twitter_Link" value="{{old('Twitter_Link')}}">
          <ul>
            @error('Twitter_Link')
             <li><span style=color:blue>{{$message}}</span></li><br>
               @enderror
             </ul>
            </div> 
              <div class="form-group col-6">
                <label for="exampleFormControlInput1" class="text-dark">Instagram_Link</label>
                  <input type="text" class="form-control text-center" name="Instagram_Link" value="{{old('Intsagram_Link')}}">
                  <ul>
                    @error('Instagram_Link')
                     <li><span style=color:blue>{{$message}}</span></li><br>
                       @enderror
                     </ul>
                    </div>
                      </div>
                   
                      <div class="row">
                        <div class="form-group col-6">
                          <label for="exampleFormControlInput1" class="text-dark">Linkedin_Link</label>
                            <input type="text" class="form-control  text-center" name="Linkedin_Link" value="{{old('Linkedin_Link')}}">
                            <ul>
                              @error('Linkedin_Link')
                                <li><span style=color:blue>{{$message}}</span></li><br>
                                  @enderror
                                </ul>
                          </div> 
                      </div>
                          </div>
                             <div class="modal-footer">
                              <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </form>
                      </div>
                   </div>
               </div>
          </div>
       </div>
    </div>
@endsection