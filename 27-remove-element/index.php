<?php
class Solution {
  public function solve(array &$nums, int $val): int 
  {
      $k = 0;
      for ($i=0, $j = count($nums) - 1; $i <= $j;) { 
        if ($nums[$i] !== $val) {
          $k++;
          $i++;
          continue;
        }

        if ($nums[$j] !== $val) {
          $nums[$i] = $nums[$j];
          $k++;
          $i++;
        }

        $j--;
      }

      return $k;
  }
}
?>
