<?php

$scores = ["35","40", "10"];
$max = 40;

foreach ($scores as $score) {
    $proc = $score / $max * 100;
    $grade = null;

    if($proc == 100){
        $grade = 6;
    }elseif($proc >= 95){
        $grade = 5;
    }elseif($proc >= 90){
        $grade = 4;
    }elseif($proc >= 80){
        $grade = 3;
    }elseif($proc >= 50){
        $grade = 2;
    }else{
        $grade = 1;
    }


    echo "Wynik " . $score . "/" . $max . " ocena ". $grade ."\n";
}