<?php

require 'Number.php';
require 'EvenNumber.php';
require 'Debug.php';

use HES\Number;
use HES\EvenNumber;
use HES\Debug;

$example1 = new Number(19);
$example2 = new EvenNumber(20);

//var_dump($example1->isValid());
//var_dump($example2->isValid());

var_dump(['a', 'b', ['x', 'y', 'z']]);

Debug::dump(['a', 'b', ['x', 'y', 'z']]);