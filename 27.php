<?php

/**
 * Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. The order of the elements may be changed. Then return the number of elements in nums which are not equal to val.
 */
class Solution {

    /**
     * @param int[] $nums
     * @param int $val
     * @return int
     */
    function removeElement(array &$nums, int $val): int {
        $nums = array_filter($nums, function ($row) use ($val) {
            return $row !== $val;
        });

        return count($nums);
    }

}

$solution = new Solution;
$nums = [0, 1, 2, 2, 3, 0, 4, 2];
echo $solution->removeElement($nums, 2);
print_r($nums);