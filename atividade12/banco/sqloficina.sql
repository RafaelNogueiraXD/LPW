create database oficina;
use oficina;
CREATE TABLE `oficina`.`proprietario` (
  `nome` VARCHAR(60) NULL,
  `telefone` VARCHAR(15) NULL,
  `cpf` VARCHAR(11) NULL,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`cpf`));
  CREATE TABLE `oficina`.`veiculo` (
  `placa` INT NOT NULL,
  `marca` VARCHAR(50) NULL,
  `Cor` VARCHAR(30) NULL,
  `Defeito` TEXT NULL,
  `tipo` VARCHAR(50) NULL,
  PRIMARY KEY (`placa`));
   CREATE TABLE `oficina`.`veic-prop` (
  `id` INT NOT NULL,
  `placa` VARCHAR(10) NULL,
  `cpf` VARCHAR(11) NULL,
  PRIMARY KEY (`id`));
CREATE TABLE `oficina`.`manutencao` (
  `id` INT NOT NULL,
  `manutencao` TEXT NULL,
  `pecas` TEXT NULL,
  `placa` VARCHAR(10) NULL,
  `estado_manutencao` VARCHAR(100) NULL,
  PRIMARY KEY (`id`));

  
