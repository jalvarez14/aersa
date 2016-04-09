
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
    `idsucursal` INTEGER NOT NULL,
    `almacen_nombre` VARCHAR(255) NOT NULL,
    `almacen_encargado` VARCHAR(45) NOT NULL,
    `almacen_estatus` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idalmacen`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idsucursal_almacen`
        FOREIGN KEY (`idsucursal`)
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
-- compra
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compra`;

CREATE TABLE `compra`
(
    `idcompra` INTEGER NOT NULL AUTO_INCREMENT,
    `idsucursal` INTEGER NOT NULL,
    `idusuario` INTEGER,
    `idauditor` INTEGER,
    `idalmacen` INTEGER,
    `compra_folio` VARCHAR(45) NOT NULL,
    `compra_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `compra_factura` TEXT,
    `compra_fechacreacion` DATETIME,
    `compra_fechaentrega` VARCHAR(45),
    `compra_ieps` DECIMAL(10,5),
    `compra_iva` DECIMAL(10,5),
    `compra_total` DECIMAL(10,5),
    PRIMARY KEY (`idcompra`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- compradetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compradetalle`;

CREATE TABLE `compradetalle`
(
    `idcompradetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idcompra` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `idalmacen` INTEGER NOT NULL,
    `compradetalle_cantidad` FLOAT NOT NULL,
    `compradetalle_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`idcompradetalle`),
    INDEX `idcompra` (`idcompra`),
    INDEX `idalmacen` (`idalmacen`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idalmacen_compradetalle`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idcompra_compradetalle`
        FOREIGN KEY (`idcompra`)
        REFERENCES `compra` (`idcompra`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_compradetalle`
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
    PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- inventariomes
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `inventariomes`;

CREATE TABLE `inventariomes`
(
    `idinventariomes` INTEGER NOT NULL AUTO_INCREMENT,
    `idempleadoempresa` FLOAT NOT NULL,
    `idauditor` INTEGER NOT NULL,
    `inventariomes_fecha` DATE NOT NULL,
    `inventariomes_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `idempresa` INTEGER,
    `idsucursal` INTEGER,
    `idusuario` INTEGER,
    PRIMARY KEY (`idinventariomes`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    CONSTRAINT `idauditor_inventariomes`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`),
    CONSTRAINT `idusuario_inventariomes`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- inventariomesdetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `inventariomesdetalle`;

CREATE TABLE `inventariomesdetalle`
(
    `idinventariomesdetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idinventariomes` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `inventariomesdetalle_stockinicial` FLOAT NOT NULL,
    `inventariomesdetalle_stockteorico` FLOAT NOT NULL,
    `inventariomesdetalle_stockfisico` FLOAT NOT NULL,
    `inventariomesdetalle_diferencia` FLOAT,
    `inventariomesdetalle_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `inventariomesdetalle_ingresocompra` FLOAT NOT NULL,
    `inventariomesdetalle_ingresorequisicion` FLOAT NOT NULL,
    `inventariomesdetalle_egresorequisicion` FLOAT NOT NULL,
    `inventariomesdetalle_egresoventa` FLOAT NOT NULL,
    `inventariomesdetalle_ingresoordentablajeria` FLOAT NOT NULL,
    `inventariomesdetalle_egresoordentablajeria` FLOAT NOT NULL,
    `inventariomesdetalle_egresodevolucion` FLOAT NOT NULL,
    PRIMARY KEY (`idinventariomesdetalle`),
    INDEX `idinventariomes` (`idinventariomes`),
    CONSTRAINT `idinventariomes_inventariomesdetalle`
        FOREIGN KEY (`idinventariomes`)
        REFERENCES `inventariomes` (`idinventariomes`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- inventariomesdetallenota
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `inventariomesdetallenota`;

CREATE TABLE `inventariomesdetallenota`
(
    `idinventariomesdetallenota` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `idinventariomesdetalle` INTEGER NOT NULL,
    `inventariomesdetallenota_nota` TEXT NOT NULL,
    `inventariomesdetallenota_fecha` DATETIME NOT NULL,
    PRIMARY KEY (`idinventariomesdetallenota`),
    INDEX `idinventariomesdetalle` (`idinventariomesdetalle`),
    INDEX `idusuario_inventariomesdetallenota_idx` (`idusuario`),
    CONSTRAINT `idinventariomesdetalle_inventariomesdetallenota`
        FOREIGN KEY (`idinventariomesdetalle`)
        REFERENCES `inventariomesdetalle` (`idinventariomesdetalle`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_inventariomesdetallenota`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
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
-- requisicion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `requisicion`;

CREATE TABLE `requisicion`
(
    `idrequisicion` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER NOT NULL,
    `idconceptosalida` INTEGER NOT NULL,
    `requisicion_fecha` DATETIME NOT NULL,
    `requisicion_revisada` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idrequisicion`),
    INDEX `idconceptosalida` (`idconceptosalida`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idauditor_requisicion`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idconceptosalida_requisicion`
        FOREIGN KEY (`idconceptosalida`)
        REFERENCES `conceptosalida` (`idconceptosalida`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_requisicion`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_requisicion`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_requisicion`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- requisiciondetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `requisiciondetalle`;

CREATE TABLE `requisiciondetalle`
(
    `idrequisiciondetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idrequisicion` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `requisiciondetalle_cantidad` FLOAT NOT NULL,
    `requisiciondetalle_revisada` TINYINT(1) NOT NULL,
    `idalmacenorigen` INTEGER NOT NULL,
    `idalmacendestino` INTEGER NOT NULL,
    PRIMARY KEY (`idrequisiciondetalle`),
    INDEX `idrequisicion` (`idrequisicion`),
    INDEX `idproducto_requisiciondetalle_idx` (`idproducto`),
    CONSTRAINT `idproducto_requisiciondetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idrequisicion_requisiciondetalle`
        FOREIGN KEY (`idrequisicion`)
        REFERENCES `requisicion` (`idrequisicion`)
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
-- trabajadorpromedio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `trabajadorpromedio`;

CREATE TABLE `trabajadorpromedio`
(
    `idtrabajadorpromedio` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `trabajadorpromedio_anio` INTEGER NOT NULL,
    `trabajadorpromedio_mes` INTEGER NOT NULL,
    `trabajadorpromedio_empleados` FLOAT NOT NULL,
    PRIMARY KEY (`idtrabajadorpromedio`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idempresa_trabajadorpromedio`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_trabajadorpromedio`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
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
    `idrol` INTEGER NOT NULL,
    `usuario_nombre` VARCHAR(255) NOT NULL,
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

-- ---------------------------------------------------------------------
-- usuariosucursal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `usuariosucursal`;

CREATE TABLE `usuariosucursal`
(
    `idusuariosucursal` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    PRIMARY KEY (`idusuariosucursal`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idsucursal_usuariosucursal`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_usuariosucursal`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
