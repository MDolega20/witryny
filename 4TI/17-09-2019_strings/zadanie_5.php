<?php

$words = ["account", "ala", "exciting", "madam", "maam", "elfukladalkufle"];

function check($word){
    $arr = str_split($word, 1);
    $yes = true;
    for ($i = 0; $i < count($arr) / 2 - 1; $i++) {
        if ($arr[$i] !== $arr[count($arr) - 1 - $i]) {
            $yes = false;
        }
    }
    if($yes){
        return true;
    }else{
        return false;
    }
}

foreach ($words as $key => $value) {
    if(check($value)){
        echo "Słowo " . $value . " to palindronm\n";
    }else {
        echo "Słowo " . $value . " to nie palindronm\n";
    }
}