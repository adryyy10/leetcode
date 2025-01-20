<?php

class Solution {
  public function solve(string $string1, string $string2): bool 
  {
    $string1 = $this->sanitizeString($string1);
    $string2 = $this->sanitizeString($string2);

    $string1AsArray = str_split($string1);
    $string2AsArray = str_split($string2);

    sort($string1AsArray);
    sort($string2AsArray);

    $string1 = implode($string1AsArray);
    $string2 = implode($string2AsArray);

    return $string1 === $string2;
  }

  private function sanitizeString(string $word): string
  {
    return str_replace(['.', ',', '!', '?'], '', trim(strtolower($word)));
  }
}


