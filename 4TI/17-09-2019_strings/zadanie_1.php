<?php

$ciag_znakow = "Mateusz Dolega";

$verbs = explode(" ", $ciag_znakow);

$verbs[2] = $verbs[0];

$ciag_znakow = implode(" ", $verbs);

echo $ciag_znakow . "\n";