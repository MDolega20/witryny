<?php

$k = 90; //długośc trasy
$cena = -1; //wynik

if($k > 0 && $k <= 10){
    $cena = 2;
}elseif($k > 11 && $k <= 30){
    $cena = 1 + ($k * 0.1);
}elseif($k > 30){
    $cena = 1 + ($k * 0.08);
}

echo "Koszt biletu to: " . $cena . "zł\n";