<?php

$cenzura = ["motyl", "brzydki", "ananas"];

$tekst = "Moim ulubionym brzydki skġadnikiem pizzy jest ananas.";

function cenzure($string){
    global $cenzura;

    foreach ($cenzura as $key => $value) {
        if(str_replace($value, "***", $string) !== $string){
            $stars = "";
                for ($i=1; $i <= strlen($value) - 1; $i++) {
                    $stars = $stars . "*";
                }
                $word = substr($value,0,1) . $stars . substr($value, -1, 1);
            $string = str_replace($value, $word, $string);
        }
    }

    return $string;
}

echo cenzure($tekst) . "\n";