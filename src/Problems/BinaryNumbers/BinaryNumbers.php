<?php

namespace App\BinaryNumbers;

use App\Contracts\ProblemAbstract;

class BinaryNumbers extends ProblemAbstract
{
    private function binaryNumbers($n): int
    {
        $arr = explode(0, decbin($n));

        return count(str_split(max($arr)));
    }

    public function solve(): int
    {
        $n = 13;

        return $this->binaryNumbers($n);
    }
}
