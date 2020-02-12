<?php

namespace App\Problems\DiagonalDifference;

use App\Contracts\ProblemAbstract;

class DiagonalDifference extends ProblemAbstract
{
    private function diagonalDifference($arr): int
    {
        $n      = count($arr) - 1;
        $result = 0;

        for ($i = 0; $i <= $n; $i++) {
            $result += $arr[$i][$i];
            $result -= $arr[$i][$n - $i];
        }

        return abs($result);
    }

    public function solve(): int
    {
        return $this->diagonalDifference(readInputFile()['arrayData']);
    }
}
