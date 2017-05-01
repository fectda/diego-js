<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use DiegoJS\Tester;
use DiegoJS\HomeWork\First;
use DiegoJS\HomeWork\Second;

// $home_work = First::make( [150] );
$home_work = Second::make( [150] );
Tester::init($home_work);

die;
