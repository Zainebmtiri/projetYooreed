@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('task/' .$tasks->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$tasks->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" title="title" id="title" value="{{$tasks->title}}" class="form-control"></br>
        <label>code</label></br>
        <input type="text" title="code" id="code" value="{{$tasks->code}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop