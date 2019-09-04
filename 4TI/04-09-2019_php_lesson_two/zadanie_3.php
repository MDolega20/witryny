<?php

$a = 10;
$b = 120;
$answer = null;

if($a === 0){
    if($b === 0){
        $answer = "Nieskończenie wiele rozwiązań";
    }else{
        $answer = "Równanie sprzeczne";
    }
}else{
    $answer = -($b) / $a; 
}

echo $answer . "\n";