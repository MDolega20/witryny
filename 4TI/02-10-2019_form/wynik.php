<html>
<head>
    <title>RESPONSE</title>
</head>
<body>
<?php
    // first_name
    // last_name
    // birth_date
    // man
    // woman
    // city
    // hooby_topic_1
    // hooby_topic_2
    // hooby_topic_3
    // hooby_topic_4
    // hooby_topic_5
    // fruit_name_1
    // note

    $color_2 = "RGB(" . $_GET["color_2"][0] . "," . $_GET["color_2"][1] . "," . $_GET["color_2"][2] . ")";

    echo "<style>";
    echo "body{";
    echo "background-color: " . $_GET["color"] . ";";
    echo "color: " . $color_2 . ";";
    echo "}";
    echo "</style>";


    if($_GET["gender"] === "man"){
        echo "<img src=\"./man.png\" height=\"50px\"/>";
    }elseif($_GET["gender"] === "woman"){
        echo "<img src=\"./woman.png\" height=\"50px\" />";
    }
        
    print_r($_GET);
?>
</body>
</html>