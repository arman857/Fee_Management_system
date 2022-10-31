@extends('Backend.components.layout')
@section('dropdown','active')
@section('contain')
<div class="container">  
<form  action="{{url('banners/update/')}}/{{$banner->id}}" method="POST">
 @csrf
<div class="row  mt-5">
<div class="form-group col-6">
<label for="exampleFormControlInput1" class="text-info"><i>Title</i></label>
<input type="text" class="form-control text-center" value="{{$banner->Title}}"  name="Title" placeholder="Title" required >
 </div>
<div class="form-group col-6">
<label for="exampleFormControlInput1" class="text-info"><i>Image</i></label>
<input type="text" class="form-control text-center" value="{{$banner->Image}}"  name="Image" placeholder="Image" required>
</div>
</div>
<div class="row">
<div class="form-group col-6">
<label for="exampleFormControlInput1" class="text-info"><i>Description</i></label>
<input type="text" class="form-control  text-center" value="{{$banner->Description}}" name="Description" placeholder="Description" required>
</div>
                      
<div class="row">
<div class="form-group col-6">
<label for="exampleFormControlInput1" class="text-info"><i>Status</i></label>
<input type="text" class="form-control  text-center" value="{{$banner->Status}}" name="Status" placeholder="Status" required>
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-secondary" data-dismiss="modal"><i>Close</i></button>
<button type="submit" class="btn btn-primary"><i>Update</i></button>
</div>
</form>
</div>
</div>
  </div>
        </div>
    </div>
    </div>
 @endsection