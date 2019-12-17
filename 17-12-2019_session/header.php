<?php

$secret = array("login" => "admin", "password" => "admin123");

function try_login($l,$p){
    GLOBAL $secret;
    if(isset($l) && !empty($l) && isset($p) && !empty($p)){
        if($l !== $secret["login"] || $p !== $secret["password"]){
            return [False, "Błędny login lub hasło\n"];
        }else
            return [True, "Zalogowano pomyślnie\n"];
    }
}

if(isset($_SESSION["user"])){
    $l = $_SESSION["user"]["login"];
    $p = $_SESSION["user"]["password"];
    if(try_login($l,$p)[0] === True){
        echo '<a href="logout.php">Logout</a>';
    }else{
        echo '<form action="login.php" method="post">
                <label><input type="text" name="login" placeholder="login" value="admin"></label>
                <label><input type="password" name="password" placeholder="password" value="admin123"></label>
                <input type="submit" value="Login">
            </form>';
    }
}else{
    echo '<form action="login.php" method="post">
                <label><input type="text" name="login" placeholder="login" value="admin"></label>
                <label><input type="password" name="password" placeholder="password" value="admin123"></label>
                <input type="submit" value="Login">
            </form>';
}


echo "\n";