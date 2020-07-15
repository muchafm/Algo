<?php

function generateFibonacciSuite(int $nb1): int {
    if($nb1 <= 1) {
        return $nb1;
    } else {
        return (generateFibonacciSuite($nb1 - 1) + generateFibonacciSuite($nb1 - 2));
    }
}

$nb1 = 0;
echo generateFibonacciSuite($nb1);
