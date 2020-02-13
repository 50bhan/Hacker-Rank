<?php

use App\Solver;
use App\TwoDimensionArray\TwoDimensionArray;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(TwoDimensionArray::make());

echo $solver->solve() . "\r\n";
