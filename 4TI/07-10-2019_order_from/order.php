<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        if($_POST["login"] === "admin" && $_POST["password"] === "admin"){
            echo "<div id=\"dog-pic\"><img src=\"https://media0.giphy.com/media/jp2KXzsPtoKFG/giphy.gif?cid=790b76116ade1263ae241cb6c7774f0ea7dc0c966d54b9d3&rid=giphy.gif\" /></div>";
        }else{
            echo "<div id=\"dog-pic\"><img src=\"https://media1.giphy.com/media/5bgS90uCmWoWp2hBvj/giphy.gif?cid=790b7611d93258ff8cdc84ec0524c70cdd75f6fd16f9b7e3&rid=giphy.gif
\" /></div>";

        }
    ?>
    <?php include "order_form.php" ?>
</body>
</html>