@extends('tasks.layout')
@section('content')
<div class="card">
  <div class="card-header">tasks Page</div>
  <div class="card-body">
      
      <form action="{{ url('task') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>Code</label></br>
        <input type="text" name="code" id="code" class="form-control"></br>
        <label>project</label></br>
        <select name="project_id" id="project_id"  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            @foreach ($projects as $project)
              <option value="{{ $project->id }}">{{ $project->title }}</option>
            @endforeach
            
        </select></br></br></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop