<?php

namespace App\Staircase;

use App\Contracts\ProblemAbstract;

class Staircase extends ProblemAbstract
{
    private function staircase($n): void
    {
        for ($i = 1; $i <= $n; $i++) {
            printf('%1$s%2$s%3$s', str_repeat(' ', $n - $i), str_repeat('#', $i), "\n");
        }
    }

    public function solve(): void
    {
        $n = 6;

        $this->staircase($n);
    }
}
