@extends('templates/master')

@section('title')
    Round
@endsection
@section('content')
    <h1>Round {{ $round['id'] }}</h1>

    <p>{{ $round['name'] }} guessed the number</p>
    <p>It took them {{ $round['tries'] }} tries</p>
    <p>The number was {{ $round['number'] }}</p>


@endsection
