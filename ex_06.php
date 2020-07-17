<?php

/**
 * @param integer $limit
 * 
 * @return array the summary of the Fibonacci suite generate under the limit
 */
function generateFibonacciSuite(int $limit): array {
    $y = 1;
    $x = 0;
    $j = $x + $y;
    $x = $y;
    $y = $j;
    
    while($x <= $limit) {
        $j = $x + $y;
        $x = $y;
        $y = $j;

        if($x <= 4000000) {
            $suite[] = $x;
        }
    }

    return $suite;
}

/**
 * @param array $sum set of integer
 * 
 * @return integer the summary of the even numbers in the array sum
 */
function getEvenTermsSum(array $sum): int {
    $sumEvenNumbers = 0;

    foreach($sum as $sumValues) {
        if($sumValues % 2 == 0) {
            $sumEvenNumbers += $sumValues;
        }
    }

    return $sumEvenNumbers;
}

$limit = 4000000;
$suite = generateFibonacciSuite($limit);
echo getEvenTermsSum($suite);
