create database sistema11;
use sistema11;
CREATE TABLE `sistema11`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(60) NULL,
  `imagem` VARCHAR(100) NULL,
  PRIMARY KEY (`id`));