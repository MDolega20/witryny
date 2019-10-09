<?php 

if (isset($_POST["min"]) && !empty($_POST["min"])) {
    $min = $_POST["min"];
}else{
    $min = null;
}

if (isset($_POST["max"]) && !empty($_POST["max"])) {
    $max = $_POST["max"];
}else{
    $max = null;
}

echo "<form method=\"post\" id=\"form-price\"><label><span>od:</span><input type=\"number\" name=\"min\" value=\"" . $min . "\"></label>"."<label><span>do:</span><input type=\"number\" name=\"max\" value=\"" . $max . "\"></label><input type=\"submit\" value=\"Przefiltruj\">
</form>";


?>

<!-- <form method="post" id="form-price">
    <label><span>od:</span><input type="number" name="min"></label>
    <label><span>do:</span><input type="number" name="max"></label>
    <input type="submit" value="Przefiltruj">
</form> -->