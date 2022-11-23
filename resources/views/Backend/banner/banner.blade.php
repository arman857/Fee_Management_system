@extends('Backend.components.layout')
@section('dropdown','active')
@section('contain')
@if (session('success'))
                  <span class="alert alert-success"> {{ session('success') }}
                    </span>
                      @endif
                       @if (session('danger'))
                        <div class="alert alert-danger"> {{ session('danger') }}
                         </div>
                          @endif
                           <div class="container">
                            <div class="card">
                              <div class="card-header">
                               <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i>Add Banner</i></button>
                                  </div>
<div class="card-body">
  <table class="table caption-top">
    <thead class=" text-info">
     <tr>
      <th scope="col"><i>S.N</i></th>
        <th scope="col"><i>Title</i></th>
          <th scope="col"><i>Image</i></th>
            <th scope="col"><i>Description</i></th>
              <th scope="col"><i>Status</i></th>
                <th scope="col"><i>short_Description</i></th>
                  <th scope="col" ><i>Action</i></th>
                    </tr>
                     </thead>
                       <tbody>
                         @foreach($banners as $key=>$data)
                          <tr class="text-info">
                           <th scope="row"><i>{{$data->id}}</i></th>
                            <td><i>{{$data->Title}}</i></td>
                              <td>
                               <img src="{{asset('storage/'.$data->Image)}}" width="70px" height="70px">
                                 </td>
                                  <td>
                                   <i> {{$data->Description}}</i>
                                    </td>
                                     <td>
                                       @if($data->Status == "Active")
                                         <span class="badge badge-success"><i>Active</i></span>
                                           @else
                                            <span class="badge badge-primary"><i>Inactive</i></span>
                                              @endif
                                                </td>
                                                  <td><i>{{$data->short_Description}}</i></td>
                                                    <td>              
<a href="{{url('banners/details',$data->id)}}"> <button class="btn btn-warning btn-sm"><i>Details</i></button></a>
  <a href="{{url('banners/edit',$data->id)}}"> <button class="btn btn-success btn-sm"><i>Edit</i></button></a>
    <a href="{{url('delete/banner',$data->id)}}"> <button class="btn btn-danger btn-sm"><i>Delete</i></button></a>
      </td>
        </tr>
          @endforeach
            </tbody>
              </table>
                {{$banners->links()}}
                  </div>
                   <div class="card-footer text-muted">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-info" id="exampleModalLabel"><i>Add your Banner</i></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
                  </div>
                    <div class="modal-body">
                     <form  action="{{url('banners/store')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="row">
                          <div class="form-group col-6">
                             <label for="exampleFormControlInput1" class="text-info"><i>Title</i></label>
<input type="text" class="form-control  text-center" name="Title" placeholder="Title" value="{{old('Title')}}">
<ul>
  @error('Title')
   <li><span style=color:blue><i>{{$message}}</i></span></li><br>
     @enderror
    </ul>
  </div>
   <div class="form-group col-6">
    <label for="exampleFormControlInput1" class="text-info"><i>Status</i></label>
     <select name="Status" class="form-control">
      <option value="due">Active</option>
       <option value="paid">Inactive</option>
        </select>
         </div>
          </div>
           <div class="row">
             <div class="form-group col-12">
              <label for="exampleFormControlInput1" class="text-info"><i>Description</i></label>
                <textarea type="text" class="form-control  text-center" name="Description" placeholder="Description"
                  Value="{{old('Description')}}"></textarea>
                  <ul>
                    @error('Description')
                     <li><span style=color:blue><i>{{$message}}</i></span></li><br>
                       @enderror
                       </ul>
                    </div>
                       </div>
                         <div class="row">
                            <div class="form-group col-12">
<label for="exampleFormControlInput1" class="text-info"><i>short_Description</i></label>
  <textarea type="textarea" class="form-control  text-center"
    name="short_Description" placeholder="short_description" value="{{old('short_Description')}}"></textarea>
    <ul>
      @error('short_Description')
       <li><span style=color:blue><i>{{$message}}</i></span></li><br>
         @enderror
        </ul>
     </div>
       </div>
        <div class="row">
          <div class="form-group col-6">
            <label for="exampleFormControlInput1" class="text-info"><i>Image</i></label>
            <input type="file" class="form-control text-center" name="Image" placeholder="Image" value="{{old('Image')}}">
            <ul>
              @error('Image')
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
