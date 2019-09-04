<?php
// ddmmrrrr

$dates = ["341220038", "24252000", "12122019", "31102018"];

foreach ($dates as $date) {
    $date_f = substr($date, -8,2) . "-" . substr($date, -6,2) . "-" . substr($date, -4,4);

    if(strlen($date) !== 8){
        echo  $date_f . " data jest nie poprawna\n";
    }else if(substr($date, -8,2) <= 31 && substr($date, -6,2) <= 12){
        echo  $date_f . " data jest poprawna\n";
    }else{
        echo  $date_f . " data jest nie poprawna\n";
    }
}