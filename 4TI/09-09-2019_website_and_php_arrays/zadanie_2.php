<?php

$uslugi = ["Konfiguracja systemu operacyjnego", "Monta¿ podzespo³u", "Instalacja oprogramowania narzêdziowego", "Konfiguracja oprogramowania narzêdziowego"];
$ceny = [50, 30, 40, 30];
$czy_promocja = true;

for ($i=0; $i < Count($uslugi) ; $i++) {
    if($czy_promocja){
        echo $uslugi[$i] . " " . ($ceny[$i]* 0.95) . "zł\n";
    }else{
        echo $uslugi[$i] . " " . ($ceny[$i]) . "zł\n";
    }
}