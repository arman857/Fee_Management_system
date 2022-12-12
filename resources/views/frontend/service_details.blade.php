@extends('frontend.layout.main')
@section('service','active')
@section('title',' service Details')
@section('main-container')

<div class="furnitures_section layout_padding">
    <div class="container">
       <h1 class="our_text">{{$service_details->Title}} </h1>
       <p class="ipsum_text"></p>
       <div class="furnitures_section2 layout_padding">
          <div class="row">
             <div class="col-md-12">
                <div class="container_main">
                   <img src="{{url('storage/'.$service_details->Image)}}" alt="Avatar" class="image">
                  
                </div>
                
                <p class="dololr_text">{{$service_details->Description}}</p>
             </div>
            
          </div>
       </div>
    </div>
 </div>
@endsection