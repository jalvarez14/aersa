
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- almacen
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `almacen`;

CREATE TABLE `almacen`
(
    `idalmacen` INTEGER NOT NULL AUTO_INCREMENT,
    `almacen_nombre` VARCHAR(255) NOT NULL,
    `almacen_encargado` VARCHAR(45) NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `almacen_estatus` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idalmacen`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idsucursal_almacen`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- categoria
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria`
(
    `idcategoria` INTEGER NOT NULL AUTO_INCREMENT,
    `categoria_nombre` VARCHAR(255) NOT NULL,
    `categoria_padre` INTEGER,
    `categoria_almacenable` TINYINT(1),
    PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- codigobarras
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `codigobarras`;

CREATE TABLE `codigobarras`
(
    `idcodigobarras` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `codigobarras_codigo` VARCHAR(45) NOT NULL,
    `codigobarras_cantidad` FLOAT NOT NULL,
    PRIMARY KEY (`idcodigobarras`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idproducto_codigobarras`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conceptosalida
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conceptosalida`;

CREATE TABLE `conceptosalida`
(
    `idconceptosalida` INTEGER NOT NULL AUTO_INCREMENT,
    `conceptosalida_nombre` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idconceptosalida`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- empresa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa`
(
    `idempresa` INTEGER NOT NULL AUTO_INCREMENT,
    `empresa_nombrecomercial` VARCHAR(255) NOT NULL,
    `empresa_razonsocial` VARCHAR(255) NOT NULL,
    `empresa_estatus` TINYINT(1) NOT NULL,
    `idadministrador` VARCHAR(45),
    PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- producto
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `producto`;

CREATE TABLE `producto`
(
    `idproducto` INTEGER NOT NULL AUTO_INCREMENT,
    `producto_nombre` TEXT NOT NULL,
    `idcategoria` INTEGER,
    `idsubcategoria` INTEGER,
    `producto_rendimiento` INTEGER,
    `producto_ultimocosto` FLOAT,
    `idunidadmedida` INTEGER,
    `producto_baja` TINYINT(1) NOT NULL,
    `producto_tipo` enum('simple','subreceta','plu') NOT NULL,
    `producto_costo` FLOAT,
    PRIMARY KEY (`idproducto`),
    INDEX `idunidadmedida` (`idunidadmedida`),
    CONSTRAINT `idunidadmedida_producto`
        FOREIGN KEY (`idunidadmedida`)
        REFERENCES `unidadmedida` (`idunidadmedida`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor`
(
    `idproveedor` INTEGER NOT NULL,
    `idempresa` INTEGER NOT NULL AUTO_INCREMENT,
    `proveedor_nombrecomercial` VARCHAR(255) NOT NULL,
    `proveedor_razonsocial` VARCHAR(255) NOT NULL,
    `proveedor_RFC` VARCHAR(45) NOT NULL,
    `proveedor_telefono` VARCHAR(45) NOT NULL,
    `proveedor_calle` VARCHAR(45),
    `proveedor_numero` VARCHAR(45),
    `proveedor_interior` VARCHAR(45),
    `proveedor_colonia` VARCHAR(45),
    `proveedor_ciudad` VARCHAR(45),
    `proveedor_estado` VARCHAR(45),
    PRIMARY KEY (`idproveedor`),
    INDEX `idempresa` (`idempresa`),
    CONSTRAINT `idempresa_proveedor`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- receta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `receta`;

CREATE TABLE `receta`
(
    `idreceta` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `idproductoreceta` INTEGER NOT NULL,
    `receta_cantidad` FLOAT NOT NULL,
    PRIMARY KEY (`idreceta`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idproductoreceta` (`idproductoreceta`),
    CONSTRAINT `idproducto_receta`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproductoreceta_receta`
        FOREIGN KEY (`idproductoreceta`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rol
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol`
(
    `idrol` INTEGER NOT NULL AUTO_INCREMENT,
    `rol_nombre` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idrol`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sucursal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sucursal`;

CREATE TABLE `sucursal`
(
    `idsucursal` INTEGER NOT NULL AUTO_INCREMENT,
    `sucursal_nombre` VARCHAR(45) NOT NULL,
    `idempresa` INTEGER NOT NULL,
    PRIMARY KEY (`idsucursal`),
    INDEX `idempresa` (`idempresa`),
    CONSTRAINT `idempresa_sucursal`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- tasaiva
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `tasaiva`;

CREATE TABLE `tasaiva`
(
    `idtasaiva` INTEGER NOT NULL AUTO_INCREMENT,
    `tasaiva_valor` FLOAT NOT NULL,
    PRIMARY KEY (`idtasaiva`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- unidadmedida
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `unidadmedida`;

CREATE TABLE `unidadmedida`
(
    `idunidadmedida` INTEGER NOT NULL AUTO_INCREMENT,
    `unidadmedida_nombre` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idunidadmedida`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usuario
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario`
(
    `idusuario` INTEGER NOT NULL AUTO_INCREMENT,
    `usuario_nombre` VARCHAR(255) NOT NULL,
    `idrol` INTEGER NOT NULL,
    `usuario_estatus` TINYINT(1) NOT NULL,
    `usuario_username` VARCHAR(45) NOT NULL,
    `usuario_password` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idusuario`),
    INDEX `idrol` (`idrol`),
    CONSTRAINT `idrol_usuario`
        FOREIGN KEY (`idrol`)
        REFERENCES `rol` (`idrol`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usuarioalmacen
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuarioalmacen`;

CREATE TABLE `usuarioalmacen`
(
    `idusuarioalmacen` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `idsucursal` INTEGER,
    PRIMARY KEY (`idusuarioalmacen`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idsucursal_usuarioalmacen`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_usuarioalmacen`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- usuarioempresa
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuarioempresa`;

CREATE TABLE `usuarioempresa`
(
    `idusuarioempresa` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `idempresa` INTEGER NOT NULL,
    PRIMARY KEY (`idusuarioempresa`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idempresa` (`idempresa`),
    CONSTRAINT `idempresa_usuarioempresa`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_usuarioempresa`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
