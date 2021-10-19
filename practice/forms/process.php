<?php

#superglobal 
$answer = $_POST['answer']; 

if ($answer == 'pumpkin') {
    $correct = TRUE;
}
else{
    $correct = false;
}
#$_POST

#$_SESSION

require 'process-view.php'; 