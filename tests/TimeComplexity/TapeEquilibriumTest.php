<?php

namespace TimeComplexity;

use PHPUnit\Framework\TestCase;
use Clouding\Codility\TimeComplexity\TapeEquilibrium;

class TapeEquilibriumTest extends TestCase
{
    public function test_example()
    {
        $A = [3, 1, 2, 4, 3];

        $this->assertSame(TapeEquilibrium::solution($A), 1);
    }

    public function test_N_2()
    {
        $A = [1, 2];

        $this->assertSame(TapeEquilibrium::solution($A), 1);
    }

    public function test_N_3()
    {
        $A = [1, 2, 3];

        $this->assertSame(TapeEquilibrium::solution($A), 0);
    }

    public function test_N_4()
    {
        $A = [1, 2, 3, 4];

        $this->assertSame(TapeEquilibrium::solution($A), 2);
    }

    public function test_N_5()
    {
        $A = [1, 2, 3, 4 ,5];

        $this->assertSame(TapeEquilibrium::solution($A), 3);
    }
}
