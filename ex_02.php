<?php

$n = [1, 99, 101, 202];
$m = [1, 2, 999];

function getUnion(array $n, array $m) {
    $union = [];
    foreach($n as $Nvalues) {
        $union[] = $Nvalues;
        foreach($m as $Mvalues) {
            if(!in_array($Mvalues, $union)) {
                $union[] = $Mvalues;
            }
        }
    }
    
    return $union;

}

function orderUnion(array $union) {
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