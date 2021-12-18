@extends('templates/master')

@section('title')
    Round History
@endsection
@section('content')
    <h1>Round History</h1>
    <ul>
        @foreach ($rounds as $round)
            <li><a href='/rounds?id={{ $round['id'] }}'>{{ $round['timestamp'] }}</li>
        @endforeach
        <a href='/'>Home</a>
@endsection
