<?php

use App\Solver;
use App\SockMerchant\SockMerchant;

require __DIR__ . '/vendor/autoload.php';

$solver = new Solver(SockMerchant::make());

echo $solver->solve() . "\r\n";
