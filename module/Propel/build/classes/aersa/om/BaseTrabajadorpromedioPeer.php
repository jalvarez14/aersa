<?php


/**
 * Base static class for performing query and update operations on the 'trabajadorpromedio' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseTrabajadorpromedioPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'trabajadorpromedio';

    /** the related Propel class for this table */
    const OM_CLASS = 'Trabajadorpromedio';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TrabajadorpromedioTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the idtrabajadorpromedio field */
    const IDTRABAJADORPROMEDIO = 'trabajadorpromedio.idtrabajadorpromedio';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'trabajadorpromedio.idempresa';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'trabajadorpromedio.idsucursal';

    /** the column name for the trabajadorpromedio_anio field */
    const TRABAJADORPROMEDIO_ANIO = 'trabajadorpromedio.trabajadorpromedio_anio';

    /** the column name for the trabajadorpromedio_mes field */
    const TRABAJADORPROMEDIO_MES = 'trabajadorpromedio.trabajadorpromedio_mes';

    /** the column name for the trabajadorpromedio_empleados field */
    const TRABAJADORPROMEDIO_EMPLEADOS = 'trabajadorpromedio.trabajadorpromedio_empleados';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Trabajadorpromedio objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Trabajadorpromedio[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TrabajadorpromedioPeer::$fieldNames[TrabajadorpromedioPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idtrabajadorpromedio', 'Idempresa', 'Idsucursal', 'TrabajadorpromedioAnio', 'TrabajadorpromedioMes', 'TrabajadorpromedioEmpleados', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtrabajadorpromedio', 'idempresa', 'idsucursal', 'trabajadorpromedioAnio', 'trabajadorpromedioMes', 'trabajadorpromedioEmpleados', ),
        BasePeer::TYPE_COLNAME => array (TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, TrabajadorpromedioPeer::IDEMPRESA, TrabajadorpromedioPeer::IDSUCURSAL, TrabajadorpromedioPeer::TRABAJADORPROMEDIO_ANIO, TrabajadorpromedioPeer::TRABAJADORPROMEDIO_MES, TrabajadorpromedioPeer::TRABAJADORPROMEDIO_EMPLEADOS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTRABAJADORPROMEDIO', 'IDEMPRESA', 'IDSUCURSAL', 'TRABAJADORPROMEDIO_ANIO', 'TRABAJADORPROMEDIO_MES', 'TRABAJADORPROMEDIO_EMPLEADOS', ),
        BasePeer::TYPE_FIELDNAME => array ('idtrabajadorpromedio', 'idempresa', 'idsucursal', 'trabajadorpromedio_anio', 'trabajadorpromedio_mes', 'trabajadorpromedio_empleados', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TrabajadorpromedioPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idtrabajadorpromedio' => 0, 'Idempresa' => 1, 'Idsucursal' => 2, 'TrabajadorpromedioAnio' => 3, 'TrabajadorpromedioMes' => 4, 'TrabajadorpromedioEmpleados' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtrabajadorpromedio' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'trabajadorpromedioAnio' => 3, 'trabajadorpromedioMes' => 4, 'trabajadorpromedioEmpleados' => 5, ),
        BasePeer::TYPE_COLNAME => array (TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO => 0, TrabajadorpromedioPeer::IDEMPRESA => 1, TrabajadorpromedioPeer::IDSUCURSAL => 2, TrabajadorpromedioPeer::TRABAJADORPROMEDIO_ANIO => 3, TrabajadorpromedioPeer::TRABAJADORPROMEDIO_MES => 4, TrabajadorpromedioPeer::TRABAJADORPROMEDIO_EMPLEADOS => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTRABAJADORPROMEDIO' => 0, 'IDEMPRESA' => 1, 'IDSUCURSAL' => 2, 'TRABAJADORPROMEDIO_ANIO' => 3, 'TRABAJADORPROMEDIO_MES' => 4, 'TRABAJADORPROMEDIO_EMPLEADOS' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('idtrabajadorpromedio' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'trabajadorpromedio_anio' => 3, 'trabajadorpromedio_mes' => 4, 'trabajadorpromedio_empleados' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
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
        $toNames = TrabajadorpromedioPeer::getFieldNames($toType);
        $key = isset(TrabajadorpromedioPeer::$fieldKeys[$fromType][$name]) ? TrabajadorpromedioPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TrabajadorpromedioPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TrabajadorpromedioPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TrabajadorpromedioPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TrabajadorpromedioPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TrabajadorpromedioPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO);
            $criteria->addSelectColumn(TrabajadorpromedioPeer::IDEMPRESA);
            $criteria->addSelectColumn(TrabajadorpromedioPeer::IDSUCURSAL);
            $criteria->addSelectColumn(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_ANIO);
            $criteria->addSelectColumn(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_MES);
            $criteria->addSelectColumn(TrabajadorpromedioPeer::TRABAJADORPROMEDIO_EMPLEADOS);
        } else {
            $criteria->addSelectColumn($alias . '.idtrabajadorpromedio');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.trabajadorpromedio_anio');
            $criteria->addSelectColumn($alias . '.trabajadorpromedio_mes');
            $criteria->addSelectColumn($alias . '.trabajadorpromedio_empleados');
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
        $criteria->setPrimaryTableName(TrabajadorpromedioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TrabajadorpromedioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Trabajadorpromedio
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TrabajadorpromedioPeer::doSelect($critcopy, $con);
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
        return TrabajadorpromedioPeer::populateObjects(TrabajadorpromedioPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TrabajadorpromedioPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

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
     * @param Trabajadorpromedio $obj A Trabajadorpromedio object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdtrabajadorpromedio();
            } // if key === null
            TrabajadorpromedioPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Trabajadorpromedio object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Trabajadorpromedio) {
                $key = (string) $value->getIdtrabajadorpromedio();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Trabajadorpromedio object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TrabajadorpromedioPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Trabajadorpromedio Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TrabajadorpromedioPeer::$instances[$key])) {
                return TrabajadorpromedioPeer::$instances[$key];
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
        foreach (TrabajadorpromedioPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TrabajadorpromedioPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to trabajadorpromedio
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
        $cls = TrabajadorpromedioPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TrabajadorpromedioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TrabajadorpromedioPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TrabajadorpromedioPeer::addInstanceToPool($obj, $key);
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
     * @return array (Trabajadorpromedio object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TrabajadorpromedioPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TrabajadorpromedioPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TrabajadorpromedioPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TrabajadorpromedioPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TrabajadorpromedioPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(TrabajadorpromedioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TrabajadorpromedioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TrabajadorpromedioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
        $criteria->setPrimaryTableName(TrabajadorpromedioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TrabajadorpromedioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TrabajadorpromedioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Trabajadorpromedio objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Trabajadorpromedio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);
        }

        TrabajadorpromedioPeer::addSelectColumns($criteria);
        $startcol = TrabajadorpromedioPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(TrabajadorpromedioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TrabajadorpromedioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TrabajadorpromedioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TrabajadorpromedioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TrabajadorpromedioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Trabajadorpromedio) to $obj2 (Empresa)
                $obj2->addTrabajadorpromedio($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Trabajadorpromedio objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Trabajadorpromedio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);
        }

        TrabajadorpromedioPeer::addSelectColumns($criteria);
        $startcol = TrabajadorpromedioPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(TrabajadorpromedioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TrabajadorpromedioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TrabajadorpromedioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TrabajadorpromedioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TrabajadorpromedioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Trabajadorpromedio) to $obj2 (Sucursal)
                $obj2->addTrabajadorpromedio($obj1);

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
        $criteria->setPrimaryTableName(TrabajadorpromedioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TrabajadorpromedioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TrabajadorpromedioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(TrabajadorpromedioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Trabajadorpromedio objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Trabajadorpromedio objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);
        }

        TrabajadorpromedioPeer::addSelectColumns($criteria);
        $startcol2 = TrabajadorpromedioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TrabajadorpromedioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(TrabajadorpromedioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TrabajadorpromedioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TrabajadorpromedioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TrabajadorpromedioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TrabajadorpromedioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Empresa rows

            $key2 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = EmpresaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpresaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpresaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Trabajadorpromedio) to the collection in $obj2 (Empresa)
                $obj2->addTrabajadorpromedio($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key3 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = SucursalPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = SucursalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SucursalPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Trabajadorpromedio) to the collection in $obj3 (Sucursal)
                $obj3->addTrabajadorpromedio($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
        $criteria->setPrimaryTableName(TrabajadorpromedioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TrabajadorpromedioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TrabajadorpromedioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(TrabajadorpromedioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TrabajadorpromedioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TrabajadorpromedioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
     * Selects a collection of Trabajadorpromedio objects pre-filled with all related objects except Empresa.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Trabajadorpromedio objects.
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
            $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);
        }

        TrabajadorpromedioPeer::addSelectColumns($criteria);
        $startcol2 = TrabajadorpromedioPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TrabajadorpromedioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TrabajadorpromedioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TrabajadorpromedioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TrabajadorpromedioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TrabajadorpromedioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Sucursal rows

                $key2 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = SucursalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = SucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SucursalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Trabajadorpromedio) to the collection in $obj2 (Sucursal)
                $obj2->addTrabajadorpromedio($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Trabajadorpromedio objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Trabajadorpromedio objects.
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
            $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);
        }

        TrabajadorpromedioPeer::addSelectColumns($criteria);
        $startcol2 = TrabajadorpromedioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TrabajadorpromedioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TrabajadorpromedioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TrabajadorpromedioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TrabajadorpromedioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TrabajadorpromedioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Empresa rows

                $key2 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = EmpresaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpresaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Trabajadorpromedio) to the collection in $obj2 (Empresa)
                $obj2->addTrabajadorpromedio($obj1);

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
        return Propel::getDatabaseMap(TrabajadorpromedioPeer::DATABASE_NAME)->getTable(TrabajadorpromedioPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTrabajadorpromedioPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTrabajadorpromedioPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TrabajadorpromedioTableMap());
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
        return TrabajadorpromedioPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Trabajadorpromedio or Criteria object.
     *
     * @param      mixed $values Criteria or Trabajadorpromedio object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Trabajadorpromedio object
        }

        if ($criteria->containsKey(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO) && $criteria->keyContainsValue(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Trabajadorpromedio or Criteria object.
     *
     * @param      mixed $values Criteria or Trabajadorpromedio object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TrabajadorpromedioPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO);
            $value = $criteria->remove(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO);
            if ($value) {
                $selectCriteria->add(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TrabajadorpromedioPeer::TABLE_NAME);
            }

        } else { // $values is Trabajadorpromedio object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the trabajadorpromedio table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TrabajadorpromedioPeer::TABLE_NAME, $con, TrabajadorpromedioPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TrabajadorpromedioPeer::clearInstancePool();
            TrabajadorpromedioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Trabajadorpromedio or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Trabajadorpromedio object or primary key or array of primary keys
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
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TrabajadorpromedioPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Trabajadorpromedio) { // it's a model object
            // invalidate the cache for this single object
            TrabajadorpromedioPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TrabajadorpromedioPeer::DATABASE_NAME);
            $criteria->add(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TrabajadorpromedioPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TrabajadorpromedioPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TrabajadorpromedioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Trabajadorpromedio object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Trabajadorpromedio $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TrabajadorpromedioPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TrabajadorpromedioPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TrabajadorpromedioPeer::DATABASE_NAME, TrabajadorpromedioPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Trabajadorpromedio
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TrabajadorpromedioPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TrabajadorpromedioPeer::DATABASE_NAME);
        $criteria->add(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $pk);

        $v = TrabajadorpromedioPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Trabajadorpromedio[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TrabajadorpromedioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TrabajadorpromedioPeer::DATABASE_NAME);
            $criteria->add(TrabajadorpromedioPeer::IDTRABAJADORPROMEDIO, $pks, Criteria::IN);
            $objs = TrabajadorpromedioPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTrabajadorpromedioPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTrabajadorpromedioPeer::buildTableMap();

