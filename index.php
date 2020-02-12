<?php

use App\Solver;
use App\CountingValleys\CountingValleys;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(CountingValleys::make());

echo $solver->solve() . "\r\n";
