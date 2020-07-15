<?php

/**
 * @param array $m a set of array
 * 
 * @return integer the even numbers of m
 */
function getEvenNumbers(array $matrice): int {
    $evenNumbers = 0;
    
    foreach($matrice as $matriceValues) {
        foreach($matriceValues as $values) {
            if($values % 2 == 0) {
                $evenNumbers++;
            }
        }
    }

    return $evenNumbers;
}

$m = [
    [1,2,3,4],
    [2,1,2,3],
    [3,2,1,2],
    [4,3,2,1],
];

$matchs = getEvenNumbers($m);
echo $matchs;
