<?php

/**
 * Write a function to find the longest common prefix string amongst an array of strings.
 * If there is no common prefix, return an empty string "".
 */
class Solution {

    /**
     * @param array $strs
     * @return string
     */
    function longestCommonPrefix($strs) {
        $result = '';
        if(count($strs) == 1) return $strs[0];
        sort($strs);
        $str1 = $strs[0];
        $str2 = $strs[count($strs) - 1];
        for($i = 0; $i < strlen($str1); $i++){
            if($str2[$i] != $str1[$i]){
                return $result;
            }
            $result .=$str2[$i];
        }   
        return $result;
    }
}