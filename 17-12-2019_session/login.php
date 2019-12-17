<?php

session_start();
$p = $_POST;
$p_l = $p["login"];
$p_p = $p["password"];

$_SESSION["user"] = [];

if(isset($p_l) && !empty($p_l)){
    $_SESSION["user"]["login"] = $p_l;
    echo "Login: " . $p_l . "\n";
}else{
    echo "Login: none\n";
}
if(isset($p_p) && !empty($p_p)){
    $_SESSION["user"]["password"] = $p_p;
    echo "Password: " . $p_p . "\n";
}else{
    echo "Password: none\n";
}

Header("Location: index.php");

