<?php

$n = [1, 99, 101, 202];
$m = [1, 2, 999];

function getUnion($n, $m) {
    $union = [];
    foreach($n as $valuesOfN) {
        $union[] = $valuesOfN;
    }
    foreach($m as $valuesOfM) {
        $union[] = $valuesOfM;
    }
    return $union;
}

$res = getUnion($n, $m);
print_r($res);