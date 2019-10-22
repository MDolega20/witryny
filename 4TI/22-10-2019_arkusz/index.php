<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>
    <header>
        <div id="header-img">
            <a href="./img/borowik.jpg">
                <img src="./img/borowik_miniatura.png" alt="Grzybobranie">
            </a>
        </div>
        <div id="header-text">
            <h1>Idziemy na grzyby!</h1>
        </div>
    </header>
    <main>
        <div id="left">
            <?php 
                $connect = mysqli_connect("localhost", "mateusz", "123", "grzyby");
                if($connect){
                    $queryString = "select nazwa, potoczna, nazwa_pliku from grzyby;";
                    $query = mysqli_query($connect, $queryString);
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<img src=\"./img/" . $row["nazwa_pliku"] . "\" alt=\"".$row["potoczna"]."\" title=\"".$row["potoczna"]."\"/>";
}
                }
            ?>
        </div>
        <div id="right">
            <h2>Grzyby jadalne</h2>
            <?php
$connect = mysqli_connect("localhost", "mateusz", "123", "grzyby");
if ($connect) {
    $queryString = "select nazwa, potoczna from grzyby where jadalny = 1;";
    $query = mysqli_query($connect, $queryString);
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<p>".$row["nazwa"]." (".$row["potoczna"].")</p>";
    }
}
?>
            <h2>Polecamy do sosów</h2>
            <?php
$connect = mysqli_connect("localhost", "mateusz", "123", "grzyby");
if ($connect) {
    $queryString = 'select g.nazwa, g.potoczna, r.nazwa as rodzina from grzyby as g left join rodzina as r on g.rodzina_id = r.id left join potrawy as p on p.id = g.potrawy_id where p.nazwa = "sos";';
    $query = mysqli_query($connect, $queryString);
    echo "<ol>";
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<li>".$row["nazwa"]." (".$row["potoczna"]."), rodzina: ".$row["rodzina"]."</li>";
    }
    echo "</ol>";
}
?>
        </div>
    </main>
    <footer>
        <p>Autor: XXXXXXXXXXX</p>
    </footer>
</body>

</html>