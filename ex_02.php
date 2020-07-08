<?php

$n = [1, 99, 101, 202];
$m = [1, 2, 999];

function getUnion(array $n, array $m): array {
    $union = [];
    foreach($n as $nVal) {
        $union[] = $nVal;
        foreach($m as $mVal) {
            if(!in_array($mVal, $union)) {
                $union[] = $mVal;
            }
        }
    }
    
    return $union;

}

function orderUnion(array $union): array {
    $size = count($union);

    for($i = 0; $i < $size; $i++) {
        $nbToMove = $union[$i];
        for($j = 0; $j < $i; $j++) {
            $currentNb = $union[$j];
            if($nbToMove < $currentNb) {
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