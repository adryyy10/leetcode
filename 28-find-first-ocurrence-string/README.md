# Challenge 28-find-first-ocurrence-string
## Problem description:
Given two strings needle and **haystack**, return the index of the first occurrence of **needle** in **haystack**, or -1 if needle is not part of haystack.
## Solution:
Straight forward solution:

```php
class Solution {
  public function solve(string $haystack, string $needle): int {

      $position = strpos($haystack, $needle);
      return $position === FALSE ? -1 : $position;
  }
}
```

Using `strpos` php built in function which finds a substring in a string.

More complex function:

```php
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
```

Looping through `$haystack` and **creating substrings from $i to $i + $lengthNeddle** and check if the result is equals to $needle
