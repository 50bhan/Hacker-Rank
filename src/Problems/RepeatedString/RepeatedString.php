<?php

namespace App\RepeatedString;

use App\Contracts\ProblemAbstract;

class RepeatedString extends ProblemAbstract
{
    private function repeatedString($s, $n): int
    {
        $strRepeatCount = floor($n / strlen($s));
        $subStrCount    = substr_count($s, 'a');

        $remainStr      = substr($s, 0, $n % strlen($s));
        $remainStrCount = substr_count($remainStr, 'a');

        return (int)($strRepeatCount * $subStrCount) + $remainStrCount;
    }

    public function solve(): int
    {
        $s = 'epsxyyflvrrrxzvnoenvpegvuonodjoxfwdmcvwctmekpsnamchznsoxaklzjgrqruyzavshfbmuhdwwmpbkwcuomqhiyvuztwvq';
        $n = 549382313570;

        return $this->repeatedString($s, $n);
    }
}
