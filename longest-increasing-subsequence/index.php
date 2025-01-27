<?php
class Solution {
  public function solve(array $nums): int {
      $numsLength = count($nums);
      if ($numsLength === 0) return 0;

      $dp = array_fill(0, $numsLength, 1);

      for ($i=1; $i < $numsLength; $i++) { 
        for ($j=0; $j < $i; $j++) { 
          if($nums[$j] < $nums[$i]) {
            $dp[$i] = max($dp[$i], $dp[$j] + 1);
          }
        }
      }

      return max($dp);
  }
}
?>
