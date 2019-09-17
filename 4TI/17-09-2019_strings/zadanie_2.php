<?php

$str1 = "deFsert shake birds jar";
$str2 = "soFmething oldest correct lady";

$ar1 = str_split($str1,1);
$ar2 = str_split($str2,1);

$lng = count($ar1) < count($ar2) ? count($ar1) : count($ar2);

for ($i=0; $i < $lng; $i++) {
    if($ar1[$i] === $ar2[$i])
        echo "znak " . $ar1[$i] . " index " . $i . "\n";
}