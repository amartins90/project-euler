<?php
/**
 * Sum square difference
 *
 * Problem: The sum of the squares of the first ten natural numbers is 385.
 * The square of the sum of the first ten natural numbers is 3025.
 * Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 - 385 = 2640.
 * Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.
 * 
 */

function sumOfSquares($n) {
    if ($n == 1) {
        return 1 ** 2;
    }
    return $n ** 2 + sumOfSquares($n - 1);
}

function sumOfNumbers($n) {
    if ($n == 1) {
        return $n;
    }
    return $n + sumOfNumbers($n - 1);
}

echo sumOfNumbers(100) ** 2 - sumOfSquares(100);
