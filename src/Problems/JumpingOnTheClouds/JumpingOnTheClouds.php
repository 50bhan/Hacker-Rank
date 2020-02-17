<?php

namespace App\JumpingOnTheClouds;

use App\Contracts\ProblemAbstract;

class JumpingOnTheClouds extends ProblemAbstract
{
    private function jumpingOnTheClouds($n, $arr): int
    {
        $i       = 0;
        $counter = -1;

        while ($i <= $n) {
            if (isset($arr[$i + 2]) && $arr[$i + 2] === 1) {
                $i++;
            } else {
                $i += 2;
            }

            $counter++;
        }

        return $counter;
    }

    public function solve(): int
    {
        $n   = 7;
        $arr = [0, 0, 1, 0, 0, 1, 0];

        return $this->jumpingOnTheClouds($n, $arr);
    }
}
