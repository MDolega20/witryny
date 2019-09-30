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

// <div class="menu__table">
//                         <div class="menu__table__name">
//                             <h4>Pizze</h4>
//                         </div>
//                         <div class="menu__table__row__top">
//                             <div>nazwa</div><div>cena [pln]</div>
//                         </div>
//                         <div class="menu__table__row">
//                             <div>
//                                 <p>pepperoni</p>
//                                 <p>ser, salami</p>
//                             </div>
//                             <div>17</div>
//                         </div>
//                     </div>

echo "<div class=\"menu\">";

foreach ($categoryQuery as $key => $value_c) {
    echo "<div class=\"menu__table\">";
    $categoryName = $categoryQuery[$key]["name"];
    echo "<div class=\"menu__table__name\"><h4>$categoryName</h4></div>";

    echo "<div class=\"menu__table__row__top\"><div>nazwa</div><div>cena [pln]</div></div>";

    foreach ($value_c["items"] as $key => $value_i) {
        $itemName = $value_i["name"];
        $itemPrice = $value_i["price"];

    echo "<div class=\"menu__table__row\"><div><p>$itemName</p><p>";
            $components = "";
        for ($i = 0; $i <= count($value_i["components"]); $i++) {
            $components = $components . $value_i["components"][$i]["name"];

            if ($i < count($value_i["components"]) - 1) {
                $components = $components . ", ";
            }
        }

    echo $components . "</p></div><div><p>$itemPrice</p></div></div>";
    }
}
echo "</div>";

// print_r($categoryQuery);
