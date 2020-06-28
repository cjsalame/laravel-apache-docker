@extends('layouts.app')
@section('title')
Todos List
@endsection
@section('content')
<h1 class="text-center my-5">Todos List</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
        Todos
      </div>
      <div class="card-body">
        <ul class="list-group">
          @foreach($todos as $todo)
            <li class="list-group-item">
              {{ $todo->name }}
              <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm float-right m-1">Delete</a>
              <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm float-right m-1">Edit</a>
              <a href="/todos/{{$todo->id}}" class="btn btn-primary btn-sm float-right m-1">View</a>
              @if(!$todo->completed)
                <a href="/todos/{{$todo->id}}/complete" class="btn btn-success btn-sm float-right m-1">Complete</a>
              @else
                <button class="btn btn-secondary btn-sm float-right m-1">Completed</button>
              @endif
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
