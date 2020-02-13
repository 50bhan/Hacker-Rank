<?php

namespace App\TwoDimensionArray;

use App\Contracts\ProblemAbstract;

class TwoDimensionArray extends ProblemAbstract
{
    private function twoDimensionArray($arr, $n): int
    {
        $max = null; // Because input number might be negative and max = 0 is always greater

        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $hourglass = $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2];
                $hourglass += $arr[$i + 1][$j + 1];
                $hourglass += $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2];

                $max > $hourglass ? : $max = $hourglass;
            }
        }

        return $max;
    }

    public function solve(): int
    {
        [$n, $arr] = readInputFile();

        return $this->twoDimensionArray($arr, $n);
    }
}
