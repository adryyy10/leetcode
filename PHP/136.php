<?php

class Solution {

    /**
     * @param int[] $nums
     * @return int
     */
    function singleNumber(array $nums): int
    {
        $arrayValues = array_count_values($nums);
        asort($arrayValues);
        return array_key_first($arrayValues);
    }
}

$solution = new Solution;
echo $solution->singleNumber([4,1,2,1,2]);
echo $solution->singleNumber([2,2,1]);