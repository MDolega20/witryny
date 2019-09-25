<?php
//get data from database
$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config

$categoryQueryString = "SELECT * FROM category";
$categoryQuery = $pdo->query($categoryQueryString)->fetchAll(PDO::FETCH_ASSOC);

foreach ($categoryQuery as $key1 => $value_c) {
    $idCategory = $value_c["id"];
    $itemsQueryString = "SELECT * FROM items where category_id=$idCategory";
    $itemsQuery = $pdo->query($itemsQueryString)->fetchAll(PDO::FETCH_ASSOC);
    $categoryQuery[$key1]["items"] = $itemsQuery;
    foreach ($categoryQuery[$key1]["items"] as $key2 => $value_i) {
        $idItem = $value_i["id"];
        $itemsQueryString = "SELECT c.id, c.name, c.description FROM items_components LEFT OUTER JOIN components c on items_components.component_id = c.id  where item_id=$idItem;";
        $itemsQuery = $pdo->query($itemsQueryString)->fetchAll(PDO::FETCH_ASSOC);
        $categoryQuery[$key1]["items"][$key2]["components"] = $itemsQuery;
    }
}

// print_r($categoryQuery);
// generate html for menu

$html = "<div id=\"menu\">";

foreach ($categoryQuery as $key => $value_c) {
    $categoryDiv = "<div class=\"menu--category\">";
    $categoryName = $categoryQuery[$key]["name"];
    $categoryHeader = "<h3>$categoryName</h3>";

    $table = "<table>";

    $topRow = "<tr>
            <th>Rozmiar</th>
            <th>30 cm</th>
        </tr>";

    $html = $html . $categoryDiv . $categoryHeader . $table . $topRow;

    // print_r($value_c["items"]);

    foreach ($value_c["items"] as $key => $value_i) {
        $itemName = $value_i["name"];
        $itemPrice = $value_i["price"];

        $components = "<p>";

        for ($i=0; $i <= count($value_i["components"]); $i++) { 
            $components = $components . $value_i["components"][$i]["name"];

            if($i < count($value_i["components"]) - 1){
                $components = $components . ", ";
            }
        }
        $componentsEnd = "</p>";
        $components = $components . $componentsEnd;


        $rowItem = "<tr>
            <td><p class=\"pizza_name\">$itemName</p>$components</td>
            <td></td>
        </tr>";

        $html = $html . $rowItem;
    }

    $tableEnd = "</table>";

    $categoryDivEnd = "</div>";
    $html = $html . $tableEnd . $categoryDivEnd;

}

$htmlEnd = "</div>";
$html = $html . $htmlEnd;

echo $html;

// print_r($categoryQuery);