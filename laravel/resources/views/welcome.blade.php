@extends('layout')

@section('content')
<h1>This is the Welcome Page</h1>
@foreach ($people as $person)
  <li>{{ $person }}</li>
@endforeach
@stop
