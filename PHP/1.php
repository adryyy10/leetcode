<?php

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 * You can return the answer in any order.
 */
class Solution {

    /**
     * @param array $nums
     * @param int $target
     * @return array
     */
    function twoSum($nums, $target) {
        if (count($nums) == 2) return [$nums[0], $nums[1]];

        asort($nums);

        var_dump($nums);

        for ($i = 0, $j = count($nums) -1; $i < count($nums) - 1; ($nums[$i] + $nums[$j] > $target ? $j-- : $i++)) {
            if ($nums[$i] + $nums[$j] == $target) return array_keys([$nums[$i], $nums[$j]]);
        }
    }
}

$solution = new Solution();
print_r($solution->twoSum([3,2,4], 6)); // [0,1]


