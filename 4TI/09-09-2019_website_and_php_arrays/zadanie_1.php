<?php

$notatki = [2, 5, "hello", 6, "12", "hi", "bye", 15];
$ciagi_znakow = [];
$liczby = [];

foreach ($notatki as $notatka) {
    if(is_numeric($notatka)){
        array_push($liczby, $notatka);
    }else{
        array_push($ciagi_znakow, $notatka);
    }
}

var_dump($notatki);
var_dump($liczby);
var_dump($ciagi_znakow);