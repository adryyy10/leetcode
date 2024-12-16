<?php

class Solution {
    function solve(int $x): bool
    {
        $x = (string)$x;
        $reversedString = '';
        for ($i=strlen($x)-1; $i >= 0; $i--) { 
            $reversedString .= $x[$i];
        }

        return $reversedString === $x;
    }
}
?>
