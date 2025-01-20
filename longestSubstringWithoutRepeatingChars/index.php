<?php

class Solution {
  public function solve(string $word): string 
  {
      if (empty($word)) return '';
      $alreadySeenChars = [];

      $wordStack = $longestWord = '';
      for ($i=0; $i < strlen($word); $i++) {
        $char = $word[$i];

        if (in_array($char, $alreadySeenChars)) {
          if (strlen($wordStack) >= strlen($longestWord)) {
            $longestWord = $wordStack; 
          }
          $wordStack = $char;
          continue;
        }

        $wordStack .= $char;
        array_push($alreadySeenChars, $char);
      }

      return (strlen($longestWord) >= strlen($wordStack)) ? $longestWord : $wordStack;
  }
}
?>
