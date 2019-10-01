<?php

function wyswietlTabele($n)
{
    echo "<table>";
    echo "<tr>";

    for ($i = 1; $i <= $n; $i++) {
        echo "<td></td>";
    }

    echo "</tr>";
    echo "</table>";
}
function toList($array)
{
    echo "<ul>";

    foreach ($array as $key => $value) {
        echo "<li>$value</li>";
    }

    echo "</ul>";
}
function toListThree($array)
{
    echo "<ol>";

    foreach ($array as $key => $value) {
        if ($value % 3 === 0 && is_int($value)) {
            echo "<li>$value</li>";
        }

    }

    echo "</ol>";
}
function wyswietlTabeleKolor($liczby, $kolory)
{
    echo "<table>";
    echo "<tr>";

    for ($i = 0; $i <= count($liczby) - 1; $i++) {
        echo "<td style=\"background: " . $kolory[array_rand($kolory)] . ";\">" . $liczby[$i] . "</td>";
    }

    echo "</tr>";
    echo "</table>";
}
function tabela($n, $k) //zad 5 i 6
{
    echo "<table>";

    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $k; $j++) {
            if($i === 0){
                echo "<th>X</th>";
            } else {
                echo "<td>X</td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";

}
function pesel($pesel){
    $pesel_a = str_split($pesel);
    $data_urodzenia = $pesel_a[0] . $pesel_a[1] . "-" . $pesel_a[2] . $pesel_a[3] . "-" . $pesel_a[4] . $pesel_a[5];
    if($pesel_a[0] . $pesel_a[1] > date("y")){
        $year = 19 . $pesel_a[0] . $pesel_a[1];
        $date_long = $year . "-" . $pesel_a[2] . $pesel_a[3] . "-" . $pesel_a[4] . $pesel_a[5];
    }else{
        $year = 20 . $pesel_a[0] . $pesel_a[1];
        $date_long = $year . "-" . $pesel_a[2] . $pesel_a[3] . "-" . $pesel_a[4] . $pesel_a[5];
    }
    $old = Date("Y") - $year;

    if($pesel_a[11] % 2 !== 0){
        $plec = "kobieta";
    }else{
        $plec = "meszczyzna";
    }

    $old_m = strtotime(Date("Y-m-d")) - strtotime($date_long);
    $pełnoletni = strtotime($date_long) + 31556926 * 18;
    $days_now = strtotime(Date("Y-m-d")) / 86400;
    $days = $old_m / 86400;
    $to_pełnoletni = (strtotime(Date("Y-m-d")) - $pełnoletni)/ 86400;
    $years = $old_m / 31556926;

    // $old_date = date("d-m-Y", $old_m);
    // echo "\n" . strtotime(Date("Y-m-d")) . "\n" . strtotime($date_long) . "\n" . $old_m . "\n" . $days . "\n" . $pełnoletni;


    echo "\nPlec: " . $plec . "\n";
    echo "Data_urodzenia: " . $data_urodzenia . "\n";
    echo "Pełnoletni(a): " . ($old >= 18 ? "Tak od " . ($days_now - $days) . " dni" : "Nie zostało " . $to_pełnoletni . " dni") ."\n";
}

// test
// wyswietlTabele(10);
// toListThree([1,2,3,4,5,6,7,8,9]);
// wyswietlTabeleKolor([1,2,3,4,5,6,7,8],["green","yellow","blue","black","white"]);
// tabela(5,5);
pesel("81010200131");