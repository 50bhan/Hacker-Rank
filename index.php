<?php

use App\Solver;
use App\DictionariesAndMaps\DictionariesAndMaps;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(DictionariesAndMaps::make());

echo $solver->solve() . "\r\n";
