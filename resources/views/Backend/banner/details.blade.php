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
                    <ul>
                  <li scope="col" class="text-success" ><h4><i>S.N</i></h4></li>
                    <li scope="col" class="text-success" ><h4><i>Title</i></h4></li>
                    <li scope="col" class="text-success" ><h4><i>Image</i></h4></li>
                    <li scope="col" class="text-success" ><h4><i>Description</i></h4></li>
                    <li scope="col" class="text-success" ><h4><i>Status</i></h4></li>
                    <li scope="col" class="text-success"><h4><i>short_description</i></h4></li>
                           </ul>
                        </tr>
                     </thead>
                 <tbody>
         </tbody>
    </table>
  @endsection
