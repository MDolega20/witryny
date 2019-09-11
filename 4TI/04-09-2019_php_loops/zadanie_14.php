<?php

$tablica = [1,2,5,6,7,845,345,462,4624624,624,643524,34,234,32435,45,454];
$indexes = [];

for ($i=0; $i < count($tablica); $i++) {
    $val = $tablica[$i];
    if($val % 2 !== 0){
        $tablica[$i] = $tablica[$i]**2;
        array_push($indexes, $i);
    }
    if ($val < 0) {
        $tablica[$i] = 0;
        array_push($indexes, $i);
    }
}

print_r($tablica);
print_r($indexes);