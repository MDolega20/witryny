<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="summary">
        <?php
        echo "<div class=\"summary-row\"><h3>Podsumowanie</h3></div>";

$sum = 0;
$rabat = 0;

for ($i = 0; $i < Count($_POST["products"]); $i++) {
    $product = $_POST["products"][$i];
    
    if (isset($product["name"])) {
        $sum += $product["price"];

        echo "<div class=\"summary-row\">";
        echo "<div class=\"summary-row-number\">" . ($i + 1) . "</div>";
        echo "<div class=\"summary-row-product-name\">" . $product["name"] . "</div>";
        echo "<div class=\"summary-row-product-price\">" . $product["price"] . "PLN</div>";
        echo "</div>";

    }else{
        $i++;
    }
    if($sum > 150){
        $rabat = $sum * 0.1;
        $sum -= $rabat;
    }
    if($_POST["shipment"] !== "kurier"){
        $shipment = 0;
    }else{
        $shipment = 10;
        $sum += $shipment;
    }

}

echo "<div class=\"summary-row summary-row-discount\">";
echo "<div></div>";
echo "<div>rabat</div>";
echo "<div>" . ($rabat) . "PLN</div>";
echo "</div>";
echo "<div class=\"summary-row\">";
echo "<div></div>";
echo "<div>" . $_POST["shipment"] . "</div>";
echo "<div>" . ($shipment) . "PLN</div>";
echo "</div>";
echo "<div class=\"summary-row\">";
echo "<div></div>";
echo "<div>łącznie do zapłaty</div>";
echo "<div>" . $sum . "PLN</div>";
echo "</div>";

?>

    </div>
</body>
</html>