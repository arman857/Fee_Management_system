@extends('frontend.layout.main')
@section('main-container')
<div class="banner_section layout_padding">
   <div class="container">
      <div id="costum_slider" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <h1 class="furniture_text text-warning"><i>Admisson management system</i></h1>
               <p class="there_text text-success"><i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some fo</i></p>
               <div class="contact_bt_main">
                  <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
               </div>
            </div>
            <div class="carousel-item">
               <h1 class="furniture_text text-warning"><i>Admisson management system</i></h1>
               <p class="there_text text-success"><i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some fo</i></p>
               <div class="contact_bt_main">
               <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
               </div>
            </div>
            <div class="carousel-item">
               <h1 class="furniture_text text-warning"><i>Admisson management system</i></h1>
               <p class="there_text text-success"><i>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some fo</i></p>
               <div class="contact_bt_main">
               <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
      <div class="services_section">
         <div class="container">
            <h1 class="services_taital text-info"><i>our services</i></h1>
            <p class="many_taital">There are many variations of passages of Lorem Ipsum </p>
            <div class="services_section2">
               <div class="row">
                  @foreach($services as $data)
                  <div class="col-lg-3 col-sm-6">
                     <div class="icon_1"><img src="{{url('storage/'.$data->Image)}}"></div>
                     <h2 class="furnitures_text"><i>{{$data->Title}}</i></h2>
                     <p class="dummy_text "><i>{{$data->short_description}}</i></p>
                     <div class="read_bt_main">
                        <div class="read_bt mb-5"><a href="{{url('service/details/'.$data->id)}}"><i>Read More</i></a></div>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
<div class="contact_section">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h1 class="contact_text"><i>CONTACT US</i></h1>
            <script>
            @if(Session::has('message'))
       toastr.options =
       {
      "closeButton" : true,
      "progressBar" : true
        }
          toastr.success("{{ session('message') }}");
         @endif
          </script>
            <form action="{{url('contacts/store')}}" method="POST"  enctype="multipart/form-data">
               @csrf
            <div class="mail_sectin">
               <input type="text" class="email-bt" placeholder="Name" name="Name" value="{{old('Name')}}">
                 <ul>
               @error('Name')
                    <li><span style=color:blue><i><h2>{{$message}}</h2></i></span></li><br>
                @enderror
               </ul>
               <input type="text" class="email-bt" placeholder="Email" name="Email" value="{{old('Email')}}">
                 <ul>
               @error('Email')
                   <li><span style=color:blue><i><h2>{{$message}}</h2></i></span></li><br>
               @enderror
                  </ul>
               <input type="text" class="email-bt" placeholder="Phone Number" name="Phone_Number" value="{{old('Phone_Number')}}">
                  <ul>
                 @error('Phone_Number')
                   <li><span style=color:blue><i><h2>{{$message}}</h2></i></span></li><br>
                @enderror
                  </ul>
               <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage" value="{{old('Massage')}}"></textarea>
               <ul>
               @error('Massage')
                    <li><span style=color:blue><i><h2>{{$message}}</h2></i></span></li><br>
               @enderror
               </ul>
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