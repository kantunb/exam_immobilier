CREATE DATABASE IF NOT EXISTS immobilier;

USE immobilier;

CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin' ;

-- GRANT ALL PRIVILEGES ON immobilier to 'admin@localhost';

CREATE TABLE logement (
id_logement INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
titre VARCHAR(255) NOT NULL,
adresse VARCHAR(255)  NOT NULL,
ville VARCHAR(255)  NOT NULL,
cp VARCHAR(255)  NOT NULL,
surface INT  NOT NULL,
prix INT  NOT NULL,
photo VARCHAR(255),
type ENUM ('location', 'vente') NOT NULL,
description TEXT
);

SELECT * FROM logement;