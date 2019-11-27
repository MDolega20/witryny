<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $conn = mysqli_connect('localhost','root','','quiz');
        $query = "SELECT * FROM pytania";
        $req = mysql_query($query, $conn);
        
    ?>
</body>
</html>