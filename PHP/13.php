<?php

/**
 * Given a roman numeral, convert it to an integer.
 */
class Solution {

    /**
     * @param string $s
     * @return int
     */
    function romanToInt(string $s): int
    {
        $values = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $sum = 0;
        $s = str_split($s);
        for ($i=0; $i < count($s); $i++) {
            if ($i != count($s) -1 && $values[$s[$i]] < $values[$s[$i+1]]) {
                $sum -= $values[$s[$i]]; 
            } else {
                $sum += $values[$s[$i]];
            }
        }

        return $sum;
    }
}

$solution = new Solution;
//echo $solution->romanToInt('VIII');
//echo $solution->romanToInt('CDLXI');
echo $solution->romanToInt('IX');