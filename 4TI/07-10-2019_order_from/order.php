<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        if($_POST["login"] === "admin" && $_POST["password"] === "admin"){
            echo "<h1>Zalogowano</h1>";
        }
    ?>
</body>
</html>