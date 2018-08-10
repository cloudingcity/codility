<?php

/**
 * MissingInteger
 *
 * Find the smallest positive integer that does not occur in a given sequence.
 *
 *
 * This is a demo task.
 *
 * Write a function:
 *
 *   function solution($A);
 *
 * that, given an array A of N integers, returns the smallest positive integer (greater than 0) that does not occur in A.
 *
 * For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.
 *
 * Given A = [1, 2, 3], the function should return 4.
 *
 * Given A = [−1, −3], the function should return 1.
 *
 * Assume that:
 *   - N is an integer within the range [1..100,000];
 *   - each element of array A is an integer within the range [−1,000,000..1,000,000].
 *
 * Complexity:
 *   - expected worst-case time complexity is O(N);
 *   - expected worst-case space complexity is O(N) (not counting the storage required for input arguments).
 *
 * Copyright 2009–2018 by Codility Limited. All Rights Reserved. Unauthorized copying, publication or disclosure prohibited.z
 */

namespace Clouding\Codility\Demo;

class MissingInteger
{
    public static function solution($numbers)
    {
        $count = count($numbers);
        $checkList = array_fill(1, $count, false);

        foreach ($numbers as $number) {
            if ($number <= 0) {
                continue;
            }

            $checkList[$number] = true;
        }

        foreach ($checkList as $number => $exists) {
            if (! $exists) {
                return $number;
            }
        }

        return $count + 1;
    }
}
