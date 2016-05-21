<?php


/**
 * Base static class for performing query and update operations on the 'flujoefectivo' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseFlujoefectivoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'flujoefectivo';

    /** the related Propel class for this table */
    const OM_CLASS = 'Flujoefectivo';

    /** the related TableMap class for this table */
    const TM_CLASS = 'FlujoefectivoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the idflujoefectivo field */
    const IDFLUJOEFECTIVO = 'flujoefectivo.idflujoefectivo';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'flujoefectivo.idempresa';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'flujoefectivo.idsucursal';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'flujoefectivo.idusuario';

    /** the column name for the flujoefectivo_origen field */
    const FLUJOEFECTIVO_ORIGEN = 'flujoefectivo.flujoefectivo_origen';

    /** the column name for the idcuentaporcobrar field */
    const IDCUENTAPORCOBRAR = 'flujoefectivo.idcuentaporcobrar';

    /** the column name for the idcompra field */
    const IDCOMPRA = 'flujoefectivo.idcompra';

    /** the column name for the idingreso field */
    const IDINGRESO = 'flujoefectivo.idingreso';

    /** the column name for the ingresorubro field */
    const INGRESORUBRO = 'flujoefectivo.ingresorubro';

    /** the column name for the flujoefectivo_pago field */
    const FLUJOEFECTIVO_PAGO = 'flujoefectivo.flujoefectivo_pago';

    /** the column name for the idproveedor field */
    const IDPROVEEDOR = 'flujoefectivo.idproveedor';

    /** the column name for the idcuentabancaria field */
    const IDCUENTABANCARIA = 'flujoefectivo.idcuentabancaria';

    /** the column name for the flujoefectivo_cantidad field */
    const FLUJOEFECTIVO_CANTIDAD = 'flujoefectivo.flujoefectivo_cantidad';

    /** the column name for the flujoefectivo_fecha field */
    const FLUJOEFECTIVO_FECHA = 'flujoefectivo.flujoefectivo_fecha';

    /** the column name for the flujoefectivo_referencia field */
    const FLUJOEFECTIVO_REFERENCIA = 'flujoefectivo.flujoefectivo_referencia';

    /** the column name for the flujoefectivo_comprobante field */
    const FLUJOEFECTIVO_COMPROBANTE = 'flujoefectivo.flujoefectivo_comprobante';

    /** the column name for the flujoefectivo_mediodepago field */
    const FLUJOEFECTIVO_MEDIODEPAGO = 'flujoefectivo.flujoefectivo_mediodepago';

    /** the column name for the flujoefectivo_tipo field */
    const FLUJOEFECTIVO_TIPO = 'flujoefectivo.flujoefectivo_tipo';

    /** the column name for the flujoefectivo_chequecirculacion field */
    const FLUJOEFECTIVO_CHEQUECIRCULACION = 'flujoefectivo.flujoefectivo_chequecirculacion';

    /** the column name for the flujoefectivo_fechacobrocheque field */
    const FLUJOEFECTIVO_FECHACOBROCHEQUE = 'flujoefectivo.flujoefectivo_fechacobrocheque';

    /** The enumerated values for the flujoefectivo_origen field */
    const FLUJOEFECTIVO_ORIGEN_CUENTAPORCOBRAR = 'cuentaporcobrar';
    const FLUJOEFECTIVO_ORIGEN_INGRESO = 'ingreso';
    const FLUJOEFECTIVO_ORIGEN_COMPRA = 'compra';

    /** The enumerated values for the ingresorubro field */
    const INGRESORUBRO_ALIMENTOS = 'alimentos';
    const INGRESORUBRO_BEBIDAS = 'bebidas';
    const INGRESORUBRO_MISCELANEA = 'miscelanea';

    /** The enumerated values for the flujoefectivo_pago field */
    const FLUJOEFECTIVO_PAGO_CUENTA = 'cuenta';
    const FLUJOEFECTIVO_PAGO_ABONO = 'abono';
    const FLUJOEFECTIVO_PAGO_BONIFICACION = 'bonificacion';

    /** The enumerated values for the flujoefectivo_mediodepago field */
    const FLUJOEFECTIVO_MEDIODEPAGO_CHEQUE = 'cheque';
    const FLUJOEFECTIVO_MEDIODEPAGO_EFECTIVO = 'efectivo';
    const FLUJOEFECTIVO_MEDIODEPAGO_TRANSFERENCIA = 'transferencia';
    const FLUJOEFECTIVO_MEDIODEPAGO_ABONO = 'abono';

    /** The enumerated values for the flujoefectivo_tipo field */
    const FLUJOEFECTIVO_TIPO_INGRESO = 'ingreso';
    const FLUJOEFECTIVO_TIPO_EGRESO = 'egreso';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Flujoefectivo objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Flujoefectivo[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. FlujoefectivoPeer::$fieldNames[FlujoefectivoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idflujoefectivo', 'Idempresa', 'Idsucursal', 'Idusuario', 'FlujoefectivoOrigen', 'Idcuentaporcobrar', 'Idcompra', 'Idingreso', 'Ingresorubro', 'FlujoefectivoPago', 'Idproveedor', 'Idcuentabancaria', 'FlujoefectivoCantidad', 'FlujoefectivoFecha', 'FlujoefectivoReferencia', 'FlujoefectivoComprobante', 'FlujoefectivoMediodepago', 'FlujoefectivoTipo', 'FlujoefectivoChequecirculacion', 'FlujoefectivoFechacobrocheque', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idflujoefectivo', 'idempresa', 'idsucursal', 'idusuario', 'flujoefectivoOrigen', 'idcuentaporcobrar', 'idcompra', 'idingreso', 'ingresorubro', 'flujoefectivoPago', 'idproveedor', 'idcuentabancaria', 'flujoefectivoCantidad', 'flujoefectivoFecha', 'flujoefectivoReferencia', 'flujoefectivoComprobante', 'flujoefectivoMediodepago', 'flujoefectivoTipo', 'flujoefectivoChequecirculacion', 'flujoefectivoFechacobrocheque', ),
        BasePeer::TYPE_COLNAME => array (FlujoefectivoPeer::IDFLUJOEFECTIVO, FlujoefectivoPeer::IDEMPRESA, FlujoefectivoPeer::IDSUCURSAL, FlujoefectivoPeer::IDUSUARIO, FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN, FlujoefectivoPeer::IDCUENTAPORCOBRAR, FlujoefectivoPeer::IDCOMPRA, FlujoefectivoPeer::IDINGRESO, FlujoefectivoPeer::INGRESORUBRO, FlujoefectivoPeer::FLUJOEFECTIVO_PAGO, FlujoefectivoPeer::IDPROVEEDOR, FlujoefectivoPeer::IDCUENTABANCARIA, FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD, FlujoefectivoPeer::FLUJOEFECTIVO_FECHA, FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA, FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE, FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO, FlujoefectivoPeer::FLUJOEFECTIVO_TIPO, FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION, FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDFLUJOEFECTIVO', 'IDEMPRESA', 'IDSUCURSAL', 'IDUSUARIO', 'FLUJOEFECTIVO_ORIGEN', 'IDCUENTAPORCOBRAR', 'IDCOMPRA', 'IDINGRESO', 'INGRESORUBRO', 'FLUJOEFECTIVO_PAGO', 'IDPROVEEDOR', 'IDCUENTABANCARIA', 'FLUJOEFECTIVO_CANTIDAD', 'FLUJOEFECTIVO_FECHA', 'FLUJOEFECTIVO_REFERENCIA', 'FLUJOEFECTIVO_COMPROBANTE', 'FLUJOEFECTIVO_MEDIODEPAGO', 'FLUJOEFECTIVO_TIPO', 'FLUJOEFECTIVO_CHEQUECIRCULACION', 'FLUJOEFECTIVO_FECHACOBROCHEQUE', ),
        BasePeer::TYPE_FIELDNAME => array ('idflujoefectivo', 'idempresa', 'idsucursal', 'idusuario', 'flujoefectivo_origen', 'idcuentaporcobrar', 'idcompra', 'idingreso', 'ingresorubro', 'flujoefectivo_pago', 'idproveedor', 'idcuentabancaria', 'flujoefectivo_cantidad', 'flujoefectivo_fecha', 'flujoefectivo_referencia', 'flujoefectivo_comprobante', 'flujoefectivo_mediodepago', 'flujoefectivo_tipo', 'flujoefectivo_chequecirculacion', 'flujoefectivo_fechacobrocheque', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. FlujoefectivoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idflujoefectivo' => 0, 'Idempresa' => 1, 'Idsucursal' => 2, 'Idusuario' => 3, 'FlujoefectivoOrigen' => 4, 'Idcuentaporcobrar' => 5, 'Idcompra' => 6, 'Idingreso' => 7, 'Ingresorubro' => 8, 'FlujoefectivoPago' => 9, 'Idproveedor' => 10, 'Idcuentabancaria' => 11, 'FlujoefectivoCantidad' => 12, 'FlujoefectivoFecha' => 13, 'FlujoefectivoReferencia' => 14, 'FlujoefectivoComprobante' => 15, 'FlujoefectivoMediodepago' => 16, 'FlujoefectivoTipo' => 17, 'FlujoefectivoChequecirculacion' => 18, 'FlujoefectivoFechacobrocheque' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idflujoefectivo' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idusuario' => 3, 'flujoefectivoOrigen' => 4, 'idcuentaporcobrar' => 5, 'idcompra' => 6, 'idingreso' => 7, 'ingresorubro' => 8, 'flujoefectivoPago' => 9, 'idproveedor' => 10, 'idcuentabancaria' => 11, 'flujoefectivoCantidad' => 12, 'flujoefectivoFecha' => 13, 'flujoefectivoReferencia' => 14, 'flujoefectivoComprobante' => 15, 'flujoefectivoMediodepago' => 16, 'flujoefectivoTipo' => 17, 'flujoefectivoChequecirculacion' => 18, 'flujoefectivoFechacobrocheque' => 19, ),
        BasePeer::TYPE_COLNAME => array (FlujoefectivoPeer::IDFLUJOEFECTIVO => 0, FlujoefectivoPeer::IDEMPRESA => 1, FlujoefectivoPeer::IDSUCURSAL => 2, FlujoefectivoPeer::IDUSUARIO => 3, FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN => 4, FlujoefectivoPeer::IDCUENTAPORCOBRAR => 5, FlujoefectivoPeer::IDCOMPRA => 6, FlujoefectivoPeer::IDINGRESO => 7, FlujoefectivoPeer::INGRESORUBRO => 8, FlujoefectivoPeer::FLUJOEFECTIVO_PAGO => 9, FlujoefectivoPeer::IDPROVEEDOR => 10, FlujoefectivoPeer::IDCUENTABANCARIA => 11, FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD => 12, FlujoefectivoPeer::FLUJOEFECTIVO_FECHA => 13, FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA => 14, FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE => 15, FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO => 16, FlujoefectivoPeer::FLUJOEFECTIVO_TIPO => 17, FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION => 18, FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDFLUJOEFECTIVO' => 0, 'IDEMPRESA' => 1, 'IDSUCURSAL' => 2, 'IDUSUARIO' => 3, 'FLUJOEFECTIVO_ORIGEN' => 4, 'IDCUENTAPORCOBRAR' => 5, 'IDCOMPRA' => 6, 'IDINGRESO' => 7, 'INGRESORUBRO' => 8, 'FLUJOEFECTIVO_PAGO' => 9, 'IDPROVEEDOR' => 10, 'IDCUENTABANCARIA' => 11, 'FLUJOEFECTIVO_CANTIDAD' => 12, 'FLUJOEFECTIVO_FECHA' => 13, 'FLUJOEFECTIVO_REFERENCIA' => 14, 'FLUJOEFECTIVO_COMPROBANTE' => 15, 'FLUJOEFECTIVO_MEDIODEPAGO' => 16, 'FLUJOEFECTIVO_TIPO' => 17, 'FLUJOEFECTIVO_CHEQUECIRCULACION' => 18, 'FLUJOEFECTIVO_FECHACOBROCHEQUE' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('idflujoefectivo' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idusuario' => 3, 'flujoefectivo_origen' => 4, 'idcuentaporcobrar' => 5, 'idcompra' => 6, 'idingreso' => 7, 'ingresorubro' => 8, 'flujoefectivo_pago' => 9, 'idproveedor' => 10, 'idcuentabancaria' => 11, 'flujoefectivo_cantidad' => 12, 'flujoefectivo_fecha' => 13, 'flujoefectivo_referencia' => 14, 'flujoefectivo_comprobante' => 15, 'flujoefectivo_mediodepago' => 16, 'flujoefectivo_tipo' => 17, 'flujoefectivo_chequecirculacion' => 18, 'flujoefectivo_fechacobrocheque' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN => array(
            FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN_CUENTAPORCOBRAR,
            FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN_INGRESO,
            FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN_COMPRA,
        ),
        FlujoefectivoPeer::INGRESORUBRO => array(
            FlujoefectivoPeer::INGRESORUBRO_ALIMENTOS,
            FlujoefectivoPeer::INGRESORUBRO_BEBIDAS,
            FlujoefectivoPeer::INGRESORUBRO_MISCELANEA,
        ),
        FlujoefectivoPeer::FLUJOEFECTIVO_PAGO => array(
            FlujoefectivoPeer::FLUJOEFECTIVO_PAGO_CUENTA,
            FlujoefectivoPeer::FLUJOEFECTIVO_PAGO_ABONO,
            FlujoefectivoPeer::FLUJOEFECTIVO_PAGO_BONIFICACION,
        ),
        FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO => array(
            FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO_CHEQUE,
            FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO_EFECTIVO,
            FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO_TRANSFERENCIA,
            FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO_ABONO,
        ),
        FlujoefectivoPeer::FLUJOEFECTIVO_TIPO => array(
            FlujoefectivoPeer::FLUJOEFECTIVO_TIPO_INGRESO,
            FlujoefectivoPeer::FLUJOEFECTIVO_TIPO_EGRESO,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = FlujoefectivoPeer::getFieldNames($toType);
        $key = isset(FlujoefectivoPeer::$fieldKeys[$fromType][$name]) ? FlujoefectivoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(FlujoefectivoPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, FlujoefectivoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return FlujoefectivoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return FlujoefectivoPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = FlujoefectivoPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = FlujoefectivoPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. FlujoefectivoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(FlujoefectivoPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(FlujoefectivoPeer::IDFLUJOEFECTIVO);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDEMPRESA);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDSUCURSAL);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDUSUARIO);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_ORIGEN);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDCUENTAPORCOBRAR);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDCOMPRA);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDINGRESO);
            $criteria->addSelectColumn(FlujoefectivoPeer::INGRESORUBRO);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_PAGO);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDPROVEEDOR);
            $criteria->addSelectColumn(FlujoefectivoPeer::IDCUENTABANCARIA);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_CANTIDAD);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_FECHA);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_REFERENCIA);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_COMPROBANTE);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_MEDIODEPAGO);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_TIPO);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_CHEQUECIRCULACION);
            $criteria->addSelectColumn(FlujoefectivoPeer::FLUJOEFECTIVO_FECHACOBROCHEQUE);
        } else {
            $criteria->addSelectColumn($alias . '.idflujoefectivo');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.flujoefectivo_origen');
            $criteria->addSelectColumn($alias . '.idcuentaporcobrar');
            $criteria->addSelectColumn($alias . '.idcompra');
            $criteria->addSelectColumn($alias . '.idingreso');
            $criteria->addSelectColumn($alias . '.ingresorubro');
            $criteria->addSelectColumn($alias . '.flujoefectivo_pago');
            $criteria->addSelectColumn($alias . '.idproveedor');
            $criteria->addSelectColumn($alias . '.idcuentabancaria');
            $criteria->addSelectColumn($alias . '.flujoefectivo_cantidad');
            $criteria->addSelectColumn($alias . '.flujoefectivo_fecha');
            $criteria->addSelectColumn($alias . '.flujoefectivo_referencia');
            $criteria->addSelectColumn($alias . '.flujoefectivo_comprobante');
            $criteria->addSelectColumn($alias . '.flujoefectivo_mediodepago');
            $criteria->addSelectColumn($alias . '.flujoefectivo_tipo');
            $criteria->addSelectColumn($alias . '.flujoefectivo_chequecirculacion');
            $criteria->addSelectColumn($alias . '.flujoefectivo_fechacobrocheque');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Flujoefectivo
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = FlujoefectivoPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return FlujoefectivoPeer::populateObjects(FlujoefectivoPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Flujoefectivo $obj A Flujoefectivo object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdflujoefectivo();
            } // if key === null
            FlujoefectivoPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Flujoefectivo object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Flujoefectivo) {
                $key = (string) $value->getIdflujoefectivo();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Flujoefectivo object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(FlujoefectivoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Flujoefectivo Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(FlujoefectivoPeer::$instances[$key])) {
                return FlujoefectivoPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (FlujoefectivoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        FlujoefectivoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to flujoefectivo
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = FlujoefectivoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = FlujoefectivoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                FlujoefectivoPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Flujoefectivo object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = FlujoefectivoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = FlujoefectivoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            FlujoefectivoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Compra table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCompra(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuentabancaria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCuentabancaria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuentaporcobrar table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCuentaporcobrar(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empresa table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpresa(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Ingreso table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinIngreso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Proveedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProveedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sucursal table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSucursal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Usuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Compra objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCompra(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        CompraPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CompraPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Cuentabancaria objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCuentabancaria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        CuentabancariaPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CuentabancariaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CuentabancariaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CuentabancariaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Cuentabancaria)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Cuentaporcobrar objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCuentaporcobrar(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        CuentaporcobrarPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CuentaporcobrarPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CuentaporcobrarPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CuentaporcobrarPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Cuentaporcobrar)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EmpresaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpresaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EmpresaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Empresa)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Ingreso objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinIngreso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        IngresoPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = IngresoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = IngresoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    IngresoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Ingreso)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Proveedor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        ProveedorPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProveedorPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProveedorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProveedorPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Proveedor)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SucursalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SucursalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Sucursal)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to $obj2 (Usuario)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Compra rows

            $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CompraPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);
            } // if joined row not null

            // Add objects for joined Cuentabancaria rows

            $key3 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CuentabancariaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CuentabancariaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentabancariaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentabancaria)
                $obj3->addFlujoefectivo($obj1);
            } // if joined row not null

            // Add objects for joined Cuentaporcobrar rows

            $key4 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CuentaporcobrarPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CuentaporcobrarPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CuentaporcobrarPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Cuentaporcobrar)
                $obj4->addFlujoefectivo($obj1);
            } // if joined row not null

            // Add objects for joined Empresa rows

            $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Empresa)
                $obj5->addFlujoefectivo($obj1);
            } // if joined row not null

            // Add objects for joined Ingreso rows

            $key6 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = IngresoPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = IngresoPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    IngresoPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Ingreso)
                $obj6->addFlujoefectivo($obj1);
            } // if joined row not null

            // Add objects for joined Proveedor rows

            $key7 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = ProveedorPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = ProveedorPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ProveedorPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Proveedor)
                $obj7->addFlujoefectivo($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key8 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = SucursalPeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = SucursalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    SucursalPeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Sucursal)
                $obj8->addFlujoefectivo($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key9 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol9);
            if ($key9 !== null) {
                $obj9 = UsuarioPeer::getInstanceFromPool($key9);
                if (!$obj9) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    UsuarioPeer::addInstanceToPool($obj9, $key9);
                } // if obj9 loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj9 (Usuario)
                $obj9->addFlujoefectivo($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Compra table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCompra(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuentabancaria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCuentabancaria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuentaporcobrar table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCuentaporcobrar(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empresa table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpresa(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Ingreso table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptIngreso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Proveedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProveedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Sucursal table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSucursal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Usuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            FlujoefectivoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Compra.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCompra(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Cuentabancaria rows

                $key2 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CuentabancariaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CuentabancariaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Cuentabancaria)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentaporcobrar rows

                $key3 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentaporcobrarPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentaporcobrarPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentaporcobrarPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentaporcobrar)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key4 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EmpresaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpresaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Empresa)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key5 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = IngresoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = IngresoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    IngresoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Ingreso)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key6 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ProveedorPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ProveedorPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Proveedor)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Sucursal)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Usuario)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Cuentabancaria.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCuentabancaria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Compra rows

                $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompraPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentaporcobrar rows

                $key3 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentaporcobrarPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentaporcobrarPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentaporcobrarPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentaporcobrar)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key4 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EmpresaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpresaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Empresa)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key5 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = IngresoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = IngresoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    IngresoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Ingreso)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key6 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ProveedorPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ProveedorPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Proveedor)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Sucursal)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Usuario)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Cuentaporcobrar.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCuentaporcobrar(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Compra rows

                $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompraPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentabancaria rows

                $key3 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentabancariaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentabancariaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentabancaria)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key4 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EmpresaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpresaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Empresa)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key5 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = IngresoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = IngresoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    IngresoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Ingreso)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key6 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ProveedorPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ProveedorPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Proveedor)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Sucursal)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Usuario)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Empresa.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Compra rows

                $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompraPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentabancaria rows

                $key3 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentabancariaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentabancariaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentabancaria)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentaporcobrar rows

                $key4 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CuentaporcobrarPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = CuentaporcobrarPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CuentaporcobrarPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Cuentaporcobrar)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key5 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = IngresoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = IngresoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    IngresoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Ingreso)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key6 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ProveedorPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ProveedorPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Proveedor)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Sucursal)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Usuario)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Ingreso.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptIngreso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Compra rows

                $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompraPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentabancaria rows

                $key3 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentabancariaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentabancariaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentabancaria)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentaporcobrar rows

                $key4 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CuentaporcobrarPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = CuentaporcobrarPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CuentaporcobrarPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Cuentaporcobrar)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Empresa)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key6 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = ProveedorPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    ProveedorPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Proveedor)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Sucursal)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Usuario)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Proveedor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Compra rows

                $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompraPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentabancaria rows

                $key3 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentabancariaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentabancariaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentabancaria)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentaporcobrar rows

                $key4 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CuentaporcobrarPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = CuentaporcobrarPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CuentaporcobrarPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Cuentaporcobrar)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Empresa)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key6 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = IngresoPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = IngresoPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    IngresoPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Ingreso)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Sucursal)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Usuario)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Compra rows

                $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompraPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentabancaria rows

                $key3 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentabancariaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentabancariaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentabancaria)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentaporcobrar rows

                $key4 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CuentaporcobrarPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = CuentaporcobrarPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CuentaporcobrarPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Cuentaporcobrar)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Empresa)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key6 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = IngresoPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = IngresoPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    IngresoPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Ingreso)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key7 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ProveedorPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ProveedorPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Proveedor)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Usuario)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Flujoefectivo objects pre-filled with all related objects except Usuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Flujoefectivo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);
        }

        FlujoefectivoPeer::addSelectColumns($criteria);
        $startcol2 = FlujoefectivoPeer::NUM_HYDRATE_COLUMNS;

        CompraPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CompraPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        CuentaporcobrarPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CuentaporcobrarPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(FlujoefectivoPeer::IDCOMPRA, CompraPeer::IDCOMPRA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDCUENTAPORCOBRAR, CuentaporcobrarPeer::IDCUENTAPORCOBRAR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(FlujoefectivoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = FlujoefectivoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = FlujoefectivoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = FlujoefectivoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                FlujoefectivoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Compra rows

                $key2 = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CompraPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CompraPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CompraPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj2 (Compra)
                $obj2->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentabancaria rows

                $key3 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CuentabancariaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CuentabancariaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj3 (Cuentabancaria)
                $obj3->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Cuentaporcobrar rows

                $key4 = CuentaporcobrarPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CuentaporcobrarPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = CuentaporcobrarPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CuentaporcobrarPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj4 (Cuentaporcobrar)
                $obj4->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj5 (Empresa)
                $obj5->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key6 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = IngresoPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = IngresoPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    IngresoPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj6 (Ingreso)
                $obj6->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key7 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = ProveedorPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    ProveedorPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj7 (Proveedor)
                $obj7->addFlujoefectivo($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key8 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = SucursalPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = SucursalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    SucursalPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Flujoefectivo) to the collection in $obj8 (Sucursal)
                $obj8->addFlujoefectivo($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(FlujoefectivoPeer::DATABASE_NAME)->getTable(FlujoefectivoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseFlujoefectivoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseFlujoefectivoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \FlujoefectivoTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return FlujoefectivoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Flujoefectivo or Criteria object.
     *
     * @param      mixed $values Criteria or Flujoefectivo object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Flujoefectivo object
        }

        if ($criteria->containsKey(FlujoefectivoPeer::IDFLUJOEFECTIVO) && $criteria->keyContainsValue(FlujoefectivoPeer::IDFLUJOEFECTIVO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.FlujoefectivoPeer::IDFLUJOEFECTIVO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Flujoefectivo or Criteria object.
     *
     * @param      mixed $values Criteria or Flujoefectivo object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(FlujoefectivoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(FlujoefectivoPeer::IDFLUJOEFECTIVO);
            $value = $criteria->remove(FlujoefectivoPeer::IDFLUJOEFECTIVO);
            if ($value) {
                $selectCriteria->add(FlujoefectivoPeer::IDFLUJOEFECTIVO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(FlujoefectivoPeer::TABLE_NAME);
            }

        } else { // $values is Flujoefectivo object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the flujoefectivo table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(FlujoefectivoPeer::TABLE_NAME, $con, FlujoefectivoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            FlujoefectivoPeer::clearInstancePool();
            FlujoefectivoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Flujoefectivo or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Flujoefectivo object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            FlujoefectivoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Flujoefectivo) { // it's a model object
            // invalidate the cache for this single object
            FlujoefectivoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(FlujoefectivoPeer::DATABASE_NAME);
            $criteria->add(FlujoefectivoPeer::IDFLUJOEFECTIVO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                FlujoefectivoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(FlujoefectivoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            FlujoefectivoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Flujoefectivo object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Flujoefectivo $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(FlujoefectivoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(FlujoefectivoPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(FlujoefectivoPeer::DATABASE_NAME, FlujoefectivoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Flujoefectivo
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = FlujoefectivoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(FlujoefectivoPeer::DATABASE_NAME);
        $criteria->add(FlujoefectivoPeer::IDFLUJOEFECTIVO, $pk);

        $v = FlujoefectivoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Flujoefectivo[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(FlujoefectivoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(FlujoefectivoPeer::DATABASE_NAME);
            $criteria->add(FlujoefectivoPeer::IDFLUJOEFECTIVO, $pks, Criteria::IN);
            $objs = FlujoefectivoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseFlujoefectivoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseFlujoefectivoPeer::buildTableMap();

