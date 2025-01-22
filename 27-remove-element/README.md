# Challenge 27-remove-element
## Problem description:
Given an integer array nums and an integer val, remove all occurrences of val in nums **in-place**. The order of the elements may be changed. Then return the number of elements in nums which are **not equal to val.**

Consider the number of elements in nums which are not equal to val be k, to get accepted, you need to do the following things:

Change the array nums such that the first k elements of nums contain the elements which are not equal to val. The remaining elements of nums are not important as well as the size of nums.
Return k.
## Solution:
Approach:
```php
class Solution {
  public function solve(array &$nums, int $val): int 
  {
      $k = 0;
      for ($i=0, $j = count($nums) - 1; $i <= $j;) { 
        if ($nums[$i] !== $val) {
          $k++;
          $i++;
          continue;
        }

        if ($nums[$j] !== $val) {
          $nums[$i] = $nums[$j];
          $k++;
          $i++;
        }

        $j--;
      }

      return $k;
  }
}
```

My approach is based on starting from beggining and end of array with `$i and $j`. If `$nums[$i]` is different from `$val` means we need to increase `$k` and go to the next loop. 

If `$nums[$i]` is **equal** from `$val`, then we need to find a new number in `$nums[$j]` so we can replace it. 

If bot `$nums[$i]` and `$nums[$j]` are equal to `$val` then we just decrease $j trying to find that different value