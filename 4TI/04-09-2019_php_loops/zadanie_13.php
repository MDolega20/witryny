<?php

$tablica = [1,2,5,6,7,845,345,462,4624624,624,643524,34,234,32435,45,454];

for ($i=1; $i < count($tablica); $i++) { 
    $tablica[$i] += $tablica[$i - 1];
}

for ($i=count($tablica)-1; $i >= 0; $i--) {
    echo $tablica[$i] . "\n";
}