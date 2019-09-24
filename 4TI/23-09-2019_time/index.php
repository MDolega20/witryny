<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body
<?php
$hour = Date("h");
$style = "style=\"";
$style2 = "\"";
if ($hour >= 5 && $hour < 12) {
    $style = $style . "background: blue; color: #000080" . $style2;
} elseif ($hour >= 12 && $hour < 17) {
    $style = $style . "background: #ace1af; color: #b803ff" . $style2;
} elseif ($hour >= 17 && $hour < 20) {
    $style = $style . "background: orange" . $style2;
} elseif ($hour >= 20 && $hour < 24) {
    $style = $style . "background: #000080; color: white" . $style2;
}
echo $style;
?>>
<?php
$hour = Date("h");
$style = "<h1>";
$style2 = "</h1>";
if ($hour >= 5 && $hour < 12) {
    $style = $style . "Jak dobrze wstaæ!" . $style2;
} elseif ($hour >= 12 && $hour < 17) {
    $style = $style . "Dzieñ dobry :)" . $style2;
} elseif ($hour >= 17 && $hour < 20) {
    $style = $style . "Jak Ci mija dzieñ?" . $style2;
} elseif ($hour >= 20 && $hour < 24) {
    $style = $style . "Dobry wieczór." . $style2;
}
echo $style;
?>
</body>
</html>