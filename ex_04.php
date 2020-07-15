<?php

$m = [
    [1,2,3,4],
    [2,1,2,3],
    [3,2,1,2],
    [4,3,2,1],
];

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

$matchs = getEvenNumbers($m);
echo $matchs;
