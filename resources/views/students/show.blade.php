@extends('auth.main')
@section('title')
@section('content')
 
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
<div class="card" style="width: 50%; margin-left: 30%">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Course : {{ $students->course }}</p>
        <p class="card-text">Subject : {{ $students->subject }}</p>
        <p class="card-text">Grades : {{ $students->grades }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection