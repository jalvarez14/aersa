<?php


/**
 * Base static class for performing query and update operations on the 'contrarecibo' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseContrareciboPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'contrarecibo';

    /** the related Propel class for this table */
    const OM_CLASS = 'Contrarecibo';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ContrareciboTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the idcontrarecibo field */
    const IDCONTRARECIBO = 'contrarecibo.idcontrarecibo';

    /** the column name for the contrarecibo_moneda field */
    const CONTRARECIBO_MONEDA = 'contrarecibo.contrarecibo_moneda';

    /** the column name for the contrarecibo_total field */
    const CONTRARECIBO_TOTAL = 'contrarecibo.contrarecibo_total';

    /** the column name for the idempresaproveedor field */
    const IDEMPRESAPROVEEDOR = 'contrarecibo.idempresaproveedor';

    /** the column name for the idsucursalproveedor field */
    const IDSUCURSALPROVEEDOR = 'contrarecibo.idsucursalproveedor';

    /** the column name for the idempresacliente field */
    const IDEMPRESACLIENTE = 'contrarecibo.idempresacliente';

    /** the column name for the idsucursalcliente field */
    const IDSUCURSALCLIENTE = 'contrarecibo.idsucursalcliente';

    /** the column name for the contrarecibo_fechacreacion field */
    const CONTRARECIBO_FECHACREACION = 'contrarecibo.contrarecibo_fechacreacion';

    /** the column name for the contrarecibo_estatus field */
    const CONTRARECIBO_ESTATUS = 'contrarecibo.contrarecibo_estatus';

    /** the column name for the contrarecibo_fechapago field */
    const CONTRARECIBO_FECHAPAGO = 'contrarecibo.contrarecibo_fechapago';

    /** the column name for the contrarecibo_fechavalidacion field */
    const CONTRARECIBO_FECHAVALIDACION = 'contrarecibo.contrarecibo_fechavalidacion';

    /** The enumerated values for the contrarecibo_moneda field */
    const CONTRARECIBO_MONEDA_MXN = 'mxn';
    const CONTRARECIBO_MONEDA_USD = 'usd';

    /** The enumerated values for the contrarecibo_estatus field */
    const CONTRARECIBO_ESTATUS_GENERADO = 'generado';
    const CONTRARECIBO_ESTATUS_REVISION = 'revision';
    const CONTRARECIBO_ESTATUS_REVISADO = 'revisado';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Contrarecibo objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Contrarecibo[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ContrareciboPeer::$fieldNames[ContrareciboPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcontrarecibo', 'ContrareciboMoneda', 'ContrareciboTotal', 'Idempresaproveedor', 'Idsucursalproveedor', 'Idempresacliente', 'Idsucursalcliente', 'ContrareciboFechacreacion', 'ContrareciboEstatus', 'ContrareciboFechapago', 'ContrareciboFechavalidacion', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcontrarecibo', 'contrareciboMoneda', 'contrareciboTotal', 'idempresaproveedor', 'idsucursalproveedor', 'idempresacliente', 'idsucursalcliente', 'contrareciboFechacreacion', 'contrareciboEstatus', 'contrareciboFechapago', 'contrareciboFechavalidacion', ),
        BasePeer::TYPE_COLNAME => array (ContrareciboPeer::IDCONTRARECIBO, ContrareciboPeer::CONTRARECIBO_MONEDA, ContrareciboPeer::CONTRARECIBO_TOTAL, ContrareciboPeer::IDEMPRESAPROVEEDOR, ContrareciboPeer::IDSUCURSALPROVEEDOR, ContrareciboPeer::IDEMPRESACLIENTE, ContrareciboPeer::IDSUCURSALCLIENTE, ContrareciboPeer::CONTRARECIBO_FECHACREACION, ContrareciboPeer::CONTRARECIBO_ESTATUS, ContrareciboPeer::CONTRARECIBO_FECHAPAGO, ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCONTRARECIBO', 'CONTRARECIBO_MONEDA', 'CONTRARECIBO_TOTAL', 'IDEMPRESAPROVEEDOR', 'IDSUCURSALPROVEEDOR', 'IDEMPRESACLIENTE', 'IDSUCURSALCLIENTE', 'CONTRARECIBO_FECHACREACION', 'CONTRARECIBO_ESTATUS', 'CONTRARECIBO_FECHAPAGO', 'CONTRARECIBO_FECHAVALIDACION', ),
        BasePeer::TYPE_FIELDNAME => array ('idcontrarecibo', 'contrarecibo_moneda', 'contrarecibo_total', 'idempresaproveedor', 'idsucursalproveedor', 'idempresacliente', 'idsucursalcliente', 'contrarecibo_fechacreacion', 'contrarecibo_estatus', 'contrarecibo_fechapago', 'contrarecibo_fechavalidacion', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ContrareciboPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcontrarecibo' => 0, 'ContrareciboMoneda' => 1, 'ContrareciboTotal' => 2, 'Idempresaproveedor' => 3, 'Idsucursalproveedor' => 4, 'Idempresacliente' => 5, 'Idsucursalcliente' => 6, 'ContrareciboFechacreacion' => 7, 'ContrareciboEstatus' => 8, 'ContrareciboFechapago' => 9, 'ContrareciboFechavalidacion' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcontrarecibo' => 0, 'contrareciboMoneda' => 1, 'contrareciboTotal' => 2, 'idempresaproveedor' => 3, 'idsucursalproveedor' => 4, 'idempresacliente' => 5, 'idsucursalcliente' => 6, 'contrareciboFechacreacion' => 7, 'contrareciboEstatus' => 8, 'contrareciboFechapago' => 9, 'contrareciboFechavalidacion' => 10, ),
        BasePeer::TYPE_COLNAME => array (ContrareciboPeer::IDCONTRARECIBO => 0, ContrareciboPeer::CONTRARECIBO_MONEDA => 1, ContrareciboPeer::CONTRARECIBO_TOTAL => 2, ContrareciboPeer::IDEMPRESAPROVEEDOR => 3, ContrareciboPeer::IDSUCURSALPROVEEDOR => 4, ContrareciboPeer::IDEMPRESACLIENTE => 5, ContrareciboPeer::IDSUCURSALCLIENTE => 6, ContrareciboPeer::CONTRARECIBO_FECHACREACION => 7, ContrareciboPeer::CONTRARECIBO_ESTATUS => 8, ContrareciboPeer::CONTRARECIBO_FECHAPAGO => 9, ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCONTRARECIBO' => 0, 'CONTRARECIBO_MONEDA' => 1, 'CONTRARECIBO_TOTAL' => 2, 'IDEMPRESAPROVEEDOR' => 3, 'IDSUCURSALPROVEEDOR' => 4, 'IDEMPRESACLIENTE' => 5, 'IDSUCURSALCLIENTE' => 6, 'CONTRARECIBO_FECHACREACION' => 7, 'CONTRARECIBO_ESTATUS' => 8, 'CONTRARECIBO_FECHAPAGO' => 9, 'CONTRARECIBO_FECHAVALIDACION' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('idcontrarecibo' => 0, 'contrarecibo_moneda' => 1, 'contrarecibo_total' => 2, 'idempresaproveedor' => 3, 'idsucursalproveedor' => 4, 'idempresacliente' => 5, 'idsucursalcliente' => 6, 'contrarecibo_fechacreacion' => 7, 'contrarecibo_estatus' => 8, 'contrarecibo_fechapago' => 9, 'contrarecibo_fechavalidacion' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ContrareciboPeer::CONTRARECIBO_MONEDA => array(
            ContrareciboPeer::CONTRARECIBO_MONEDA_MXN,
            ContrareciboPeer::CONTRARECIBO_MONEDA_USD,
        ),
        ContrareciboPeer::CONTRARECIBO_ESTATUS => array(
            ContrareciboPeer::CONTRARECIBO_ESTATUS_GENERADO,
            ContrareciboPeer::CONTRARECIBO_ESTATUS_REVISION,
            ContrareciboPeer::CONTRARECIBO_ESTATUS_REVISADO,
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
        $toNames = ContrareciboPeer::getFieldNames($toType);
        $key = isset(ContrareciboPeer::$fieldKeys[$fromType][$name]) ? ContrareciboPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ContrareciboPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ContrareciboPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ContrareciboPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ContrareciboPeer::$enumValueSets;
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
        $valueSets = ContrareciboPeer::getValueSets();

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
        $values = ContrareciboPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ContrareciboPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ContrareciboPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ContrareciboPeer::IDCONTRARECIBO);
            $criteria->addSelectColumn(ContrareciboPeer::CONTRARECIBO_MONEDA);
            $criteria->addSelectColumn(ContrareciboPeer::CONTRARECIBO_TOTAL);
            $criteria->addSelectColumn(ContrareciboPeer::IDEMPRESAPROVEEDOR);
            $criteria->addSelectColumn(ContrareciboPeer::IDSUCURSALPROVEEDOR);
            $criteria->addSelectColumn(ContrareciboPeer::IDEMPRESACLIENTE);
            $criteria->addSelectColumn(ContrareciboPeer::IDSUCURSALCLIENTE);
            $criteria->addSelectColumn(ContrareciboPeer::CONTRARECIBO_FECHACREACION);
            $criteria->addSelectColumn(ContrareciboPeer::CONTRARECIBO_ESTATUS);
            $criteria->addSelectColumn(ContrareciboPeer::CONTRARECIBO_FECHAPAGO);
            $criteria->addSelectColumn(ContrareciboPeer::CONTRARECIBO_FECHAVALIDACION);
        } else {
            $criteria->addSelectColumn($alias . '.idcontrarecibo');
            $criteria->addSelectColumn($alias . '.contrarecibo_moneda');
            $criteria->addSelectColumn($alias . '.contrarecibo_total');
            $criteria->addSelectColumn($alias . '.idempresaproveedor');
            $criteria->addSelectColumn($alias . '.idsucursalproveedor');
            $criteria->addSelectColumn($alias . '.idempresacliente');
            $criteria->addSelectColumn($alias . '.idsucursalcliente');
            $criteria->addSelectColumn($alias . '.contrarecibo_fechacreacion');
            $criteria->addSelectColumn($alias . '.contrarecibo_estatus');
            $criteria->addSelectColumn($alias . '.contrarecibo_fechapago');
            $criteria->addSelectColumn($alias . '.contrarecibo_fechavalidacion');
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
        $criteria->setPrimaryTableName(ContrareciboPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ContrareciboPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ContrareciboPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Contrarecibo
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ContrareciboPeer::doSelect($critcopy, $con);
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
        return ContrareciboPeer::populateObjects(ContrareciboPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ContrareciboPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ContrareciboPeer::DATABASE_NAME);

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
     * @param Contrarecibo $obj A Contrarecibo object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcontrarecibo();
            } // if key === null
            ContrareciboPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Contrarecibo object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Contrarecibo) {
                $key = (string) $value->getIdcontrarecibo();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Contrarecibo object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ContrareciboPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Contrarecibo Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ContrareciboPeer::$instances[$key])) {
                return ContrareciboPeer::$instances[$key];
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
        foreach (ContrareciboPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ContrareciboPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to contrarecibo
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CompraPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompraPeer::clearInstancePool();
        // Invalidate objects in ContrarecibodetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ContrarecibodetallePeer::clearInstancePool();
        // Invalidate objects in EventocontrareciboPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        EventocontrareciboPeer::clearInstancePool();
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
        $cls = ContrareciboPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ContrareciboPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ContrareciboPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ContrareciboPeer::addInstanceToPool($obj, $key);
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
     * @return array (Contrarecibo object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ContrareciboPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ContrareciboPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ContrareciboPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ContrareciboPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ContrareciboPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(ContrareciboPeer::DATABASE_NAME)->getTable(ContrareciboPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseContrareciboPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseContrareciboPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ContrareciboTableMap());
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
        return ContrareciboPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Contrarecibo or Criteria object.
     *
     * @param      mixed $values Criteria or Contrarecibo object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Contrarecibo object
        }

        if ($criteria->containsKey(ContrareciboPeer::IDCONTRARECIBO) && $criteria->keyContainsValue(ContrareciboPeer::IDCONTRARECIBO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ContrareciboPeer::IDCONTRARECIBO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ContrareciboPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Contrarecibo or Criteria object.
     *
     * @param      mixed $values Criteria or Contrarecibo object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ContrareciboPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ContrareciboPeer::IDCONTRARECIBO);
            $value = $criteria->remove(ContrareciboPeer::IDCONTRARECIBO);
            if ($value) {
                $selectCriteria->add(ContrareciboPeer::IDCONTRARECIBO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ContrareciboPeer::TABLE_NAME);
            }

        } else { // $values is Contrarecibo object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ContrareciboPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the contrarecibo table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ContrareciboPeer::doOnDeleteCascade(new Criteria(ContrareciboPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ContrareciboPeer::TABLE_NAME, $con, ContrareciboPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ContrareciboPeer::clearInstancePool();
            ContrareciboPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Contrarecibo or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Contrarecibo object or primary key or array of primary keys
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
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Contrarecibo) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ContrareciboPeer::DATABASE_NAME);
            $criteria->add(ContrareciboPeer::IDCONTRARECIBO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ContrareciboPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ContrareciboPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ContrareciboPeer::clearInstancePool();
            } elseif ($values instanceof Contrarecibo) { // it's a model object
                ContrareciboPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ContrareciboPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ContrareciboPeer::clearRelatedInstancePool();
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
        $objects = ContrareciboPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Compra objects
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);

            $criteria->add(CompraPeer::IDCONTRARECIBO, $obj->getIdcontrarecibo());
            $affectedRows += CompraPeer::doDelete($criteria, $con);

            // delete related Contrarecibodetalle objects
            $criteria = new Criteria(ContrarecibodetallePeer::DATABASE_NAME);

            $criteria->add(ContrarecibodetallePeer::IDCONTRARECIBO, $obj->getIdcontrarecibo());
            $affectedRows += ContrarecibodetallePeer::doDelete($criteria, $con);

            // delete related Eventocontrarecibo objects
            $criteria = new Criteria(EventocontrareciboPeer::DATABASE_NAME);

            $criteria->add(EventocontrareciboPeer::IDCONTRARECIBO, $obj->getIdcontrarecibo());
            $affectedRows += EventocontrareciboPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Contrarecibo object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Contrarecibo $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ContrareciboPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ContrareciboPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ContrareciboPeer::DATABASE_NAME, ContrareciboPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Contrarecibo
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ContrareciboPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ContrareciboPeer::DATABASE_NAME);
        $criteria->add(ContrareciboPeer::IDCONTRARECIBO, $pk);

        $v = ContrareciboPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Contrarecibo[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ContrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ContrareciboPeer::DATABASE_NAME);
            $criteria->add(ContrareciboPeer::IDCONTRARECIBO, $pks, Criteria::IN);
            $objs = ContrareciboPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseContrareciboPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseContrareciboPeer::buildTableMap();

