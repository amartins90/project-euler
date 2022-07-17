<?php
/**
 * Largest palindrome product
 *
 * Problem: A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 × 99.
 * Find the largest palindrome made from the product of two 3-digit numbers.
 * 
 */

$num1 = 999;
$num2 = 999;

function largestPalindrome($num1, $num2) {
    $result = $num1 * $num2;
    if ($result == strrev($result)) {
        return $result;
    }
    return largestPalindrome($num1, $num2 - 1);
}

for ($num1; $num1 > 0; $num1--) {
    $palidromes[] = largestPalindrome($num1, $num2);
}

echo (max($palidromes));
