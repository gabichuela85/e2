<?php

require 'Game.php';
require 'MyGame.php';

$game = new RPS\Game(true);
$game3 = new RPS\MyGame(true);

//$game->play('rock');
$game3->play('tails');

//var_dump($game->getResults());
var_dump($game3->getResults());

# Make sure we can start a new instance without warning about session being already started
$game2 = new RPS\Game(true);