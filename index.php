<?php

use App\Solver;
use App\RepeatedString\RepeatedString;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(RepeatedString::make());

echo $solver->solve() . "\r\n";
