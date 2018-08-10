<?php

use PHPUnit\Framework\TestCase;
use Clouding\Codility\Demo\MissingInteger;

class MissingIntegerTest extends TestCase
{
    public function test_random_positive_number()
    {
        $numbers = [1, 3, 6, 4, 1, 2];

        $this->assertSame(MissingInteger::solution($numbers), 5);
    }

    public function test_positive_number()
    {
        $numbers = [1, 2, 3];

        $this->assertSame(MissingInteger::solution($numbers), 4);
    }

    public function test_negative_number()
    {
        $numbers = [-1, -3];

        $this->assertSame(MissingInteger::solution($numbers), 1);
    }
}
