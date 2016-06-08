<?php


/**
 * Base static class for performing query and update operations on the 'compra' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseCompraPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'compra';

    /** the related Propel class for this table */
    const OM_CLASS = 'Compra';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CompraTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the idcompra field */
    const IDCOMPRA = 'compra.idcompra';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'compra.idempresa';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'compra.idsucursal';

    /** the column name for the idproveedor field */
    const IDPROVEEDOR = 'compra.idproveedor';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'compra.idusuario';

    /** the column name for the idauditor field */
    const IDAUDITOR = 'compra.idauditor';

    /** the column name for the idalmacen field */
    const IDALMACEN = 'compra.idalmacen';

    /** the column name for the compra_folio field */
    const COMPRA_FOLIO = 'compra.compra_folio';

    /** the column name for the compra_revisada field */
    const COMPRA_REVISADA = 'compra.compra_revisada';

    /** the column name for the compra_factura field */
    const COMPRA_FACTURA = 'compra.compra_factura';

    /** the column name for the compra_fechacreacion field */
    const COMPRA_FECHACREACION = 'compra.compra_fechacreacion';

    /** the column name for the compra_fechacompra field */
    const COMPRA_FECHACOMPRA = 'compra.compra_fechacompra';

    /** the column name for the compra_fechaentrega field */
    const COMPRA_FECHAENTREGA = 'compra.compra_fechaentrega';

    /** the column name for the compra_ieps field */
    const COMPRA_IEPS = 'compra.compra_ieps';

    /** the column name for the compra_iva field */
    const COMPRA_IVA = 'compra.compra_iva';

    /** the column name for the compra_subtotal field */
    const COMPRA_SUBTOTAL = 'compra.compra_subtotal';

    /** the column name for the compra_total field */
    const COMPRA_TOTAL = 'compra.compra_total';

    /** the column name for the compra_tipo field */
    const COMPRA_TIPO = 'compra.compra_tipo';

    /** the column name for the notaauditorempresa field */
    const NOTAAUDITOREMPRESA = 'compra.notaauditorempresa';

    /** the column name for the notaalmacenistaempresa field */
    const NOTAALMACENISTAEMPRESA = 'compra.notaalmacenistaempresa';

    /** the column name for the notaauditoraersa field */
    const NOTAAUDITORAERSA = 'compra.notaauditoraersa';

    /** the column name for the compra_estatuspago field */
    const COMPRA_ESTATUSPAGO = 'compra.compra_estatuspago';

    /** The enumerated values for the compra_tipo field */
    const COMPRA_TIPO_ORDECOMPRA = 'ordecompra';
    const COMPRA_TIPO_COMPRA = 'compra';
    const COMPRA_TIPO_CONSIGNACION = 'consignacion';

    /** The enumerated values for the compra_estatuspago field */
    const COMPRA_ESTATUSPAGO_PAGADA = 'pagada';
    const COMPRA_ESTATUSPAGO_NOPAGADA = 'nopagada';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Compra objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Compra[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CompraPeer::$fieldNames[CompraPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcompra', 'Idempresa', 'Idsucursal', 'Idproveedor', 'Idusuario', 'Idauditor', 'Idalmacen', 'CompraFolio', 'CompraRevisada', 'CompraFactura', 'CompraFechacreacion', 'CompraFechacompra', 'CompraFechaentrega', 'CompraIeps', 'CompraIva', 'CompraSubtotal', 'CompraTotal', 'CompraTipo', 'Notaauditorempresa', 'Notaalmacenistaempresa', 'Notaauditoraersa', 'CompraEstatuspago', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcompra', 'idempresa', 'idsucursal', 'idproveedor', 'idusuario', 'idauditor', 'idalmacen', 'compraFolio', 'compraRevisada', 'compraFactura', 'compraFechacreacion', 'compraFechacompra', 'compraFechaentrega', 'compraIeps', 'compraIva', 'compraSubtotal', 'compraTotal', 'compraTipo', 'notaauditorempresa', 'notaalmacenistaempresa', 'notaauditoraersa', 'compraEstatuspago', ),
        BasePeer::TYPE_COLNAME => array (CompraPeer::IDCOMPRA, CompraPeer::IDEMPRESA, CompraPeer::IDSUCURSAL, CompraPeer::IDPROVEEDOR, CompraPeer::IDUSUARIO, CompraPeer::IDAUDITOR, CompraPeer::IDALMACEN, CompraPeer::COMPRA_FOLIO, CompraPeer::COMPRA_REVISADA, CompraPeer::COMPRA_FACTURA, CompraPeer::COMPRA_FECHACREACION, CompraPeer::COMPRA_FECHACOMPRA, CompraPeer::COMPRA_FECHAENTREGA, CompraPeer::COMPRA_IEPS, CompraPeer::COMPRA_IVA, CompraPeer::COMPRA_SUBTOTAL, CompraPeer::COMPRA_TOTAL, CompraPeer::COMPRA_TIPO, CompraPeer::NOTAAUDITOREMPRESA, CompraPeer::NOTAALMACENISTAEMPRESA, CompraPeer::NOTAAUDITORAERSA, CompraPeer::COMPRA_ESTATUSPAGO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCOMPRA', 'IDEMPRESA', 'IDSUCURSAL', 'IDPROVEEDOR', 'IDUSUARIO', 'IDAUDITOR', 'IDALMACEN', 'COMPRA_FOLIO', 'COMPRA_REVISADA', 'COMPRA_FACTURA', 'COMPRA_FECHACREACION', 'COMPRA_FECHACOMPRA', 'COMPRA_FECHAENTREGA', 'COMPRA_IEPS', 'COMPRA_IVA', 'COMPRA_SUBTOTAL', 'COMPRA_TOTAL', 'COMPRA_TIPO', 'NOTAAUDITOREMPRESA', 'NOTAALMACENISTAEMPRESA', 'NOTAAUDITORAERSA', 'COMPRA_ESTATUSPAGO', ),
        BasePeer::TYPE_FIELDNAME => array ('idcompra', 'idempresa', 'idsucursal', 'idproveedor', 'idusuario', 'idauditor', 'idalmacen', 'compra_folio', 'compra_revisada', 'compra_factura', 'compra_fechacreacion', 'compra_fechacompra', 'compra_fechaentrega', 'compra_ieps', 'compra_iva', 'compra_subtotal', 'compra_total', 'compra_tipo', 'notaauditorempresa', 'notaalmacenistaempresa', 'notaauditoraersa', 'compra_estatuspago', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CompraPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcompra' => 0, 'Idempresa' => 1, 'Idsucursal' => 2, 'Idproveedor' => 3, 'Idusuario' => 4, 'Idauditor' => 5, 'Idalmacen' => 6, 'CompraFolio' => 7, 'CompraRevisada' => 8, 'CompraFactura' => 9, 'CompraFechacreacion' => 10, 'CompraFechacompra' => 11, 'CompraFechaentrega' => 12, 'CompraIeps' => 13, 'CompraIva' => 14, 'CompraSubtotal' => 15, 'CompraTotal' => 16, 'CompraTipo' => 17, 'Notaauditorempresa' => 18, 'Notaalmacenistaempresa' => 19, 'Notaauditoraersa' => 20, 'CompraEstatuspago' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcompra' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idproveedor' => 3, 'idusuario' => 4, 'idauditor' => 5, 'idalmacen' => 6, 'compraFolio' => 7, 'compraRevisada' => 8, 'compraFactura' => 9, 'compraFechacreacion' => 10, 'compraFechacompra' => 11, 'compraFechaentrega' => 12, 'compraIeps' => 13, 'compraIva' => 14, 'compraSubtotal' => 15, 'compraTotal' => 16, 'compraTipo' => 17, 'notaauditorempresa' => 18, 'notaalmacenistaempresa' => 19, 'notaauditoraersa' => 20, 'compraEstatuspago' => 21, ),
        BasePeer::TYPE_COLNAME => array (CompraPeer::IDCOMPRA => 0, CompraPeer::IDEMPRESA => 1, CompraPeer::IDSUCURSAL => 2, CompraPeer::IDPROVEEDOR => 3, CompraPeer::IDUSUARIO => 4, CompraPeer::IDAUDITOR => 5, CompraPeer::IDALMACEN => 6, CompraPeer::COMPRA_FOLIO => 7, CompraPeer::COMPRA_REVISADA => 8, CompraPeer::COMPRA_FACTURA => 9, CompraPeer::COMPRA_FECHACREACION => 10, CompraPeer::COMPRA_FECHACOMPRA => 11, CompraPeer::COMPRA_FECHAENTREGA => 12, CompraPeer::COMPRA_IEPS => 13, CompraPeer::COMPRA_IVA => 14, CompraPeer::COMPRA_SUBTOTAL => 15, CompraPeer::COMPRA_TOTAL => 16, CompraPeer::COMPRA_TIPO => 17, CompraPeer::NOTAAUDITOREMPRESA => 18, CompraPeer::NOTAALMACENISTAEMPRESA => 19, CompraPeer::NOTAAUDITORAERSA => 20, CompraPeer::COMPRA_ESTATUSPAGO => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCOMPRA' => 0, 'IDEMPRESA' => 1, 'IDSUCURSAL' => 2, 'IDPROVEEDOR' => 3, 'IDUSUARIO' => 4, 'IDAUDITOR' => 5, 'IDALMACEN' => 6, 'COMPRA_FOLIO' => 7, 'COMPRA_REVISADA' => 8, 'COMPRA_FACTURA' => 9, 'COMPRA_FECHACREACION' => 10, 'COMPRA_FECHACOMPRA' => 11, 'COMPRA_FECHAENTREGA' => 12, 'COMPRA_IEPS' => 13, 'COMPRA_IVA' => 14, 'COMPRA_SUBTOTAL' => 15, 'COMPRA_TOTAL' => 16, 'COMPRA_TIPO' => 17, 'NOTAAUDITOREMPRESA' => 18, 'NOTAALMACENISTAEMPRESA' => 19, 'NOTAAUDITORAERSA' => 20, 'COMPRA_ESTATUSPAGO' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('idcompra' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idproveedor' => 3, 'idusuario' => 4, 'idauditor' => 5, 'idalmacen' => 6, 'compra_folio' => 7, 'compra_revisada' => 8, 'compra_factura' => 9, 'compra_fechacreacion' => 10, 'compra_fechacompra' => 11, 'compra_fechaentrega' => 12, 'compra_ieps' => 13, 'compra_iva' => 14, 'compra_subtotal' => 15, 'compra_total' => 16, 'compra_tipo' => 17, 'notaauditorempresa' => 18, 'notaalmacenistaempresa' => 19, 'notaauditoraersa' => 20, 'compra_estatuspago' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CompraPeer::COMPRA_TIPO => array(
            CompraPeer::COMPRA_TIPO_ORDECOMPRA,
            CompraPeer::COMPRA_TIPO_COMPRA,
            CompraPeer::COMPRA_TIPO_CONSIGNACION,
        ),
        CompraPeer::COMPRA_ESTATUSPAGO => array(
            CompraPeer::COMPRA_ESTATUSPAGO_PAGADA,
            CompraPeer::COMPRA_ESTATUSPAGO_NOPAGADA,
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
        $toNames = CompraPeer::getFieldNames($toType);
        $key = isset(CompraPeer::$fieldKeys[$fromType][$name]) ? CompraPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CompraPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CompraPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CompraPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CompraPeer::$enumValueSets;
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
        $valueSets = CompraPeer::getValueSets();

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
        $values = CompraPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CompraPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CompraPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CompraPeer::IDCOMPRA);
            $criteria->addSelectColumn(CompraPeer::IDEMPRESA);
            $criteria->addSelectColumn(CompraPeer::IDSUCURSAL);
            $criteria->addSelectColumn(CompraPeer::IDPROVEEDOR);
            $criteria->addSelectColumn(CompraPeer::IDUSUARIO);
            $criteria->addSelectColumn(CompraPeer::IDAUDITOR);
            $criteria->addSelectColumn(CompraPeer::IDALMACEN);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FOLIO);
            $criteria->addSelectColumn(CompraPeer::COMPRA_REVISADA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FACTURA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FECHACREACION);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FECHACOMPRA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FECHAENTREGA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_IEPS);
            $criteria->addSelectColumn(CompraPeer::COMPRA_IVA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_SUBTOTAL);
            $criteria->addSelectColumn(CompraPeer::COMPRA_TOTAL);
            $criteria->addSelectColumn(CompraPeer::COMPRA_TIPO);
            $criteria->addSelectColumn(CompraPeer::NOTAAUDITOREMPRESA);
            $criteria->addSelectColumn(CompraPeer::NOTAALMACENISTAEMPRESA);
            $criteria->addSelectColumn(CompraPeer::NOTAAUDITORAERSA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_ESTATUSPAGO);
        } else {
            $criteria->addSelectColumn($alias . '.idcompra');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.idproveedor');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.idauditor');
            $criteria->addSelectColumn($alias . '.idalmacen');
            $criteria->addSelectColumn($alias . '.compra_folio');
            $criteria->addSelectColumn($alias . '.compra_revisada');
            $criteria->addSelectColumn($alias . '.compra_factura');
            $criteria->addSelectColumn($alias . '.compra_fechacreacion');
            $criteria->addSelectColumn($alias . '.compra_fechacompra');
            $criteria->addSelectColumn($alias . '.compra_fechaentrega');
            $criteria->addSelectColumn($alias . '.compra_ieps');
            $criteria->addSelectColumn($alias . '.compra_iva');
            $criteria->addSelectColumn($alias . '.compra_subtotal');
            $criteria->addSelectColumn($alias . '.compra_total');
            $criteria->addSelectColumn($alias . '.compra_tipo');
            $criteria->addSelectColumn($alias . '.notaauditorempresa');
            $criteria->addSelectColumn($alias . '.notaalmacenistaempresa');
            $criteria->addSelectColumn($alias . '.notaauditoraersa');
            $criteria->addSelectColumn($alias . '.compra_estatuspago');
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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CompraPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Compra
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CompraPeer::doSelect($critcopy, $con);
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
        return CompraPeer::populateObjects(CompraPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CompraPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

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
     * @param Compra $obj A Compra object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcompra();
            } // if key === null
            CompraPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Compra object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Compra) {
                $key = (string) $value->getIdcompra();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Compra object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CompraPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Compra Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CompraPeer::$instances[$key])) {
                return CompraPeer::$instances[$key];
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
        foreach (CompraPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CompraPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to compra
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CompradetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompradetallePeer::clearInstancePool();
        // Invalidate objects in CompranotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompranotaPeer::clearInstancePool();
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
        $cls = CompraPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CompraPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CompraPeer::addInstanceToPool($obj, $key);
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
     * @return array (Compra object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CompraPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CompraPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CompraPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CompraPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Almacen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAlmacen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdauditor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuarioRelatedByIdauditor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdusuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuarioRelatedByIdusuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Compra objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol = CompraPeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AlmacenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AlmacenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AlmacenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Compra) to $obj2 (Almacen)
                $obj2->addCompra($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdauditor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol = CompraPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Compra) to $obj2 (Usuario)
                $obj2->addCompraRelatedByIdauditor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol = CompraPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Compra) to $obj2 (Empresa)
                $obj2->addCompra($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with their Proveedor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol = CompraPeer::NUM_HYDRATE_COLUMNS;
        ProveedorPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Compra) to $obj2 (Proveedor)
                $obj2->addCompra($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol = CompraPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Compra) to $obj2 (Sucursal)
                $obj2->addCompra($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdusuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol = CompraPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Compra) to $obj2 (Usuario)
                $obj2->addCompraRelatedByIdusuario($obj1);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Compra objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Almacen rows

            $key2 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = AlmacenPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AlmacenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlmacenPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Almacen)
                $obj2->addCompra($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = UsuarioPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsuarioPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Compra) to the collection in $obj3 (Usuario)
                $obj3->addCompraRelatedByIdauditor($obj1);
            } // if joined row not null

            // Add objects for joined Empresa rows

            $key4 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = EmpresaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = EmpresaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpresaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Compra) to the collection in $obj4 (Empresa)
                $obj4->addCompra($obj1);
            } // if joined row not null

            // Add objects for joined Proveedor rows

            $key5 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ProveedorPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ProveedorPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ProveedorPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Compra) to the collection in $obj5 (Proveedor)
                $obj5->addCompra($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key6 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = SucursalPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = SucursalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SucursalPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Compra) to the collection in $obj6 (Sucursal)
                $obj6->addCompra($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key7 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = UsuarioPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsuarioPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Compra) to the collection in $obj7 (Usuario)
                $obj7->addCompraRelatedByIdusuario($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Almacen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAlmacen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdauditor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsuarioRelatedByIdauditor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related UsuarioRelatedByIdusuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsuarioRelatedByIdusuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Compra objects pre-filled with all related objects except Almacen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAlmacen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Usuario rows

                $key2 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = UsuarioPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    UsuarioPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Usuario)
                $obj2->addCompraRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key3 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EmpresaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpresaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Compra) to the collection in $obj3 (Empresa)
                $obj3->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key4 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProveedorPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProveedorPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Compra) to the collection in $obj4 (Proveedor)
                $obj4->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key5 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SucursalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SucursalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SucursalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Compra) to the collection in $obj5 (Sucursal)
                $obj5->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key6 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsuarioPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsuarioPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Compra) to the collection in $obj6 (Usuario)
                $obj6->addCompraRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with all related objects except UsuarioRelatedByIdauditor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsuarioRelatedByIdauditor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Almacen rows

                $key2 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AlmacenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlmacenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Almacen)
                $obj2->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key3 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EmpresaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpresaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Compra) to the collection in $obj3 (Empresa)
                $obj3->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key4 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProveedorPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProveedorPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Compra) to the collection in $obj4 (Proveedor)
                $obj4->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key5 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SucursalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SucursalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SucursalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Compra) to the collection in $obj5 (Sucursal)
                $obj5->addCompra($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with all related objects except Empresa.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
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
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Almacen rows

                $key2 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AlmacenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlmacenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Almacen)
                $obj2->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsuarioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsuarioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Compra) to the collection in $obj3 (Usuario)
                $obj3->addCompraRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key4 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProveedorPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProveedorPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Compra) to the collection in $obj4 (Proveedor)
                $obj4->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key5 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SucursalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SucursalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SucursalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Compra) to the collection in $obj5 (Sucursal)
                $obj5->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key6 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsuarioPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsuarioPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Compra) to the collection in $obj6 (Usuario)
                $obj6->addCompraRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with all related objects except Proveedor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
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
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Almacen rows

                $key2 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AlmacenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlmacenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Almacen)
                $obj2->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsuarioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsuarioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Compra) to the collection in $obj3 (Usuario)
                $obj3->addCompraRelatedByIdauditor($obj1);

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

                // Add the $obj1 (Compra) to the collection in $obj4 (Empresa)
                $obj4->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key5 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SucursalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SucursalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SucursalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Compra) to the collection in $obj5 (Sucursal)
                $obj5->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key6 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsuarioPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsuarioPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Compra) to the collection in $obj6 (Usuario)
                $obj6->addCompraRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
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
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Almacen rows

                $key2 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AlmacenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlmacenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Almacen)
                $obj2->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key3 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UsuarioPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UsuarioPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Compra) to the collection in $obj3 (Usuario)
                $obj3->addCompraRelatedByIdauditor($obj1);

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

                // Add the $obj1 (Compra) to the collection in $obj4 (Empresa)
                $obj4->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key5 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ProveedorPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ProveedorPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Compra) to the collection in $obj5 (Proveedor)
                $obj5->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key6 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = UsuarioPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsuarioPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Compra) to the collection in $obj6 (Usuario)
                $obj6->addCompraRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Compra objects pre-filled with all related objects except UsuarioRelatedByIdusuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsuarioRelatedByIdusuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(CompraPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(CompraPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Almacen rows

                $key2 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AlmacenPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AlmacenPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Almacen)
                $obj2->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key3 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EmpresaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpresaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Compra) to the collection in $obj3 (Empresa)
                $obj3->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key4 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProveedorPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProveedorPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Compra) to the collection in $obj4 (Proveedor)
                $obj4->addCompra($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key5 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = SucursalPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = SucursalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SucursalPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Compra) to the collection in $obj5 (Sucursal)
                $obj5->addCompra($obj1);

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
        return Propel::getDatabaseMap(CompraPeer::DATABASE_NAME)->getTable(CompraPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCompraPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCompraPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CompraTableMap());
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
        return CompraPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Compra or Criteria object.
     *
     * @param      mixed $values Criteria or Compra object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Compra object
        }

        if ($criteria->containsKey(CompraPeer::IDCOMPRA) && $criteria->keyContainsValue(CompraPeer::IDCOMPRA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CompraPeer::IDCOMPRA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Compra or Criteria object.
     *
     * @param      mixed $values Criteria or Compra object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CompraPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CompraPeer::IDCOMPRA);
            $value = $criteria->remove(CompraPeer::IDCOMPRA);
            if ($value) {
                $selectCriteria->add(CompraPeer::IDCOMPRA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CompraPeer::TABLE_NAME);
            }

        } else { // $values is Compra object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the compra table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CompraPeer::doOnDeleteCascade(new Criteria(CompraPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CompraPeer::TABLE_NAME, $con, CompraPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CompraPeer::clearInstancePool();
            CompraPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Compra or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Compra object or primary key or array of primary keys
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Compra) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);
            $criteria->add(CompraPeer::IDCOMPRA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CompraPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CompraPeer::clearInstancePool();
            } elseif ($values instanceof Compra) { // it's a model object
                CompraPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CompraPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CompraPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CompraPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Compradetalle objects
            $criteria = new Criteria(CompradetallePeer::DATABASE_NAME);

            $criteria->add(CompradetallePeer::IDCOMPRA, $obj->getIdcompra());
            $affectedRows += CompradetallePeer::doDelete($criteria, $con);

            // delete related Compranota objects
            $criteria = new Criteria(CompranotaPeer::DATABASE_NAME);

            $criteria->add(CompranotaPeer::IDCOMPRA, $obj->getIdcompra());
            $affectedRows += CompranotaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Compra object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Compra $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CompraPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CompraPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CompraPeer::DATABASE_NAME, CompraPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Compra
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CompraPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CompraPeer::DATABASE_NAME);
        $criteria->add(CompraPeer::IDCOMPRA, $pk);

        $v = CompraPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Compra[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);
            $criteria->add(CompraPeer::IDCOMPRA, $pks, Criteria::IN);
            $objs = CompraPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCompraPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCompraPeer::buildTableMap();

