<?php

$tekst = "Ala ma kota, a Kasia nie ma kota.";
$word = "kot";

$length = substr_count($tekst, $word);

echo "Wystąpień: " . $length . "\n";