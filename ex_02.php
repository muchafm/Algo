<?php

$n = [1, 99, 101, 202];
$m = [1, 2, 999];

function getUnion($n, $m) {
    foreach($n as $valuesOfN) {
        foreach($m as $valuesOfM) {
            if($valuesOfM == $valuesOfN) {
                $var = $valuesOfM;
                $res = $var + $var;  
            }
        }
    }
    return $res;
}

$res = getUnion($n, $m);
echo $res;