DROP DATABASE IF EXISTS php_demo;
CREATE DATABASE         php_demo;
USE                     php_demo;


CREATE TABLE products(
  id      INT PRIMARY KEY AUTO_INCREMENT,
  name    VARCHAR(255)
);


INSERT INTO products (name) VALUES
("Jabón de manos"),
("Manzanas"),
("Teclado Bluetooth");