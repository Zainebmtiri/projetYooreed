@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">tasks Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">title : {{ $tasks->title }}</h5>
        <p class="card-text">code : {{ $tasks->code }}</p>
  </div>
      
    </hr>
  
  </div>
</div>