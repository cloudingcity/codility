<?php

use PHPUnit\Framework\TestCase;
use Clouding\Codility\CyclicRotation;

class CyclicRotationTest extends TestCase
{
    public function test_example_1()
    {
        $A = [3, 8, 9, 7, 6];
        $K = 3;

        $this->assertSame(CyclicRotation::solution($A, $K), [9, 7, 6, 3, 8]);
    }

    public function test_example_2()
    {
        $A = [0, 0, 0];
        $K = 1;

        $this->assertSame(CyclicRotation::solution($A, $K), [0, 0, 0]);
    }

    public function test_example_3()
    {
        $A = [1, 2, 3, 4];
        $K = 4;

        $this->assertSame(CyclicRotation::solution($A, $K), [1, 2, 3, 4]);
    }

    public function test_N_0()
    {
        $A = [];
        $K = 0;

        $this->assertSame(CyclicRotation::solution($A, $K), []);
    }

    public function test_K_0()
    {
        $A = [1, 2, 3];
        $K = 0;

        $this->assertSame(CyclicRotation::solution($A, $K), [1, 2, 3]);
    }

    public function test_N_1_K_1()
    {
        $A = [1];
        $K = 1;

        $this->assertSame(CyclicRotation::solution($A, $K), [1]);
    }

    public function test_N_2_K_1()
    {
        $A = [1, 2];
        $K = 1;

        $this->assertSame(CyclicRotation::solution($A, $K), [2, 1]);
    }

    public function test_N_3_K_1()
    {
        $A = [1, 2, 3];
        $K = 1;

        $this->assertSame(CyclicRotation::solution($A, $K), [3, 1, 2]);
    }

    public function test_N_3_K_2()
    {
        $A = [1, 2, 3];
        $K = 2;

        $this->assertSame(CyclicRotation::solution($A, $K), [2, 3, 1]);
    }

    public function test_N_3_K_3()
    {
        $A = [1, 2, 3];
        $K = 3;

        $this->assertSame(CyclicRotation::solution($A, $K), [1, 2, 3]);
    }

    public function test_N_3_K_4()
    {
        $A = [1, 2, 3];
        $K = 4;

        $this->assertSame(CyclicRotation::solution($A, $K), [3, 1, 2]);
    }
}
