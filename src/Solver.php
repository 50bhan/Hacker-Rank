<?php

namespace App;

use App\Contracts\ProblemInterface;

class Solver
{
    protected $problem;

    public function __construct(ProblemInterface $problem)
    {
        $this->problem = $problem;
    }

    /**
     * @return mixed
     */
    public function solve()
    {
        return $this->problem->solve();
    }
}
