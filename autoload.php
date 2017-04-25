<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$home_work = new DiegoJS\HomeWork\First( 150 );
DiegoJS\Tester::init($home_work);

die;
