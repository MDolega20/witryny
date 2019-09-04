<?php

$x = 3;
$y = 10;
$sum = 0;

for($i = $x;$i < $y;$i++){
    if($i % 3 === 0 || $i % 5 === 0){
        $sum+=$i;
    }
}

echo "Suma: " . $sum . "\n";

