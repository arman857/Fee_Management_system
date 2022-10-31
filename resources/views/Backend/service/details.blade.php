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
                   <th scope="col"><i>Title</i></th>
                    <th scope="col"><i>Description</i></th>
                    <th scope="col"><i>Status</i></th>
            
                 
                  </tr>
                </thead>
                
                <tbody>
                </tbody>
              </table>
             
  @endsection
