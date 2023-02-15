@extends('projects.layout')
@section('content')
<div class="card">
  <div class="card-header">projects Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">title : {{ $projects->title }}</h5>
        <p class="card-text">content : {{ $projects->content }}</p>
  </div>
      
    </hr>
  
  </div>
</div>