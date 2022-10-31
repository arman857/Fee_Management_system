@extends('Backend.components.layout')
@section('fee','active')
@section('contain')
    <div class="container">
      <div class="card">
        <div class="card-header">
     <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i>Details</i></button>
        </div>
    

        <div class="card-body">
            <table>
                <thead class=" text-info">
                  <tr>
                   <th scope="col"><i>S.N</i></th>
                   <th scope="col"><i>Name</i></th>
                    <th scope="col"><i>Father_Name</i></th>
                    <th scope="col"><i>Mother_Name</i></th>
                    <th scope="col"><i>DOB</i></th>
                    <th scope="col"><i>Calss</i></th>
                    <th scope="col"><i>Address</i></th>
                    <th scope="col"><i>Mobile_Number</i></th>
            
                 
                  </tr>
                </thead>
                
                <tbody>
                </tbody>
              </table>
             
  @endsection