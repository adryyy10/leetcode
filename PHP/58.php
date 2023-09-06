<?php

class Solution {

    /**
     * @param string $s
     * @return int
     */
    function lengthOfLastWord(string $s): int
    {
        if (strlen($s) === 0) return 0;

        $stringAsArray = explode(' ', rtrim($s));
        $length = count($stringAsArray)-1;
        
        return strlen($stringAsArray[$length]);
    }

}

$solution = new Solution;
//echo $solution->lengthOfLastWord('Hello World');
echo $solution->lengthOfLastWord('   fly me   to   the moon  ');