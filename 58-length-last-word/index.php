<?php

class Solution {
  public function solve(string $combination): int 
  {
    $combination = rtrim($combination);
    $combinationAsArray = explode(" ", $combination);
    $lastWord = array_pop($combinationAsArray);
    
    return strlen($lastWord);
  }
}
?>
