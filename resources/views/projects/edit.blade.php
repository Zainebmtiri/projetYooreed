@extends('projects.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('project/' .$projects->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$projects->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" title="title" id="title" value="{{$projects->title}}" class="form-control"></br>
        <label>content</label></br>
        <input type="text" title="content" id="content" value="{{$projects->content}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop