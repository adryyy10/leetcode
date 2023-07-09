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
        $hashMap = [];
        $count = count($nums);
        for($i=0;$i<$count;$i++){
                $secondIndex = $target-$nums[$i];
                if(isset($hashMap[$secondIndex])){
                    return array($i,$hashMap[$secondIndex]);
                }else{
                    $hashMap[$nums[$i]]=$i;
                }
        }
        return [];
    }
}


