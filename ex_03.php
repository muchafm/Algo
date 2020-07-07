<?php

$n = [1, 2, 5];
$m = [3, 5, 2];

function getDifference($n, $m) {
    $intersection = [];
    foreach($n as $valuesOfN) {
        foreach($m as $valuesOfM) {
            if($valuesOfN !== $valuesOfM) {
                $intersection[] = $valuesOfN;
            } 
        }
    }
    return $intersection;
}

$res = getDifference($n, $m);
print_r($res);