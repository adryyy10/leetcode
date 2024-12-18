# Challenge 1475-final-prices
## Problem description:

You are given an integer array `prices` where `prices[i]` is the price of the `ith` item in a shop.

There is a special discount for items in the shop. If you buy the ith item, then you will receive a discount equivalent to prices[j] where j is the minimum index such that `j > i` and `prices[j] <= prices[i]`. Otherwise, you will not receive any discount at all.

Return an integer array answer where `answer[i]` is the final price you will pay for the ith item of the shop, considering the special discount.

## Solution:

This is my proposed solution:

```php
class Solution {
  public function solve(array $prices): array
  {
    $pricesCount = count($prices) - 1;
    for ($i=0; $i < $pricesCount; $i++) {
      $filteredArray = array_values(
        array_filter(
          array_slice($prices, $i+1, $pricesCount - $i), 
          fn($price) => $price <= $prices[$i]
        )
      );
      $discount = $filteredArray[0] ?? 0;
      $prices[$i] = $prices[$i] - $discount;   
    }

    return $prices;
  }
}
```

We need to find a way to extract the discount for every price in the array. Since the last `price` is not going to be discounted, we are going to loop until `count($prices) - 1`. In order to do that, we need to create an `sliced array` from our current prices[$i] +1 (next price) till the end of `$prices`, this can be done this way:

```php
array_slice($prices, $i+1, $pricesCount - $i)
```

Once we have our prices sliced, we need to find all the values that are lower than the current price, and this can be done with array_filter:

```php
array_filter(
    array_slice($prices, $i+1, $pricesCount - $i), 
    fn($price) => $price <= $prices[$i]
)
```

array_filter preserves the keys so it will be hard for us perform `$filteredArray[0]` because there can be cases where this value doesn't exist, so in order to re-index keys we use `array_values`:

```php
$filteredArray = array_values(
    array_filter(
        array_slice($prices, $i+1, $pricesCount - $i), 
        fn($price) => $price <= $prices[$i]
    )
);
```

Finally we should deduct our discount in our `prices[$i]`:

```php
$discount = $filteredArray[0] ?? 0;
$prices[$i] = $prices[$i] - $discount; 
```
