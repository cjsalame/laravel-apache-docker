<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

      $todos = Todo::all();

      return view('todos.index')->with('todos', $todos);
    }

    public function show($id){
      $todo = Todo::find($id);

      return view('todos.show')->with('todo', $todo);
    }

    public function create(){
      return view('todos.create');
    }

    public function save(){

      $this->validate(request(), [
        'name' => 'required|min:6|max:12',
        'description' => 'required'
      ]);

      $data = request()->all();
      $todo = new Todo();
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->completed = false;
      $todo->save();

      return redirect('/todos');
    }

    public function edit($id){
      $todo = Todo::find($id);
      return view('todos.edit')->with('todo', $todo);
    }

    public function update($id){

      $this->validate(request(), [
        'name' => 'required|min:6|max:20',
        'description' => 'required'
      ]);

      $data = request()->all();
      $todo = Todo::find($id);
      $todo->name = $data['name'];
      $todo->description = $data['description'];
      $todo->save();

      return redirect('/todos');
    }
}
