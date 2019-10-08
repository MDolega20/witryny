<form action="summary.php" method="get" class="products" id="order">
    <fieldset>
        <legend>Zamówienie</legend>
        <?php 
            $products = [
                [
                    "karma sucha",
                    "30"
                ],
                [
                    "karma sucha pro",
                    "40"
                ],
                [
                    "karma sucha razer",
                    "130"
                ],
            ];
            foreach ($products as $key => $value) {
                echo "<label><input type=\"checkbox\" name=\"products[" . $key . "][name]\" value=\"" . $value[0] . "\" checked/>";
                echo "<input type=\"hidden\" name=\"products[" . $key . "][price]\" value=\"" . $value[1] . "\"/>";
                echo "<p>".$value[0]."</p></label>";
            }
            echo "<hr>";
            echo "<label><input type=\"radio\" name=\"shipment\" value=\"odbiór osobisty\"/><p>odbiór osobisty</p></label>";
            echo "<label><input type=\"radio\" name=\"shipment\" value=\"kurier\" checked/><p>kurier</p></label>";

        ?>
    <input type="submit" value="Zatwierdź">
    </fieldset>
</form>
