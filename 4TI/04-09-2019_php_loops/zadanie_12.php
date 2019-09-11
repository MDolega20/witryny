<?php

$tablica = [1,2,5,6,7,845,345,462,4624624,624,643524,34,234,32435,45,454];

foreach ($tablica as $el) {
    if($el > 5 && $el < 16){
        echo $el . "\n";
    }
}