@extends('templates/master')

@section('content')

    <h2>High Low </h2>

    <p>The goal of this game is to guess the number with the fewest guesses only being provided with Higher or Lower clues
    </p>
    <p>Basic rules</p>
    <ul>
        <li>Enter a number between 1 and 100 in the form below</li>
        <li>If you don't guess it right on the first try you will be given a clue whether the number you're looking for is
            higher or lower.</li>
        <li>Try to guess the number in the fewest tries possible.</li>
    </ul>
    @if (!$number)
        <form method='POST' action='/process'>

            <label name='name'>Your Name:</label>
            <input test='name-field' type='text' name='name' id='name'>
            <br>
            <label name='guess'>Pick a number between 1 and 100</label>
            <input test='guess-field' type='number' name='guess' id='guess'>
            <br>
            <button test='submit-buton' type='submit'>Enter my Guess</button>

        </form>

    @endif
    @if ($app->errorsExist())
        <ul>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if ($number)
        <span test='game-outcome'>{{ $outcome }}</span>

        <div test='second-guess'>
            <form method='POST' action='reprocess'>
                <label name='guess'>Pick a number between 1 and 100</label>
                <input type='number' name='guess' id='guess'>
                <button type='submit'>Enter my Guess</button>
                <input type='hidden' name='number' value='{{ $number }}'>
                <input type='hidden' name='tries' value='{{ $tries }}'>
                <input type='hidden' name='name' value='{{ $name }}'>
            </form>
        </div>

    @endif

@endsection
