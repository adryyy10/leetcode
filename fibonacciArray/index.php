<?php
// Challenge fibonacci Solution
class Solution {
  public function solve(int $n): array 
  {
    if ($n == 0) return [];

    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;
    for($i = 2; $i < $n; $i++)
    {
      $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    return $fib;
  }
}
?>
