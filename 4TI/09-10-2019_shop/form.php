<form method="post" id="form-price">
    <div>
        <label><span>od:</span><input type="number" name="min" value="<?php echo $_POST["min"]; ?>"></label>
        <label><span>do:</span><input type="number" name="max" value="<?php echo $_POST["max"]; ?>"></label>
    </div>
    <div>
        <label><input type="text" name="product_name" value="<?php echo $_POST["product_name"]; ?>"></label>
    </div>
    <div>
        <label>
            <select name="sort_type">
                <option value="nazwa" >nazwa</option>
                <option value="cena">cena</option>
            </select>
        </label>
        <label>
            <select name="sort_esc">
                <option value="ASC" >rosnąco</option> //todo
                <option value="ESC">malejąco</option>
            </select>
        </label>
    </div>
    <input type="submit" value="Szukaj">
</form>
