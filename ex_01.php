<?php

$n = [1,2,3,4,5,6];
$m = [1,3,6];

function getIntersection($n, $m) {
    $intersection = [];
    foreach($n as $valuesOfN) {
        foreach($m as $valuesOfM) {
            if($valuesOfM == $valuesOfN) {
                $intersection[] = $valuesOfM;
            }
        }
    }
    return $intersection;
}

$res = getIntersection($n, $m);
print_r($res);
