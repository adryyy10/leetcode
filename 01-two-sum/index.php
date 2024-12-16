<?php

class Solution {
    function solve(array $nums, int $target) {
        $alreadyViewedNums = [];

        for ($i=0; $i < count($nums); $i++) { 
            if (!array_key_exists($nums[$i], $alreadyViewedNums)) {
                $alreadyViewedNums[$target-$nums[$i]] = $i;
                continue;
            } 

            return [$alreadyViewedNums[$nums[$i]], $i];
        }
    }
}
?>
