<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view ('projects.index')->with('projects', $projects);
    }
    
    public function create()
    {
        return view('projects.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Project::create($input);
        return redirect('project')->with('flash_message', 'Project Addedd!');  
    }
    
    public function show($id)
    {
        $project = Project::find($id);
        return view('projects.show')->with('projects', $project);
    }
    
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('projects', $project);
    }
  
    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $input = $request->all();
        $project->update($input);
        return redirect('project')->with('flash_message', 'project Updated!');  
    }
  
    public function destroy($id)
    {
        Project::destroy($id);
        return redirect('project')->with('flash_message', 'Project deleted!');  
    }
}
