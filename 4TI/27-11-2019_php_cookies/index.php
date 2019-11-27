<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
    <?php
        setcookie("nazwa", "wartosc", time()+10);

        echo "<p>Ciasteczka</p>";
        echo "<p>";
        print_r($_COOKIE);
        echo "</p>";
    ?>
</body>
</html>