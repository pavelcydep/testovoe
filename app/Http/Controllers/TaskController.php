<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //use ValidatesRequests, HasRoles;


    protected $tasks;
  
  
  
  
    public function getTasksAdmin()
    {
  
  
      $tasks = Product::orderBy('created_at', 'asc')->get();
      return view('index', [
        'tasks' => $tasks
      ]);
    }
  
    public function store(Request $request)
    {
    $task= new Product;
    dd($request->all());
  $task->fill($request->all());//получаю все запросы
    $task->save();
    return redirect()->route('index');
    }

    public function edit($id)
    {
      $task = Product::find($id);
  
      return view('index', ['tasks' => $task]);
    }




  /*
    public function create()
    {
      return view('tasks.create');
    }
  
    public function update($id)
    {
      $tasks = Task::orderBy('created_at', 'asc')->get();
      $task = Task::findOrFail($id);
  
      return view('tasks.update', ['tasks' => $tasks]);
    }
    //изменяю запись
    public function storeUpdate(Request $request, $id)
    {
      $task = Task::findOrFail($id);
      $task->name = $request->name;
  
      $task->update(['id' => $task->id]);
  
      return redirect('/admin');
    }
  
    public function edit($id)
    {
      $task = Task::find($id);
  
      return view('tasks.index', ['tasks' => $task]);
    }
  
  
  
    public function delete(Task $task)
    {
      $task->delete();
  
      return redirect('/');
    }
  
    public function updateTaskStatusActive(Request $request, $id)
    {
      $task = Task::findOrFail($id);
  
  
      $task->active = $request->active;
  
      $task->update(['active' => $task->active]);
  
      return redirect('/');
    }
  
    public function updateTaskStatusCompleted(Request $request, $id)
    {
      $task = Task::findOrFail($id);
  
  
      $task->completed = $request->completed;
  
      $task->update(['completed' => $task->completed]);
  
      return redirect('/');
    }*/
}
