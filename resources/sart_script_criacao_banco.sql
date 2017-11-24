/*
Grupo do PI:
-Danilo Tourinho Cavalcanti
-Cícero Silva Rodrigues
-Felipe Capella
-Paulo Petrillo
-Thyago Souza
*/
CREATE DATABASE sart;

CREATE TABLE `sart`.`transeunte` (
  `id_transeunte` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `senha` CHAR(40) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `idade` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_transeunte`));

CREATE TABLE `sart`.`coordenadas` (
  `id_coordenadas` INT NOT NULL,
  `id_transeunte` INT NULL,
  `origem` VARCHAR(200) NULL,
  `destino` VARCHAR(200) NULL,
  PRIMARY KEY (`id_coordenadas`),
  INDEX `id_transeunte_idx` (`id_transeunte` ASC),
  CONSTRAINT `id_transeunte_coordenadas_fk`
    FOREIGN KEY (`id_transeunte`)
    REFERENCES `sart`.`transeunte` (`id_transeunte`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	CREATE TABLE `sart`.`rotas` (
  `id_rotas` INT NOT NULL,
  `id_coordenadas` INT NULL,
  `distancia` INT NULL,
  PRIMARY KEY (`id_rotas`),
  INDEX `id_coordenadas_fk_idx` (`id_coordenadas` ASC),
  CONSTRAINT `id_coordenadas_rotas_fk`
    FOREIGN KEY (`id_coordenadas`)
    REFERENCES `sart`.`coordenadas` (`id_coordenadas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

	CREATE TABLE `sart`.`risco` (
  `id_risco` INT NOT NULL,
  `id_rotas` INT NULL,
  `grau_risco` INT NULL,
  PRIMARY KEY (`id_risco`),
  CONSTRAINT `id_rotas_risco_fk`
    FOREIGN KEY (`id_risco`)
    REFERENCES `sart`.`rotas` (`id_rotas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

	CREATE TABLE `sart`.`veiculo` (
  `id_veiculo` INT NOT NULL,
  `modalidade_veiculo` INT NULL,
  PRIMARY KEY (`id_veiculo`));

  CREATE TABLE `sart`.`rota_modalidade` (
  `id_rotas` INT NOT NULL,
  `id_veiculo` INT NOT NULL,
  PRIMARY KEY (`id_rotas`, `id_veiculo`),
  INDEX `id_veiculo_fk_idx` (`id_veiculo` ASC),
  CONSTRAINT `id_rotas_modalidade_fk`
    FOREIGN KEY (`id_rotas`)
    REFERENCES `sart`.`rotas` (`id_rotas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_veiculo_modalidade_fk`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	CREATE TABLE `sart`.`questionario` (
  `id_questionario` INT NOT NULL,
  `id_veiculo` INT NULL,
  `tipo_questionario` INT NULL,
  PRIMARY KEY (`id_questionario`),
  INDEX `id_veiculo_fk_idx` (`id_veiculo` ASC),
  CONSTRAINT `id_veiculo_questionario_fk`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

	CREATE TABLE `sart`.`risco_questionario` (
  `id_risco` INT NOT NULL,
  `id_questionario` INT NOT NULL,
  `id_veiculo` INT NOT NULL,
  PRIMARY KEY (`id_risco`, `id_questionario`, `id_veiculo`),
  INDEX `id_questionario_fk_idx` (`id_questionario` ASC),
  INDEX `id_veiculo_risco_fk_idx` (`id_veiculo` ASC),
  CONSTRAINT `id_risco_fk_risco_quest`
    FOREIGN KEY (`id_risco`)
    REFERENCES `sart`.`risco` (`id_risco`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_questionario_fk_risco_quest`
    FOREIGN KEY (`id_questionario`)
    REFERENCES `sart`.`questionario` (`id_questionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_veiculo_fk_risco_quest`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	CREATE TABLE `sart`.`questoes` (
  `seq_questao` INT NOT NULL AUTO_INCREMENT,
  `id_questionario` INT NOT NULL,
  `id_veiculo` INT NOT NULL,
  `questao` VARCHAR(400) NULL,
  PRIMARY KEY (`seq_questao`, `id_questionario`, `id_veiculo`),
  INDEX `id_questionario_fk_questoes_idx` (`id_questionario` ASC),
  INDEX `id_veiculo_fk_questoes_idx` (`id_veiculo` ASC),
  CONSTRAINT `id_questionario_fk_questoes`
    FOREIGN KEY (`id_questionario`)
    REFERENCES `sart`.`questionario` (`id_questionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id_veiculo_fk_questoes`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

	CREATE TABLE `sart`.`bicicleta` (
  `id_veiculo` INT NOT NULL,
  PRIMARY KEY (`id_veiculo`),
  CONSTRAINT `id_veiculo_fk_bicicleta`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	CREATE TABLE `sart`.`pedestre` (
  `id_veiculo` INT NOT NULL,
  PRIMARY KEY (`id_veiculo`),
  CONSTRAINT `id_veiculo_fk_pedestre`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	CREATE TABLE `sart`.`transporte_publico` (
  `id_veiculo` INT NOT NULL,
  PRIMARY KEY (`id_veiculo`),
  CONSTRAINT `id_veiculo_fk_transporte_publico`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	CREATE TABLE `sart`.`carro_passeio` (
  `id_veiculo` INT NOT NULL,
  `placa` VARCHAR(45) NULL,
  `estado` VARCHAR(100) NULL,
  `modelo` VARCHAR(45) NULL,
  `ano` INT NULL,
  PRIMARY KEY (`id_veiculo`),
  CONSTRAINT `id_veiculo_fk_carro_passeio`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
	
	CREATE TABLE `sart`.`motocicleta` (
  `id_veiculo` INT NOT NULL,
  `placa` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `ano` INT NULL,
  PRIMARY KEY (`id_veiculo`),
  CONSTRAINT `id_veiculo_fk_motocicleta`
    FOREIGN KEY (`id_veiculo`)
    REFERENCES `sart`.`veiculo` (`id_veiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

