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
function pesel($pesel)
{
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
function informacjeZPeselu($pesel)
{
    $tablicaZPeselu = str_split($pesel);

    plec($tablicaZPeselu);
    dataUrodzin($tablicaZPeselu);
    czyPelnoletni($tablicaZPeselu);

    // if ($tablicaZPeselu[9]%2 == 0) {
    //     echo 'pġeæ: kobieta';
    // } else {
    //     echo 'pġeæ: mêṡczyzna';
    // }
    // echo '<br>data ur: ';

    // echo $tablicaZPeselu[4].$tablicaZPeselu[5].'-'.$tablicaZPeselu[2].$tablicaZPeselu[3].'-19'.$tablicaZPeselu[0].$tablicaZPeselu[1];

    // echo '<br>';

    // $dzienUrodzeniaOsoby = $tablicaZPeselu[4].$tablicaZPeselu[5].'-'.$tablicaZPeselu[2].$tablicaZPeselu[3].'-19'.$tablicaZPeselu[0].$tablicaZPeselu[1];

    // $kiedy18Lat = (strtotime("".$dzienUrodzeniaOsoby." + 18 years"));

    // // echo date($kiedy18Lat);
    // // echo time();

    // if ($kiedy18Lat < (time()) ) {

    //     // echo date("d-m-Y", $kiedy18Lat);
    //     echo '<br>Ta osoba jest peġnoletnia';
    // } else {
    //     echo '<br>Ta osoba jest niepeġnoletnia';
    // }

    // echo '<br>';

    // echo ( floor((((time()-$kiedy18Lat)/60)/60)/24) );

    // // echo strtotime($dzienUrodzeniaOsoby);
    // // echo date('d-m-Y', $kiedy18Lat);
}
function plec($tablicaZPeselu)
{

    if ($tablicaZPeselu[9] % 2 == 0) {
        echo 'pġeæ: kobieta';
    } else {
        echo 'pġeæ: mêṡczyzna';
    }
}
function dataUrodzin($tablicaZPeselu)
{
    echo '<br>data ur: ';

    // echo $tablicaZPeselu[4].$tablicaZPeselu[5].'-'.$tablicaZPeselu[2].$tablicaZPeselu[3].'-';

    if ($tablicaZPeselu[2] == 2) {
        $tablicaZPeselu[2] -= 2;
        echo $tablicaZPeselu[4] . $tablicaZPeselu[5] . '-' . $tablicaZPeselu[2] . $tablicaZPeselu[3] . '-20' . $tablicaZPeselu[0] . $tablicaZPeselu[1];
    } else {
        echo $tablicaZPeselu[4] . $tablicaZPeselu[5] . '-' . $tablicaZPeselu[2] . $tablicaZPeselu[3] . '-19' . $tablicaZPeselu[0] . $tablicaZPeselu[1];
    }
    echo '<br>';
}
function czyPelnoletni($tablicaZPeselu)
{
    $dzienUrodzeniaOsoby = '';

    if ($tablicaZPeselu[2] == 2) {
        $tablicaZPeselu[2] -= 2;

        $dzienUrodzeniaOsoby = $tablicaZPeselu[4] . $tablicaZPeselu[5] . '-' . $tablicaZPeselu[2] . $tablicaZPeselu[3] . '-20' . $tablicaZPeselu[0] . $tablicaZPeselu[1];
    } else {
        $dzienUrodzeniaOsoby = $tablicaZPeselu[4] . $tablicaZPeselu[5] . '-' . $tablicaZPeselu[2] . $tablicaZPeselu[3] . '-19' . $tablicaZPeselu[0] . $tablicaZPeselu[1];
    }
    // echo $dzienUrodzeniaOsoby;
    // echo  (strtotime("".$dzienUrodzeniaOsoby." + 18 years"));

    $kiedy18Lat = (strtotime("" . $dzienUrodzeniaOsoby . " + 18 years"));

    // echo date($kiedy18Lat);
    // echo time();
    $czyOsobaJestPelnoletnia = 0;

    if ($kiedy18Lat < (time())) {

        // echo date("d-m-Y", $kiedy18Lat);
        echo '<br>Ta osoba jest peġnoletnia';
        $czyOsobaJestPelnoletnia = 1;
    } else {
        echo '<br>Ta osoba jest niepeġnoletnia';
        $czyOsobaJestPelnoletnia = 0;
    }
    echo '<br>';

    if ($czyOsobaJestPelnoletnia) {
        echo 'Dni minione od peġnoletnoci: ';
        echo (floor((((time() - $kiedy18Lat) / 60) / 60) / 24));

    } else {

        echo 'Dni do pelnoletnosci: ';
        echo (ceil(((($kiedy18Lat - time()) / 60) / 60) / 24));
    }
    // echo strtotime($kiedy18Lat);
}
function sredniaArytmetyczna($liczby){
    $sum = array_sum($liczby);
    return $sum / count($liczby);
}
function sredniaWazona($liczby,  $wagi){
    $sum = 0;
    $wg = 0;
    foreach ($liczby as $key => $value) {
        $sum = $sum + $value * $wagi[$key];
        $wg = $wg + $wagi[$key];
    }
    return $sum / $wg;
}
function mediana($liczby){ //dont work
    $liczby = asort($liczby);
    if(sizeof($liczby) % 2 === 0){
        return ($liczby[count($liczby) / 2] + $liczby[count($liczby) / 2 - 1]) / 2;
    }else{
        return $liczby[count($liczby) / 2];
    }
}
function poleKola($A,$B,$r){
    return pi() * $r  * $r;
}
function maska($string){
    $maska = explode(".", $string);
    $dec = 0;
    foreach ($maska as $key => $value) {
        switch ($value) {
            case 255:
            $dec = $dec + 8;
                break;
            case 254:
            $dec = $dec + 7;
                break;
            case 252:
            $dec = $dec + 6;
                break;
            case 248:
            $dec = $dec + 5;
                break;
            case 240:
            $dec = $dec + 4;
                break;
            case 224:
            $dec = $dec + 3;
                break;
            case 192:
            $dec = $dec + 2;
                break;
            case 128:
            $dec = $dec + 1;
                break;
            case 0:
            $dec = $dec + 0;
                break;
            default:
                break;
        }
    }
    return "/".$dec;
}
function getLoggin(){
    $raw = "12-03-2018,11:05pm,21;14-06-2018,05:14am,3;29-03-2019,10:32am,11";
    $sessions = explode(";", $raw);
    foreach ($sessions as $key => $value) {
        $session_data = explode(",",$value);
        echo "\n" . "Data: " . $session_data[0] . "\n";
        echo "Godzina: " . $session_data[1] . "\n";
        echo "Czas: " . $session_data[2] . "\n";
    }
}

// test
// wyswietlTabele(10);
// toListThree([1,2,3,4,5,6,7,8,9]);
// wyswietlTabeleKolor([1,2,3,4,5,6,7,8],["green","yellow","blue","black","white"]);
// tabela(5,5);
// pesel("81010200131");
// informacjeZPeselu("81010200131");
// echo sredniaArytmetyczna([1,5,6,7]);
// echo sredniaWazona([1,5,6,7],[1,1,5,2]);
// echo mediana([1,5,6,7,8]);
// echo poleKola(5,5,5);
// echo maska("255.255.128.0");
getLoggin();