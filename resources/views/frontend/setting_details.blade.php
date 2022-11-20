@extends('frontend.layout.main')
@section('main-container')

<div class="furnitures_section layout_padding">
    <div class="container">
       <h1 class="our_text"> </h1>
       <p class="ipsum_text"></p>
       <div class="furnitures_section2 layout_padding">
          <div class="row">
             <div class="col-md-12">
                <div class="container_main">
                   {{-- <img src="" alt="Avatar" class="image"> --}}
                  
                </div>
                
                <p class="dololr_text">{{$setting_details->Description}}</p>
             </div>
            
          </div>
       </div>
    </div>
 </div>
@endsection