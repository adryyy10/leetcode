<?php

class Solution {

/**
 * 
 * You are given an array nums consisting of positive integers.
 * 
 * Starting with score = 0, apply the following algorithm:
 * 
 * Choose the smallest integer of the array that is not marked. If there is a tie, choose the one with the smallest index.
 * Add the value of the chosen integer to score.
 * Mark the chosen element and its two adjacent elements if they exist.
 * 
 * Repeat until all the array elements are marked.
 * 
 * @param int[] $nums
 */
function findScore(array $nums) {
    $n = count($nums);
    $used = array_fill(0, $n, false);
    $score = 0;

    while (true) {
        // Find the index of the minimum unused element
        $minVal = PHP_INT_MAX;
        $minIndex = -1;
        for ($i = 0; $i < $n; $i++) {
            if (!$used[$i] && $nums[$i] < $minVal) {
                $minVal = $nums[$i];
                $minIndex = $i;
            }
        }

        // If no unused element found, break out
        if ($minIndex === -1) {
            break;
        }

        // Add the minimum found to the score
        $score += $nums[$minIndex];

        // Mark the chosen element and its neighbors as used
        $used[$minIndex] = true;
        if ($minIndex - 1 >= 0 && !$used[$minIndex - 1]) {
            $used[$minIndex - 1] = true;
        }
        if ($minIndex + 1 < $n && !$used[$minIndex + 1]) {
            $used[$minIndex + 1] = true;
        }
    }

    return $score;
}
}