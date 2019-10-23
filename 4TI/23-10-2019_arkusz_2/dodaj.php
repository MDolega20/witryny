<?php
    if(isset($_POST["tytul"]) && !empty($_POST["tytul"]) && 
    isset($_POST["gatunek"]) && !empty($_POST["gatunek"]) && 
    isset($_POST["rok"]) && !empty($_POST["rok"]) && 
    isset($_POST["ocena"])&& !empty($_POST["ocena"])
    ){

        $connect = mysqli_connect("localhost", "mateusz", "123", "grzyby");

        if ($connect) {
            $queryString = 'INSERT INTO filmy (id,gatunki_id,rezyserzy_id,tytul,rok,ocena) values (null,'.$_POST["gatunek"].',1,"'.$_POST["tytul"].'",'.$_POST["rok"].','.$_POST["ocena"].');';
            $query = mysqli_query($connect, $queryString);

            // while ($row = mysqli_fetch_assoc($query)) {
            //     echo "<li>" . $row["nazwa"] . " (" . $row["potoczna"] . "), rodzina: " . $row["rodzina"] . "</li>";
            // }
            echo "Film ".$_POST["tytul"]." został dodany do bazy";

            mysql_close($connect);

        } else {
            echo "DATABASE ERROR\n";
        }

    }else{
        echo "DATA ERROR\n";
    }


?>