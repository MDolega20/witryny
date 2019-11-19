<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kino</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="banner">
    </div>
    <main>
        <div id="lewy">
            <h2>Musicale</h2>
            <?php // wyniki skryptu 1
                $con = mysqli_connect('localhost', 'root', '', 'kino');

                $query_str = "SELECT COUNT(f.id) as liczba FROM `gatunki` as g LEFT JOIN filmy as f on f.gatunek = g.id WHERE g.nazwa = 'musical' GROUP by g.nazwa";

                $query = mysqli_query($con, $query_str);

                if($query){
                    while($row = mysqli_fetch_assoc($query)){
                        echo "<p>Baw się dobrze na jednym z " . $row["liczba"] . " muscali!</p>";
                    }
                }

                mysqli_close($con);

                $id = rand(1,3);
                switch ($id) {
                    case 1:
                        $id = 17;
                        break;
                    case 2:
                        $id = 18;
                        break;
                    case 3:
                        $id = 19;
                        break;
                    
                    default:
                        # code...
                        break;
                }
                
                echo "<img src=\"./plakaty/" . $id . ".jpg\" alt=\"zdjęcie_plakatu\" class=\"plakat_los\" />";

            ?>
        </div>
        <div id="prawy">
            <h2>Repertuar na listopad</h2>
            <?php // wyniki skryptu 2
                $con = mysqli_connect('localhost', 'root', '', 'kino');

                $query_str = "SELECT f.id, f.tytul, s.data, s.godzina, s.cena_biletu  FROM `filmy` as f LEFT JOIN seanse as s ON s.film = f.id WHERE MONTH(s.data) = 11;";
                
                $query = mysqli_query($con, $query_str);
                
                
                if($query){
                    echo "<table>";
                    while($row = mysqli_fetch_assoc($query)){
                        echo "<tr>";
                        echo "<td>" . "<img src=\"./plakaty/" . $row["id"] . ".jpg\" alt=\"zdjęcie_plakatu\" class=\"plakat_top\" />" . "</td>";
                        echo "<td><span>" . $row["tytul"] . "</span></td>";
                        echo "<td><span>" . $row["cena_biletu"] . " zł</span></td>";
                        echo "<td><span>" . ($row["cena_biletu"] * 0.7) . " zł</span></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
                
                mysqli_close($con);
            ?>
        </div>
    </main>
    <div id="stopka">
        <div id="stopka_top">
            <h2>Tanie czwartki - zapisz sie na newsletter</h2>
            <form>
                <div>
                        
                    <label><input type="text" placeholder="imię" id="in_i"></label>
                    <label><input type="email" placeholder="e-mail" id="in_e"></label>
                    <label><select id="in_d">
                        <?php // wyniki skryptu 3
                            $con = mysqli_connect('localhost', 'root', '', 'kino');

                            $query_str = "SELECT s.data, MIN(s.`cena_biletu`) as cena FROM `seanse` as s GROUP BY s.data;";
                            
                            $query = mysqli_query($con, $query_str);
                            
                            if($query){
                                while($row = mysqli_fetch_assoc($query)){                                        
                                    
                                    //TODO
                                    // date_parse_from_format()/
                                    // echo date_parse($row["data"]);
                                    // echo date($row["data"]);
                                    // echo date_format("D", date("now"));
                                    
                                    // $datetime = date("now");
                                    // $year = $row["data"][0] . $row["data"][1] . $row["data"][2] . $row["data"][3];
                                    // $month = $row["data"][5] . $row["data"][6];
                                    // $day = $row["data"][8] . $row["data"][9];
                                    // echo date_date_set($year,$month,$day, $datetime);
                                    if(true){
                                        echo "<option value=\"".$row["data"]."\">" . $row["data"] . "</option>";
                                    }
                                }
                            }
                            
                            mysqli_close($con);
                        ?>
                    </select></label>

                </div>
                <label><input type="checkbox" id="in_c"><p>Akceptuje regulamin</p></label>
                <label><button id="b_sub">Zapisz się</button></label>
            </form>
        </div>
        <div id="stopka_bottom">
            <p>Mateusz Dołęga [numer_z_dziennika]</p>
        </div>
    </div>
<script src="./skrypt.js"></script>
</body>
</html>