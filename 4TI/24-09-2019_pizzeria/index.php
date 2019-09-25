<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pizzeria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include_once "header.html";?>
    <main>
        <div id="home">
            <section name="about_us">
                <h2>O nas</h2>
                <p>Właściciel Restauracji Borys Nowicki wywodzi się z Pierwoszyna skąd wyruszył w świat. Sztuki gotowania uczył się przez 20 lat  w restauracji rodziny Poerio na włoskiej wyspie Ischia. Tam zaczynając od podstawowych prac dzięki pracowitości i zmysłowi kulinarnemu został kucharzem – szefem kuchni. Przepisy na dania podawane w Kosakowie właśnie czerpią inspiracje z kuchni neapolitańskiej.</p><p>Logo i nazwa IL Pirata została użyczona przez właścicieli  tej klimatycznej wyspiarskiej restauracji.</p><p>Lokal IL Pirata zaprasza na neapolitańską pizzę i inne specjały śródziemnomorskiej kuchni. Wystrój oraz muzyka w naszej restauracji odwołuje się do południowych Włoch. Staramy się, żeby każdy nasz Gość mógł nie tylko dobrze zjeść, ale i w oczekiwaniu na posiłek odpocząć  przy muzyce, a dzieci mogą poobserwować jaszczurki w naszym terrarium.</p>
                <h3 class="frst">Nasi pracownicy</h3>
                <div class="workers">
                    <div class="worker">
                        <img src="https://dummyimage.com/100/000/fff&text=worker" alt="" sizes="" srcset=""/>
                        <p>Imie pracownika</p>
                    </div>
                    <div class="worker">
                        <img src="https://dummyimage.com/100/000/fff&text=worker" alt="" sizes="" srcset=""/>
                        <p>Imie pracownika</p>
                    </div>
                    <div class="worker">
                        <img src="https://dummyimage.com/100/000/fff&text=worker" alt="" sizes="" srcset=""/>
                        <p>Imie pracownika</p>
                    </div>
                    <div class="worker">
                        <img src="https://dummyimage.com/100/000/fff&text=worker" alt="" sizes="" srcset=""/>
                        <p>Imie pracownika</p>
                    </div>
                    <div class="worker">
                        <img src="https://dummyimage.com/100/000/fff&text=worker" alt="" sizes="" srcset=""/>
                        <p>Imie pracownika</p>
                    </div>
                </div>
            </section>
            <section name="menu">
                <h2>Menu</h2>
                <div id="menu">
                    <?php include "menu.php" ?>
                </div>
            </section>
            <section name="kontakt">
                <h2>Kontakt</h2>
                <p>W razie jakichkolwiek pytań prosimy o kontakt na podany adres e-mail: meritus4@wp.pl</p>
            </section>
            <section name="order">
                <h2>Zamów</h2>
                <?php include "form_1.html"; ?>
                <h2>Sprawdź status zamówienia</h2>
                <?php include "form_2.html";?>
            </section>
        </div>
    </main>
    <?php include_once "footer.html";?>
</body>
</html>