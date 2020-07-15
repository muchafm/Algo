<?php

function getMultiple(): int {
    $sumOfMultiple = 0;

    for($i = 1; $i < 1000; $i++) {
        if($i % 3 == 0) {
            $sumOfMultiple += $i;
        } else if ($i % 5 == 0) {
            $sumOfMultiple += $i;
        }
    }

    return $sumOfMultiple;
}

$multiple = getMultiple();
print_r($multiple);
