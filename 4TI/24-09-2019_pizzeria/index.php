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
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                    <!-- <div class="menu__table">
                        <div class="menu__table__name">
                            <h4>Pizze</h4>
                        </div>
                        <div class="menu__table__row__top">
                            <div>nazwa</div><div>cena [pln]</div>
                        </div>
                        <div class="menu__table__row">
                            <div>
                                <P>pepperoni</P>
                                <p>ser, salami</p>
                            </div>
                            <div>17</div>
                        </div>
                    </div> -->
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