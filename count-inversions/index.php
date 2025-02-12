<?php
// Challenge count-inversions Solution
class Solution {
  public function solve(array $arr): int 
  {
    $count = count($arr);
    if ($count === 0) return $count;
    $temp = array_fill(0, $count, 0);
    return $this->mergeSortAndCount($arr, $temp, 0, $count - 1);
  }

  public function mergeSortAndCount(&$arr, &$temp, $left, $right) {
    if ($left >= $right) {
        return 0;
    }
    
    $mid = floor(($left + $right) / 2);
    $invCount = 0;
    
    $invCount += $this->mergeSortAndCount($arr, $temp, $left, $mid);
    $invCount += $this->mergeSortAndCount($arr, $temp, $mid + 1, $right);
    $invCount += $this->mergeAndCount($arr, $temp, $left, $mid, $right);
    
    return $invCount;
  }

  public function mergeAndCount(&$arr, &$temp, $left, $mid, $right) {
      $i = $left;
      $j = $mid + 1;
      $k = $left;
      $invCount = 0;
      
      while ($i <= $mid && $j <= $right) {
          if ($arr[$i] <= $arr[$j]) {
              $temp[$k++] = $arr[$i++];
          } else {
              $temp[$k++] = $arr[$j++];
              $invCount += ($mid - $i + 1);
          }
      }
      
      while ($i <= $mid) {
          $temp[$k++] = $arr[$i++];
      }
      
      while ($j <= $right) {
          $temp[$k++] = $arr[$j++];
      }
      
      for ($i = $left; $i <= $right; $i++) {
          $arr[$i] = $temp[$i];
      }
      
      return $invCount;
  }
}
?>
