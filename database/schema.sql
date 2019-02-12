DROP DATABASE IF EXISTS iris;
CREATE DATABASE iris;
USE iris;

DROP TABLE IF EXISTS `valores`;
CREATE TABLE `valores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tempo` time NOT NULL,
  `valor1` varchar(100) NOT NULL,
  `valor2` varchar(100) NOT NULL,
  `valor3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);


INSERT INTO valores
    (tempo, valor1, valor2, valor3)
  VALUES
    (NOW(), 150, 250, 350),
    (NOW(), 150, 250, 350),
    (NOW(), 150, 250, 350),
    (NOW(), 150, 250, 350),
    (NOW(), 150, 250, 350);