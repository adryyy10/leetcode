<?php

/**
 * Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid.
 * An input string is valid if:
 * Open brackets must be closed by the same type of brackets.
 * Open brackets must be closed in the correct order.
 * Every close bracket has a corresponding open bracket of the same type.
 */
class Solution {

    /**
     * @param string $s
     * @return bool
     */
    function isValid($s): bool 
    {
        $mapping = [
            '(' => ')',
            '{' => '}',
            '[' => ']'
        ];
        $closes = [];

        for($i = 0; $i < strlen($s); $i ++){
            // If we have an opening, pushing closing into $closes
            if(isset($mapping[$s[$i]])) { 
                $closes[] = $mapping[$s[$i]];
                continue;
            }

            // If we have a closing, compare the last value of $closes with the current loop
            if(array_pop($closes) !== $s[$i]){
                return false;
            }
        }

        return empty($closes);
    }
}