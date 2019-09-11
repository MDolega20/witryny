<?php

$stan = [
    "no" => 30,
    "truck" => 13,
    "run" => 58,
    "chapter" => 63,
    "room" => 41,
    "call" => 78,
    "private" => 73,
    "headed" => 44,
    "powder" => 4,
    "bank" => 93,
    "fastened" => 46,
    "ear" => 66,
    "enough" => 75,
    "himself" => 36,
    "six" => 66,
    "range" => 93,
];

$second = [];

foreach ($stan as $key => $value) {
    array_push($second, $key);
}

for ($i=0; $i < count($second); $i++) {
    echo $second[$i] . " => " . $stan[$second[$i]] . "\n";
}