<?php


/**
 * Base static class for performing query and update operations on the 'ingresodetalle' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseIngresodetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'ingresodetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ingresodetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'IngresodetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the idingresodetalle field */
    const IDINGRESODETALLE = 'ingresodetalle.idingresodetalle';

    /** the column name for the idingreso field */
    const IDINGRESO = 'ingresodetalle.idingreso';

    /** the column name for the idrubroingreso field */
    const IDRUBROINGRESO = 'ingresodetalle.idrubroingreso';

    /** the column name for the idconceptoingreso field */
    const IDCONCEPTOINGRESO = 'ingresodetalle.idconceptoingreso';

    /** the column name for the ingresodetalle_sub field */
    const INGRESODETALLE_SUB = 'ingresodetalle.ingresodetalle_sub';

    /** the column name for the ingresodetalle_IVA field */
    const INGRESODETALLE_IVA = 'ingresodetalle.ingresodetalle_IVA';

    /** the column name for the ingresodetalle_total field */
    const INGRESODETALLE_TOTAL = 'ingresodetalle.ingresodetalle_total';

    /** the column name for the ingresodetalle_revisada field */
    const INGRESODETALLE_REVISADA = 'ingresodetalle.ingresodetalle_revisada';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ingresodetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ingresodetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. IngresodetallePeer::$fieldNames[IngresodetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idingresodetalle', 'Idingreso', 'Idrubroingreso', 'Idconceptoingreso', 'IngresodetalleSub', 'IngresodetalleIva', 'IngresodetalleTotal', 'IngresodetalleRevisada', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idingresodetalle', 'idingreso', 'idrubroingreso', 'idconceptoingreso', 'ingresodetalleSub', 'ingresodetalleIva', 'ingresodetalleTotal', 'ingresodetalleRevisada', ),
        BasePeer::TYPE_COLNAME => array (IngresodetallePeer::IDINGRESODETALLE, IngresodetallePeer::IDINGRESO, IngresodetallePeer::IDRUBROINGRESO, IngresodetallePeer::IDCONCEPTOINGRESO, IngresodetallePeer::INGRESODETALLE_SUB, IngresodetallePeer::INGRESODETALLE_IVA, IngresodetallePeer::INGRESODETALLE_TOTAL, IngresodetallePeer::INGRESODETALLE_REVISADA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINGRESODETALLE', 'IDINGRESO', 'IDRUBROINGRESO', 'IDCONCEPTOINGRESO', 'INGRESODETALLE_SUB', 'INGRESODETALLE_IVA', 'INGRESODETALLE_TOTAL', 'INGRESODETALLE_REVISADA', ),
        BasePeer::TYPE_FIELDNAME => array ('idingresodetalle', 'idingreso', 'idrubroingreso', 'idconceptoingreso', 'ingresodetalle_sub', 'ingresodetalle_IVA', 'ingresodetalle_total', 'ingresodetalle_revisada', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. IngresodetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idingresodetalle' => 0, 'Idingreso' => 1, 'Idrubroingreso' => 2, 'Idconceptoingreso' => 3, 'IngresodetalleSub' => 4, 'IngresodetalleIva' => 5, 'IngresodetalleTotal' => 6, 'IngresodetalleRevisada' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idingresodetalle' => 0, 'idingreso' => 1, 'idrubroingreso' => 2, 'idconceptoingreso' => 3, 'ingresodetalleSub' => 4, 'ingresodetalleIva' => 5, 'ingresodetalleTotal' => 6, 'ingresodetalleRevisada' => 7, ),
        BasePeer::TYPE_COLNAME => array (IngresodetallePeer::IDINGRESODETALLE => 0, IngresodetallePeer::IDINGRESO => 1, IngresodetallePeer::IDRUBROINGRESO => 2, IngresodetallePeer::IDCONCEPTOINGRESO => 3, IngresodetallePeer::INGRESODETALLE_SUB => 4, IngresodetallePeer::INGRESODETALLE_IVA => 5, IngresodetallePeer::INGRESODETALLE_TOTAL => 6, IngresodetallePeer::INGRESODETALLE_REVISADA => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINGRESODETALLE' => 0, 'IDINGRESO' => 1, 'IDRUBROINGRESO' => 2, 'IDCONCEPTOINGRESO' => 3, 'INGRESODETALLE_SUB' => 4, 'INGRESODETALLE_IVA' => 5, 'INGRESODETALLE_TOTAL' => 6, 'INGRESODETALLE_REVISADA' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('idingresodetalle' => 0, 'idingreso' => 1, 'idrubroingreso' => 2, 'idconceptoingreso' => 3, 'ingresodetalle_sub' => 4, 'ingresodetalle_IVA' => 5, 'ingresodetalle_total' => 6, 'ingresodetalle_revisada' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
        $toNames = IngresodetallePeer::getFieldNames($toType);
        $key = isset(IngresodetallePeer::$fieldKeys[$fromType][$name]) ? IngresodetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(IngresodetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, IngresodetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return IngresodetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. IngresodetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(IngresodetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(IngresodetallePeer::IDINGRESODETALLE);
            $criteria->addSelectColumn(IngresodetallePeer::IDINGRESO);
            $criteria->addSelectColumn(IngresodetallePeer::IDRUBROINGRESO);
            $criteria->addSelectColumn(IngresodetallePeer::IDCONCEPTOINGRESO);
            $criteria->addSelectColumn(IngresodetallePeer::INGRESODETALLE_SUB);
            $criteria->addSelectColumn(IngresodetallePeer::INGRESODETALLE_IVA);
            $criteria->addSelectColumn(IngresodetallePeer::INGRESODETALLE_TOTAL);
            $criteria->addSelectColumn(IngresodetallePeer::INGRESODETALLE_REVISADA);
        } else {
            $criteria->addSelectColumn($alias . '.idingresodetalle');
            $criteria->addSelectColumn($alias . '.idingreso');
            $criteria->addSelectColumn($alias . '.idrubroingreso');
            $criteria->addSelectColumn($alias . '.idconceptoingreso');
            $criteria->addSelectColumn($alias . '.ingresodetalle_sub');
            $criteria->addSelectColumn($alias . '.ingresodetalle_IVA');
            $criteria->addSelectColumn($alias . '.ingresodetalle_total');
            $criteria->addSelectColumn($alias . '.ingresodetalle_revisada');
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
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ingresodetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = IngresodetallePeer::doSelect($critcopy, $con);
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
        return IngresodetallePeer::populateObjects(IngresodetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            IngresodetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

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
     * @param Ingresodetalle $obj A Ingresodetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdingresodetalle();
            } // if key === null
            IngresodetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ingresodetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ingresodetalle) {
                $key = (string) $value->getIdingresodetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ingresodetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(IngresodetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ingresodetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(IngresodetallePeer::$instances[$key])) {
                return IngresodetallePeer::$instances[$key];
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
        foreach (IngresodetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        IngresodetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ingresodetalle
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
        $cls = IngresodetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = IngresodetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                IngresodetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Ingresodetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = IngresodetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = IngresodetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + IngresodetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = IngresodetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            IngresodetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Conceptoingreso table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinConceptoingreso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

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
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Rubroingreso table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRubroingreso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);

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
     * Selects a collection of Ingresodetalle objects pre-filled with their Conceptoingreso objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ingresodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinConceptoingreso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);
        }

        IngresodetallePeer::addSelectColumns($criteria);
        $startcol = IngresodetallePeer::NUM_HYDRATE_COLUMNS;
        ConceptoingresoPeer::addSelectColumns($criteria);

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = IngresodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = IngresodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                IngresodetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ConceptoingresoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ConceptoingresoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConceptoingresoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ConceptoingresoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ingresodetalle) to $obj2 (Conceptoingreso)
                $obj2->addIngresodetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ingresodetalle objects pre-filled with their Ingreso objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ingresodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinIngreso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);
        }

        IngresodetallePeer::addSelectColumns($criteria);
        $startcol = IngresodetallePeer::NUM_HYDRATE_COLUMNS;
        IngresoPeer::addSelectColumns($criteria);

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = IngresodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = IngresodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                IngresodetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ingresodetalle) to $obj2 (Ingreso)
                $obj2->addIngresodetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ingresodetalle objects pre-filled with their Rubroingreso objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ingresodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRubroingreso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);
        }

        IngresodetallePeer::addSelectColumns($criteria);
        $startcol = IngresodetallePeer::NUM_HYDRATE_COLUMNS;
        RubroingresoPeer::addSelectColumns($criteria);

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = IngresodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = IngresodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                IngresodetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RubroingresoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RubroingresoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RubroingresoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RubroingresoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ingresodetalle) to $obj2 (Rubroingreso)
                $obj2->addIngresodetalle($obj1);

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
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);

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
     * Selects a collection of Ingresodetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ingresodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);
        }

        IngresodetallePeer::addSelectColumns($criteria);
        $startcol2 = IngresodetallePeer::NUM_HYDRATE_COLUMNS;

        ConceptoingresoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConceptoingresoPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        RubroingresoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + RubroingresoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = IngresodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = IngresodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                IngresodetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Conceptoingreso rows

            $key2 = ConceptoingresoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ConceptoingresoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConceptoingresoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConceptoingresoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj2 (Conceptoingreso)
                $obj2->addIngresodetalle($obj1);
            } // if joined row not null

            // Add objects for joined Ingreso rows

            $key3 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = IngresoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = IngresoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    IngresoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj3 (Ingreso)
                $obj3->addIngresodetalle($obj1);
            } // if joined row not null

            // Add objects for joined Rubroingreso rows

            $key4 = RubroingresoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = RubroingresoPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = RubroingresoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    RubroingresoPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj4 (Rubroingreso)
                $obj4->addIngresodetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Conceptoingreso table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptConceptoingreso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);

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
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Rubroingreso table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRubroingreso(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            IngresodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

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
     * Selects a collection of Ingresodetalle objects pre-filled with all related objects except Conceptoingreso.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ingresodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptConceptoingreso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);
        }

        IngresodetallePeer::addSelectColumns($criteria);
        $startcol2 = IngresodetallePeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        RubroingresoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RubroingresoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = IngresodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = IngresodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                IngresodetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Ingreso rows

                $key2 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = IngresoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = IngresoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    IngresoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj2 (Ingreso)
                $obj2->addIngresodetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Rubroingreso rows

                $key3 = RubroingresoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RubroingresoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RubroingresoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RubroingresoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj3 (Rubroingreso)
                $obj3->addIngresodetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ingresodetalle objects pre-filled with all related objects except Ingreso.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ingresodetalle objects.
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
            $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);
        }

        IngresodetallePeer::addSelectColumns($criteria);
        $startcol2 = IngresodetallePeer::NUM_HYDRATE_COLUMNS;

        ConceptoingresoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConceptoingresoPeer::NUM_HYDRATE_COLUMNS;

        RubroingresoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RubroingresoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDRUBROINGRESO, RubroingresoPeer::IDRUBROINGRESO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = IngresodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = IngresodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                IngresodetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Conceptoingreso rows

                $key2 = ConceptoingresoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ConceptoingresoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ConceptoingresoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConceptoingresoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj2 (Conceptoingreso)
                $obj2->addIngresodetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Rubroingreso rows

                $key3 = RubroingresoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RubroingresoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RubroingresoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RubroingresoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj3 (Rubroingreso)
                $obj3->addIngresodetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ingresodetalle objects pre-filled with all related objects except Rubroingreso.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ingresodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRubroingreso(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);
        }

        IngresodetallePeer::addSelectColumns($criteria);
        $startcol2 = IngresodetallePeer::NUM_HYDRATE_COLUMNS;

        ConceptoingresoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ConceptoingresoPeer::NUM_HYDRATE_COLUMNS;

        IngresoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + IngresoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(IngresodetallePeer::IDCONCEPTOINGRESO, ConceptoingresoPeer::IDCONCEPTOINGRESO, $join_behavior);

        $criteria->addJoin(IngresodetallePeer::IDINGRESO, IngresoPeer::IDINGRESO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = IngresodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = IngresodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = IngresodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                IngresodetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Conceptoingreso rows

                $key2 = ConceptoingresoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ConceptoingresoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ConceptoingresoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ConceptoingresoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj2 (Conceptoingreso)
                $obj2->addIngresodetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Ingreso rows

                $key3 = IngresoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = IngresoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = IngresoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    IngresoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ingresodetalle) to the collection in $obj3 (Ingreso)
                $obj3->addIngresodetalle($obj1);

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
        return Propel::getDatabaseMap(IngresodetallePeer::DATABASE_NAME)->getTable(IngresodetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseIngresodetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseIngresodetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \IngresodetalleTableMap());
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
        return IngresodetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ingresodetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Ingresodetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ingresodetalle object
        }

        if ($criteria->containsKey(IngresodetallePeer::IDINGRESODETALLE) && $criteria->keyContainsValue(IngresodetallePeer::IDINGRESODETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.IngresodetallePeer::IDINGRESODETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ingresodetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Ingresodetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(IngresodetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(IngresodetallePeer::IDINGRESODETALLE);
            $value = $criteria->remove(IngresodetallePeer::IDINGRESODETALLE);
            if ($value) {
                $selectCriteria->add(IngresodetallePeer::IDINGRESODETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(IngresodetallePeer::TABLE_NAME);
            }

        } else { // $values is Ingresodetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ingresodetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(IngresodetallePeer::TABLE_NAME, $con, IngresodetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            IngresodetallePeer::clearInstancePool();
            IngresodetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ingresodetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ingresodetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            IngresodetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ingresodetalle) { // it's a model object
            // invalidate the cache for this single object
            IngresodetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(IngresodetallePeer::DATABASE_NAME);
            $criteria->add(IngresodetallePeer::IDINGRESODETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                IngresodetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(IngresodetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            IngresodetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ingresodetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ingresodetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(IngresodetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(IngresodetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(IngresodetallePeer::DATABASE_NAME, IngresodetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ingresodetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = IngresodetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(IngresodetallePeer::DATABASE_NAME);
        $criteria->add(IngresodetallePeer::IDINGRESODETALLE, $pk);

        $v = IngresodetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ingresodetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(IngresodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(IngresodetallePeer::DATABASE_NAME);
            $criteria->add(IngresodetallePeer::IDINGRESODETALLE, $pks, Criteria::IN);
            $objs = IngresodetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseIngresodetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseIngresodetallePeer::buildTableMap();

