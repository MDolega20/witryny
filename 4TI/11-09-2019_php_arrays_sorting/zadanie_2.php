<?php

$oceny["math"] = 1;
$oceny["plastyka"] = 2;
$oceny["wf"] = 1;
$oceny["math"] = 3;
$oceny["pl"] = 1;
$oceny["so"] = 2;
$oceny["plsk"] = 1;
$oceny["kis"] = 3;

$wynik = [];

foreach ($oceny as $key => $value) {
    if(isset($wynik[$value])){
        array_push($wynik[$value], $key);
    }else{
        $wynik[$value] = [];
        array_push($wynik[$value], $key);
    }
}

ksort($wynik);

foreach ($wynik as $key => $value) {
    echo "Ocena - " . $key . "\n";
    foreach ($wynik[$key] as $key2 => $value2) {
    echo "> " . $value2 . "\n";
    }
}

print_r($wynik);