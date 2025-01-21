<?php

class Solution {
  public function solve(array &$nums): int 
  {

      $arrayLength = count($nums);
      if ($arrayLength < 2) {
          return $arrayLength;
      }

      // Initialize the slow-runner pointer
      $i = 0;

      // Iterate through the array with the fast-runner pointer
      for ($j = 1; $j < $arrayLength; $j++) {
          // If the current element is different from the last unique element
          if ($nums[$j] !== $nums[$i]) {
              $i++; // Move the slow-runner pointer
              $nums[$i] = $nums[$j]; // Update the position with the new unique element
          }
      }

      // The number of unique elements is i + 1
      return $i + 1;
  }
}
?>
