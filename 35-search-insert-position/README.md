# Challenge 35-search-insert-position
Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.

You must write an algorithm with `O(log n)` runtime complexity.
Explain the challenge here.
```php
class Solution {
  public function solve(array $nums, int $target): int 
  {
      $left = 0;
      $right = count($nums) - 1;
      
      while ($left <= $right) {
          $mid = $left + intval(($right - $left) / 2);
          
          if ($nums[$mid] == $target) {
              return $mid;
          } elseif ($nums[$mid] < $target) {
              $left = $mid + 1;
          } else {
              $right = $mid - 1;
          }
      }
      
      return $left;
  }
}
```

A `O(log n)` runtime complexity solution is needed. This means we need to think about an algorithm that slices the search by, at least a half in every iteration. 

We do this by finding a new `$mid` in every loop. We start searching in the edges of the array and then the mid position will be `$left + intval(($right - $left) / 2)`. If target isn't found, we need to update our `$left $right` variables
