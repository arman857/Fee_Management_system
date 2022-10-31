@extends('Backend.components.layout')
@section('fee','active')
@section('contain')

    <div class="container">
     
            <form  action="{{url('fees/update/')}}/{{$fee->id}}" method="POST">
              @csrf
                <div class="row  mt-5">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Payment Date</i></label>
                        <input type="date" class="form-control t3ext-center" value="{{$fee->date}}" name="date" >
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Student Name</i></label>
                      <input type="text" class="form-control text-center" value="{{$fee->student_name}}"  name="student_name" placeholder="Student Name" required>
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Amount</i></label>
                        <input type="number" class="form-control  text-center" value="{{$fee->amount}}" name="amount" placeholder="Enter your amount" required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Payment Method</i></label>
                        <input type="text" class="form-control text-center" value="{{$fee->payment_method}}" name="payment_method" placeholder="Payment Method" required>
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Status</i></label>
                        <input type="text" class="form-control  text-center" value="{{$fee->status}}" name="status" placeholder="Status" required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Comment</i></label>
                        <input type="text" class="form-control text-center" value="{{$fee->comment}}" name="comment" placeholder="Enter your Comment here" required>
                      </div>
                </div>
              
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary" data-dismiss="modal"><i>Close</i></button>
          <button type="submit" class="btn btn-primary"><i>update</i></button>
        </div>
    </form>
      </div>
    </div>
  </div>
        </div>
    </div>
    </div>
    
 @endsection
