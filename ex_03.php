<?php

/**
 * @param array $n a set of integers
 * @param array $m a set of integers
 * 
 * @return array the difference of n and m
 */
function getDifference(array $n, array $m): array {
    $union = [];

    foreach($n as $nVal) {
        $union[] = $nVal;
        foreach($m as $mVal) {
            if(!in_array($mVal, $union)) {
                $union[] = $mVal;
            } else if($mVal !== $nVal) {
                $difference[] = $nVal;
            }
        }
    }
    $diff = array_unique($difference);
    return $diff;
}

$n = [2,6,7,8];
$m = [2,4,5,6,9];

$res = getDifference($n, $m);
print_r($res);
