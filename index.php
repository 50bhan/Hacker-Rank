<?php

use App\Solver;
use App\JumpingOnTheClouds\JumpingOnTheClouds;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(JumpingOnTheClouds::make());

echo $solver->solve() . "\r\n";
