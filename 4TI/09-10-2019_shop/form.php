<form method="post" id="form-price">
    <label><span>od:</span><input type="number" name="min" value="<?php echo $_POST["min"]; ?>"></label>
    <label><span>do:</span><input type="number" name="max" value="<?php echo $_POST["max"]; ?>"></label>
    <input type="submit" value="Przefiltruj">
</form>
<form method="post" id="form-search">
    <label><input type="text" name="product_name" value="<?php echo $_POST["product_name"]; ?>"></label>
    <input type="submit" value="Szukaj">
</form>