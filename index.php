<?php

use App\Solver;
use App\Problems\DiagonalDifference\DiagonalDifference;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(DiagonalDifference::make());

echo $solver->solve() . "\r\n";
