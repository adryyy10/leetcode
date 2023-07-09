<?php

/**
 * Given an integer x, return true if x is a palindrome, and false otherwise.
 */
class Solution {

    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome($x) {
        return ((string)$x === strrev((string)$x));
    }
}