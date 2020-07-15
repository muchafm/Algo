<?php

function getMultiple(int $limit): int {
    $sumOfMultiple = 0;

    for($i = 1; $i < $limit; $i++) {
        if($i % 3 == 0) {
            $sumOfMultiple += $i;
        } else if ($i % 5 == 0) {
            $sumOfMultiple += $i;
        }
    }

    return $sumOfMultiple;
}

$limit = 1000;
$multiple = getMultiple($limit);
print_r($multiple);
