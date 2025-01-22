<?php
// Challenge 28-find-first-ocurrence-string Solution
class Solution {
  public function solve(string $haystack, string $needle): int {

      $lengthNeedle = strlen($needle);
      for ($i=0; $i < strlen($haystack); $i++) { 
        $substring = substr($haystack, $i, $lengthNeedle);
        if ($substring === $needle) {
          return $i;
        }
      }
      return -1;
  }
}
?>
