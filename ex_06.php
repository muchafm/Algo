<?php

/**
 * @param integer $x 
 * 
 * @return array the summary of the Fibonacci suite generate under 4 000 000
 */
function generateFibonacciSuite(int $x): array {
    $y = 1;
    $j = $x + $y;
    $x = $y;
    $y = $j;
    
    $limit = 4000000;
    while($x <= $limit) {
        $j = $x + $y;
        $x = $y;
        $y = $j;

        if($x <= 4000000) {
            $sum[] = $x;
        }
    }

    return $sum;
}

/**
 * @param array $sum set of integer
 * 
 * @return integer the summary of the even numbers in the array sum
 */
function getEvenNumbers(array $sum): int {

    $sumEvenNumbers = 0;
    foreach($sum as $sumValues) {
        if($sumValues % 2 == 0) {
            $sumEvenNumbers += $sumValues;
        }
    }

    return $sumEvenNumbers;
}

$x = 0;
$sum = generateFibonacciSuite($x);
echo getEvenNumbers($sum);
