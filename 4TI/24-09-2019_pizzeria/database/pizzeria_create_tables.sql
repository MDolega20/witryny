create table category
(
    id       int auto_increment
        primary key,
    name     varchar(100)         not null,
    `delete` tinyint(1) default 0 null
);

create table components
(
    id          int auto_increment
        primary key,
    name        varchar(1000)        not null,
    price       float                null,
    description varchar(10000)       null,
    `delete`    tinyint(1) default 0 null
);

create table costumers
(
    id            int auto_increment
        primary key,
    tel           varchar(100)         null,
    street_number varchar(100)         null,
    post_code     varchar(10)          null,
    city          varchar(100)         null,
    `delete`      tinyint(1) default 0 null
);

create table items
(
    id          int auto_increment
        primary key,
    category_id int                  null,
    name        varchar(100)         null,
    description varchar(1000)        null,
    price       float                not null,
    `delete`    tinyint(1) default 0 null,
    constraint items_category_id_fk
        foreign key (category_id) references category (id)
            on delete set null
);

create table items_components
(
    id           int auto_increment
        primary key,
    item_id      int not null,
    component_id int null,
    constraint items_components_components_id_fk
        foreign key (component_id) references components (id),
    constraint items_components_items_id_fk
        foreign key (item_id) references items (id)
);

create table rules
(
    id   int auto_increment
        primary key,
    name varchar(100) null
);

create table states
(
    id   int auto_increment
        primary key,
    name varchar(100) null
);

create table orders
(
    id          int auto_increment
        primary key,
    costumer_id int      null,
    price       int      null,
    state_id    int      null,
    date_time   datetime null,
    constraint orders_costumers_id_fk
        foreign key (costumer_id) references costumers (id)
            on delete set null,
    constraint orders_states_id_fk
        foreign key (state_id) references states (id)
            on delete set null
);

create table workers
(
    id         int auto_increment
        primary key,
    first_name varchar(100)         null,
    name       varchar(100)         null,
    pesel      varchar(100)         null,
    tel        varchar(100)         null,
    email      varchar(100)         null,
    rule_id    int                  null,
    active     tinyint(1) default 1 null,
    `delete`   tinyint(1) default 0 null,
    constraint workers_rules_id_fk
        foreign key (rule_id) references rules (id)
            on delete set null
);

create table orders_items
(
    id        int auto_increment
        primary key,
    order_id  int null,
    item_id   int null,
    worker_id int null,
    state_id  int null,
    constraint orders_items_items_id_fk
        foreign key (item_id) references items (id)
            on delete set null,
    constraint orders_items_orders_id_fk
        foreign key (order_id) references orders (id)
            on delete set null,
    constraint orders_items_states_id_fk
        foreign key (state_id) references states (id),
    constraint orders_items_workers_id_fk
        foreign key (worker_id) references workers (id)
            on delete set null
);


