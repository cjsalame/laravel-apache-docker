@extends('layouts.app')
@section('title')
New Todo
@endsection
@section('content')
<h1 class="text-center my-5">Create Todo</h1>
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">
        New Todo
      </div>
      <div class="card-body">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="list-group">
              @foreach($errors->all() as $error)
                <li class="list-group-item">
                  {{$error}}
                </li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="/todos/save" method="post">
          @csrf
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <textarea name="description" rows="5" cols="5" placeholder="Description" class="form-control"></textarea>
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
