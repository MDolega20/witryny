<?php

$pdo = new PDO('mysql:host=localhost;dbname=parkometr;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123');

$money_input = 15.70;

$queryString = "SELECT * FROM nominały";
$nominaly = $pdo->query($queryString)->fetchAll(PDO::FETCH_ASSOC);

$monety = [];

echo "nominały\n";
foreach ($nominaly as $key => $value) {
    echo $value["value"] . " ";
}
echo "\n============\n";

while ($money_input > 0 && $money_input > 0.01) {
    for ($i = 0; $i <= count($nominaly); $i++) {
        if (($money_input - $nominaly[$i]["value"]) >= 0) {
            array_push($monety, $nominaly[$i]["value"]);
            $money_input = $money_input - $nominaly[$i]["value"];
            break;
        }
    }
    $i = 0;
}

foreach ($monety as $key => $value) {
    $queryString = "SELECT * FROM nominały WHERE value = $value LIMIT 1;";
    $query = $pdo->query($queryString)->fetchAll(PDO::FETCH_ASSOC);
    if (sizeof($query) > 0) {
        $nominal = $query[0]["id"];
        echo $nominal . "\n";
        $queryString = "INSERT INTO `parkometr`.`pieniadze` (`nominał_id`, `date`) VALUES ($nominal, NOW())";
        $query = $pdo->prepare($queryString)->execute();
    } else {
        echo "ERROR";
    }

}
