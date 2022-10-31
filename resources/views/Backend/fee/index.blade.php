@extends('Backend.components.layout')
@section('fee','active')
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
     <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i>Add Fee</i></button>
        </div>
    

        <div class="card-body">
            <table class="table caption-top">
                <thead class=" text-info">
                  <tr>
                   
                   <th scope="col"><i>S.N</i></th>
                   <th scope="col"><i>Payment Date</i></th>
                    <th scope="col"><i>Student Name</i></th>
                    <th scope="col"><i>Amount</i></th>
                    <th scope="col"><i>Payement Method</i></th>
                    <th scope="col"><i>Status</i></th>
                    <th scope="col" class="text-center"><i>Action</i></th>
            
                 
                  </tr>
                </thead>
                <tbody>
                  @foreach($fees as $key=>$data)
                  <tr class="text-info">
                    <th scope="row"><i>{{$data->id}}</i></th>
                    <td><i>{{$data->date}}</i></td>
                    <td><i>{{$data->student_name}}</i></td>
                    <td><i>{{$data->amount}}</i></td>
                    <td>
                     <i> {{$data->payment_method}}</i>
                    </td>
                    <td>
                      @if($data->status == "paid")
                      <span class="badge badge-success"><i>paid</i></span>
                    @else
                    <span class="badge badge-primary"><i>Pending</i></span>
                    @endif
                    <td class="text-center">
            <a href="{{url('fees/edit',$data->id)}}"> <button class="btn btn-primary btn-sm"><i> EDIT</i></button></a>
              <a href="{{url('deletes',$data->id)}}"> <button class="btn btn-danger btn-sm"><i>Delete</i></button></a>
              <a href="{{url('fees/details',$data->id)}}"> <button class="btn btn-warning btn-sm"><i>Details</i></button></a>
                  </td>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              {{$fees->links()}}
        </div>
        <div class="card-footer text-muted">
           <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-info" id="exampleModalLabel"><i>Add your fee</i></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form  action="{{url('fees')}}" method="POST">
              @csrf
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Payment Date</i></label>
                        <input type="date" class="form-control  text-center" name="date" >
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Student Name</i></label>
                      <input type="text" class="form-control text-center" name="student_name" placeholder="Student Name" required>
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Amount</i></label>
                        <input type="number" class="form-control  text-center" name="amount" placeholder="Enter your amount" required>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Payment Method</i></label>
                       <select name="payment_method" class="form-control">
                        <option value="Cash_Paid">Cash Paid</option>
                        <option value="Cheque_Paid">Cheque Paid</option>
                        <option value="Online_Paid">Online Paid</option>
                       </select>
                      </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Status</i></label>
                        <select name="status" class="form-control">
                          <option value="due">Pending</option>
                          <option value="paid">Paid</option>
                        </select>
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleFormControlInput1" class="text-info"><i>Comment</i></label>
                        <input type="text" class="form-control text-center" name="comment" placeholder="Enter your Comment here" required>
                      </div>
                </div>
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal"><i>Close</i></button>
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