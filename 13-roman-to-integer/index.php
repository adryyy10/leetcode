<?php

class Solution {
  public function solve(string $s): int 
  {
    $romanToInteger = [
      'I' => 1,
      'V' => 5,
      'X' => 10,
      'L' => 50,
      'C' => 100,
      'D' => 500,
      'M' => 1000,
    ];

    $total = 0;
    $stringLength = strlen($s);
    for ($i=0; $i < $stringLength; $i++) {
      $total += ($i !== $stringLength -1 && $romanToInteger[$s[$i]] < $romanToInteger[$s[$i+1]])
        ? -$romanToInteger[$s[$i]]
        : $romanToInteger[$s[$i]];
    }
    return $total;
  }
}
?>
