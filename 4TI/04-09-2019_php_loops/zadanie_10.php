<?php

$n = 10;
$sum = 0;

for ($i=0; $i < $n; $i++) {
    if($i !== 0)
        $sum += (1 / $i);
}

echo "Suma: " . $sum . "\n";