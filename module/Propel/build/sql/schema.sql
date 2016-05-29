
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- abonoproveedor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `abonoproveedor`;

CREATE TABLE `abonoproveedor`
(
    `idabonoproveedor` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idproveedor` INTEGER NOT NULL,
    `abonoproveedor_balance` DECIMAL(15,5) NOT NULL,
    PRIMARY KEY (`idabonoproveedor`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idproveedor` (`idproveedor`),
    CONSTRAINT `idempresa_abonoproveedor`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproveedor_abonoproveedor`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_abonoproveedor`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- abonoproveedordetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `abonoproveedordetalle`;

CREATE TABLE `abonoproveedordetalle`
(
    `idabonoproveedordetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idabonoproveedor` INTEGER NOT NULL,
    `idcuentabancaria` INTEGER,
    `idusuario` INTEGER NOT NULL,
    `abonoproveedordetalle_fechaabono` DATETIME NOT NULL,
    `abonoproveedordetalle_cantidad` DECIMAL(15,5) NOT NULL,
    `abonoproveedordetalle_tipo` enum('abono','egreso') NOT NULL,
    `abonoproveedordetalle_referencia` VARCHAR(255),
    `abonoproveedordetalle_comprobante` TEXT,
    `abonoproveedordetalle_mediodepago` enum('cheque','efectivo','transferencia') NOT NULL,
    `abonoproveedordetalle_chequecirculacion` TINYINT(1),
    `abonoproveedordetalle_fechacobrocheque` DATETIME,
    PRIMARY KEY (`idabonoproveedordetalle`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idcuentabancaria` (`idcuentabancaria`),
    INDEX `idabonoproveedor` (`idabonoproveedor`),
    CONSTRAINT `idabonoproveedor_abonoproveedordetalle`
        FOREIGN KEY (`idabonoproveedor`)
        REFERENCES `abonoproveedor` (`idabonoproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idcuentabancaria_abonoproveedordetalle`
        FOREIGN KEY (`idcuentabancaria`)
        REFERENCES `cuentabancaria` (`idcuentabancaria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_abonoproveedordetalle`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- almacen
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `almacen`;

CREATE TABLE `almacen`
(
    `idalmacen` INTEGER NOT NULL AUTO_INCREMENT,
    `idsucursal` INTEGER NOT NULL,
    `almacen_nombre` VARCHAR(255) NOT NULL,
    `almacen_encargado` VARCHAR(255),
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
    `idcategoriapadre` INTEGER,
    `categoria_almacenable` TINYINT(1),
    PRIMARY KEY (`idcategoria`),
    INDEX `idcategoriapadre` (`idcategoriapadre`),
    CONSTRAINT `idcategoriapadre_categoria`
        FOREIGN KEY (`idcategoriapadre`)
        REFERENCES `categoria` (`idcategoria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- codigobarras
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `codigobarras`;

CREATE TABLE `codigobarras`
(
    `idcodigobarras` INTEGER NOT NULL AUTO_INCREMENT,
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
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idproveedor` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER,
    `idalmacen` INTEGER,
    `compra_folio` VARCHAR(45) NOT NULL,
    `compra_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `compra_factura` TEXT,
    `compra_fechacreacion` DATETIME NOT NULL,
    `compra_fechacompra` DATETIME NOT NULL,
    `compra_fechaentrega` DATETIME,
    `compra_ieps` DECIMAL(15,5),
    `compra_iva` DECIMAL(15,5),
    `compra_subtotal` DECIMAL(15,5),
    `compra_total` DECIMAL(15,5),
    `compra_tipo` enum('ordecompra','compra','consignacion') NOT NULL,
    PRIMARY KEY (`idcompra`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idalmacen` (`idalmacen`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    INDEX `idproveedor` (`idproveedor`),
    CONSTRAINT `idalmacen_compra`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idauditor_compra`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_compra`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproveedor_compra`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_compra`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_compra`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
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
    `idalmacen` INTEGER,
    `compradetalle_cantidad` FLOAT NOT NULL,
    `compradetalle_precio` DECIMAL(15,5) NOT NULL,
    `compradetalle_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `compradetalle_costounitario` DECIMAL(15,5) NOT NULL,
    `compradetalle_costounitarioneto` DECIMAL(15,5),
    `compradetalle_descuento` FLOAT,
    `compradetalle_ieps` FLOAT,
    `compradetalle_subtotal` DECIMAL(15,5),
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
-- compranota
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `compranota`;

CREATE TABLE `compranota`
(
    `idcompranota` INTEGER NOT NULL AUTO_INCREMENT,
    `idcompra` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `compranota_nota` TEXT NOT NULL,
    `compranota_fecha` DATETIME NOT NULL,
    PRIMARY KEY (`idcompranota`),
    INDEX `idcompra` (`idcompra`),
    INDEX `idusuario` (`idusuario`),
    CONSTRAINT `idcompra_compranota`
        FOREIGN KEY (`idcompra`)
        REFERENCES `compra` (`idcompra`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_compranota`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conceptoingreso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conceptoingreso`;

CREATE TABLE `conceptoingreso`
(
    `idconceptoingreso` INTEGER NOT NULL AUTO_INCREMENT,
    `conceptoingreso_nombre` VARCHAR(255) NOT NULL,
    `conceptoingreso_descripcion` TEXT,
    PRIMARY KEY (`idconceptoingreso`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- conceptosalida
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `conceptosalida`;

CREATE TABLE `conceptosalida`
(
    `idconceptosalida` INTEGER NOT NULL AUTO_INCREMENT,
    `conceptosalida_nombre` VARCHAR(255) NOT NULL,
    `almacenorigen` VARCHAR(45) NOT NULL,
    `almacendestino` VARCHAR(45) NOT NULL,
    `mismasucursal` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idconceptosalida`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cuentabancaria
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cuentabancaria`;

CREATE TABLE `cuentabancaria`
(
    `idcuentabancaria` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `cuentabancaria_banco` VARCHAR(255) NOT NULL,
    `cuentabancaria_nocuenta` VARCHAR(45) NOT NULL,
    `cuentabancaria_balance` DECIMAL(15,5),
    PRIMARY KEY (`idcuentabancaria`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idempresa_cuentabancaria`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_cuentabancaria`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- cuentaporcobrar
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `cuentaporcobrar`;

CREATE TABLE `cuentaporcobrar`
(
    `idcuentaporcobrar` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `cuentaporcobrar_cantidad` DECIMAL(15,5),
    `cuentaporcobrar_cliente` VARCHAR(255),
    `cuentaporcobrar_fecha` DATETIME,
    `cuentaporcobrar_nota` TEXT,
    PRIMARY KEY (`idcuentaporcobrar`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idusuario` (`idusuario`),
    CONSTRAINT `idempresa_cuentaporcobrar`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_cuentaporcobrar`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_cuentaporcobrar`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- devolucion
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `devolucion`;

CREATE TABLE `devolucion`
(
    `iddevolucion` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER,
    `idalmacen` INTEGER NOT NULL,
    `idproveedor` INTEGER NOT NULL,
    `devolucion_folio` VARCHAR(10) NOT NULL,
    `devolucion_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `devolucion_factura` TEXT,
    `devolucion_fechacreacion` DATETIME,
    `devolucion_fechadevolucion` DATETIME,
    `devolucion_ieps` DECIMAL(10,5),
    `devolucion_iva` DECIMAL(10,5),
    `devolucion_total` DECIMAL(10,5),
    `devolucion_subtotal` DECIMAL(15,5),
    PRIMARY KEY (`iddevolucion`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    INDEX `idalmacen` (`idalmacen`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idproveedor` (`idproveedor`),
    CONSTRAINT `idalmacen_devolucion`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idauditor_devolucion`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_devolucion`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproveedor_devolucion`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_devolucion`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_devolucion`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- devoluciondetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `devoluciondetalle`;

CREATE TABLE `devoluciondetalle`
(
    `iddevoluciondetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `iddevolucion` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `idalmacen` INTEGER NOT NULL,
    `devoluciondetalle_cantidad` FLOAT NOT NULL,
    `devoluciondetalle_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `devoluciondetalle_subtotal` DECIMAL(15,5),
    `devoluciondetalle_ieps` FLOAT,
    `devoluciondetalle_descuento` FLOAT,
    `devoluciondetalle_costounitario` DECIMAL(15,5) NOT NULL,
    `devoluciondetalle_costounitarioneto` DECIMAL(15,5),
    PRIMARY KEY (`iddevoluciondetalle`),
    INDEX `iddevolucion` (`iddevolucion`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idalmacen` (`idalmacen`),
    CONSTRAINT `idalmacen_devoluciondetalle`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `iddevolucion_devoluciondetalle`
        FOREIGN KEY (`iddevolucion`)
        REFERENCES `devolucion` (`iddevolucion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_devoluciondetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- devolucionnota
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `devolucionnota`;

CREATE TABLE `devolucionnota`
(
    `iddevolucionnota` INTEGER NOT NULL AUTO_INCREMENT,
    `iddevolucion` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `devolucionnota_nota` TEXT NOT NULL,
    `devolucionnota_fecha` DATETIME NOT NULL,
    PRIMARY KEY (`iddevolucionnota`),
    INDEX `iddevolucion` (`iddevolucion`),
    INDEX `idusuario` (`idusuario`),
    CONSTRAINT `iddevolucion_devolucionnota`
        FOREIGN KEY (`iddevolucion`)
        REFERENCES `devolucion` (`iddevolucion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_devolucionnota`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
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
    `empresa_estatus` TINYINT(1) DEFAULT 1,
    `empresa_administracion` TINYINT(1),
    PRIMARY KEY (`idempresa`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- flujoefectivo
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `flujoefectivo`;

CREATE TABLE `flujoefectivo`
(
    `idflujoefectivo` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `flujoefectivo_origen` enum('cuentaporcobrar','ingreso','compra') NOT NULL,
    `idcuentaporcobrar` INTEGER,
    `idcompra` INTEGER,
    `idingreso` INTEGER,
    `ingresorubro` enum('alimentos','bebidas','miscelanea'),
    `flujoefectivo_pago` enum('cuenta','abono','bonificacion') NOT NULL,
    `idproveedor` INTEGER,
    `idcuentabancaria` INTEGER,
    `flujoefectivo_cantidad` DECIMAL(15,5) NOT NULL,
    `flujoefectivo_fecha` DATETIME NOT NULL,
    `flujoefectivo_referencia` TEXT NOT NULL,
    `flujoefectivo_comprobante` TEXT,
    `flujoefectivo_mediodepago` enum('cheque','efectivo','transferencia','abono') NOT NULL,
    `flujoefectivo_tipo` enum('ingreso','egreso') NOT NULL,
    `flujoefectivo_chequecirculacion` TINYINT(1),
    `flujoefectivo_fechacobrocheque` DATETIME,
    PRIMARY KEY (`idflujoefectivo`),
    INDEX `idcuentabancaria` (`idcuentabancaria`),
    INDEX `idproveedor` (`idproveedor`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idingreso` (`idingreso`),
    INDEX `idcompra` (`idcompra`),
    INDEX `idcuentaporcobrar` (`idcuentaporcobrar`),
    CONSTRAINT `idcompra_flujoefectivo`
        FOREIGN KEY (`idcompra`)
        REFERENCES `compra` (`idcompra`),
    CONSTRAINT `idcuentabancaria_flujoefectivo`
        FOREIGN KEY (`idcuentabancaria`)
        REFERENCES `cuentabancaria` (`idcuentabancaria`),
    CONSTRAINT `idcuentaporcobrar_flujoefectivo`
        FOREIGN KEY (`idcuentaporcobrar`)
        REFERENCES `cuentaporcobrar` (`idcuentaporcobrar`),
    CONSTRAINT `idempresa_flujoefectivo`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`),
    CONSTRAINT `idingreso_flujoefectivo`
        FOREIGN KEY (`idingreso`)
        REFERENCES `ingreso` (`idingreso`),
    CONSTRAINT `idproveedor_flujoefectivo`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`),
    CONSTRAINT `idsucursal_flujoefectivo`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`),
    CONSTRAINT `idusuario_flujoefectivo`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ingreso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ingreso`;

CREATE TABLE `ingreso`
(
    `idingreso` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER,
    `ingreso_folio` VARCHAR(10) NOT NULL,
    `ingreso_revisada` TINYINT(1) NOT NULL,
    `ingreso_totalalimento` DECIMAL(15,5) NOT NULL,
    `ingreso_totalbebida` DECIMAL(15,5) NOT NULL,
    `ingreso_totalmiscelanea` DECIMAL(15,5) NOT NULL,
    `ingreso_fecha` DATETIME NOT NULL,
    `ingreso_fechacreacion` DATETIME NOT NULL,
    PRIMARY KEY (`idingreso`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    CONSTRAINT `idauditor_ingreso`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_ingreso`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_ingreso`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_ingreso`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ingresodetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ingresodetalle`;

CREATE TABLE `ingresodetalle`
(
    `idingresodetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idingreso` INTEGER NOT NULL,
    `idrubroingreso` INTEGER NOT NULL,
    `idconceptoingreso` INTEGER NOT NULL,
    `ingresodetalle_sub` DECIMAL(15,5),
    `ingresodetalle_IVA` DECIMAL(15,5),
    `ingresodetalle_total` DECIMAL(15,5),
    `ingresodetalle_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`idingresodetalle`),
    INDEX `idingreso` (`idingreso`),
    INDEX `idconceptoingreso` (`idconceptoingreso`),
    INDEX `idrubroingreso` (`idrubroingreso`),
    CONSTRAINT `idconceptoingreso_ingresodetalle`
        FOREIGN KEY (`idconceptoingreso`)
        REFERENCES `conceptoingreso` (`idconceptoingreso`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idingreso_ingresodetalle`
        FOREIGN KEY (`idingreso`)
        REFERENCES `ingreso` (`idingreso`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idrubroingreso_ingresodetalle`
        FOREIGN KEY (`idrubroingreso`)
        REFERENCES `rubroingreso` (`idrubroingreso`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- inventariomes
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `inventariomes`;

CREATE TABLE `inventariomes`
(
    `idinventariomes` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idalmacen` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER,
    `inventariomes_fecha` DATE NOT NULL,
    `inventariomes_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`idinventariomes`),
    INDEX `idauditor` (`idauditor`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idalmacen` (`idalmacen`),
    INDEX `idusuario` (`idusuario`),
    CONSTRAINT `idalmacen_inventariomes`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idauditor_inventariomes`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_inventariomes`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_inventariomes`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_inventariomes`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
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
-- notacredito
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `notacredito`;

CREATE TABLE `notacredito`
(
    `idnotacredito` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idproveedor` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER,
    `idalmacen` INTEGER NOT NULL,
    `notacredito_folio` VARCHAR(10) NOT NULL,
    `notacredito_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `notacredito_factura` TEXT,
    `notacredito_fechacreacion` DATETIME NOT NULL,
    `notacredito_fechanotacredito` DATETIME,
    `notacredito_ieps` DECIMAL(15,5),
    `notacredito_iva` DECIMAL(15,5),
    `notacredito_total` DECIMAL(15,5),
    `notacredito_subtotal` DECIMAL(15,5),
    PRIMARY KEY (`idnotacredito`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    INDEX `idalmacen` (`idalmacen`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idproveedor` (`idproveedor`),
    CONSTRAINT `idalmacen_notacredito`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idauditor_notacredito`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_notacredito`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproveedor_notacredito`
        FOREIGN KEY (`idproveedor`)
        REFERENCES `proveedor` (`idproveedor`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_notacredito`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_notacredito`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- notacreditodetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `notacreditodetalle`;

CREATE TABLE `notacreditodetalle`
(
    `idnotacreditodetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idnotacredito` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `idalmacen` INTEGER NOT NULL,
    `notacreditodetalle_cantidad` FLOAT NOT NULL,
    `notacreditodetalle_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `notacreditodetalle_ieps` FLOAT,
    `notacreditodetalle_descuento` FLOAT,
    `notacreditodetalle_subtotal` DECIMAL(15,5),
    `notacreditodetalle_costounitario` DECIMAL(15,5),
    `notacreditodetalle_costounitarioneto` DECIMAL(15,5),
    PRIMARY KEY (`idnotacreditodetalle`),
    INDEX `idnotacredito` (`idnotacredito`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idalmacen` (`idalmacen`),
    CONSTRAINT `idalmacen_notacreditodetalle`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idnotacredito_notacreditodetalle`
        FOREIGN KEY (`idnotacredito`)
        REFERENCES `notacredito` (`idnotacredito`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_notacreditodetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- notacreditonota
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `notacreditonota`;

CREATE TABLE `notacreditonota`
(
    `idnotacreditonota` INTEGER NOT NULL AUTO_INCREMENT,
    `idnotacredito` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `notacreditonota_nota` TEXT NOT NULL,
    PRIMARY KEY (`idnotacreditonota`),
    INDEX `idnotacredito` (`idnotacredito`),
    INDEX `idusuario` (`idusuario`),
    CONSTRAINT `idnotacredito_notacreditonota`
        FOREIGN KEY (`idnotacredito`)
        REFERENCES `notacredito` (`idnotacredito`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_notacreditonota`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ordentablajeria
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ordentablajeria`;

CREATE TABLE `ordentablajeria`
(
    `idordentablajeria` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idalmacenorigen` INTEGER NOT NULL,
    `idalmacendestino` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER,
    `idproducto` INTEGER NOT NULL,
    `ordentablajeria_esporcion` TINYINT(1) NOT NULL,
    `ordentablajeria_numeroporciones` FLOAT,
    `ordentablajeria_pesobruto` FLOAT NOT NULL,
    `ordentablajeria_preciokilo` DECIMAL(15,5) NOT NULL,
    `ordentablajeria_totalbruto` DECIMAL(15,5),
    `ordentablajeria_pesoneto` FLOAT NOT NULL,
    `ordentablajeria_precioneto` DECIMAL(15,5) NOT NULL,
    `ordentablajeria_inyeccion` FLOAT,
    `ordentablajeria_merma` FLOAT NOT NULL,
    `ordentablajeria_aprovechamiento` FLOAT NOT NULL,
    `ordentablajeria_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `ordentablajeria_folio` VARCHAR(10) NOT NULL,
    `ordentablajeria_fecha` DATETIME NOT NULL,
    `ordentablajeria_fechacreacion` DATETIME NOT NULL,
    `ordentablajeria_pesoporcion` FLOAT,
    PRIMARY KEY (`idordentablajeria`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idalmacenorigen` (`idalmacenorigen`),
    INDEX `idalmacendestino` (`idalmacendestino`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    CONSTRAINT `idalmacendestino_ordentablajeria`
        FOREIGN KEY (`idalmacendestino`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idalmacenorigen_ordentablajeria`
        FOREIGN KEY (`idalmacenorigen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idauditor_ordentablajeria`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_ordentablajeria`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_ordentablajeria`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_ordentablajeria`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_ordentablajeria`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ordentablajeriadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ordentablajeriadetalle`;

CREATE TABLE `ordentablajeriadetalle`
(
    `idordentablajeriadetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idordentablajeria` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `ordentablajeriadetalle_cantidad` FLOAT NOT NULL,
    `ordentablajeriadetalle_pesoporcion` FLOAT NOT NULL,
    `ordentablajeriadetalle_precioporcion` DECIMAL(15,5) NOT NULL,
    `ordentablajeriadetalle_pesototal` FLOAT NOT NULL,
    `ordentablajeriadetalle_subtotal` DECIMAL(15,5) NOT NULL,
    `ordentablajeriadetalle_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    PRIMARY KEY (`idordentablajeriadetalle`),
    INDEX `idordentablajeria` (`idordentablajeria`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idordentablajeria_ordentablajeriadetalle`
        FOREIGN KEY (`idordentablajeria`)
        REFERENCES `ordentablajeria` (`idordentablajeria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_ordentablajeriadetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ordentablajerianota
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ordentablajerianota`;

CREATE TABLE `ordentablajerianota`
(
    `idordentablajerianota` INTEGER NOT NULL AUTO_INCREMENT,
    `idusuario` INTEGER NOT NULL,
    `idordentablajeria` INTEGER NOT NULL,
    `ordentablajerianota_nota` TEXT NOT NULL,
    `ordentablajerianota_fecha` DATETIME NOT NULL,
    PRIMARY KEY (`idordentablajerianota`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idordentablajeria` (`idordentablajeria`),
    CONSTRAINT `idordentablajeria_ordentablajerianota`
        FOREIGN KEY (`idordentablajeria`)
        REFERENCES `ordentablajeria` (`idordentablajeria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_ordentablajerianota`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- plantillatablajeria
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `plantillatablajeria`;

CREATE TABLE `plantillatablajeria`
(
    `idplantillatablajeria` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `plantillatablajeria_nombre` VARCHAR(255) NOT NULL,
    `plantillatablajeria_descripcion` TEXT,
    PRIMARY KEY (`idplantillatablajeria`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idempresa_plantillatablajeria`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_plantillatablejeria`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- plantillatablajeriadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `plantillatablajeriadetalle`;

CREATE TABLE `plantillatablajeriadetalle`
(
    `idplantillatablajeriadetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idplantillatablajeria` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    PRIMARY KEY (`idplantillatablajeriadetalle`),
    INDEX `idplantillatablajeria` (`idplantillatablajeria`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idplantillatablajeria_plantillatablajeriadetalle`
        FOREIGN KEY (`idplantillatablajeria`)
        REFERENCES `plantillatablajeria` (`idplantillatablajeria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_plantillatablajeriadetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
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
    `idempresa` INTEGER NOT NULL,
    `idunidadmedida` INTEGER NOT NULL,
    `producto_nombre` TEXT NOT NULL,
    `idcategoria` INTEGER,
    `idsubcategoria` INTEGER,
    `producto_rendimiento` FLOAT,
    `producto_ultimocosto` FLOAT,
    `producto_baja` TINYINT(1) DEFAULT 0 NOT NULL,
    `producto_tipo` enum('simple','subreceta','plu') NOT NULL,
    `producto_costo` FLOAT,
    `producto_iva` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idproducto`),
    INDEX `idunidadmedida` (`idunidadmedida`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsubcategoria` (`idsubcategoria`),
    INDEX `idcategoria` (`idcategoria`),
    CONSTRAINT `idcategoria_producto`
        FOREIGN KEY (`idcategoria`)
        REFERENCES `categoria` (`idcategoria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_producto`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsubcategoria_producto`
        FOREIGN KEY (`idsubcategoria`)
        REFERENCES `categoria` (`idcategoria`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idunidadmedida_producto`
        FOREIGN KEY (`idunidadmedida`)
        REFERENCES `unidadmedida` (`idunidadmedida`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- productosucursalalmacen
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `productosucursalalmacen`;

CREATE TABLE `productosucursalalmacen`
(
    `idproductosucursalalmacen` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idalmacen` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    PRIMARY KEY (`idproductosucursalalmacen`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idalmacen` (`idalmacen`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idalmacen_productosucursalalmacen`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_productosucursalalmacen`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_productosucursalalmacen`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_productosucursalalmacen`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- proveedor
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `proveedor`;

CREATE TABLE `proveedor`
(
    `idproveedor` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
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
    `proveedor_codigopostal` VARCHAR(45),
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
    `idreceta` INTEGER NOT NULL AUTO_INCREMENT,
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
    `idsucursalorigen` INTEGER NOT NULL,
    `idalmacenorigen` INTEGER NOT NULL,
    `idsucursaldestino` INTEGER NOT NULL,
    `idalmacendestino` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER,
    `idconceptosalida` INTEGER NOT NULL,
    `requisicion_fecha` DATETIME NOT NULL,
    `requisicion_fechacreacion` DATETIME NOT NULL,
    `requisicion_revisada` TINYINT(1) NOT NULL,
    `requisicion_folio` VARCHAR(10) NOT NULL,
    `requisicion_total` DECIMAL(15,5),
    PRIMARY KEY (`idrequisicion`),
    INDEX `idconceptosalida` (`idconceptosalida`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursalorigen` (`idsucursalorigen`),
    INDEX `idalmacenorigen` (`idalmacenorigen`),
    INDEX `idalmacendestino` (`idalmacendestino`),
    INDEX `idsucursaldestino` (`idsucursaldestino`),
    CONSTRAINT `idalmacendestino_requisicion`
        FOREIGN KEY (`idalmacendestino`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idalmacenorigen_requisicion`
        FOREIGN KEY (`idalmacenorigen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
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
    CONSTRAINT `idsucursaldestino_requisicion`
        FOREIGN KEY (`idsucursaldestino`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursalorigen_requisicion`
        FOREIGN KEY (`idsucursalorigen`)
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
    `requisiciondetalle_preciounitario` DECIMAL(15,5) NOT NULL,
    `requisiciondetalle_subtotal` DECIMAL(15,5) NOT NULL,
    `idpadre` INTEGER,
    PRIMARY KEY (`idrequisiciondetalle`),
    INDEX `idrequisicion` (`idrequisicion`),
    INDEX `idproducto` (`idproducto`),
    INDEX `idpadre` (`idpadre`),
    CONSTRAINT `idpadre_requisiciondetalle`
        FOREIGN KEY (`idpadre`)
        REFERENCES `requisiciondetalle` (`idrequisiciondetalle`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
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
-- requisicionnota
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `requisicionnota`;

CREATE TABLE `requisicionnota`
(
    `idrequisicionnota` INTEGER NOT NULL AUTO_INCREMENT,
    `idrequisicion` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `requisicionnota_nota` TEXT NOT NULL,
    `requisicionnota_fecha` DATETIME NOT NULL,
    PRIMARY KEY (`idrequisicionnota`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idrequisicion` (`idrequisicion`),
    CONSTRAINT `idrequisicion_requisicionnota`
        FOREIGN KEY (`idrequisicion`)
        REFERENCES `requisicion` (`idrequisicion`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_requisicionnota`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
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
    `rol_nombre` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`idrol`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- rubroingreso
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `rubroingreso`;

CREATE TABLE `rubroingreso`
(
    `idrubroingreso` INTEGER NOT NULL AUTO_INCREMENT,
    `rubroingreso_nombre` VARCHAR(255) NOT NULL,
    `rubroingreso_descripcion` TEXT,
    PRIMARY KEY (`idrubroingreso`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- sucursal
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `sucursal`;

CREATE TABLE `sucursal`
(
    `idsucursal` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `sucursal_nombre` VARCHAR(45) NOT NULL,
    `sucursal_habilitarproductos` TINYINT(1) DEFAULT 1 NOT NULL,
    `sucursal_habilitarrecetas` TINYINT(1) DEFAULT 1 NOT NULL,
    `sucursal_estatus` TINYINT(1) DEFAULT 1 NOT NULL,
    `sucursal_anioactivo` INTEGER NOT NULL,
    `sucursal_mesactivo` INTEGER NOT NULL,
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
-- trabajadorespromedio
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `trabajadorespromedio`;

CREATE TABLE `trabajadorespromedio`
(
    `idtrabajadorespromedio` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `trabajadorespromedio_anio` INTEGER NOT NULL,
    `trabajadorespromedio_mes` INTEGER NOT NULL,
    `trabajadorespromedio_cantidad` FLOAT NOT NULL,
    PRIMARY KEY (`idtrabajadorespromedio`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    CONSTRAINT `idempresa_trabajadorespromedio`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_trabajadorespromedio`
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

-- ---------------------------------------------------------------------
-- venta
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `venta`;

CREATE TABLE `venta`
(
    `idventa` INTEGER NOT NULL AUTO_INCREMENT,
    `idempresa` INTEGER NOT NULL,
    `idsucursal` INTEGER NOT NULL,
    `idusuario` INTEGER NOT NULL,
    `idauditor` INTEGER NOT NULL,
    `venta_revisada` TINYINT(1) DEFAULT 0 NOT NULL,
    `venta_fechaventa` DATETIME NOT NULL,
    `venta_fechacreacion` DATETIME NOT NULL,
    `venta_total` DECIMAL(15,5) NOT NULL,
    PRIMARY KEY (`idventa`),
    INDEX `idempresa` (`idempresa`),
    INDEX `idsucursal` (`idsucursal`),
    INDEX `idusuario` (`idusuario`),
    INDEX `idauditor` (`idauditor`),
    CONSTRAINT `idauditor_venta`
        FOREIGN KEY (`idauditor`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idempresa_venta`
        FOREIGN KEY (`idempresa`)
        REFERENCES `empresa` (`idempresa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idsucursal_venta`
        FOREIGN KEY (`idsucursal`)
        REFERENCES `sucursal` (`idsucursal`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idusuario_venta`
        FOREIGN KEY (`idusuario`)
        REFERENCES `usuario` (`idusuario`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- ventadetalle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ventadetalle`;

CREATE TABLE `ventadetalle`
(
    `idventadetalle` INTEGER NOT NULL AUTO_INCREMENT,
    `idventa` INTEGER NOT NULL,
    `idalmacen` INTEGER NOT NULL,
    `idproducto` INTEGER NOT NULL,
    `ventadetalle_cantidad` FLOAT NOT NULL,
    `ventadetalle_subtotal` DECIMAL(15,5) NOT NULL,
    `idpadre` INTEGER,
    `ventadetalle_revisada` TINYINT(1) NOT NULL,
    PRIMARY KEY (`idventadetalle`),
    INDEX `idventa` (`idventa`),
    INDEX `idpadre` (`idpadre`),
    INDEX `idalmacen` (`idalmacen`),
    INDEX `idproducto` (`idproducto`),
    CONSTRAINT `idalmacen_ventadetalle`
        FOREIGN KEY (`idalmacen`)
        REFERENCES `almacen` (`idalmacen`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idpadre_ventadetalle`
        FOREIGN KEY (`idpadre`)
        REFERENCES `ventadetalle` (`idventadetalle`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idproducto_ventadetalle`
        FOREIGN KEY (`idproducto`)
        REFERENCES `producto` (`idproducto`)
        ON UPDATE CASCADE
        ON DELETE CASCADE,
    CONSTRAINT `idventa_ventadetalle`
        FOREIGN KEY (`idventa`)
        REFERENCES `venta` (`idventa`)
        ON UPDATE CASCADE
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
