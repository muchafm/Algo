<?php

function getMultiple() {
    $multipleOfThree = 0;
    $multipleOfFive = 0;
    for($i = 1; $i < 1000; $i++) {
        if($i % 3 == 0) {
            $multipleOfThree+= $i;
            $array[] = $i;
        } else if ($i % 5 == 0) {
            $multipleOfFive+= $i;
            $array[] = $i;
        }
    }

    $sumOfMultiple = 0;
    
    foreach($array as $values) {
        $sumOfMultiple+= $values;
    }
    
    return $sumOfMultiple;

}

$multiple = getMultiple();
print_r($multiple);