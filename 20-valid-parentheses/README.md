# Challenge 20-valid-parentheses
## Problem description:
Given a string s containing just the characters `'(', ')', '{', '}', '[' and ']'`, determine if the input string is valid.

An input string is valid if:

Open brackets must be closed by the same type of brackets.
Open brackets must be closed in the correct order.
Every close bracket has a corresponding open bracket of the same type.
## Solution:

My solution:

```php
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
```

The solution is simple. We are going to have a positive approach, meaning that we are going to return true by default. 

If the string length is `odd`, we are going to return false

Looping through `$s`, we are going to push every key found in `$mapping` into `$stack`, if the key does not exist, means is an opening tag and we are going to push it into `$stack`.

If it´s a key in `$mapping`, means it´s a closing tag, so we are going to get the last element from `$stack` which it should be its complementary, if it´s not, then we should return `false`

Example: 

We have `$s = '(())'`. When we loop through `$s` The first loop we are going to have in `$stack = ['(']` in the second loop will be `$stack = ['(', '(']` the third loop we have our first closing tag so we are goint to `array_pop()` and it would be `(` and since `$mapping[$char] === '('` we are still looping and not returning false. Same for the last iteration.

Then we have this example `$s = '([)]'`. When we loop through `$s` The first loop we are going to have in `$stack = ['(']` in the second loop will be `$stack = ['(', '[']` the third loop we have our first closing tag so we are goint to `array_pop()` and it would be `[` and since `$mapping[$char] !== '['` we are returning false.

If false has not been returned by the time loop is finished, we are going to check if $stack is empty. If it´s not, it means something is not closed meaning we must return false.
