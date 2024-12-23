<?php

class Solution {
  public function solve(string $s): bool 
  {
    $mapping = array(
      ')' => '(',
      ']' => '[',
      '}' => '{'
    );

    if (strlen($s) % 2 != 0) {
      return false;
    }
    
    $stack = array();
    foreach (str_split($s) as $char) {
      if (!array_key_exists($char, $mapping)) {
        array_push($stack, $char);
        continue;
      }

      $topElement = array_pop($stack);
      if ($mapping[$char] != $topElement) {
        return false;
      }
    }

    // If the stack is empty, then we have a valid expression.
    if (!empty($stack)) {
      return false;
    }

    return true;
  }
}
?>
