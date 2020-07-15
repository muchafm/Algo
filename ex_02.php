<?php

$n = [1, 99, 101, 202];
$m = [1, 2, 999];

/**
 * @param array $n a set of integers
 * @param array $m a set of integers
 *
 * @return array the union of n and m
 */
function getUnion(array $n, array $m): array {
    $union = [];

    foreach ($n as $nVal) {
        $union[] = $nVal;

        foreach ($m as $mVal) {
            if (!in_array($mVal, $union)) {
                $union[] = $mVal;
            }
        }
    }
    
    return $union;
}

/**
 * @param array $n an unordered set of integers
 *
 * @return array the same ordered set
 */
function orderUnion(array $union): array {
    $size = count($union);

    for ($i = 0; $i < $size; $i++) {
        $nbToMove = $union[$i];

        for ($j = 0; $j < $i; $j++) {
            $currentNb = $union[$j];

            if ($nbToMove < $currentNb) {
                $union[$j] = $nbToMove;
                $nbToMove = $currentNb;
            }
        }

        $union[$i] = $nbToMove;
    }
    return $union;
}

$res = getUnion($n, $m);
$union = orderUnion($res);
print_r($union);
