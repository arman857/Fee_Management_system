<!doctype html>
<html lang="en">
<head>
<title>Fee Details</title>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
      <a class="navbar-brand" href="#"><i>AMS</i></a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
     aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item @yield('student')">
    <a class="nav-link" href="{{url('student/details')}}"><i> Student</i></a>
    </li>
    <li class="nav-item @yield('fee')">
    <a class="nav-link" href="{{url('fee/details')}}"><i>Fee</i></a>
    </li>
    <li class="nav-item dropdown @yield('dropdown')">
    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" 
    aria-expanded="false"><i>Website</i></a>
    <div class="dropdown-menu menu-open" aria-labelledby="dropdownId">
    <a class="dropdown-item active" href="{{url('banners/details')}}"><i>Banner</i></a>
    <a class="dropdown-item" href="{{url('services/details')}}"><i>Service</i></a>
    </div>
    </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="Search">
    <button class="btn btn-warning" type="submit"><i>Search</i></button>
    </form>
    </div>
    </nav>
    