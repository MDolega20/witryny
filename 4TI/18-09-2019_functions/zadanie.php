<?php

function roznica($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        wyswietl($a, $b, ($a - $b), "-");
    } else {
        echo "error\n";
    }
}
function sum($a, $b, $c)
{
    if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
        wyswietl($a, $b, ($a + $b), "+");
    } else {
        echo "BŁĄD\n";
    }
}
function iloczyn($a, $b)
{
    if (is_numeric($a) && is_numeric($b)) {
        wyswietl($a, $b, ($a * $b), "*");
    } else {
        echo "error\n";
    }
}
function iloraz($a, $b)
{
    if (is_numeric($a) && is_numeric($b) && $a != 0) {
        wyswietl($a, $b, ($a / $b), "/");
    } else {
        echo "error\n";
    }
}
function potega($a, $b)
{
    $result;
    if (is_int($a) && is_int($b) && $b >= 0) {
        if ($b == 1) {
            $result = $a;
        } else if ($b == 0) {
            $result = 1;
        } else {
            $result = $a;
            for ($i = 1; $i < $b; $i++) {
                $result = $result * $result;
            }

        }
    } else {
        echo "error\n";
    }

    if ($result !== null) {
        wyswietl($a, $b, $result, "^");
    } else {
        echo "error\n";
    }
}
function wyswietl($l1, $l2, $w, $dz)
{
    echo $l1 . " " . $dz . " " . $l2 . " = " . $w . "\n";
}
function squere($n, $x)
{
    if ($n > 0 && strlen($x) === 1) {

        for ($i = 1; $i <= $n; $i++) {
            echo $x;
        }
        echo "\n";

        for ($i = 1; $i <= $n - 2; $i++) {
            for ($j = 1; $j <= $n; $j++) {
                if ($j === 1 || $j === $n) {
                    echo $x;
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }

        for ($i = 1; $i <= $n; $i++) {
            echo $x;
        }
        echo "\n";

        return 1;
    } else {
        echo "BŁAÐ\n";
        return -1;
    }
}
function armstrong_number($number)
{
    if (is_numeric($number)) {
        $numers = str_split($number);
        $length = count($numers);
        $t = 0;
        foreach ($numers as $key => $value) {
            $s = $value;
            for ($i = 1; $i < $length; $i++) {
                $s *= $value;
            }
            $t += $s;
        }
        if($number === $t){
            return true;
        }else{
            return false;
        }
    } else {
        echo "error\n";
    }
}
function sort_this($array)
{
    print_r($array);
    $x = sort($array);
    print_r($x);
    // return reverse(sort($array));
}
function substr_2($string, $startIndex, $length){
    $arr = str_split($string);
    $arr2 = "";

    for ($i=$startIndex; $i < $startIndex+$length; $i++) { 
        $arr2 = $arr2 . $arr[$i];
    }

    return $arr2;
}

//test
// squere(10, "O");
// sort_this([15, 6, 7, 8, 4444]);
// echo armstrong_number(153);
echo substr_2("elo320", 2, 2) . "\n";