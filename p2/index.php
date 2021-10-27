<?php

session_start();
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $throw = $results['throw'];
    $computer = $results['computer'];
    $throwOptions = $results['throwOptions'];
    $outcome = $results['outcome'];

    $_SESSION['results'] = null;
};

require 'index-view.php';