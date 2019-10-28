<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apteka</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <main>
        <header>
            <h1>Apteka</h1>
        </header>
        <aside>
            <ul>
                <li><a href="godziny.html">Godziny otwarcia apteki</a></li>
                <li><a href="http://apteka24.pl">Apteka internetowa</a></li>
            </ul>
        </aside>
        <section>
            <div>
                <h2>Dostępne leki</h2>
                <img src="tabletka.png" alt="tabletka">
                <?php
$link = mysqli_connect("localhost", "mateusz", "123", "apteka");
$result = mysqli_query($link, "select a.id, a.nazwa, a.dawka, a.substancja_czynna from leki as a;");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row["id"] . ". " . $row["nazwa"] . " " . $row["dawka"] . "mg - " . $row["substancja_czynna"] . "</p>";
    }
}
?>
            </div>
            <div>
                <h2>Syropy na kaszel</h2>
                <img src="tabletka.png" alt="tabletka">
                <?php
                $link = mysqli_connect("localhost", "mateusz", "123", "apteka");
                $result = mysqli_query($link, 'select l.id, l.nazwa, l.cena, l.ilosc_w_magazynie from leki as l left join formy_podania as f on f.id = l.forma_podania  where l.zastosowanie = "kaszel" and f.forma = "syrop";');
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<p>" . $row["id"] . ". " . $row["nazwa"] . " " . $row["cena"] . "zł - w magazynie: " . $row["ilosc_w_magazynie"] . " szt.</p>";
                    }
                }
                ?>
            </div>
            <div>
                <h2>Braki magazynowe</h2>
                <img src="tabletka.png" alt="tabletka">
                <?php
                $link = mysqli_connect("localhost", "mateusz", "123", "apteka");
                $result = mysqli_query($link, 'select l.id, l.nazwa, l.cena, l.ilosc_w_magazynie from leki as l where l.ilosc_w_magazynie < 3;');
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<p>" . $row["id"] . ". " . $row["nazwa"] . " " . $row["cena"] . "zł - w magazynie: " . $row["ilosc_w_magazynie"] . " szt.</p>";
                    }
                }
                ?>
            </div>
        </section>
        <aside>
            <h2>Kalkulator dawkowania</h2>

            <form action="" method="GET" name="Kalkulator">
                Dawka podstawowa <br><input type="number" value="100" id="dawka"><br>
                Wiek pacjenta <br><input type="number" value="11" id="wiek"><br>
                <input type="button" value="Oblicz" onclick="oblicz()">
            </form>
            <h5 id="wynik"></h5>
        </aside>
        <footer>
            <p>Mateusz Dołęga 2018</p>
        </footer>
    </main>
</body>
    <script src="kalkulator.js"></script>
</html>