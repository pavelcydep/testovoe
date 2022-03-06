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
    $this->validate($request, [
      'name' => 'required|min:10',
   ]);
  $task->fill($request->all());
    $task->save();
    return redirect()->route('index');
    }

    public function edit($id)
    {
      $task = Product::find($id);
  
      return view('index', ['tasks' => $task]);
    }

    public function getCard($id)
    {
   
      $task = Product::find($id);
  
      return view('card', ['tasks' => $task]);
    }
    public function update($id)
    {
      
      $task = Product::findOrFail($id);
  
      return view('update', ['tasks' => $task]);
    }

 //изменяю запись
 public function storeUpdate(Request $request, $id)
 {
   $task = Product::findOrFail($id);
   $task->article = $request->article;

   $task->update(['id' => $task->id]);

   return redirect('/');
 }

 public function delete($id) 
 {
     $tasks = Product::find($id); 
     $tasks->delete(); 
     return redirect('/');

 }
  
}
