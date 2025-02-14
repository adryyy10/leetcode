<?php
// Challenge 66-plus-one Solution
class Solution {
  public function solve(array $number): array {
      return str_split(bcadd(1, implode('', $number)));
  }
}
?>
