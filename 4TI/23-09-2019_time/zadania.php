<?php

function date_in_polish(){
    #zamiana na polski
    function getMonth($miesiac)
    {
        switch ($miesiac) {
            case "Jan":
                $miesiac = "Styczeń";
                break;
            case "Feb":
                $miesiac = "Luty";
                break;
            case "Mar":
                $miesiac = "Marzec";
                break;
            case "Apr":
                $miesiac = "Kwiecień";
                break;
            case "May":
                $miesiac = "Maj";
                break;
            case "Jun":
                $miesiac = "Czerwiec";
                break;
            case "Jul":
                $miesiac = "Lipiec";
                break;
            case "Aug":
                $miesiac = "Sierpień";
                break;
            case "Sep":
                $miesiac = "Wrzesień";
                break;
            case "Oct":
                $miesiac = "Październik";
                break;
            case "Nov":
                $miesiac = "Listopad";
                break;
            case "Dec":
                $miesiac = "Grudzień";
                break;
        }
        return $miesiac;
    }

    $result = Date("j") . " " . getMonth(Date("M")) . " " . Date("Y");

    echo $result . "\n";
}
function days_between($date_1, $date_2){
    $date_1 = strtotime($date_1);
    $date_2 = strtotime($date_2);
    $between = $date_2 - $date_1;
    return $between / (60 * 60 * 24);
}
function days_to_end_of_this_year(){
    $date_1 = strtotime("01-01-".(Date("Y")+1));
    $date_2 = strtotime(Date("d-m-Y"));
    $between = $date_1 - $date_2;
    return $between / (60 * 60 * 24);
}
function intercalary(){
    $years = [];
    for ($i=2019;  count($years) <= 10; $i++) { 
        $first = "01-01-";
        $end = "31-12-";
        // echo $first . $i . " - " . $first . ($i + 1) . " >>> " . days_between($first . $i, $first . ($i + 1)) . "\n";

        if(days_between($first.$i, $first.($i+1)) == 365){
            // echo $first . $i . " - " . $end . ($i + 1) . " >>> " . days_between($first . $i, $end . ($i + 1)) . "\n";

            array_push($years, $i);
        }
        foreach ($years as $key => $value) {
            echo $value . "\n";
        }
    }
}
function timestamp_to_format($timestamp){
    $years = $timestamp / 100 / 60 / 24 / 356;
    $days = $timestamp / 100 / 60 / 24;
    $hours = $timestamp / 100 / 60 / 60;
    $minutes = $timestamp / 100 / 60;
    $seconds = $timestamp / 100;
    $miliseconds = $timestamp;
    echo $years . " " . $days . "\n";
}
function data4()
{
    echo "<br>";
    $year = 2019;
    for ($i = 1; $i <= 10;) {
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            echo $year . "<br>";
            $i++;
        }
        $year++;
    }
}
function data5($time)
{
    echo "<br>";
    $time2 = ceil($time / (60 * 60 * 24));
    $leapYear = [];
    $monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    for ($year = 1970;; $year++) {
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            array_push($leapYear, $year);
            if ($time2 <= 366) {
                $monthDays[1] = 29;
                break;
            } else {
                $time2 -= 366;
            }
        } else {
            if ($time2 <= 365) {
                break;
            } else {
                $time2 -= 365;
            }
        }
    }

    $month = 0;
    foreach ($monthDays as $days) {
        $month++;
        if ($time2 <= $days) {
            break;
        } else {
            $time2 -= $days;
        }
    }
    echo $time2 . "." . $month . "." . $year;
}
function check_loading_time(){
    $time; $time2;
    $time = microtime(true);
    usleep(1000000);
    $time2 = microtime(true);

    $duration = $time2 - $time;
    echo $duration . " seconds\n";
}
function data8()
{
    echo "<br>";
    $n = 4;
    $x = 3;
    $tn = [1, $x];
    for ($i = 2; $i < $n; $i++) {
        $tnm2 = $tn[0];
        $tnm1 = $tn[1];
        $tnc = 2 * $x * $tnm1 - $tnm2;
        $tn[0] = $tn[1];
        $tn[1] = $tnc;
    }
    echo $tn[1] . "<br>";
}


//test
// date_in_polish();
// echo days_between("03-04-2000", "23-09-2019");
// echo days_to_end_of_this_year();
// intercalary();
// timestamp_to_format(1569305341);
// check_loading_time();
