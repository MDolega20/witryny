<?php
$polaczenie = mysqli_connect('localhost','mateusz', '123','sklep_spożywczy');

$query = "SELECT * FROM produkty";

$wynik = mysqli_query($polaczenie, $query);

for ($i=0; $i < mysqli_num_rows($wynik); $i++) { 
    $row = mysqli_fetch_assoc($wynik);
    echo $row["nazwa"] . " " . $row["cena"] . "pln\n";
}

?>