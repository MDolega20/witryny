<?php

$a = 1;
$b = -5;
$c = -4;
$detla = ($b * $b) - 4 * $a * $c;
$answer = null;

function floorToDec($number){
    return floor($number * 100) / 100;
}

if($detla > 0){
    $x1 = (-($b) - sqrt($detla)) / (2 * $a);
    $x2 = (-($b) + sqrt($detla)) / (2 * $a);

    $answer = [floorToDec($x1), floorToDec($x2)];

}elseif ($detla === 0) {
    $answer = [-($b) / (2 * $a)];
}else{
    $answer =  "Brak rozwiązań";
}

echo "Delta: " . $detla . "\n";
if(gettype($answer) === "array"){
    foreach ($answer as $value) {
        echo "x: " . $value . "\n";
    }
}else{
    echo $answer . "\n";
}