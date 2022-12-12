 @extends('Backend.components.layout')
   @section('service','active')
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
                   <form  action="{{url('services/update')}}/{{$service->id}}" method="POST">
                       @csrf
                        <div class="row  mt-5">
                           <div class="form-group col-6">
                             <label for="exampleFormControlInput1" class="text-info"><i>Title</i></label>
                              <input type="text" class="form-control text-center" value="{{$service->Title}}"  
                                name="Title" placeholder="Title" required >
                                </div>
                                  </div>
                                     <div class="row">
                                       <div class="form-group col-6">
<label for="exampleFormControlInput1" class="text-info"><i>Description</i></label>
  <input type="text" class="form-control  text-center" value="{{$service->Description}}" name="Description"placeholder="Description">
    </div>
      <div class="row">
        <div class="form-group col-6">
          <label for="exampleFormControlInput1" class="text-info"><i>Status</i></label>
            <input type="text" class="form-control  text-center" value="{{$service->Status}}" name="Status" placeholder="Status">
              </div>  
                <div class="row">
                  <div class="form-group col-6">
                    <label for="exampleFormControlInput1" class="text-info"><i>short_description</i></label>
                      <input type="text" class="form-control  text-center" value="{{$service->short_description}}"name="short_description" placeholder="Short_description">
                        </div>
      <div class="form-group col-6">
        <label for="exampleFormControlInput1" class="text-info"><i>image</i></label>
          <input type="file" class="form-control  text-center"  name="image" placeholder="image">
            </div>
            <img src="{{url('storage/'.$service->Image)}}" width="200px" height="200px">
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


                          