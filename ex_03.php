<?php

/**
 * @param array $n a set of integers
 * @param array $m a set of integers
 * 
 * @return array the difference of n and m
 */
function getDifference(array $n, array $m): array {

    $difference = [];
    foreach($n as $nVal) {
        if(!in_array($nVal, $m)) {
            $difference[] = $nVal;
        }
    }

    return $difference;
}

$n = [2,3,4,6,7,8];
$m = [1,3,6,7,9];

$res = getDifference($n, $m);
print_r($res);
