<?php

/**
 * @param array $n a set of integers
 * @param array $m a set of integers
 *
 * @return array the intersection of n and m
 */
function intersect(array $n, array $m): array {
    $intersection = [];

    foreach ($n as $nElement) {
        foreach ($m as $mElement) {
            if ($mElement === $nElement) {
                $intersection[] = $mElement;
            }
        }
    }

    return $intersection;
}

$n = [1,2,3,4,5,6];
$m = [1,3,6];

$res = intersect($n, $m);
print_r($res);
