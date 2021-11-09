CREATE DATABASE `jamali`;

USE `jamali`;

CREATE TABLE `jamaliposts` (
    `row` int(11) AUTO_INCREMENT,
    `subject` TEXT,
    `posttext` TEXT,
    `datetime` TEXT,
    PRIMARY KEY (`row`)
);