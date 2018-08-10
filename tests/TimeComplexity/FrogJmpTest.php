<?php

namespace TimeComplexity;

use PHPUnit\Framework\TestCase;
use Clouding\Codility\TimeComplexity\FrogJmp;

class FrogJmpTest extends TestCase
{
    public function test_example()
    {
        $X = 10;
        $Y = 85;
        $D = 30;

        $this->assertSame(FrogJmp::solution($X, $Y, $D), 3);
    }

    public function test_1_1_1()
    {
        $X = 1;
        $Y = 1;
        $D = 1;

        $this->assertSame(FrogJmp::solution($X, $Y, $D), 0);
    }

    public function test_1_2_1()
    {
        $X = 1;
        $Y = 2;
        $D = 1;

        $this->assertSame(FrogJmp::solution($X, $Y, $D), 1);
    }
}
