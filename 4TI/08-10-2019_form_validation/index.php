<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
    <div id="calculator">
        <form method="post">
            <?php 
                if(isset($_POST["number_1"]) && !empty($_POST["number_1"])){
                    echo "<input type=\"number\" name=\"number_1\" value=\"". $_POST["number_1"] ."\">";
                }else{
                    echo "<input type=\"number\" name=\"number_1\">";
                }
            ?>
            <select name="symbol">
                <option value="+" selected>+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <?php
            if (isset($_POST["number_2"]) && !empty($_POST["number_2"])) {
                echo "<input type=\"number\" name=\"number_2\" value=\"" . $_POST["number_2"] . "\">";
            } else {
                echo "<input type=\"number\" name=\"number_2\">";
            }
            ?>

            <span>= </span>
            <?php
                if(isset($_POST["number_1"]) && isset($_POST["number_2"]) && isset($_POST["symbol"]) && !empty($_POST["number_1"]) && !empty($_POST["number_2"]) && !empty($_POST["symbol"])){
                    if($_POST["symbol"] === "+"){
                        echo $_POST["number_1"] + $_POST["number_2"];
                    }else if ($_POST["symbol"] === "-") {
                        echo $_POST["number_1"] - $_POST["number_2"];
                    }else if ($_POST["symbol"] === "*") {
                        echo $_POST["number_1"] * $_POST["number_2"];
                    }else if ($_POST["symbol"] === "/") {
                        echo $_POST["number_1"] / $_POST["number_2"];
                    }else{
                        echo "<span>WYNIK</span>";
                    }
                }
            ?>
            </br>
            <input type="submit" value="Oblicz">
        </form>
    </div>
</body>
</html>