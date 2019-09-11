<?php

$n = 200;

for($i = 1;$i <= $n; $i++){
    if(substr($i, -1,1) == 1 && $i % 7 == 0){
        echo $i . "\n";
    }
}