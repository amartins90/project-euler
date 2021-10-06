<?php

# Problem 2

# Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
# 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
# By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.

$sum = 0;
$int1 = 1;
$int2 = 1;

while ($sum < 4000000) {
    
    $next = $int1 + $int2;
    $int1 = $int2;
    $int2 = $next;
    
    if ($next % 2 == 0) {
        $sum += $next;
    }
}

echo "Solution ".$sum.PHP_EOL;
