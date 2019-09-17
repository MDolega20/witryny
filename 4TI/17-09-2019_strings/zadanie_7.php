<?php

$cenzura = ["motyl", "brzydki", "ananas"];

$tekst = "Moim ulubionym skġadnikiem pizzy jest ananas.";

function cenzure($string){
    global $cenzura;

    foreach ($cenzura as $key => $value) {
        if(str_replace($value, "***", $string) !== $string){
            $stars = "";
                for ($i=1; $i <= count($value - 1); $i++) {
                    $stars = $stars . "*";
                }
                $word = substr($value,0,1) . $stars . substr($value, -1, 1);
            return str_replace($value, $word , $string);
        }
    }
    // if(str_replace($cenzura, "***", $string) )
    // return str_replace($cenzura, "***", $string);

    // $words = explode(" ", $string);
    // foreach ($words as $key => $value) {
    //     foreach ($cenzura as $key2 => $value2) {
    //         if($value[count($value) - 1] === "."){
    //             $dot = ".";
    //         } else if ($value[count($value) - 1] === ",") {
    //             $dot = ",";
    //         }
    //         if(isset($dot)){
    //             $value = substr($value, 0, count($value) - 1);
    //         }
    //         if($value === $value2){
    //             $stars = "";
    //             for ($i=0; $i < count($words[$key]); $i++) {
    //                 $stars+= "*";
    //             }
    //             $words[$key] = substr($words[$key],0,1) . $stars . substr($words[$key], -1, 1);
    //         }
    //     }
    // }

    // print_r($words);
}

echo cenzure($tekst) . "\n";