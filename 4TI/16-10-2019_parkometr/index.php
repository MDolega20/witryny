<?php
$pdo = new PDO('mysql:host=localhost;dbname=parkometr;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123');

if (
    isset($_POST["money_input"]) &&
    !empty($_POST["money_input"]) &&
    is_numeric($_POST["money_input"])
) {
    $money_input = $_POST["money_input"];

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
            $queryString = "INSERT INTO `parkometr`.`pieniadze` (`nominał_id`, `date`) VALUES ($nominal, NOW())";
            $query = $pdo->prepare($queryString)->execute();
        }else{
            echo "ERROR";
        }

    }
}

// $queryString = "SELECT * FROM components";
// $query = $pdo->query($queryString)->fetchAll(PDO::FETCH_ASSOC);

// $queryString = "INSERT INTO `items` (`category_id`, `name`, `description`, `price`) VALUES (" . $_POST["category"] . ", \"" . $_POST["name"] . "\", \"" . $_POST["description"] . "\", \"" . $_POST["price"] . "\")";
// $query = $pdo->prepare($queryString)->execute();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parkometr</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form id="parkmetr" method="post">
        <div>
            <h1>Parkometr</h1>
        <div id="cennik">
            <div class="cennik-row-header">
                <p>pon-pt.</p>
                <p>9-17</p>
            </div>
            <div class="cennik-row">
                <p>0.5h</p>
                <p>1</p>
            </div>
            <div class="cennik-row">
                <p>1h</p>
                <p>2</p>
            </div>
            <div class="cennik-row">
                <p>2h</p>
                <p>4</p>
            </div>
            <div class="cennik-row">
                <p>3h</p>
                <p>6</p>
            </div>
            <div class="cennik-row">
                <p>4h+ (za godzinę)</p>
                <p>1.5</p>
            </div>
            <div class="cennik-row">
                <p>24h</p>
                <p>12</p>
            </div>
        </div>
        </div>
        <div>
            <div id="money_input">
                <label><input type="number" placeholder="nominał" name="money_input"></label>
                <input type="submit" value="wrzuć">
            </div>
            <div id="money_output">
                <?php
                $pdo = new PDO('mysql:host=localhost;dbname=parkometr;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123');

                    $queryString = "SELECT * FROM pieniadze;";
                    $query = $pdo->query($queryString)->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($query as $key => $value) {
                        $id = $value["nominał_id"];
                        $queryString = "SELECT * FROM nominały WHERE id = $id LIMIT 1;";
                        $query2 = $pdo->query($queryString)->fetchAll(PDO::FETCH_ASSOC);
                        echo "<div class=\"money_output_item\">".$query2[0]["name"]."</div>";
                    }


                ?>
            </div>
            <div id="controls">
                    <div class="controls-item"><label><button>Z</button> - zielony</label></div>
                    <div class="controls-item"><label><button>A</button> - anulowanie</label></div>
            </div>
            <div id="ticket">
                <div class="ticket-item">
                    <strong>Bilet</strong>
                    <p>data - data</p>
                    <p>cena - 50 pln</p>
                </div>
            </div>
        </div>

    </form>
</body>
</html>
