<?php
if ($_POST["table"] === "workers") {
    if (count($_POST) < 7) {
        echo "BRAK DANYCH\n";
        return false;
    }
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            echo "BRAK DANYCH: " . $key . "\n";

            return false;
        }
    }

    $pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123');
    $queryString = "INSERT INTO `workers` (`first_name`, `name`, `pesel`, `tel`, `email`, `rule_id`, `active`, `delete`) VALUES (\"" . $_POST["first_name"] . "\", \"" . $_POST["name"] . "\", \"" . $_POST["pesel"] . "\", \"" . $_POST["tel"] . "\", \"" . $_POST["email"] . "\", " . $_POST["rule"] . ", 1, 0)";
    $query = $pdo->prepare($queryString)->execute();
} else if ($_POST["table"] === "components") {
    if (count($_POST) < 4) {
        echo "BRAK DANYCH\n";
        return false;
    }
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            echo "BRAK DANYCH: " . $key . "\n";
            return false;
        }
    }
    $pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123');
    $queryString = "INSERT INTO `components` (`name`, `price`, `description`, `delete`) VALUES (\"" . $_POST["name"] . "\", \"" . $_POST["price"] . "\", \"" . $_POST["description"] . "\", 0)";
    $query = $pdo->prepare($queryString)->execute();

} else if ($_POST["table"] === "items") {
    if (count($_POST) < 6) {
        echo "BRAK DANYCH\n";
        return false;
    }
    foreach ($_POST as $key => $value) {
        if (empty($_POST[$key])) {
            echo "BRAK DANYCH: " . $key . "\n";
            return false;
        }
    }
    $pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123');
    $queryString = "INSERT INTO `items` (`category_id`, `name`, `description`, `price`) VALUES (" . $_POST["category"] . ", \"" . $_POST["name"] . "\", \"" . $_POST["description"] . "\", \"" . $_POST["price"] . "\")";
    $query = $pdo->prepare($queryString)->execute();

    //dodawanie składników
    $queryString = "SELECT * FROM items WHERE name = \"" . $_POST["name"] . "\"";
    $query_item = $pdo->query($queryString)->fetchAll(PDO::FETCH_ASSOC);


    $components = explode(",", $_POST["components"]);
    foreach ($components as $key => $value) {
        $queryString = "SELECT * FROM components WHERE name = \"".$value."\"";
        $query = $pdo->query($queryString)->fetchAll(PDO::FETCH_ASSOC);

        if(count($query)>0){
            $queryString = "INSERT INTO `items_components` (`item_id`, `component_id`) VALUES (".$query_item[0]["id"] . ", " . $query[0]["id"] .")";
            $query = $pdo->prepare($queryString)->execute();
        }else{
            
        }

    }
} else {
    print_r($_POST);
}

if ($query === true) {
    echo "DODANO\n";
} else {
    echo "BŁĄD\n";
    echo $queryString . "\n";
}
