<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Php</title>
</head>
<body>
    <?php 
        echo "<h1>Text generated at server side by php</h1>";

        // comment here

        $variables = [100, 99.99, true, "true", 'a'];
        $operators = ["+", "-", "*", "/", "%", "**", "++", "--", "+=", "-=", "==", "===", ">=", "<=", "<=>"];
        $rounds = ["round", "cail", "floor"];

        echo "<h4>Variables</h4>";
        foreach ($variables as $var) {
            echo "Type of <b>" . $var . "</b> is " . gettype($var) . "</br>";
        }
        echo "<h4>Operators <a href='https://www.tutorialrepublic.com/php-tutorial/php-operators.php'>more</a></h4>";
        foreach ($operators as $operator) {
            echo $operator . "</br>";
        }    
        echo "<h4>Rounding</h4>";
        foreach ($rounds as $round) {
            echo $round . "</br>";
        }
        
    ?>
</body>
</html>