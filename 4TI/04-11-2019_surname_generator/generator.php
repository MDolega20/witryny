<?php

function random($min, $max){
    return rand($min, $max);
}

function gen_surname(){
    $p = ["Ma", "Ko", "Cie"];
    $s = ["ma", "na", "ka"];
    $k = ["ski", "cki", "coń"];

    $r = random(1, 10);
    $surname = "";

    if ($r <= 4) {
        // 2 sylaby
        $surname = $surname . $p[random(1,sizeof($p) - 1)];
        $surname = $surname . $k[random(1,sizeof($k) - 1)];
    } elseif ($r > 4 && $r <= 8) {
        // 3 sylaby
        $surname = $surname . $p[random(1, sizeof($p) - 1)];
        $surname = $surname . $s[random(1, sizeof($s) - 1)];
        $surname = $surname . $k[random(1, sizeof($k) - 1)];
    } elseif ($r > 8) {
        // 4 sylaby
        $surname = $surname . $p[random(1, sizeof($p) - 1)];
        $surname = $surname . $s[random(1, sizeof($s) - 1)];
        $surname = $surname . $s[random(1, sizeof($s) - 1)];
        $surname = $surname . $k[random(1, sizeof($k) - 1)];
    }

    return $surname;
}

echo gen_surname()

?>