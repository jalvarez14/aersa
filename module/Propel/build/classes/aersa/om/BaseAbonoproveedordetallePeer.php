<?php


/**
 * Base static class for performing query and update operations on the 'abonoproveedordetalle' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseAbonoproveedordetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'abonoproveedordetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Abonoproveedordetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AbonoproveedordetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the idabonoproveedordetalle field */
    const IDABONOPROVEEDORDETALLE = 'abonoproveedordetalle.idabonoproveedordetalle';

    /** the column name for the idabonoproveedor field */
    const IDABONOPROVEEDOR = 'abonoproveedordetalle.idabonoproveedor';

    /** the column name for the idcuentabancaria field */
    const IDCUENTABANCARIA = 'abonoproveedordetalle.idcuentabancaria';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'abonoproveedordetalle.idusuario';

    /** the column name for the abonoproveedordetalle_fechaabono field */
    const ABONOPROVEEDORDETALLE_FECHAABONO = 'abonoproveedordetalle.abonoproveedordetalle_fechaabono';

    /** the column name for the abonoproveedordetalle_cantidad field */
    const ABONOPROVEEDORDETALLE_CANTIDAD = 'abonoproveedordetalle.abonoproveedordetalle_cantidad';

    /** the column name for the abonoproveedordetalle_tipo field */
    const ABONOPROVEEDORDETALLE_TIPO = 'abonoproveedordetalle.abonoproveedordetalle_tipo';

    /** the column name for the abonoproveedordetalle_referencia field */
    const ABONOPROVEEDORDETALLE_REFERENCIA = 'abonoproveedordetalle.abonoproveedordetalle_referencia';

    /** the column name for the abonoproveedordetalle_comprobante field */
    const ABONOPROVEEDORDETALLE_COMPROBANTE = 'abonoproveedordetalle.abonoproveedordetalle_comprobante';

    /** the column name for the abonoproveedordetalle_mediodepago field */
    const ABONOPROVEEDORDETALLE_MEDIODEPAGO = 'abonoproveedordetalle.abonoproveedordetalle_mediodepago';

    /** the column name for the abonoproveedordetalle_chequecirculacion field */
    const ABONOPROVEEDORDETALLE_CHEQUECIRCULACION = 'abonoproveedordetalle.abonoproveedordetalle_chequecirculacion';

    /** the column name for the abonoproveedordetalle_fechacobrocheque field */
    const ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE = 'abonoproveedordetalle.abonoproveedordetalle_fechacobrocheque';

    /** The enumerated values for the abonoproveedordetalle_tipo field */
    const ABONOPROVEEDORDETALLE_TIPO_ABONO = 'abono';
    const ABONOPROVEEDORDETALLE_TIPO_EGRESO = 'egreso';

    /** The enumerated values for the abonoproveedordetalle_mediodepago field */
    const ABONOPROVEEDORDETALLE_MEDIODEPAGO_CHEQUE = 'cheque';
    const ABONOPROVEEDORDETALLE_MEDIODEPAGO_EFECTIVO = 'efectivo';
    const ABONOPROVEEDORDETALLE_MEDIODEPAGO_TRANSFERENCIA = 'transferencia';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Abonoproveedordetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Abonoproveedordetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AbonoproveedordetallePeer::$fieldNames[AbonoproveedordetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idabonoproveedordetalle', 'Idabonoproveedor', 'Idcuentabancaria', 'Idusuario', 'AbonoproveedordetalleFechaabono', 'AbonoproveedordetalleCantidad', 'AbonoproveedordetalleTipo', 'AbonoproveedordetalleReferencia', 'AbonoproveedordetalleComprobante', 'AbonoproveedordetalleMediodepago', 'AbonoproveedordetalleChequecirculacion', 'AbonoproveedordetalleFechacobrocheque', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idabonoproveedordetalle', 'idabonoproveedor', 'idcuentabancaria', 'idusuario', 'abonoproveedordetalleFechaabono', 'abonoproveedordetalleCantidad', 'abonoproveedordetalleTipo', 'abonoproveedordetalleReferencia', 'abonoproveedordetalleComprobante', 'abonoproveedordetalleMediodepago', 'abonoproveedordetalleChequecirculacion', 'abonoproveedordetalleFechacobrocheque', ),
        BasePeer::TYPE_COLNAME => array (AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedordetallePeer::IDCUENTABANCARIA, AbonoproveedordetallePeer::IDUSUARIO, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDABONOPROVEEDORDETALLE', 'IDABONOPROVEEDOR', 'IDCUENTABANCARIA', 'IDUSUARIO', 'ABONOPROVEEDORDETALLE_FECHAABONO', 'ABONOPROVEEDORDETALLE_CANTIDAD', 'ABONOPROVEEDORDETALLE_TIPO', 'ABONOPROVEEDORDETALLE_REFERENCIA', 'ABONOPROVEEDORDETALLE_COMPROBANTE', 'ABONOPROVEEDORDETALLE_MEDIODEPAGO', 'ABONOPROVEEDORDETALLE_CHEQUECIRCULACION', 'ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE', ),
        BasePeer::TYPE_FIELDNAME => array ('idabonoproveedordetalle', 'idabonoproveedor', 'idcuentabancaria', 'idusuario', 'abonoproveedordetalle_fechaabono', 'abonoproveedordetalle_cantidad', 'abonoproveedordetalle_tipo', 'abonoproveedordetalle_referencia', 'abonoproveedordetalle_comprobante', 'abonoproveedordetalle_mediodepago', 'abonoproveedordetalle_chequecirculacion', 'abonoproveedordetalle_fechacobrocheque', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AbonoproveedordetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idabonoproveedordetalle' => 0, 'Idabonoproveedor' => 1, 'Idcuentabancaria' => 2, 'Idusuario' => 3, 'AbonoproveedordetalleFechaabono' => 4, 'AbonoproveedordetalleCantidad' => 5, 'AbonoproveedordetalleTipo' => 6, 'AbonoproveedordetalleReferencia' => 7, 'AbonoproveedordetalleComprobante' => 8, 'AbonoproveedordetalleMediodepago' => 9, 'AbonoproveedordetalleChequecirculacion' => 10, 'AbonoproveedordetalleFechacobrocheque' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idabonoproveedordetalle' => 0, 'idabonoproveedor' => 1, 'idcuentabancaria' => 2, 'idusuario' => 3, 'abonoproveedordetalleFechaabono' => 4, 'abonoproveedordetalleCantidad' => 5, 'abonoproveedordetalleTipo' => 6, 'abonoproveedordetalleReferencia' => 7, 'abonoproveedordetalleComprobante' => 8, 'abonoproveedordetalleMediodepago' => 9, 'abonoproveedordetalleChequecirculacion' => 10, 'abonoproveedordetalleFechacobrocheque' => 11, ),
        BasePeer::TYPE_COLNAME => array (AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE => 0, AbonoproveedordetallePeer::IDABONOPROVEEDOR => 1, AbonoproveedordetallePeer::IDCUENTABANCARIA => 2, AbonoproveedordetallePeer::IDUSUARIO => 3, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO => 4, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD => 5, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO => 6, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA => 7, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE => 8, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO => 9, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION => 10, AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDABONOPROVEEDORDETALLE' => 0, 'IDABONOPROVEEDOR' => 1, 'IDCUENTABANCARIA' => 2, 'IDUSUARIO' => 3, 'ABONOPROVEEDORDETALLE_FECHAABONO' => 4, 'ABONOPROVEEDORDETALLE_CANTIDAD' => 5, 'ABONOPROVEEDORDETALLE_TIPO' => 6, 'ABONOPROVEEDORDETALLE_REFERENCIA' => 7, 'ABONOPROVEEDORDETALLE_COMPROBANTE' => 8, 'ABONOPROVEEDORDETALLE_MEDIODEPAGO' => 9, 'ABONOPROVEEDORDETALLE_CHEQUECIRCULACION' => 10, 'ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('idabonoproveedordetalle' => 0, 'idabonoproveedor' => 1, 'idcuentabancaria' => 2, 'idusuario' => 3, 'abonoproveedordetalle_fechaabono' => 4, 'abonoproveedordetalle_cantidad' => 5, 'abonoproveedordetalle_tipo' => 6, 'abonoproveedordetalle_referencia' => 7, 'abonoproveedordetalle_comprobante' => 8, 'abonoproveedordetalle_mediodepago' => 9, 'abonoproveedordetalle_chequecirculacion' => 10, 'abonoproveedordetalle_fechacobrocheque' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO => array(
            AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO_ABONO,
            AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO_EGRESO,
        ),
        AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO => array(
            AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO_CHEQUE,
            AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO_EFECTIVO,
            AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO_TRANSFERENCIA,
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
        $toNames = AbonoproveedordetallePeer::getFieldNames($toType);
        $key = isset(AbonoproveedordetallePeer::$fieldKeys[$fromType][$name]) ? AbonoproveedordetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AbonoproveedordetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AbonoproveedordetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AbonoproveedordetallePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return AbonoproveedordetallePeer::$enumValueSets;
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
        $valueSets = AbonoproveedordetallePeer::getValueSets();

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
        $values = AbonoproveedordetallePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. AbonoproveedordetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AbonoproveedordetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::IDABONOPROVEEDOR);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::IDCUENTABANCARIA);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::IDUSUARIO);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHAABONO);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CANTIDAD);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_TIPO);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_REFERENCIA);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_COMPROBANTE);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_MEDIODEPAGO);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_CHEQUECIRCULACION);
            $criteria->addSelectColumn(AbonoproveedordetallePeer::ABONOPROVEEDORDETALLE_FECHACOBROCHEQUE);
        } else {
            $criteria->addSelectColumn($alias . '.idabonoproveedordetalle');
            $criteria->addSelectColumn($alias . '.idabonoproveedor');
            $criteria->addSelectColumn($alias . '.idcuentabancaria');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_fechaabono');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_cantidad');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_tipo');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_referencia');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_comprobante');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_mediodepago');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_chequecirculacion');
            $criteria->addSelectColumn($alias . '.abonoproveedordetalle_fechacobrocheque');
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
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Abonoproveedordetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AbonoproveedordetallePeer::doSelect($critcopy, $con);
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
        return AbonoproveedordetallePeer::populateObjects(AbonoproveedordetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

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
     * @param Abonoproveedordetalle $obj A Abonoproveedordetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdabonoproveedordetalle();
            } // if key === null
            AbonoproveedordetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Abonoproveedordetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Abonoproveedordetalle) {
                $key = (string) $value->getIdabonoproveedordetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Abonoproveedordetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AbonoproveedordetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Abonoproveedordetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AbonoproveedordetallePeer::$instances[$key])) {
                return AbonoproveedordetallePeer::$instances[$key];
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
        foreach (AbonoproveedordetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AbonoproveedordetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to abonoproveedordetalle
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
        $cls = AbonoproveedordetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AbonoproveedordetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AbonoproveedordetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Abonoproveedordetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AbonoproveedordetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AbonoproveedordetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AbonoproveedordetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Abonoproveedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAbonoproveedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

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
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

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
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Abonoproveedordetalle objects pre-filled with their Abonoproveedor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Abonoproveedordetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAbonoproveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);
        }

        AbonoproveedordetallePeer::addSelectColumns($criteria);
        $startcol = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;
        AbonoproveedorPeer::addSelectColumns($criteria);

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AbonoproveedordetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AbonoproveedordetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AbonoproveedordetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = AbonoproveedorPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = AbonoproveedorPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AbonoproveedorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    AbonoproveedorPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Abonoproveedordetalle) to $obj2 (Abonoproveedor)
                $obj2->addAbonoproveedordetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Abonoproveedordetalle objects pre-filled with their Cuentabancaria objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Abonoproveedordetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCuentabancaria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);
        }

        AbonoproveedordetallePeer::addSelectColumns($criteria);
        $startcol = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;
        CuentabancariaPeer::addSelectColumns($criteria);

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AbonoproveedordetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AbonoproveedordetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AbonoproveedordetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Abonoproveedordetalle) to $obj2 (Cuentabancaria)
                $obj2->addAbonoproveedordetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Abonoproveedordetalle objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Abonoproveedordetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);
        }

        AbonoproveedordetallePeer::addSelectColumns($criteria);
        $startcol = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AbonoproveedordetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AbonoproveedordetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AbonoproveedordetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Abonoproveedordetalle) to $obj2 (Usuario)
                $obj2->addAbonoproveedordetalle($obj1);

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
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Abonoproveedordetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Abonoproveedordetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);
        }

        AbonoproveedordetallePeer::addSelectColumns($criteria);
        $startcol2 = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;

        AbonoproveedorPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AbonoproveedorPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AbonoproveedordetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AbonoproveedordetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AbonoproveedordetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Abonoproveedor rows

            $key2 = AbonoproveedorPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = AbonoproveedorPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = AbonoproveedorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AbonoproveedorPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj2 (Abonoproveedor)
                $obj2->addAbonoproveedordetalle($obj1);
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

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj3 (Cuentabancaria)
                $obj3->addAbonoproveedordetalle($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = UsuarioPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsuarioPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj4 (Usuario)
                $obj4->addAbonoproveedordetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Abonoproveedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAbonoproveedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AbonoproveedordetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

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
     * Selects a collection of Abonoproveedordetalle objects pre-filled with all related objects except Abonoproveedor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Abonoproveedordetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAbonoproveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);
        }

        AbonoproveedordetallePeer::addSelectColumns($criteria);
        $startcol2 = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AbonoproveedordetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AbonoproveedordetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AbonoproveedordetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj2 (Cuentabancaria)
                $obj2->addAbonoproveedordetalle($obj1);

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

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj3 (Usuario)
                $obj3->addAbonoproveedordetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Abonoproveedordetalle objects pre-filled with all related objects except Cuentabancaria.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Abonoproveedordetalle objects.
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
            $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);
        }

        AbonoproveedordetallePeer::addSelectColumns($criteria);
        $startcol2 = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;

        AbonoproveedorPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AbonoproveedorPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AbonoproveedordetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AbonoproveedordetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AbonoproveedordetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Abonoproveedor rows

                $key2 = AbonoproveedorPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AbonoproveedorPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AbonoproveedorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AbonoproveedorPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj2 (Abonoproveedor)
                $obj2->addAbonoproveedordetalle($obj1);

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

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj3 (Usuario)
                $obj3->addAbonoproveedordetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Abonoproveedordetalle objects pre-filled with all related objects except Usuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Abonoproveedordetalle objects.
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
            $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);
        }

        AbonoproveedordetallePeer::addSelectColumns($criteria);
        $startcol2 = AbonoproveedordetallePeer::NUM_HYDRATE_COLUMNS;

        AbonoproveedorPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AbonoproveedorPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AbonoproveedordetallePeer::IDABONOPROVEEDOR, AbonoproveedorPeer::IDABONOPROVEEDOR, $join_behavior);

        $criteria->addJoin(AbonoproveedordetallePeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AbonoproveedordetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AbonoproveedordetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AbonoproveedordetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AbonoproveedordetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Abonoproveedor rows

                $key2 = AbonoproveedorPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = AbonoproveedorPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = AbonoproveedorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    AbonoproveedorPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj2 (Abonoproveedor)
                $obj2->addAbonoproveedordetalle($obj1);

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

                // Add the $obj1 (Abonoproveedordetalle) to the collection in $obj3 (Cuentabancaria)
                $obj3->addAbonoproveedordetalle($obj1);

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
        return Propel::getDatabaseMap(AbonoproveedordetallePeer::DATABASE_NAME)->getTable(AbonoproveedordetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAbonoproveedordetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAbonoproveedordetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AbonoproveedordetalleTableMap());
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
        return AbonoproveedordetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Abonoproveedordetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Abonoproveedordetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Abonoproveedordetalle object
        }

        if ($criteria->containsKey(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE) && $criteria->keyContainsValue(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Abonoproveedordetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Abonoproveedordetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AbonoproveedordetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE);
            $value = $criteria->remove(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE);
            if ($value) {
                $selectCriteria->add(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AbonoproveedordetallePeer::TABLE_NAME);
            }

        } else { // $values is Abonoproveedordetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the abonoproveedordetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AbonoproveedordetallePeer::TABLE_NAME, $con, AbonoproveedordetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AbonoproveedordetallePeer::clearInstancePool();
            AbonoproveedordetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Abonoproveedordetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Abonoproveedordetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AbonoproveedordetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Abonoproveedordetalle) { // it's a model object
            // invalidate the cache for this single object
            AbonoproveedordetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AbonoproveedordetallePeer::DATABASE_NAME);
            $criteria->add(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AbonoproveedordetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AbonoproveedordetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AbonoproveedordetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Abonoproveedordetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Abonoproveedordetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AbonoproveedordetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AbonoproveedordetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(AbonoproveedordetallePeer::DATABASE_NAME, AbonoproveedordetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Abonoproveedordetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AbonoproveedordetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AbonoproveedordetallePeer::DATABASE_NAME);
        $criteria->add(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $pk);

        $v = AbonoproveedordetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Abonoproveedordetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AbonoproveedordetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AbonoproveedordetallePeer::DATABASE_NAME);
            $criteria->add(AbonoproveedordetallePeer::IDABONOPROVEEDORDETALLE, $pks, Criteria::IN);
            $objs = AbonoproveedordetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAbonoproveedordetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAbonoproveedordetallePeer::buildTableMap();

