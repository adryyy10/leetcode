<?php

class Solution {

    /**
     * @param int[] $prices
     * @return int
     */
    function maxProfit(array $prices): int 
    {
        $profit=0;
        $buy=$prices[0];
        for($i=1;$i<count($prices);$i++){
            if($buy>$prices[$i]) $buy=$prices[$i];
            if($prices[$i]-$buy>$profit)$profit=$prices[$i]-$buy;
        }
        return $profit;
    }
}

$solution = new Solution;
echo $solution->maxProfit([7,1,5,3,6,4]);
echo $solution->maxProfit([7,6,4,3,1]);