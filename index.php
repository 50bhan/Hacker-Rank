<?php

use App\Solver;
use App\Staircase\Staircase;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(Staircase::make());

echo $solver->solve() . "\r\n";
