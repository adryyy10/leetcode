# Challenge 01-two-sum
## Problem description:

Given an array of integers **nums** and an integer **target**, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.


Example 1:

`Input: nums = [2,7,11,15], target = 9`

`Output: [0,1]`

`Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].`

Example 2:

`Input: nums = [3,2,4], target = 6`

`Output: [1,2]`

Example 3:

`Input: nums = [3,3], target = 6`

`Output: [0,1]`

## Solution:

```php
<?php

class Solution {
    function solve(array $nums, int $target) {
        $complementaryNums = [];

        for ($i=0; $i < count($nums); $i++) { 
            if (!array_key_exists($nums[$i], $complementaryNums)) {
                $complementaryNums[$target-$nums[$i]] = $i;
                continue;
            } 

            return [$complementaryNums[$nums[$i]], $i];
        }
    }
}
?>
```

In order to solve this code, we need to return indices of the two numbers such that they add up to target.

The key for this exercise is knowing that we need to constantly check if a complementary num is already seen for **$nums[$i]**.

- Complementary num means, we need to find a number that is the result from substracting **$nums[$i]** to **$target**

Example: 

`$nums = [2,7,11,15], $target = 9` -> When I start looping through this array, the first number, 2, has not been viewed yet, so I need to add its complementary as a key, which means `9 - 2 = 7` and its key `$i` as a value, having a **$complementaryNums** = `[7 => 0]`

The next loop, it's time to check for **$nums[$i] = 7**. Since **7** exists as a key in **$complementaryNums**, I shall return its value, which is **0** and the current key in my loop which is `$i`.

And the return is [0, 1] -> `0 because is the value from $complementaryNums[7] and 1 because is $i`