<?php

/**
 * Given an integer array nums and an integer val, remove all occurrences of val in nums in-place. The order of the elements may be changed. Then return the number of elements in nums which are not equal to val.
 */
class Solution {

    /**
     * @param string $haystack
     * @param string $needle
     * @return int
     */
    function strStr(string $haystack, string $needle): int 
    {
        $position = strpos($haystack, $needle);
        return ($position !== false) ? $position : -1;
    }

}

$solution = new Solution;
echo $solution->strStr('sadbutsad', 'sad');