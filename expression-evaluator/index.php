<?php

class Solution {
  function evaluateExpression(string $expression): string {
    try {
        // Tokenize the expression to handle it manually
        $tokens = $this->tokenizeExpression($expression);
        
        // Convert tokens to Reverse Polish Notation (RPN)
        $rpn = $this->infixToRPN($tokens);
        
        // Evaluate the RPN expression
        $result = $this->evaluateRPN($rpn);

        return is_numeric($result) ? (string)$result : "Error: Invalid evaluation";
    } catch (Throwable $e) {
        return "Error: " . $e->getMessage();
    }
}

  private function tokenizeExpression(string $expression): array {
      $pattern = '/\d+\.?\d*|[+\-\/*()]|\s+/';
      preg_match_all($pattern, $expression, $matches);

      // Filter out whitespace tokens
      return array_filter($matches[0], fn($token) => trim($token) !== '');
  }

  private function infixToRPN(array $tokens): array {
      $precedence = ['+' => 1, '-' => 1, '*' => 2, '/' => 2];
      $output = [];
      $stack = [];

      foreach ($tokens as $token) {
          if (is_numeric($token)) {
              $output[] = $token;
          } elseif (isset($precedence[$token])) {
              while (!empty($stack) && end($stack) !== '(' && $precedence[end($stack)] >= $precedence[$token]) {
                  $output[] = array_pop($stack);
              }
              $stack[] = $token;
          } elseif ($token === '(') {
              $stack[] = $token;
          } elseif ($token === ')') {
              while (!empty($stack) && end($stack) !== '(') {
                  $output[] = array_pop($stack);
              }
              array_pop($stack); // Pop the '('
          }
      }

      while (!empty($stack)) {
          $output[] = array_pop($stack);
      }

      return $output;
  }

  private function evaluateRPN(array $tokens): float {
      $stack = [];

      foreach ($tokens as $token) {
          if (is_numeric($token)) {
              $stack[] = (float)$token;
          } else {
              $b = array_pop($stack);
              $a = array_pop($stack);

              if ($token === '+') {
                  $stack[] = $a + $b;
              } elseif ($token === '-') {
                  $stack[] = $a - $b;
              } elseif ($token === '*') {
                  $stack[] = $a * $b;
              } elseif ($token === '/') {
                  if ($b == 0) {
                      throw new Exception("Division by zero");
                  }
                  $stack[] = $a / $b;
              }
          }
      }

      return array_pop($stack);
  }
}
?>
