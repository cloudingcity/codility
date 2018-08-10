<?php

use PHPUnit\Framework\TestCase;
use Clouding\Codility\Iterations\BinaryGap;

class BinaryGapTest extends TestCase
{
    public function test_1041()
    {
        $N = 1041;

        $this->assertSame(BinaryGap::solution($N), 5);
    }

    public function test_15()
    {
        $N = 15;

        $this->assertSame(BinaryGap::solution($N), 0);
    }

    public function test_32()
    {
        $N = 32;

        $this->assertSame(BinaryGap::solution($N), 0);
    }
}
