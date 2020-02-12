<?php

namespace App\Contracts;

abstract class ProblemAbstract implements ProblemInterface
{
    public static function make(): ProblemAbstract
    {
        return new static();
    }
}
