<?php

class Solution {

    /**
     * @param int $n
     * @return int
     */
    public function climbStairs(int $n): int 
    {
        if ($n <= 2) return $n;
        return $this->climbStairs($n-1) + $this->climbStairs($n-2);
    }
}

$solution = new Solution;
echo $solution->climbStairs(5);