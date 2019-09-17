<?php

$adress_s = "https://www.google.pl/#f49fbbbread;https://www.google.pl/bread;https://www.google.pl/bread;https://www.google.pl/bread";
$adress = explode(";",$adress_s);
$links = [];

foreach ($adress as $key => $value) {
    array_push($links, "<a href=\"".$value."\">".$value."</a>");
}

foreach ($links as $key => $value) {
    echo $value . "\n";
}

echo "Liczba linków: " . count($links) . "\n";