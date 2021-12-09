@extends('templates/master')

@section('content')

    <h2>Blackjack</h2>

    <p>The goal of this game is to beat the dealer's hand without going over 21!</p>
    <p>Basic rules</p>
    <ul>
        <li>Face cards are worth 10. Aces are worth 1 or 11, whichever makes a better hand.</li>
        <li>Each player starts with two cards, one of the dealer's cards is hidden until the end.</li>
        <li>To 'Hit' is to ask for another card. To 'Stand' is to hold your total and end your turn.</li>
        <li>If you go over 21 you bust, and the dealer wins regardless of the dealer's hand.</li>
        <li>If you are dealt 21 from the start (Ace & 10), you got a blackjack.</li>
        <li>Dealer will hit until his/her cards total 17 or higher.</li>
    </ul>

    <form method='POST' action='deal'>
        <button type='submit'>Deal Me In!</button>
    </form>

@endsection
