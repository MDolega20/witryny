<?php

$number = 100456;
$suma = 0;
$iloczyn = 1;

if($number > 999999 || $number < 0){
    echo "Błąd\n";
    return false;
}

$number_arr = str_split($number);

foreach ($number_arr as $part) {
    if($part % 2 !== 0){
        $suma+= $part;
    }
    if($part != 0){
        $iloczyn = $iloczyn * $part; 
    }
}

echo "Suma: " . $suma . "\n";
echo "Iloczyn: " . $iloczyn . "\n";
