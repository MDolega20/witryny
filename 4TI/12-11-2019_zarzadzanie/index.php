<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>zarzadanie_zadaniami</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>zarzadanie_zadaniami</h1>
    </header>
    <main class="main">
        <div class="main-col main-col-left">
            <section>
                <h2>osoby</h2>
                <?php
                    include 'polaczenie.php';

                    $sql = "SELECT id, imie, nazwisko FROM osoby";
                    $result = $conn->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<p><span>". $row["id"] ."</span> - " . $row["imie"]. " " . $row["nazwisko"] . "</p>";
                        }
                    }
                ?>
                
            </section>
            <section>
                <h2>kategorie</h2>
                <?php
                    include 'polaczenie.php';

                    $sql = "SELECT id, nazwa FROM kategorie";
                    $result = $conn->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<p><span>". $row["id"] ."</span> - " . $row["nazwa"]."</p>";
                        }
                    }
                ?>
            </section>
            <section>
                <h2>priorytety</h2>
                <?php
                    include 'polaczenie.php';

                    $sql = "SELECT id, nazwa FROM priorytety";
                    $result = $conn->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<p><span>". $row["id"] ."</span> - " . $row["nazwa"]."</p>";
                        }
                    }
                ?>
            </section>
        </div>
        <div class="main-col main-col-right">
            <section>
                <h2>przydzielanie zadań</h2>
                <form class="form" method="POST">
                    <input type="text" name="nazwa" placeholder="nazwa zadania"> 
                    <select name="priorytet">
                        <?php
                            include 'polaczenie.php';

                            $sql = "SELECT id, nazwa FROM priorytety";
                            $result = $conn->query($sql);
                            if ($result && $result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value=\"". $row["id"] . "\">" . $row["nazwa"]."</option>";
                                }
                            }
                        ?>
                    </select> 
                    <select name="kategoria">
                        <?php
                            include 'polaczenie.php';

                            $sql = "SELECT id, nazwa FROM kategorie";
                            $result = $conn->query($sql);
                            if ($result && $result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value=\"". $row["id"] . "\">" . $row["nazwa"]."</option>";
                                }
                            }
                        ?>
                    </select> 
                    <input type="number" name="osoba" placeholder="osoba odpowiedzialna"> 
                    <input type="submit" value="dodaj">
                </form>
                <div class="info">
                    <?php
                        if(isset($_POST["nazwa"]) && isset($_POST["priorytet"]) && isset($_POST["kategoria"]) && isset($_POST["osoba"]) && !empty($_POST["nazwa"]) && !empty($_POST["priorytet"]) && !empty($_POST["kategoria"]) && !empty($_POST["osoba"])){
                            include 'polaczenie.php';

                            $nazwa = $_POST["nazwa"];
                            $priorytet = intval($_POST["priorytet"]);
                            $osoba = intval($_POST["osoba"]);
                            $kategoria = intval($_POST["kategoria"]);
                            $_POST = [];

                            $sql = "INSERT INTO zadania (nazwa_zadania, osoba_odpowiedzialna_FK, priorytet_FK, kategoria_FK, zakonczone) VALUES ('$nazwa',$osoba,$priorytet,$kategoria,0)";
                            $result = $conn->query($sql);
                            if ($conn->query($sql)) {
                                echo "<p>Dodano nowe zadanie </p>";
                            }else{
                                echo "<p>Błąd</p>";
                            }
                        }
                    ?>
                </div>
            </section>
            <section>
                <h2>przydzielone zadania</h2>
                <?php
                    include 'polaczenie.php';

                    $sql = "SELECT z.nr_zadania as id, z.nazwa_zadania as nazwa, p.nazwa as priorytet, o.imie as osoba_imie, o.nazwisko as osoba_nazwisko, k.nazwa as kategoria FROM zadania as z LEFT JOIN kategorie as k ON k.id = z.kategoria_FK LEFT JOIN osoby as o ON o.id = z.osoba_odpowiedzialna_FK LEFT JOIN priorytety AS p ON p.id = z.priorytet_FK where z.zakonczone = 0;";

                    $result = $conn->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<p><span>". $row["id"] ."</span> - ".$row["nazwa"]." - ".$row["kategoria"]." - priorytet ".$row["priorytet"]." - ".$row["osoba_imie"]." ".$row["osoba_nazwisko"]."</p>";
                        }
                    }else{
                        echo "<p>brak aktywnych zadań</p>";
                    }
                ?>
            </section>
            <section>
                <h2>zakończ zadanie</h2>
                <form class="form" method="POST">
                    <input type="text" name="numer_zadania" placeholder="numer zadania">
                    <input type="submit" value="zakończ">
                </form>
                <div class="info">
                    <?php
                        if(isset($_POST["numer_zadania"]) && !empty($_POST["numer_zadania"])){
                            include 'polaczenie.php';

                            $numer = intval($_POST["numer_zadania"]);

                            $sql = "UPDATE zadania SET zakonczone = 1 WHERE nr_zadania = $numer;";

                            $result = $conn->query($sql);
                            if ($conn->query($sql)) {
                                echo "<p>Zakończono zadanie </p>";
                            }else{
                                echo "<p>Błąd</p>";
                            }
                        }
                    ?>
                </div>
            </section>
            <section>
                <h2>zakończone zadania</h2>
                <?php
                    include 'polaczenie.php';

                    $sql = "SELECT z.nr_zadania as id, z.nazwa_zadania as nazwa, p.nazwa as priorytet, o.imie as osoba_imie, o.nazwisko as osoba_nazwisko, k.nazwa as kategoria FROM zadania as z LEFT JOIN kategorie as k ON k.id = z.kategoria_FK LEFT JOIN osoby as o ON o.id = z.osoba_odpowiedzialna_FK LEFT JOIN priorytety AS p ON p.id = z.priorytet_FK where z.zakonczone = 1;";

                    $result = $conn->query($sql);
                    if ($result && $result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<p><span>". $row["id"] ."</span> - ".$row["nazwa"]." - ".$row["kategoria"]." - priorytet ".$row["priorytet"]." - ".$row["osoba_imie"]." ".$row["osoba_nazwisko"]."</p>";
                        }
                    }else{
                        echo "<p>brak aktywnych zadań</p>";
                    }
                ?>
            </section>
        </div>
    </main>
    <footer></footer>
</body>
</html>