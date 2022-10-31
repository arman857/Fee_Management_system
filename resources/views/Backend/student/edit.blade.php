@extends('Backend.components.layout')
@section('contain')
    <div class="container">
    
        <div class="modal-body">
            <form action="{{url('student/update')}}/{{$student->id}}" method="POST">
              @csrf
                <div class="row mt-5">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-dark"><i>Name</i></label>
                        <input type="text" class="form-control  text-center" value="{{$student->Name}}" Name="Name" placeholder="Enter Name"required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput"class="text-dark"><i>Father_Name</i></label>
                        <input type="text" class="form-control text-center" value="{{$student->Father_Name}}" Name="Father_Name" placeholder="Father_Name"required>
                      </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-dark"><i>Mother_Name</i></label>
                        <input type="text" class="form-control  text-center" value="{{$student->Mother_Name}}" Name="Mother_Name" placeholder="Mother_Name"required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-dark"><i>DOB</i></label>
                        <input type="date" class="form-control  text-center" value="{{$student->DOB}}" Name="DOB" placeholder="Date Of Birth"required>
                      </div>
                </div>      <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-dark"><i>Class</i></label>
                        <input type="text" class="form-control text-center"  value="{{$student->Class}}"  Name="Class" placeholder="Class"required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-dark"><i>Address</i></label>
                        <input type="text" class="form-control  text-center"  value="{{$student->Address}}" name="Address" placeholder="Address"required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-dark"><i>Mobile_Number</i></label>
                        <input type="number" class="form-control text-center"  value="{{$student->Mobile_Number}}" name="Mobile_Number" placeholder=""required>
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
