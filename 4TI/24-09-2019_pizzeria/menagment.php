<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menagment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.html";?>
    <main>
        <section>
            <h2>Pracownicy</h2>
            <div class="workers table">
                <div class="workers__row workers__row__top">
                    <div></div>
                    <div>imie</div>
                    <div>nazwisko</div>
                    <div>pesel</div>
                    <div>tel</div>
                    <div>email</div>
                    <div>funkcja</div>
                </div>
            <?php
$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config

$workersQueryString = "SELECT workers.first_name, workers.name, workers.pesel, workers.tel, workers.email, r.name as rule from workers left join rules r on workers.rule_id = r.id WHERE workers.delete = false;";
$workersQuery = $pdo->query($workersQueryString)->fetchAll(PDO::FETCH_ASSOC);

foreach ($workersQuery as $key => $value) {
    $name = $value["name"];
    $first_name = $value["first_name"];
    $tel = $value["tel"];
    $pesel = $value["pesel"];
    $email = $value["email"];
    $rule = $value["rule"];

    echo "
                    <div class=\"workers__row table_row\">
                    <div class=\"table_row_del\">
                        <button>Delete</button>
                        <button>Edit</button>
                    </div>
                    <div>
                    $first_name
                    </div>
                    <div>
                    $name
                    </div>
                    <div>
                    $pesel
                    </div>
                    <div>
                    $tel
                    </div>
                    <div>
                    $email
                    </div>
                    <div>
                    $rule
                    </div>
                </div>
                    ";
}

?>
    <div class="workers__row table_row">
        <div>
            <button>Add</button>
        </div>
        <div>
            <label>
                <input type="text" placeholder="first_name" name="first_name">
            </label>
        </div>
        <div>
            <label>
                <input type="text" placeholder="name" name="name">
            </label>
        </div>
        <div>
            <label>
                <input type="text" placeholder="pesel"  name="pesel">
            </label>
        </div>
        <div>
            <label>
                <input type="text" placeholder="tel"  name="tel">
            </label>
        </div>
        <div>
            <label>
                <input type="text" placeholder="email" name="email">
            </label>
        </div>
        <div>
            <label>
                <select name="rule">
                    <?php
$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config

$rulesQueryString = "SELECT * FROM rules";
$rulesQuery = $pdo->query($rulesQueryString)->fetchAll(PDO::FETCH_ASSOC);

foreach ($rulesQuery as $key => $value) {
    $name = $value["name"];
    $id = $value["id"];
    echo "<option value=\"$id\">$name</option>";
}

?>

                </select>
            </label>
        </div>
    </div>
            </div>
        </section>
        <section>
            <h2>Składniki</h2>
            <div class="components table">
                <div class="components__row components__row__top">
                    <div></div>
                    <div>nazwa</div>
                    <div>cena [pln]</div>
                    <div>opis</div>
                </div>
                            <?php
$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config

$componentsQueryString = "SELECT * from components";
$componentsQuery = $pdo->query($componentsQueryString)->fetchAll(PDO::FETCH_ASSOC);

foreach ($componentsQuery as $key => $value) {
    $name = $value["name"];
    $price = $value["price"];
    $describtion = $value["description"];

    echo "
                    <div class=\"components__row table_row\">
                    <div class=\"table_row_del\">
                        <button>Delete</button>
                        <button>Edit</button>
                    </div>
                    <div>
                    $name
                    </div>
                    <div>
                    $price
                    </div>
                    <div>
                    $describtion
                    </div>
                </div>
                    ";
}

?>
<div class="table_row components__row">
    <div>
        <button>Add</button>
    </div>
    <div>
        <label>
            <input type="text" placeholder="name" name="name">
        </label>
    </div>
    <div>
        <label>
            <input type="number" placeholder="price" name="price">
        </label>
    </div>
    <div>
        <label>
            <input type="text" placeholder="describtion" name="describtion">
        </label>
    </div>
</div>
            </div>
        </section>
        <section>
            <h2>Produkty</h2>
            <div class="products table">
                <div class="products__row components__row__top">
                    <div></div>
                    <div>kategoria</div>
                    <div>nazwa</div>
                    <div>cena [pln]</div>
                    <div>składniki</div>
                    <div>opis</div>
                </div>
                                            <?php
$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config

$itemsQueryString = "SELECT items.id, items.name, items.price, items.description, c.name as category from items left join category c on items.category_id = c.id;";
$itemsQuery = $pdo->query($itemsQueryString)->fetchAll(PDO::FETCH_ASSOC);

foreach ($itemsQuery as $key => $value) {
    $item_id = $value["id"];

    $componentsQueryString = "SELECT c.name as name, c.description as description, c.id as id from items_components left join components c on items_components.component_id = c.id where items_components.item_id = $item_id";
    $componentsQuery = $pdo->query($componentsQueryString)->fetchAll(PDO::FETCH_ASSOC);

    $components = "";
    for ($i = 0; $i <= Count($componentsQuery) - 1; $i++) {
        $components = $components . $componentsQuery[$i]["name"];
        if ($i < Count($componentsQuery) - 1) {
            $components = $components . ", ";
        }
    }
    $name = $value["name"];
    $price = $value["price"];
    $describtion = $value["description"];
    $category = $value["category"];

    echo "
                    <div class=\"products__row table_row\">
                    <div class=\"table_row_del\">
                        <button>Delete</button>
                        <button>Edit</button>
                    </div>
                    <div>
                    $category
                    </div>
                    <div>
                    $name
                    </div>
                    <div>
                    $price
                    </div>
                    <div>
                    $components
                    </div>
                    <div>
                    $describtion
                    </div>
                </div>
                    ";
}

?>
<div class="table_row products__row">
    <div>
        <button>Add</button>
    </div>
    <div>
        <label>
                <select name="rule">
        <?php
$pdo = new PDO('mysql:host=localhost;dbname=pizzeria;charset=utf8mb4;collection=utf8mb4_unicode_ci', 'mateusz', '123'); // officjal config

$categoryQueryString = "SELECT * FROM category";
$categoryQuery = $pdo->query($categoryQueryString)->fetchAll(PDO::FETCH_ASSOC);

foreach ($categoryQuery as $key => $value) {
    $name = $value["name"];
    $id = $value["id"];
    echo "<option value=\"$id\">$name</option>";
}
?>
    </select>
        </label>
    </div>
    <div>
        <label>
            <input type="text" placeholder="name" name="name">
        </label>
    </div>
    <div>
        <label>
            <input type="number" placeholder="price" name="price">
        </label>
    </div>
    <div>
        <label>
            <input type="text" placeholder="components" name="components">
        </label>
    </div>
    <div>
        <label>
            <input type="text" placeholder="describtion" name="describtion">
        </label>
    </div>
</div>
        </section>
    </main>
    <?php include_once "footer.html";?>
</body>
</html>