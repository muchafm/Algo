<?php

$n = [1,2,5,4];
$m = [4,5,2,6,7];

function getDifference(array $n, array $m) {
    $sizeArrayN = count($n);
    
    if($sizeArrayN > 0) {
        $union = [];
        $difference = [];
        foreach($n as $nVal) {
            $union[] = $nVal;
            foreach($m as $mVal) {
                if(!in_array($mVal, $union)) {
                    $union[] = $mVal;
                    foreach($union as $values) {
                        if($values == $nVal) {
                            $difference[] = $nVal;
                        }
                    }
                }
            }
        }

        return $difference;
    }
}

$res = getDifference($n, $m);
print_r($res);