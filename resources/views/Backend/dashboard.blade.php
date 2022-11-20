@extends('Backend.components.layout')
@section('dashboard','active')
@section('title','Dashboard')
@section('contain')
<style>
    .dasboard{
        margin: 40px;
        /* padding: 20px; */
        height: 100px;
        width: 250px;
        border-radius: 10px;
        color:white;
        background-color:black;
        font-size: 20px;
        font-family: arial;
        text-shadow: 20px;
    }
</style>
<div class="container">
<div class="row">

<button class="dasboard">Total Student<br>{{$total_student}} </button>

<button class="dasboard">Total Fee<br>{{$total_fee}} </button>

<button class="dasboard">Total Customer Message<br>{{$total_message}} </button>

</div>
</div>
@endsection