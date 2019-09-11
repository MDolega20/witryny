<?php

//TODO don't working XD

$min = 1;
$max = 10;

$columns = [];

for($i = $min; $i <= $max; $i++){
    $column = [];
    array_push($column, $i);
}

for ($i=0; $i <= count($columns); $i++) {
    echo $i . "\n";
    for ($j=0; $j <= count($columns[$i]); $j++) {
        echo $columns[$i][$j];
    }
}