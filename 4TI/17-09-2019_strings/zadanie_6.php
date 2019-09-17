<?php

$produkty = ["P132" => "Chleb razowy ze sġonecznikiem", "N444" => "Sok pomarañczowy", "C561" => "Proszek do prania X", "PR223" => "Suszone truskawki", "PR226" => "Chrupki kukurydziane"];
$kategorie = ["Pieczywo", "Napoje", "Chemia gospodarcza", "Przekṗski"];

foreach ($produkty as $key => $value) {
    $category = null;
    foreach ($kategorie as $key2 => $value2) {
        if($category === null)
            if(substr($key, 0, 2) === "PR"){
                $category = "Przekṗski";
                $code = substr($key, 0, 2);
            } else if (substr($value2, 0, 1) === substr($key, 0, 1)) {
                $category = $value2;
                $code = substr($value2, 0, 1);
            }
    }
    echo $key . " / " . $value . " (" . $category . ") " ."\n";
}