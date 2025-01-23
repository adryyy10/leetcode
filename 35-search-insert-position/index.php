<?php

class Solution {
  public function solve(array $nums, int $target): int 
  {
      $left = 0;
      $right = count($nums) - 1;
      
      while ($left <= $right) {
          $mid = $left + intval(($right - $left) / 2);
          
          if ($nums[$mid] == $target) {
              return $mid;
          } elseif ($nums[$mid] < $target) {
              $left = $mid + 1;
          } else {
              $right = $mid - 1;
          }
      }
      
      return $left;
  }
}
?>
