@extends('Backend.components.layout')
@section('user','active')
@section('title','user')
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
                   <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i>User MAIL</i></button>
                    </div>
                     <div class="card-body">
                      <table>
                       <thead class=" text-info">
                        <tr>
                          <ul>
                           <th scope="col" class="text-success text-center"><i>S.N</i></th>
                            <th scope="col" class="text-success text-center"><i>Name</i></th>
                              <th scope="col" class="text-success text-center"><i>Email</i></th>
                                <th scope="col" class="text-success text-center"><i>Phone_Number</i></th>
                                 <th scope="col" class="text-success text-center"><i>Massage</i></th>
                                  <th scope="col" class="text-success text-center"><i>Action</i></th>
                                    </ul>
                                     </tr>
                                       <tbody>
                                        @foreach($shops as $key=>$data)  
                                         <tr class="text-dark">
                                          <th scope="row"><i>{{$key++}}</i></th>
                                           <td><i>{{$data->Name}}</i></td>
                                            <td class="text-center"><i>{{$data->Email}}</i></td>
                                             <td class="text-center"><i>{{$data->Phone_Number}}</i></td>
                                               <td class="text-center"><i>{{$data->Massage}}</i></td>
                                                <td>
                     <a href="{{url('delete/shops', $data->id)}}"> <button class="btn btn-danger btn-sm"><i>Delete</i></button></a>
                     </td>
                   </tr>
                 @endforeach
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
</div>
 @endsection