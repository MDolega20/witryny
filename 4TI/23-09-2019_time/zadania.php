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
function check_loading_time(){
    $time; $time2;
    $time = microtime(true);
    usleep(1000000);
    $time2 = microtime(true);

    $duration = $time2 - $time;
    echo $duration . " seconds\n";
}


//test
// date_in_polish();
// echo days_between("03-04-2000", "23-09-2019");
// echo days_to_end_of_this_year();
// intercalary();
// timestamp_to_format(1569305341);
check_loading_time();
