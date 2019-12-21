CREATE DATABASE IF NOT EXISTS count;

use count;

CREATE TABLE IF NOT EXISTS tb_caleg (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL,
    id_partai int NOT NULL,
    earned_vote int NOT NULL
);

CREATE TABLE IF NOT EXISTS tb_partai (
    id int AUTO_INCREMENT PRIMARY KEY,
    name varchar(100) NOT NULL 
);

INSERT INTO tb_caleg (id, name, id_partai, earned_vote) VALUES (1, 'Sera', 2, 100);

INSERT INTO tb_caleg (id, name, id_partai, earned_vote) VALUES (2, 'Dobleh', 1, 99);

INSERT INTO tb_partai (id, name) VALUES (1, 'Cilacap Santai');

INSERT INTO tb_partai (id, name) VALUES (2, 'Cilacap Sejahtera');