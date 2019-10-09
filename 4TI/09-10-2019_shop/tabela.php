<?php

include_once "form.php";

if(isset($_POST["min"]) && !empty($_POST["min"]))
    $min = $_POST["min"];
if(isset($_POST["max"]) && !empty($_POST["max"]))
    $max = $_POST["max"];
if(isset($_POST["product_name"]) && !empty($_POST["product_name"]))
    $product_name = $_POST["product_name"];

$polaczenie = mysqli_connect('localhost', 'mateusz', '123', 'sklep_spożywczy');

if ($polaczenie) {
    $query = "SELECT * FROM produkty";
    if(isset($min) || isset($max) || isset($product_name)){
        $query = $query . " WHERE ";
        if(isset($min)){
            $query = $query . " cena > " . $min;
        }
        if(isset($max)){
            $query = $query . (isset($min) ? " AND" : "") . " cena < " . $max;
        }
        if(isset($product_name)){
            $query = $query . (isset($min) || isset($max) ? " AND" : "") . " nazwa LIKE \"%" . $product_name . "%\"";
        }
        // $query = $query . " ORDER BY cena";
    }

    $wynik = mysqli_query($polaczenie, $query);

    if ($wynik) {
        echo "<table>";
        echo "<tr><th>id</th><th>nazwa</th><th>cena (pln)</th><th>opis</th></tr>";

        while ($row = mysqli_fetch_assoc($wynik)) {
            foreach ($row as $key => $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "błąd zapytania\n";
    }

    mysqli_close($polaczenie);

} else {
    echo "błąd połączenia\n";
}
