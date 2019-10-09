<?php

include_once "form.php";

if(isset($_POST["min"]) && !empty($_POST["min"]))
    $min = $_POST["min"];
if(isset($_POST["max"]) && !empty($_POST["max"]))
    $max = $_POST["max"];

$polaczenie = mysqli_connect('localhost', 'mateusz', '123', 'sklep_spożywczy');

if ($polaczenie) {
    $query = "SELECT * FROM produkty";
    if(isset($min) || isset($max)){
        $query = $query . " WHERE ";
        if(isset($min)){
            $query = $query . " cena > " . $min;
        }
        if(isset($max)){
            $query = $query . (isset($min) ? " AND" : "") . " cena < " . $max;
        }
        $query = $query . " ORDER BY cena";
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
