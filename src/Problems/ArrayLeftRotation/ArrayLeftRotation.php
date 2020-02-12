<?php

namespace App\ArrayLeftRotation;

use App\Contracts\ProblemAbstract;

class ArrayLeftRotation extends ProblemAbstract
{
    private function arrayLeftRotation($d, $n, $arr): void
    {
        $temp = array_splice($arr, 0, $d);
        $temp = array_merge($arr, $temp);

        for ($i = 0; $i < $n; $i++) {
            echo $temp[$i] . ' ';
        }
    }

    public function solve(): void
    {
        $d   = 2;
        $n   = 5;
        $arr = [1, 2, 3, 4, 5];

        $this->arrayLeftRotation($d, $n, $arr);
    }
}
