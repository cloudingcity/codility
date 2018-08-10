<?php


use PHPUnit\Framework\TestCase;
use Clouding\Codility\OddOccurrencesInArray;

class OddOccurrencesInArrayTest extends TestCase
{
    public function test_example()
    {
        $A = [9, 3, 9, 3, 9, 7, 9];

        $this->assertSame(OddOccurrencesInArray::solution($A), 7);
    }

    public function test_1()
    {
        $A = [1, 1, 3];

        $this->assertSame(OddOccurrencesInArray::solution($A), 3);
    }

    public function test_2()
    {
        $A = [1, 1, 3, 5, 5];

        $this->assertSame(OddOccurrencesInArray::solution($A), 3);
    }

    public function test_3()
    {
        $A = [1, 1, 1, 5, 5];

        $this->assertSame(OddOccurrencesInArray::solution($A), 1);
    }
}
