@extends('layout')

@section('content')

    @foreach($todos as $todo)

    {{  $todo->todo }}

   @endforeach

@stop