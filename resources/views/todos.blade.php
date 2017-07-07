@extends('layout')

@section('content')
    
   <div class="col-lg-6 col-lg-offset-3">
      <form action="/create/todo" method="post">

        {{  csrf_field( )}}

       <input type="text" class="form-control input-lg" name="todo" placeholder="Create a todo...">
       </form>
   </div>  

    @foreach($todos as $todo)

    {{  $todo->todo }}  <a href="{{ url('todo/delete', ['id' => $todo->id]) }}" class="btn btn-danger">x</a>
    <a href="{{ url('todo/update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">Update</a>

    @if(!$todo->completed)
    <a href="{{ route('todos.completed', ['id' => $todo->id ])}}" class="btn btn-xs btn-success">Mark as complete</a>
    <hr>
    @endif
   @endforeach

@stop