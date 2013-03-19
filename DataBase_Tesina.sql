SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `sayes` ;
CREATE SCHEMA IF NOT EXISTS `sayes` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `sayes` ;

-- -----------------------------------------------------
-- Table `sayes`.`tipo_usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`tipo_usuario` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`tipo_usuario` (
  `id_tipo_usuario` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipo_usuario` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_tipo_usuario`) ,
  UNIQUE INDEX `tipo_usuario_UNIQUE` (`tipo_usuario` ASC) )
ENGINE = InnoDB
COMMENT = 'Son los tipos de usuario que se utilizaran en el sistema, pa' /* comment truncated */;


-- -----------------------------------------------------
-- Table `sayes`.`persona_fisica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`persona_fisica` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`persona_fisica` (
  `id_persona_fisica` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipo_usuario_id` INT UNSIGNED NOT NULL DEFAULT 3 ,
  `nombre` VARCHAR(25) NOT NULL ,
  `apellido` VARCHAR(30) NOT NULL ,
  `usuario` VARCHAR(20) NOT NULL ,
  `password` TEXT NOT NULL ,
  PRIMARY KEY (`id_persona_fisica`) ,
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC) ,
  UNIQUE INDEX `id_persona_fisica_UNIQUE` (`id_persona_fisica` ASC) ,
  INDEX `fk_persona_fisica_tipo_usuario1` (`tipo_usuario_id` ASC) ,
  CONSTRAINT `fk_persona_fisica_tipo_usuario1`
    FOREIGN KEY (`tipo_usuario_id` )
    REFERENCES `sayes`.`tipo_usuario` (`id_tipo_usuario` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'Tabla que guarda los datos de los usuarios que van a utiliza' /* comment truncated */;


-- -----------------------------------------------------
-- Table `sayes`.`situacion_persona_juridica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`situacion_persona_juridica` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`situacion_persona_juridica` (
  `id_situacion_pers_juridica` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `situacion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_situacion_pers_juridica`) ,
  UNIQUE INDEX `situacion_UNIQUE` (`situacion` ASC) )
ENGINE = InnoDB
COMMENT = 'Refleja la situacion del Ente: si esta Formada o En Formacio' /* comment truncated */;


-- -----------------------------------------------------
-- Table `sayes`.`tipo_persona_juridica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`tipo_persona_juridica` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`tipo_persona_juridica` (
  `id_tipo_persona_juridica` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipo_persona_juridica` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_tipo_persona_juridica`) ,
  UNIQUE INDEX `tipo_persona_juridica_UNIQUE` (`tipo_persona_juridica` ASC) )
ENGINE = InnoDB
COMMENT = 'Se guarda los tipos posibles de Entes: Cooperativas o Mutual' /* comment truncated */;


-- -----------------------------------------------------
-- Table `sayes`.`persona_juridica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`persona_juridica` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`persona_juridica` (
  `id_persona_juridica` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `situacion_id` INT UNSIGNED NOT NULL DEFAULT 1 ,
  `tipo_pers_juridica_id` INT UNSIGNED NOT NULL DEFAULT 1 ,
  `cuit_cuil` DECIMAL(11) NULL ,
  `nombre_fantasia` VARCHAR(45) NOT NULL ,
  `fecha_inicio_actividad` DATE NOT NULL ,
  `resenia` VARCHAR(250) NULL ,
  `legajo` INT UNSIGNED NOT NULL ,
  `matricula` VARCHAR(10) NULL ,
  `cantidad_de_socios` INT UNSIGNED NOT NULL ,
  `telefono` VARCHAR(25) NOT NULL ,
  `email` VARCHAR(25) NOT NULL ,
  PRIMARY KEY (`id_persona_juridica`) ,
  UNIQUE INDEX `legajo_UNIQUE` (`legajo` ASC) ,
  UNIQUE INDEX `matricula_UNIQUE` (`matricula` ASC) ,
  INDEX `fk_persona_juridica_tipo_persona_juridica1` (`tipo_pers_juridica_id` ASC) ,
  CONSTRAINT `fk_persona_juridica_situacion_persona_juridica1`
    FOREIGN KEY (`situacion_id` )
    REFERENCES `sayes`.`situacion_persona_juridica` (`id_situacion_pers_juridica` )
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_persona_juridica_tipo_persona_juridica1`
    FOREIGN KEY (`tipo_pers_juridica_id` )
    REFERENCES `sayes`.`tipo_persona_juridica` (`id_tipo_persona_juridica` )
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`provincia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`provincia` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`provincia` (
  `id_provincia` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre_provincia` VARCHAR(30) NOT NULL ,
  PRIMARY KEY (`id_provincia`) ,
  UNIQUE INDEX `nombre_provincia_UNIQUE` (`nombre_provincia` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`localidad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`localidad` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`localidad` (
  `id_localidad` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre_localidad` VARCHAR(45) NOT NULL ,
  `codigo_postal` VARCHAR(15) NULL ,
  `provincia_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id_localidad`) ,
  INDEX `fk_localidad_provincia1` (`provincia_id` ASC) ,
  UNIQUE INDEX `nombre_localidad_UNIQUE` (`nombre_localidad` ASC) ,
  CONSTRAINT `fk_localidad_provincia1`
    FOREIGN KEY (`provincia_id` )
    REFERENCES `sayes`.`provincia` (`id_provincia` )
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`actividad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`actividad` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`actividad` (
  `id_actividad` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `actividad` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`id_actividad`) ,
  UNIQUE INDEX `actividad_UNIQUE` (`actividad` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`tipo_direccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`tipo_direccion` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`tipo_direccion` (
  `id_tipo_direccion` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_tipo_direccion`) ,
  UNIQUE INDEX `descripcion_UNIQUE` (`descripcion` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`direccion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`direccion` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`direccion` (
  `id_direccion` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `persona_juridica_id` INT UNSIGNED NOT NULL ,
  `tipo_direccion_id` INT UNSIGNED NOT NULL DEFAULT 1 ,
  `localidad_id` INT UNSIGNED NOT NULL ,
  `calle` VARCHAR(45) NOT NULL ,
  `numero` VARCHAR(10) NOT NULL DEFAULT 'S/N' ,
  `piso` VARCHAR(5) NULL ,
  `departamento` VARCHAR(5) NULL ,
  PRIMARY KEY (`id_direccion`) ,
  INDEX `fk_direccion_tipo_direccion1_idx` (`tipo_direccion_id` ASC) ,
  INDEX `fk_direccion_localidad1` (`localidad_id` ASC) ,
  INDEX `fk_direccion_persona_juridica1` (`persona_juridica_id` ASC) ,
  CONSTRAINT `fk_direccion_tipo_direccion1`
    FOREIGN KEY (`tipo_direccion_id` )
    REFERENCES `sayes`.`tipo_direccion` (`id_tipo_direccion` )
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_direccion_localidad1`
    FOREIGN KEY (`localidad_id` )
    REFERENCES `sayes`.`localidad` (`id_localidad` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_direccion_persona_juridica1`
    FOREIGN KEY (`persona_juridica_id` )
    REFERENCES `sayes`.`persona_juridica` (`id_persona_juridica` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`ejercicio_economico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`ejercicio_economico` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`ejercicio_economico` (
  `id_ejercicio_economico` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `numero_ejercicio_economico` INT UNSIGNED NOT NULL ,
  `persona_juridica_id` INT UNSIGNED NOT NULL ,
  `fecha_fin_ejercicio_economico` DATE NOT NULL ,
  `observaciones` TEXT NULL ,
  `resultado_economico` DECIMAL(11,2) NULL ,
  PRIMARY KEY (`id_ejercicio_economico`) ,
  INDEX `fk_ejercicio_economico_persona_juridica1` (`persona_juridica_id` ASC) ,
  CONSTRAINT `fk_ejercicio_economico_persona_juridica1`
    FOREIGN KEY (`persona_juridica_id` )
    REFERENCES `sayes`.`persona_juridica` (`id_persona_juridica` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
-- -----------------------------------------------------
-- Creo el indice UNIQUE para que una pers. juridica no pueda tener
-- 2 nro. de ejercicio economico igual, o sea, uno por año.
-- -----------------------------------------------------
ALTER TABLE ejercicio_economico
ADD CONSTRAINT UQ_NroEjeEcon_PerJur UNIQUE(numero_ejercicio_economico, persona_juridica_id);


-- -----------------------------------------------------
-- Table `sayes`.`actividad_pers_juridica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`actividad_pers_juridica` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`actividad_pers_juridica` (
  `actividad_id` INT UNSIGNED NOT NULL ,
  `persona_juridica_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`actividad_id`, `persona_juridica_id`) ,
  INDEX `fk_actividad_pers_juridica_actividad1` (`actividad_id` ASC) ,
  INDEX `fk_actividad_pers_juridica_persona_juridica1` (`persona_juridica_id` ASC) ,
  CONSTRAINT `fk_actividad_pers_juridica_actividad1`
    FOREIGN KEY (`actividad_id` )
    REFERENCES `sayes`.`actividad` (`id_actividad` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_actividad_pers_juridica_persona_juridica1`
    FOREIGN KEY (`persona_juridica_id` )
    REFERENCES `sayes`.`persona_juridica` (`id_persona_juridica` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`puesto_comision_directiva`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`puesto_comision_directiva` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`puesto_comision_directiva` (
  `id_puesto_comision_directiva` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `puesto` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_puesto_comision_directiva`) ,
  UNIQUE INDEX `puesto_UNIQUE` (`puesto` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`persona_comision_directiva`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`persona_comision_directiva` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`persona_comision_directiva` (
  `id_persona_comision_directiva` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `ejercicio_economico_id` INT UNSIGNED NOT NULL ,
  `puesto_id` INT UNSIGNED NOT NULL ,
  `nombre_y_apellido` VARCHAR(60) NOT NULL ,
  `telefono` VARCHAR(15) NULL ,
  `email` VARCHAR(45) NULL ,
  `fecha_inicio_actividad` DATE NOT NULL ,
  PRIMARY KEY (`id_persona_comision_directiva`) ,
  INDEX `fk_persona_comision_directiva_puesto_comision_directiva1` (`puesto_id` ASC) ,
  INDEX `fk_persona_comision_directiva_ejercicio_economico1` (`ejercicio_economico_id` ASC) ,
  CONSTRAINT `fk_persona_comision_directiva_puesto_comision_directiva1`
    FOREIGN KEY (`puesto_id` )
    REFERENCES `sayes`.`puesto_comision_directiva` (`id_puesto_comision_directiva` )
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_persona_comision_directiva_ejercicio_economico1`
    FOREIGN KEY (`ejercicio_economico_id` )
    REFERENCES `sayes`.`ejercicio_economico` (`id_ejercicio_economico` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`estatuto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`estatuto` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`estatuto` (
  `id_estatuto` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `persona_juridica_id` INT UNSIGNED NOT NULL ,
  `duracion_de_mandato` INT UNSIGNED NOT NULL ,
  `duracion_ejercicio_economico` INT NOT NULL DEFAULT 1 ,
  `dias_para_fecha_tope_asamblea` INT UNSIGNED NOT NULL ,
  `dias_para_fecha_tope_convocatoria` INT UNSIGNED NOT NULL ,
  `dias_para_fecha_tope_nuevo_mandato` INT UNSIGNED NOT NULL ,
  `estatuto_pdf` VARCHAR(45) NULL ,
  PRIMARY KEY (`id_estatuto`) ,
  INDEX `fk_estatuto_persona_juridica1` (`persona_juridica_id` ASC) ,
  UNIQUE INDEX `persona_juridica_id_UNIQUE` (`persona_juridica_id` ASC) ,
  CONSTRAINT `fk_estatuto_persona_juridica1`
    FOREIGN KEY (`persona_juridica_id` )
    REFERENCES `sayes`.`persona_juridica` (`id_persona_juridica` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'Tabla que refleja los datos importantes del estatuto.';


-- -----------------------------------------------------
-- Table `sayes`.`tipo_aporte`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`tipo_aporte` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`tipo_aporte` (
  `id_tipo_aporte` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipo_aporte` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_tipo_aporte`) ,
  UNIQUE INDEX `tipo_aporte_UNIQUE` (`tipo_aporte` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`aporte`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`aporte` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`aporte` (
  `id_aporte` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `persona_juridica_id` INT UNSIGNED NOT NULL ,
  `tipo_aporte_id` INT UNSIGNED NOT NULL ,
  `fecha_aporte` DATE NOT NULL ,
  `monto_aporte` DECIMAL(9,2) NOT NULL ,
  `numero_expediente` VARCHAR(10) NOT NULL ,
  PRIMARY KEY (`id_aporte`) ,
  UNIQUE INDEX `expediente_UNIQUE` (`numero_expediente` ASC) ,
  INDEX `fk_aportes_persona_juridica1` (`persona_juridica_id` ASC) ,
  INDEX `fk_aporte_tipo_aporte1` (`tipo_aporte_id` ASC) ,
  CONSTRAINT `fk_aportes_persona_juridica1`
    FOREIGN KEY (`persona_juridica_id` )
    REFERENCES `sayes`.`persona_juridica` (`id_persona_juridica` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_aporte_tipo_aporte1`
    FOREIGN KEY (`tipo_aporte_id` )
    REFERENCES `sayes`.`tipo_aporte` (`id_tipo_aporte` )
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'Tabla en donde se gurdan los aportes obtenidos por ese ente,' /* comment truncated */;


-- -----------------------------------------------------
-- Table `sayes`.`tipo_asamblea`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`tipo_asamblea` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`tipo_asamblea` (
  `id_tipo_asamblea` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipo_asamblea` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_tipo_asamblea`) ,
  UNIQUE INDEX `tipo_asamblea_UNIQUE` (`tipo_asamblea` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`asamblea`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`asamblea` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`asamblea` (
  `id_asamblea` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `ejercicio_economico_id` INT UNSIGNED NOT NULL ,
  `tipo_asamblea_id` INT UNSIGNED NOT NULL ,
  `fecha_de_asamblea` DATE NOT NULL ,
  `fecha_de_convocatoria` DATE NOT NULL ,
  `fecha_de_nuevo_mandato` DATE NULL ,
  `observaciones` VARCHAR(250) NULL ,
  PRIMARY KEY (`id_asamblea`) ,
  INDEX `fk_asamblea_tipo_asamblea1` (`tipo_asamblea_id` ASC) ,
  INDEX `fk_asamblea_ejercicio_economico1` (`ejercicio_economico_id` ASC) ,
  CONSTRAINT `fk_asamblea_tipo_asamblea1`
    FOREIGN KEY (`tipo_asamblea_id` )
    REFERENCES `sayes`.`tipo_asamblea` (`id_tipo_asamblea` )
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_asamblea_ejercicio_economico1`
    FOREIGN KEY (`ejercicio_economico_id` )
    REFERENCES `sayes`.`ejercicio_economico` (`id_ejercicio_economico` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sayes`.`imagenes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`imagenes` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`imagenes` (
  `id_imagenes` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `persona_juridica_id_persona_juridica` INT UNSIGNED NOT NULL ,
  `descripcion` VARCHAR(45) NULL ,
  `nombre_archivo` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_imagenes`) ,
  UNIQUE INDEX `nombre archivo_UNIQUE` (`nombre_archivo` ASC) ,
  INDEX `fk_imagenes_persona_juridica1` (`persona_juridica_id_persona_juridica` ASC) ,
  CONSTRAINT `fk_imagenes_persona_juridica1`
    FOREIGN KEY (`persona_juridica_id_persona_juridica` )
    REFERENCES `sayes`.`persona_juridica` (`id_persona_juridica` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
COMMENT = 'Imagenes de las Coop. y mutuales';


-- -----------------------------------------------------
-- Table `sayes`.`mail_alerta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`mail_alerta` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`mail_alerta` (
  `id_tipo_alerta` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tipo_alerta` INT UNSIGNED NOT NULL ,
  `dias_para_aviso` INT UNSIGNED NOT NULL DEFAULT 15 ,
  `cuerpo_mensaje` TEXT NOT NULL ,
  PRIMARY KEY (`id_tipo_alerta`) ,
  UNIQUE INDEX `tipo_alerta_id_UNIQUE` (`tipo_alerta` ASC) )
ENGINE = InnoDB
COMMENT = 'contiene el contenido del mensaje para cada alerta';


-- -----------------------------------------------------
-- Table `sayes`.`ente_alerta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sayes`.`ente_alerta` ;

CREATE  TABLE IF NOT EXISTS `sayes`.`ente_alerta` (
  `id_ente_alerta` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `ente_id` INT UNSIGNED NOT NULL ,
  `alerta_id` INT UNSIGNED NOT NULL ,
  `fecha_envio` DATE NOT NULL ,
  `usuario` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id_ente_alerta`) ,
  INDEX `fk_ente_alerta_persona_juridica1` (`ente_id` ASC) ,
  INDEX `fk_ente_alerta_alerta1` (`alerta_id` ASC) ,
  CONSTRAINT `fk_ente_alerta_persona_juridica1`
    FOREIGN KEY (`ente_id` )
    REFERENCES `sayes`.`persona_juridica` (`id_persona_juridica` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_ente_alerta_alerta1`
    FOREIGN KEY (`alerta_id` )
    REFERENCES `sayes`.`mail_alerta` (`id_tipo_alerta` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
