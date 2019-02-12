DROP DATABASE IF EXISTS iris;
CREATE DATABASE iris;
USE iris;

DROP TABLE IF EXISTS `valores`;
CREATE TABLE `valores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tempo` time NOT NULL,
  `temperatura` varchar(100) NOT NULL,
  `umidade` varchar(100) NOT NULL,
  `reservatorio` varchar(100) NOT NULL,
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

-- Para modificar os nomes da tabela:
ALTER TABLE `valores` CHANGE `valor1` `temperatura` VARCHAR( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
CHANGE `valor2` `umidade` VARCHAR( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
CHANGE `valor3` `reservatorio` VARCHAR( 100 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;