<?php

use App\Solver;
use App\ArrayLeftRotation\ArrayLeftRotation;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(ArrayLeftRotation::make());

echo $solver->solve() . "\r\n";
