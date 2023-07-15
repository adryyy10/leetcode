<?php

/**
 * Given an integer array nums sorted in non-decreasing order, remove the duplicates in-place such that each unique element appears only once. 
 * The relative order of the elements should be kept the same. Then return the number of unique elements in nums.
 */
class Solution {

    /**
     * @param array $nums
     * @return int
     */
    function removeDuplicates($nums): int 
    {
        $prevN = null;
        $k = 0;
        foreach($nums as $k => $n) {
            if($n === $prevN) {
                unset($nums[$k]);
            } else {
                $k++;
            }
            $prevN = $n;
        }

        return $k;
    }
}

$solution = new Solution;
echo $solution->removeDuplicates([1,1,1,2]);