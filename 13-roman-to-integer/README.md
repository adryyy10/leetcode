# Challenge 13-roman-to-integer
## Problem description:
Roman numerals are represented by seven different symbols: `I, V, X, L, C, D and M`.

| Symbol            | value
| :---------------- | :------:
| I |   1
| V |   5
| X |  10
| L |  50
| C |  100
| D |  500
| M |  1000

For example, `2` is written as `II` in Roman numeral, just two ones added together. `12` is written as `XII`, which is simply `X + II`. The number `27` is written as `XXVII`, which is `XX + V + II`.

Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

I can be placed before V (5) and X (10) to make 4 and 9. 
X can be placed before L (50) and C (100) to make 40 and 90. 
C can be placed before D (500) and M (1000) to make 400 and 900.
## Solution:
Proposed solution:

```php
class Solution {
  public function solve(string $s): int 
  {
    $romanToInteger = [
      'I' => 1,
      'V' => 5,
      'X' => 10,
      'L' => 50,
      'C' => 100,
      'D' => 500,
      'M' => 1000,
    ];

    $total = 0;
    $stringLength = strlen($s);
    for ($i=0; $i < $stringLength; $i++) {
      $total += ($i !== $stringLength -1 && $romanToInteger[$s[$i]] < $romanToInteger[$s[$i+1]])
        ? -$romanToInteger[$s[$i]]
        : $romanToInteger[$s[$i]];
    }
    return $total;
  }
}
```

Loop through `$s` and check for every `$s[$i]` its value it's greater or not than `$s[$i+1]`. If it's greater, then we will sum, if not we will substract. 

If we are in the last `$s[$i]` we will always sum since we have no digits left after.
