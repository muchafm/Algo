<?php

$n = [1, 2, 5, 4];
$m = [3, 5, 2];

function getDifference(array $n, array $m) {
    $sizeArrayN = count($n);
    $sizeArrayM = count($m);
    $difference = [];
    $same = [];
    if($sizeArrayN > 0) {
        for($i = 0; $i < $sizeArrayN; $i++) {
            foreach($n as $Nvalues) {
                foreach($m as $Mvalues) {
                    if($Nvalues !== $Mvalues) {
                        var_dump($Nvalues);
                        $difference[] = $Nvalues;
                        return $difference;
                    } else {
                        $same[] = $Nvalues;
                    }
                }
            }
        }
    }

    // return $difference;

}

$res = getDifference($n, $m);
print_r($res);