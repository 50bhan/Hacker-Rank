<?php

namespace App\CountingValleys;

use App\Contracts\ProblemAbstract;

class CountingValleys extends ProblemAbstract
{
    private function countingValleys($n, $s): int
    {
        $chars  = str_split($s);
        $level  = 0; // Current level
        $valley = 0; // Number of valleys

        foreach ($chars as $char) {
            if ($char === 'U') {
                $level++;
            }

            if ($char === 'D') {
                $level--;
            }

            // if we just came UP to sea level
            if ($level === 0 && $char === 'U') {
                $valley++;
            }
        }

        return $valley;
    }

    public function solve(): int
    {
        $n = 12;
        $s = 'DDUUDDUDUUUD';

        return $this->countingValleys($n, $s);
    }
}
