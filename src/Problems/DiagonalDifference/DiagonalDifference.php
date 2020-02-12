<?php

namespace App\Problems\DiagonalDifference;

use App\Contracts\ProblemAbstract;

class DiagonalDifference extends ProblemAbstract
{
    private function diagonalDifference($arr, $n): int
    {
        $result = 0;
        --$n;

        for ($i = 0; $i <= $n; $i++) {
            $result += $arr[$i][$i];
            $result -= $arr[$i][$n - $i];
        }

        return abs($result);
    }

    public function solve(): int
    {
        [$n, $arr] = readInputFile();

        return $this->diagonalDifference($arr, $n);
    }
}
