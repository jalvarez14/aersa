<?php


/**
 * Base static class for performing query and update operations on the 'devoluciondetalle' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseDevoluciondetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'devoluciondetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Devoluciondetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DevoluciondetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the iddevoluciondetalle field */
    const IDDEVOLUCIONDETALLE = 'devoluciondetalle.iddevoluciondetalle';

    /** the column name for the iddevolucion field */
    const IDDEVOLUCION = 'devoluciondetalle.iddevolucion';

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'devoluciondetalle.idproducto';

    /** the column name for the idalmacen field */
    const IDALMACEN = 'devoluciondetalle.idalmacen';

    /** the column name for the devoluciondetalle_cantidad field */
    const DEVOLUCIONDETALLE_CANTIDAD = 'devoluciondetalle.devoluciondetalle_cantidad';

    /** the column name for the devoluciondetalle_revisada field */
    const DEVOLUCIONDETALLE_REVISADA = 'devoluciondetalle.devoluciondetalle_revisada';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Devoluciondetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Devoluciondetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DevoluciondetallePeer::$fieldNames[DevoluciondetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Iddevoluciondetalle', 'Iddevolucion', 'Idproducto', 'Idalmacen', 'DevoluciondetalleCantidad', 'DevoluciondetalleRevisada', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddevoluciondetalle', 'iddevolucion', 'idproducto', 'idalmacen', 'devoluciondetalleCantidad', 'devoluciondetalleRevisada', ),
        BasePeer::TYPE_COLNAME => array (DevoluciondetallePeer::IDDEVOLUCIONDETALLE, DevoluciondetallePeer::IDDEVOLUCION, DevoluciondetallePeer::IDPRODUCTO, DevoluciondetallePeer::IDALMACEN, DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD, DevoluciondetallePeer::DEVOLUCIONDETALLE_REVISADA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDEVOLUCIONDETALLE', 'IDDEVOLUCION', 'IDPRODUCTO', 'IDALMACEN', 'DEVOLUCIONDETALLE_CANTIDAD', 'DEVOLUCIONDETALLE_REVISADA', ),
        BasePeer::TYPE_FIELDNAME => array ('iddevoluciondetalle', 'iddevolucion', 'idproducto', 'idalmacen', 'devoluciondetalle_cantidad', 'devoluciondetalle_revisada', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DevoluciondetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Iddevoluciondetalle' => 0, 'Iddevolucion' => 1, 'Idproducto' => 2, 'Idalmacen' => 3, 'DevoluciondetalleCantidad' => 4, 'DevoluciondetalleRevisada' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddevoluciondetalle' => 0, 'iddevolucion' => 1, 'idproducto' => 2, 'idalmacen' => 3, 'devoluciondetalleCantidad' => 4, 'devoluciondetalleRevisada' => 5, ),
        BasePeer::TYPE_COLNAME => array (DevoluciondetallePeer::IDDEVOLUCIONDETALLE => 0, DevoluciondetallePeer::IDDEVOLUCION => 1, DevoluciondetallePeer::IDPRODUCTO => 2, DevoluciondetallePeer::IDALMACEN => 3, DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD => 4, DevoluciondetallePeer::DEVOLUCIONDETALLE_REVISADA => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDEVOLUCIONDETALLE' => 0, 'IDDEVOLUCION' => 1, 'IDPRODUCTO' => 2, 'IDALMACEN' => 3, 'DEVOLUCIONDETALLE_CANTIDAD' => 4, 'DEVOLUCIONDETALLE_REVISADA' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('iddevoluciondetalle' => 0, 'iddevolucion' => 1, 'idproducto' => 2, 'idalmacen' => 3, 'devoluciondetalle_cantidad' => 4, 'devoluciondetalle_revisada' => 5, ),
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
        $toNames = DevoluciondetallePeer::getFieldNames($toType);
        $key = isset(DevoluciondetallePeer::$fieldKeys[$fromType][$name]) ? DevoluciondetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DevoluciondetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DevoluciondetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DevoluciondetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DevoluciondetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DevoluciondetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DevoluciondetallePeer::IDDEVOLUCIONDETALLE);
            $criteria->addSelectColumn(DevoluciondetallePeer::IDDEVOLUCION);
            $criteria->addSelectColumn(DevoluciondetallePeer::IDPRODUCTO);
            $criteria->addSelectColumn(DevoluciondetallePeer::IDALMACEN);
            $criteria->addSelectColumn(DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD);
            $criteria->addSelectColumn(DevoluciondetallePeer::DEVOLUCIONDETALLE_REVISADA);
        } else {
            $criteria->addSelectColumn($alias . '.iddevoluciondetalle');
            $criteria->addSelectColumn($alias . '.iddevolucion');
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.idalmacen');
            $criteria->addSelectColumn($alias . '.devoluciondetalle_cantidad');
            $criteria->addSelectColumn($alias . '.devoluciondetalle_revisada');
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
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Devoluciondetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DevoluciondetallePeer::doSelect($critcopy, $con);
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
        return DevoluciondetallePeer::populateObjects(DevoluciondetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

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
     * @param Devoluciondetalle $obj A Devoluciondetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIddevoluciondetalle();
            } // if key === null
            DevoluciondetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Devoluciondetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Devoluciondetalle) {
                $key = (string) $value->getIddevoluciondetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Devoluciondetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DevoluciondetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Devoluciondetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DevoluciondetallePeer::$instances[$key])) {
                return DevoluciondetallePeer::$instances[$key];
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
        foreach (DevoluciondetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DevoluciondetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to devoluciondetalle
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
        $cls = DevoluciondetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DevoluciondetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DevoluciondetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Devoluciondetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DevoluciondetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DevoluciondetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DevoluciondetallePeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Devolucion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDevolucion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Producto table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProducto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Devoluciondetalle objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devoluciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);
        }

        DevoluciondetallePeer::addSelectColumns($criteria);
        $startcol = DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevoluciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevoluciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevoluciondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devoluciondetalle) to $obj2 (Almacen)
                $obj2->addDevoluciondetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devoluciondetalle objects pre-filled with their Devolucion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devoluciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDevolucion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);
        }

        DevoluciondetallePeer::addSelectColumns($criteria);
        $startcol = DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;
        DevolucionPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevoluciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevoluciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevoluciondetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = DevolucionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = DevolucionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DevolucionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    DevolucionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Devoluciondetalle) to $obj2 (Devolucion)
                $obj2->addDevoluciondetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devoluciondetalle objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devoluciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);
        }

        DevoluciondetallePeer::addSelectColumns($criteria);
        $startcol = DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevoluciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevoluciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevoluciondetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProductoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProductoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProductoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Devoluciondetalle) to $obj2 (Producto)
                $obj2->addDevoluciondetalle($obj1);

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
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Devoluciondetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devoluciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);
        }

        DevoluciondetallePeer::addSelectColumns($criteria);
        $startcol2 = DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        DevolucionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DevolucionPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevoluciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevoluciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevoluciondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj2 (Almacen)
                $obj2->addDevoluciondetalle($obj1);
            } // if joined row not null

            // Add objects for joined Devolucion rows

            $key3 = DevolucionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = DevolucionPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = DevolucionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DevolucionPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj3 (Devolucion)
                $obj3->addDevoluciondetalle($obj1);
            } // if joined row not null

            // Add objects for joined Producto rows

            $key4 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ProductoPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ProductoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProductoPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj4 (Producto)
                $obj4->addDevoluciondetalle($obj1);
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
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Devolucion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDevolucion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Producto table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProducto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevoluciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);

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
     * Selects a collection of Devoluciondetalle objects pre-filled with all related objects except Almacen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devoluciondetalle objects.
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
            $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);
        }

        DevoluciondetallePeer::addSelectColumns($criteria);
        $startcol2 = DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;

        DevolucionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DevolucionPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevoluciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevoluciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevoluciondetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Devolucion rows

                $key2 = DevolucionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DevolucionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DevolucionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DevolucionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj2 (Devolucion)
                $obj2->addDevoluciondetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Producto rows

                $key3 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProductoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProductoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj3 (Producto)
                $obj3->addDevoluciondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devoluciondetalle objects pre-filled with all related objects except Devolucion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devoluciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDevolucion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);
        }

        DevoluciondetallePeer::addSelectColumns($criteria);
        $startcol2 = DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevoluciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevoluciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevoluciondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj2 (Almacen)
                $obj2->addDevoluciondetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Producto rows

                $key3 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProductoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProductoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj3 (Producto)
                $obj3->addDevoluciondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devoluciondetalle objects pre-filled with all related objects except Producto.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devoluciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);
        }

        DevoluciondetallePeer::addSelectColumns($criteria);
        $startcol2 = DevoluciondetallePeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        DevolucionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + DevolucionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DevoluciondetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevoluciondetallePeer::IDDEVOLUCION, DevolucionPeer::IDDEVOLUCION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevoluciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevoluciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevoluciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevoluciondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj2 (Almacen)
                $obj2->addDevoluciondetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Devolucion rows

                $key3 = DevolucionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = DevolucionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = DevolucionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    DevolucionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Devoluciondetalle) to the collection in $obj3 (Devolucion)
                $obj3->addDevoluciondetalle($obj1);

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
        return Propel::getDatabaseMap(DevoluciondetallePeer::DATABASE_NAME)->getTable(DevoluciondetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDevoluciondetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDevoluciondetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DevoluciondetalleTableMap());
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
        return DevoluciondetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Devoluciondetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Devoluciondetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Devoluciondetalle object
        }

        if ($criteria->containsKey(DevoluciondetallePeer::IDDEVOLUCIONDETALLE) && $criteria->keyContainsValue(DevoluciondetallePeer::IDDEVOLUCIONDETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DevoluciondetallePeer::IDDEVOLUCIONDETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Devoluciondetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Devoluciondetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DevoluciondetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DevoluciondetallePeer::IDDEVOLUCIONDETALLE);
            $value = $criteria->remove(DevoluciondetallePeer::IDDEVOLUCIONDETALLE);
            if ($value) {
                $selectCriteria->add(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DevoluciondetallePeer::TABLE_NAME);
            }

        } else { // $values is Devoluciondetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the devoluciondetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(DevoluciondetallePeer::TABLE_NAME, $con, DevoluciondetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DevoluciondetallePeer::clearInstancePool();
            DevoluciondetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Devoluciondetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Devoluciondetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            DevoluciondetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Devoluciondetalle) { // it's a model object
            // invalidate the cache for this single object
            DevoluciondetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DevoluciondetallePeer::DATABASE_NAME);
            $criteria->add(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                DevoluciondetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(DevoluciondetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DevoluciondetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Devoluciondetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Devoluciondetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DevoluciondetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DevoluciondetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(DevoluciondetallePeer::DATABASE_NAME, DevoluciondetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Devoluciondetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DevoluciondetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DevoluciondetallePeer::DATABASE_NAME);
        $criteria->add(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $pk);

        $v = DevoluciondetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Devoluciondetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DevoluciondetallePeer::DATABASE_NAME);
            $criteria->add(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $pks, Criteria::IN);
            $objs = DevoluciondetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDevoluciondetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDevoluciondetallePeer::buildTableMap();

