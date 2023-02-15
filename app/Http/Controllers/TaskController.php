<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('project')->get();;
        return view ('tasks.index')->with('tasks', $tasks);
    }
    
    public function create()
    {
        $projects = Project::all();
        return view('tasks.create', compact('projects'));
    }
  
    public function store(Request $request)
    {
        Task::create([
            'title' => $request->input('title'),
            'code' => $request->input('code'),
            'project_id' => $request->input('project_id'),
        ]);
        return redirect('task')->with('flash_message', 'Task Addedd!');  
    }
    
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with('tasks', $task);
    }
    
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('tasks', $task);
    }
  
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $input = $request->all();
        $task->update($input);
        return redirect('task')->with('flash_message', 'Task Updated!');  
    }
  
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('task')->with('flash_message', 'Task deleted!');  
    }
}