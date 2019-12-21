CREATE DATABASE IF NOT EXISTS ukm_gulanda;
USE ukm_gulanda;
CREATE TABLE IF NOT EXISTS customers (
    id char PRIMARY KEY,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    email varchar(50) NOT NULL,
    address varchar(50) NOT NULL,
    city varchar(50) NOT NULL,
    state varchar(50) NOT NULL,
    zip_code varchar(50) NOT NULL
);
CREATE TABLE IF NOT EXISTS orders (
    id char PRIMARY KEY,
    customer_id char NOT NULL,
    order_placed_date date,
    CONSTRAINT FK_OrdersCustomers FOREIGN KEY (customer_id)
        REFERENCES customers (id)
        ON UPDATE CASCADE ON DELETE CASCADE
);