<?php

$months = array(1 => 'Jan.', 2 => 'Feb.', 3 => 'Mar.', 4 => 'Apr.', 5 => 'May', 6 => 'Jun.', 7 => 'Jul.', 8 => 'Aug.', 9 => 'Sep.', 10 => 'Oct.', 11 => 'Nov.', 12 => 'Dec.');

$rows = [];

for ($i = 1; $i < count($months); $i++) {
    $rows[$months[$i]] = rand(-30, 30);
}

$low = null;
$high = null;
$summer = 0;

foreach ($rows as $key => $value) {
    if (is_null($low)) {
        $low = $value;
    } else {
        if ($low > $value) {
            $low = $value;
        }
    }
    if (is_null($high)) {
        $high = $value;
    } else {
        if ($high < $value) {
            $high = $value;
        }
    }
    if($key === 'May' || $key === 'Jun.' || $key === 'Jul.'){
        $summer+= $value;
    }
}

$average = array_sum(array_filter($rows)) / count(array_filter($rows));

echo "Year avarge temp " . $average . "\n";
echo "Year min temp " . $low . "\n";
echo "Year max temp " . $high . "\n";
echo "Year amplitude temp " . ($high + (-$low)) . "\n";
echo "SUmmer avg temp " . ($summer / 3) . "\n";
