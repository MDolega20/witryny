<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="wynik.php" method="post">
        <fieldset>
            <legend>Info</legend>
            <label><input type="text" name="first_name" placeholder="first name" value="Olaf"></label>
            <label><input type="text" name="last_name" placeholder="last name" value="Budzisz"></label>
            </br>
            <label><input type="number" name="birth_date" placeholder="birth date" value="2000" min="1900" max="2019"></label>
        </fieldset>
        <fieldset>
            <legend>Sex</legend>
            <label><input type="radio" name="gender" value="man" selected>man</label>
            </br>
            <label><input type="radio" name="gender" value="woman">woman</label>
        </fieldset>
        <fieldset>
            <legend>City</legend>
            <label>
                <select name="city">
                    <option value="Hell" selected>Hell</option>
                    <option value="city_name_2">city name</option>
                    <option value="city_name_3">city name</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <legend>Preferencje</legend>
            <h3>Hobby</h3>
            <label><input type="checkbox" name="hobby[]" checked value="hobby_topic_1">hooby topic 1</label></br>
            <label><input type="checkbox" name="hobby[]" checked value="hobby_topic_2">hooby topic 2</label></br>
            <label><input type="checkbox" name="hobby[]" checked value="hobby_topic_3">hooby topic 3</label></br>
            <label><input type="checkbox" name="hobby[]" checked value="hobby_topic_4">hooby topic 4</label></br>
            <h3>Color</h3>
            <input type="color" name="color" value="#FFFFFF">
            <h3>Fav fruits</h3>
            <label>
            <select name="fruits[]" multiple>
                <option disable>- choose fruit -</option>
                <option value="fruit_name_1">fruit name</option>
                <option value="fruit_name_2">fruit name</option>
                <option value="fruit_name_3">fruit name</option>
            </select>
        </label>
        </fieldset>
        <fieldset>
            <legend>Note</legend>
            <label>
                <textarea name="note" style="width: calc(100% - 20px); padding: 10px; min-height: 50px;">Domyślna notatka</textarea>
            </label>
        </fieldset>
        <fieldset>
            <input type="submit" value="Wyslij">
        </fieldset>
    </form>
</body>
</html>
