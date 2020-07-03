<?php

$n = [1,2,3,4,5,6];
$m = [1,3,6];

function getIntersection($n, $m) {
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

$res = getIntersection($n, $m);
echo $res;
