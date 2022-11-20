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
                   <div class="container bg-primary">
                     <form action="" method="POST">
                        @csrf
                         <div class="row mt-5">
                          <div class="form-group col-6">
<label for="exampleFormControlInput1" class="text-dark"><i>Company Name</i></label>
  <input type="text" class="form-control  text-center" value="{{$setting->Company_Name}}" Name="Company_Name">
    </div>
      <div class="form-group col-6">
        <label for="exampleFormControlInput"class="text-dark"><i>Logo</i></label>
          <input type="text" class="form-control text-center" Name="Logo" value="{{$setting->Logo}}">
            </div>
              </div>
                <div class="row">
                  <div class="form-group col-6">
                    <label for="exampleFormControlInput1" class="text-dark"><i>Email</i></label>
                       <input type="text" class="form-control  text-center" Name="Email" value="{{$setting->Email}}">
                         </div>
                           <div class="form-group col-6">
                             <label for="exampleFormControlInput1" class="text-dark"><i>Phone</i></label>
                               <input type="text" class="form-control  text-center" Name="Phone" value="{{$setting->Phone}}">
                                 </div>
                                   </div>     
                                     <div class="row">
                                       <div class="form-group col-6">
<label for="exampleFormControlInput1" class="text-dark"><i>Description</i></label>
  <input type="text" class="form-control  text-center" Name="Description" value="{{$setting->Description}}">
    </div>
      <div class="form-group col-6">
        <label for="exampleFormControlInput1" class="text-dark"><i>Facebook_Link</i></label>
          <input type="text" class="form-control  text-center" name="Facebook_Link" value="{{$setting->Facebook_Link}}">
             </div>
               </div>
                 <div class="row">
                    <div class="form-group col-6">
                      <label for="exampleFormControlInput1" class="text-dark"><i>Google_Link</i></label>
                        <input type="text" class="form-control  text-center" Name="Google_Link" value="{{$setting->Google_Link}}">
                           </div> 
                              <div class="form-group col-6">
                                <label for="exampleFormControlInput1" class="text-dark"><i>Youtube_Link</i></label>
                                   <input type="text" class="form-control text-center" name="Youtube_Link" value="{{$setting->Youtube_Link}}">
                                     </div>
                                      </div>
                                        <div class="modal-footer">
                                          <button type="submit" class="btn btn-secondary" data-dismiss="modal"><i>Close</i></button>
                                            <button type="submit" class="btn btn-primary"><i>Save</i></button>
                                              </div>
                                                </form>
                                                  </div>
                                                     @endsection