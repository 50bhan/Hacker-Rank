<?php

namespace App\SockMerchant;

use App\Contracts\ProblemAbstract;

class SockMerchant extends ProblemAbstract
{
    private function sockMerchant($n, $arr): int
    {
        $i = 0;
        foreach (array_unique($arr) as $item) {
            $count = count(array_keys($arr, $item));
            $count % 2 === 0 ? $i += ($count / 2) : $i += ($count - 1) / 2;
        }

        return $i;
    }

    public function solve(): int
    {
        $n   = 9;
        $arr = [10, 20, 20, 10, 10, 30, 50, 10, 20];

        return $this->sockMerchant($n, $arr);
    }
}
