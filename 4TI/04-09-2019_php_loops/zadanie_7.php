<?php

$n = 7895;

$sum = 0;
$result = null;

$result = $n;

while(strlen($result) !== 1){
    $n_arr = str_split($result);

    foreach ($n_arr as $n_n) {
        $sum += $n_n;
    }
    $result = $sum;
    $sum = 0;
    echo $result . "\n";
}