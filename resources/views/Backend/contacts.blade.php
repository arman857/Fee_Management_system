@extends('Backend.components.layout')
@section('student','active')
@section('title','Setting')
@section('contain')
<div class="contact_section">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <h1 class="contact_text"><i>CONTACT US</i></h1>
             @if (session('success'))
                   <span class="alert alert-success"> {{ session('success') }}
                     </span>
                       @endif
                        @if (session('danger'))
                         <div class="alert alert-danger"> {{ session('danger') }}
                          </div>
                           @endif
             <form action="{{url('contacts/store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
             <div class="mail_sectin">
                <input type="text" class="email-bt" placeholder="Name" name="Name" required >
                
                <input type="text" class="email-bt" placeholder="Email" name="Email" required >
          
                <input type="text" class="email-bt" placeholder="Phone Number" name="Phone_Number" required >
               
                <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage" required ></textarea>
            
                <button type="submit" class="btn btn-primary btn-lg">Send Me</button>
             </div>
          </div>
       </form>
          <div class="col-md-6">
          <div class="image_9 "><img src="{{url('frontend/images/img-9.png')}}"></div>
          </div>
       </div>
    </div> 
 </div>
 @endsection