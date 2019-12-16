<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Choinki</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
session_start();
if (isset($_SESSION["zamowienia"]) && !empty($_SESSION["zamowienia"])) {
    if (isset($_POST["cart"]) && !empty($_POST["cart"])) {
        $pro = [$_POST["cart"]["nazwa"], $_POST["cart"]["rozmiar"], $_POST["cart"]["ilosc"]];
        array_push($_SESSION["zamowienia"], $pro);
    }
} else {
    if (sizeof($_SESSION["zamowienia"]) == 0) {
        $pro = ["nazwa_choinki", "rozmiar", "ilość"];
        $_SESSION["zamowienia"] = [];
        array_push($_SESSION["zamowienia"], $pro);
    }
}
?>

<body>
    <?php var_dump($_SESSION); ?>
    <header>
        <div class="header-logo">
            <img src="./logo.png" alt="" srcset="">
        </div>
        <div class="header-title">
            <h1>Sprzadaż choinek online</h1>
        </div>
    </header>
    <main>
        <div id="left" class="main-left">
            <div id="cart" class="main-left-cart">
                <h2>Twoje zamówienie</h2>
                <div class="main-left-cart-items">
                    <?php
                    if (sizeof($_SESSION["zamowienia"]) > 0) {
                        foreach ($_SESSION["zamowienia"] as $key => $value) {
                            echo "<div class=\"main-left-cart-items-item\">";
                            echo "<p>" . $value[0] . "</p>";
                            echo "<p>" . $value[1] . "</p>";
                            echo "<p>" . $value[2] . "</p>";
                            echo "</div>";
                        }
                    } else {
                        echo "<div class=\"main-left-cart-items-item\"><p>brak produktów w koszyku</p></div>";
                    }

                    ?>
                </div>
            </div>
            <div><a href="mailto:choinki@xmas.pl">choinki@xmas.pl</a></div>
        </div>
        <div id="right" class="main-right">
            <div class="main-right-item">
                <h2>Cennik</h2>
                <table>
                    <tr>
                        <th>gatunek</th>
                        <th>cena (pln)</th>
                        <th>ilość</th>
                        <th>rozmiar (przedział w cm)</th>
                    </tr>
                    <tr>
                        <td rowspan="3">świerk pospolity</td>
                        <td>69</td>
                        <td>100</td>
                        <td>80-130</td>
                    </tr>
                    <tr>
                        <td>85</td>
                        <td>100</td>
                        <td>130-180</td>
                    </tr>
                    <tr>
                        <td>100</td>
                        <td>100</td>
                        <td>180+</td>
                    </tr>
                </table>
            </div>
            <div class="main-right-item">
                <h2>Formularz zamówienia</h2>
                <form action="index.php" method="post">
                    <div>
                        <label>
                            <select name='cart[nazwa]' id="">
                                <option value="nazwa">gatunek</option>
                                <option value="nazwa">gatunek</option>
                                <option value="nazwa">gatunek</option>
                            </select>
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name='cart[rozmiar]' value="maly">
                            <p>mały</p>
                        </label>
                        <label>
                            <input type="radio" name='cart[rozmiar]' value="sredni">
                            <p>średni</p>
                        </label>
                        <label>
                            <input type="radio" name='cart[rozmiar]' value="duzy">
                            <p>duzy</p>
                        </label>
                    </div>
                    <div>
                        <label><input type="number" name='cart[ilosc]' id="" placeholder="ilość" min="0" max="null"></label>
                        <input type="submit" value="zamów">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p></p>
    </footer>
</body>

</html>