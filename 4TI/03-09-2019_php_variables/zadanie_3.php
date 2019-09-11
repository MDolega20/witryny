<?php
$x = 0;
$y = -10;

if($x === 0 && $y === 0){
    echo "Punkt znajduje sie na srodku układu";
}elseif($x > 0 && $y > 0){
    echo "I";
}elseif($x > 0 && $y < 0){
    echo "II";
}elseif($x < 0 && $y > 0){
    echo "IV";
}elseif($x < 0 && $y < 0){
    echo "III";
}elseif($x === 0){
    echo "Punkt znajduje sie na osi X";
}elseif($y === 0){
    echo "Punkt znajduje sie na osi Y";
}