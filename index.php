<?php

use App\Solver;
use App\BinaryNumbers\BinaryNumbers;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(BinaryNumbers::make());

echo $solver->solve() . "\r\n";
