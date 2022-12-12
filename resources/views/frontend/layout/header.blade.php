<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>About</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" type="text/css" href="{{url('frontend/css/bootstrap.min.css')}}">
       <!-- style css --><link rel="stylesheet" href="{{url('css/bootstarp.css')}}"> 
       <link rel="stylesheet" type="text/css" href="{{url('frontend/css/style.css')}}"> 
       <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
       <link rel="icon" href="{{url('frontend/images/fevicon.png')}}" type="image/gif"> 
       <link rel="stylesheet" href="{{url('frontend/css/jquery.mCustomScrollbar.min.css')}}">
       <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> 
       <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
       <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
       </head>
       <body>  
       <div class="header_section">
                <div class="container-fluid">
                  <style>
                     nav.navbar.navbar-expand-lg.navbar-light.bg-light img {
    height: 6rem;
    border-radius: 3rem;
    margin: 0 1rem;
};
                     </style>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <img src="{{asset('uploads/settings/'.$setting->Logo)}}" width="auto" height="13rem">
                {{-- <div class="{{$setting['Logo']}}"><a href="index.html"> --}}
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
                <div class="logo"><h1>Company:{{$setting['Company_Name']}}</h1><a href="index.html"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('services/details')}}">Service</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('student/details')}}">Career</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="shop.html">Gallary</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="">Contact</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <h1 class="call_text">Call Us :{{$setting['Phone']}}</h1>
                </form>
                <div class="search_icon">
                <ul>
               <li><a href="https://www.google.com/maps/@28.3973819,84.1301498,7z"><img src="{{url('frontend/images/search-icon.png')}}"></a></li>
                        <li><a href="{{url('login')}}">LOGIN</a></li>
                     </ul>
                  </div>
               </div>
            </nav>
         </div>
      </div>
     

