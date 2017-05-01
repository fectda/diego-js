<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use DiegoJS\Tester;
use DiegoJS\HomeWork\First;

// $home_work = First::make( [150] );
Tester::init($home_work);

die;
