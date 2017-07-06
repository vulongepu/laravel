@extends('layout')

@section('content')
    
   <div class="col-lg-6 col-lg-offset-3">
      <form action="{{ route('todos.save', ['id' => $todo->id ]) }}" method="post">

        {{  csrf_field( )}}

       <input type="text" value="{{ $todo->todo}}" class="form-control input-lg" name="todo" placeholder="Create a todo...">
       </form>
   </div>                    


@stop