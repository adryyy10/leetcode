<?php

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
?>
