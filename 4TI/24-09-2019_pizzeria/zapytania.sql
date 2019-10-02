wszystkie pizze
SELECT items.id, items.name, items.price, items.description FROM items left join category c on items.category_id = c.id where c.name = "pizze";
wszystkie pizze i składniki
SELECT items.name, c2.name FROM items left join category c on items.category_id = c.id left outer join items_components ic on items.id = ic.item_id left outer join components c2 on ic.component_id = c2.id  where c.name = "pizze";
wszystkie dane pracowników
SELECT first_name,workers.name,pesel,tel,email, r.name as rule FROM workers left join rules r on workers.rule_id = r.id;
wszystkie zamówienia
SELECT o.price, s.name, o.date_time, w.first_name as worker_f_name, w.name as worker_name, o.id as order_id, i.name as item_name, i.id as item_id, c.name as item_category FROM orders as o left outer join orders_items oi on o.id = oi.order_id left outer join items i on oi.item_id = i.id left join states s on oi.state_id = s.id left join workers w on oi.worker_id = w.id left join category c on i.category_id = c.id;
dodanie nowej pizzy
INSERT INTO items (category_id, name, description, price) VALUES (1, "nazwa_nowej_pizzy", "opis nowej pizzy", 20);
usunęcie pizzy
DELETE FROM items where id = 8;
UPDATE items SET `delete` = 1 where id = 9;
dodanie nowego pracownika
INSERT INTO workers (first_name, name, pesel, tel, email, rule_id) VALUES ("Olaf", "Budzisz", "19271001270", "698003261", "olafdestroyer@vp.pl", 2);
usuniecie pracownika
DELETE FROM workers WHERE id = 4;
UPDATE workers SET `delete` = true WHERE id = 5;
dodanie składnika
INSERT INTO components (name, price, description) VALUES ("rukula", 5, "opis rukoli");
usuniecie składnika
DELETE FROM components WHERE id = 7;
UPDATE components SET `delete` = 1 WHERE id = 7;
przypisanie składnika do pizzy
INSERT INTO items_components (item_id, component_id) VALUES (9,7);
dodanie zamówienia
INSERT INTO costumers (id, tel, street_number, post_code, city) VALUES (100, "887129459", "Skalniakowa 9", "81-198", "Kosakowo");
INSERT INTO orders (id, costumer_id, price, state_id, date_time) VALUES (101, 100, 30, 1, current_date);
INSERT INTO orders_items (order_id, item_id, worker_id, state_id) VALUES (101, 1, 1, 1);
aktualizacja statusu zamówienia
UPDATE orders SET state_id = 2 where id = 101;
UPDATE orders_items SET state_id = 2 where order_id = 101 and item_id = 1;


