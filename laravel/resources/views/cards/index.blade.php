@extends('layout')

@section('content')
    <h1>All Cards</h1>
    @foreach ($cards as $card)
        <div class="cards">
            {{ $card->title }}
        </div>
    @endforeach
@stop
