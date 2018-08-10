<?php

namespace TimeComplexity;

use PHPUnit\Framework\TestCase;
use Clouding\Codility\TimeComplexity\PermMissingElem;

class PermMissingElemTest extends TestCase
{
    public function test_example()
    {
        $A = [2, 3, 1, 5];

        $this->assertSame(PermMissingElem::solution($A), 4);
    }

    public function test_N_0()
    {
        $A = [];

        $this->assertSame(PermMissingElem::solution($A), 1);
    }

    public function test_N_1()
    {
        $A = [1];

        $this->assertSame(PermMissingElem::solution($A), 2);
    }

    public function test_N_1_2()
    {
        $A = [2];

        $this->assertSame(PermMissingElem::solution($A), 1);
    }

    public function test_N_2()
    {
        $A = [1, 2];

        $this->assertSame(PermMissingElem::solution($A), 3);
    }

    public function test_N_2_2()
    {
        $A = [2, 3];

        $this->assertSame(PermMissingElem::solution($A), 1);
    }
}
