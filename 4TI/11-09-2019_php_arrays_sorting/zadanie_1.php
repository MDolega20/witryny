<?php

$filmy = [];

$filmy["Nazwa filmu"] = "SF";
$filmy["Nazwa filmu2"] = "SF";
$filmy["Nazwa filmu3"] = "SF";
$filmy["Nazwa filmu4"] = "Ak";
$filmy["Nazwa filmu5"] = "Ak";
$filmy["Nazwa filmu6"] = "Co";
$filmy["Nazwa filmu7"] = "Co";

$category = [];

foreach ($filmy as $key => $value) {
    if(isset($category[$value])){
        array_push($category[$value], $key);
    }else{
        $category[$value] = [];
        array_push($category[$value], $key);
    }
}

print_r($category);