<?php
foreach ($_POST as $key => $value) {
    if (empty($_POST[$key])) {
        echo "BRAK DANYCH: " . $key . "\n";

        return false;
    }
}

if(isset($_POST["item_id"]) && isset($_POST["item_table"])){
    $id = $_POST["item_id"];
    $table = $_POST["item_table"];
    echo "USUNIĘTO\n";
}else{
    $id = 3;
    $table = "workers";
    echo "NO DATA, SETTING AUTO\n";
}

$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config
$queryString = "UPDATE `$table` SET `delete` = 1 WHERE id = $id;";
echo "QUERY: " . $queryString . "\n";
$query = $pdo->prepare($queryString)->execute();