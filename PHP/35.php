<?php

class Solution {

    /**
     * @param int[] $nums
     * @param int $target
     * @return int
     */
    function searchInsert(array $nums,int $target): int 
    {
        if (empty($nums) || $nums[0] > $target) return 0;

        if ($nums[count($nums)-1] < $target) return count($nums);

        foreach ($nums as $key => $num) {
            if ($num >= $target) return $key;
        }
    }

}

$solution = new Solution;
echo $solution->searchInsert([1,3,5,6], 5);
echo $solution->searchInsert([1,3,5,6], 2);
echo $solution->searchInsert([1,3,5,6], 7);