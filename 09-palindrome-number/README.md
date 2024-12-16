# Challenge 09-palindrome-number
## Problem description:
Given an integer x, return true if x is a 
palindrome, and false otherwise.
## Solution:

We need to find a way to read `$x` backwards. PHP has a built-in function called `strrev(string $s)` that reverses a string.  

```php
<?php

class Solution {
    function solve(int $x) {
        return $x == strrev($x);
    }
}
?>
```

If we wanted to do it without using built-in functions we could do it this way:

```php
<?php

class Solution {
    function solve(int $x): bool
    {
        $x = (string)$x;
        $reversedString = '';
        for ($i=strlen($x)-1; $i >= 0; $i--) { 
            $reversedString .= $x[$i];
        }

        return $reversedString === $x;
    }
}
?>
```

We need to cast `$x` from int to string. Then we need to loop through `$x` starting from the end and going backwards and storing chars in `$reversedString` 
