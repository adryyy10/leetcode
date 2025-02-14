<?php

class Solution {
  public function solve(string $binaryStringA, string $binaryStringB): string 
  {
    return decbin(bindec($binaryStringA) + bindec($binaryStringB));
  }
}
?>
