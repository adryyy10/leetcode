# Challenge 26-remove-duplicates-sorted-array
## Problem description:

Given an integer array nums sorted in non-decreasing order, remove the duplicates **in-place** such that each unique element appears only once. The **relative order** of the elements should be kept the same. Then return the number of unique elements in nums.

Consider the number of unique elements of nums to be k, to get accepted, you need to do the following things:

Change the array nums such that the first k elements of nums contain the unique elements in the order they were present in nums initially. The remaining elements of nums are not important as well as the size of nums.
Return k.
Custom Judge:

The judge will test your solution with the following code:

int[] nums = [...]; // Input array
int[] expectedNums = [...]; // The expected answer with correct length

int k = removeDuplicates(nums); // Calls your implementation

assert k == expectedNums.length;
for (int i = 0; i < k; i++) {
    assert nums[i] == expectedNums[i];
}
If all assertions pass, then your solution will be accepted.

 

Example 1:

**Input**: nums = [1,1,2]

**Output**: 2, nums = [1,2,_]
Explanation: Your function should return k = 2, with the first two elements of nums being 1 and 2 respectively.
It does not matter what you leave beyond the returned k (hence they are underscores).

Example 2: 

**Input**: nums = [0,0,1,1,1,2,2,3,3,4]

**Output**: 5, nums = [0,1,2,3,4,_,_,_,_,_]
Explanation: Your function should return k = 5, with the first five elements of nums being 0, 1, 2, 3, and 4 respectively.
It does not matter what you leave beyond the returned k (hence they are underscores).
## Solution:
```php
class Solution {
  public function solve(array &$nums): int 
  {

      $arrayLength = count($nums);
      if ($arrayLength < 2) {
          return $arrayLength;
      }

      // Initialize the slow-runner pointer
      $i = 0;

      // Iterate through the array with the fast-runner pointer
      for ($j = 1; $j < $arrayLength; $j++) {
          // If the current element is different from the last unique element
          if ($nums[$j] !== $nums[$i]) {
              $i++; // Move the slow-runner pointer
              $nums[$i] = $nums[$j]; // Update the position with the new unique element
          }
      }

      // The number of unique elements is i + 1
      return $i + 1;
  }
}
```

Solving this challenge using **in-place** algorithm means we cannot create a new array variable, we need to modify existing **$nums**.

In order to do that, we will have 2 pointers **$i and $j**. $j will be looking for new unique nums while $i will be the substitution place once we found the new unique num. So, while, new nums are not unique ones, we do nothing. Once we find a new unique num, we substitute **$nums[$i]** for our new **$nums[$j]**.

We need to return $i + 1 since $i starts at value 0
