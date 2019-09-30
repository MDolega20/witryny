<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menagment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.html";?>
    <main>
        <section>
            <h2>Zamówienia</h2>
            <?php
$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config

$ordersQueryString = "SELECT orders.id as order_id, orders.date_time, costumer_id, state_id, s.name as state_name, c.tel, c.street_number, c.city, c.post_code, orders.price FROM orders left join costumers c on orders.costumer_id = c.id left join states s on orders.state_id = s.id;";
$ordersQuery = $pdo->query($ordersQueryString)->fetchAll(PDO::FETCH_ASSOC);


foreach ($ordersQuery as $key => $value) {
    $order_id = $value["order_id"];
    $date_time = $value["date_time"];
    $costumer_id = $value["costumer_id"];
    $tel = $value["tel"];
    $street_number = $value["street_number"];
    $post_code = $value["post_code"];
    $city = $value["city"];
    $price = $value["price"];
    $state = $value["state_name"];
    
    $itemsQueryString = "SELECT item_id, items.name from items left join orders_items oi on items.id = oi.item_id where oi.order_id = $order_id;";
    $itemsQuery = $pdo->query($itemsQueryString)->fetchAll(PDO::FETCH_ASSOC);
    
    echo "<div class=\"row_order\">";
    echo "
    <div class=\"row_order_top\">
                        <div>$order_id</div>
                        <div>$date_time</div>
                        <div>$tel</div>
                        <div>$street_number</div>
                        <div>$post_code</div>
                        <div>$city</div>
                        <div>$price zł</div>
                        <div>$state</div>
                    </div>
                    ";

    echo "<div class=\"row_order_items\" >
    <p>Składniki</p><ol>";
    foreach ($itemsQuery as $key => $value) {
        $name = $value["name"];
        echo "<li>$name</li>";
    }
    echo "</ol></div>";
    echo "</div>";
}
?>
        </section>

    </main>
    <?php include_once "footer.html";?>
</body>