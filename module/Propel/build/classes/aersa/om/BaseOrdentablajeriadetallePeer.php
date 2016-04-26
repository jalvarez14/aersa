<?php


/**
 * Base static class for performing query and update operations on the 'ordentablajeriadetalle' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseOrdentablajeriadetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'ordentablajeriadetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ordentablajeriadetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'OrdentablajeriadetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the idordentablajeriadetalle field */
    const IDORDENTABLAJERIADETALLE = 'ordentablajeriadetalle.idordentablajeriadetalle';

    /** the column name for the idordentablajeria field */
    const IDORDENTABLAJERIA = 'ordentablajeriadetalle.idordentablajeria';

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'ordentablajeriadetalle.idproducto';

    /** the column name for the ordentablajeriadetalle_cantidad field */
    const ORDENTABLAJERIADETALLE_CANTIDAD = 'ordentablajeriadetalle.ordentablajeriadetalle_cantidad';

    /** the column name for the ordentablajeriadetalle_pesoporcion field */
    const ORDENTABLAJERIADETALLE_PESOPORCION = 'ordentablajeriadetalle.ordentablajeriadetalle_pesoporcion';

    /** the column name for the ordentablajeriadetalle_precioporcion field */
    const ORDENTABLAJERIADETALLE_PRECIOPORCION = 'ordentablajeriadetalle.ordentablajeriadetalle_precioporcion';

    /** the column name for the ordentablajeriadetalle_pesototal field */
    const ORDENTABLAJERIADETALLE_PESOTOTAL = 'ordentablajeriadetalle.ordentablajeriadetalle_pesototal';

    /** the column name for the ordentablajeriadetalle_subtotal field */
    const ORDENTABLAJERIADETALLE_SUBTOTAL = 'ordentablajeriadetalle.ordentablajeriadetalle_subtotal';

    /** the column name for the ordentablajeriadetalle_revisada field */
    const ORDENTABLAJERIADETALLE_REVISADA = 'ordentablajeriadetalle.ordentablajeriadetalle_revisada';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ordentablajeriadetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ordentablajeriadetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. OrdentablajeriadetallePeer::$fieldNames[OrdentablajeriadetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idordentablajeriadetalle', 'Idordentablajeria', 'Idproducto', 'OrdentablajeriadetalleCantidad', 'OrdentablajeriadetallePesoporcion', 'OrdentablajeriadetallePrecioporcion', 'OrdentablajeriadetallePesototal', 'OrdentablajeriadetalleSubtotal', 'OrdentablajeriadetalleRevisada', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idordentablajeriadetalle', 'idordentablajeria', 'idproducto', 'ordentablajeriadetalleCantidad', 'ordentablajeriadetallePesoporcion', 'ordentablajeriadetallePrecioporcion', 'ordentablajeriadetallePesototal', 'ordentablajeriadetalleSubtotal', 'ordentablajeriadetalleRevisada', ),
        BasePeer::TYPE_COLNAME => array (OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, OrdentablajeriadetallePeer::IDORDENTABLAJERIA, OrdentablajeriadetallePeer::IDPRODUCTO, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDORDENTABLAJERIADETALLE', 'IDORDENTABLAJERIA', 'IDPRODUCTO', 'ORDENTABLAJERIADETALLE_CANTIDAD', 'ORDENTABLAJERIADETALLE_PESOPORCION', 'ORDENTABLAJERIADETALLE_PRECIOPORCION', 'ORDENTABLAJERIADETALLE_PESOTOTAL', 'ORDENTABLAJERIADETALLE_SUBTOTAL', 'ORDENTABLAJERIADETALLE_REVISADA', ),
        BasePeer::TYPE_FIELDNAME => array ('idordentablajeriadetalle', 'idordentablajeria', 'idproducto', 'ordentablajeriadetalle_cantidad', 'ordentablajeriadetalle_pesoporcion', 'ordentablajeriadetalle_precioporcion', 'ordentablajeriadetalle_pesototal', 'ordentablajeriadetalle_subtotal', 'ordentablajeriadetalle_revisada', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. OrdentablajeriadetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idordentablajeriadetalle' => 0, 'Idordentablajeria' => 1, 'Idproducto' => 2, 'OrdentablajeriadetalleCantidad' => 3, 'OrdentablajeriadetallePesoporcion' => 4, 'OrdentablajeriadetallePrecioporcion' => 5, 'OrdentablajeriadetallePesototal' => 6, 'OrdentablajeriadetalleSubtotal' => 7, 'OrdentablajeriadetalleRevisada' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idordentablajeriadetalle' => 0, 'idordentablajeria' => 1, 'idproducto' => 2, 'ordentablajeriadetalleCantidad' => 3, 'ordentablajeriadetallePesoporcion' => 4, 'ordentablajeriadetallePrecioporcion' => 5, 'ordentablajeriadetallePesototal' => 6, 'ordentablajeriadetalleSubtotal' => 7, 'ordentablajeriadetalleRevisada' => 8, ),
        BasePeer::TYPE_COLNAME => array (OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE => 0, OrdentablajeriadetallePeer::IDORDENTABLAJERIA => 1, OrdentablajeriadetallePeer::IDPRODUCTO => 2, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD => 3, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION => 4, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION => 5, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL => 6, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL => 7, OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDORDENTABLAJERIADETALLE' => 0, 'IDORDENTABLAJERIA' => 1, 'IDPRODUCTO' => 2, 'ORDENTABLAJERIADETALLE_CANTIDAD' => 3, 'ORDENTABLAJERIADETALLE_PESOPORCION' => 4, 'ORDENTABLAJERIADETALLE_PRECIOPORCION' => 5, 'ORDENTABLAJERIADETALLE_PESOTOTAL' => 6, 'ORDENTABLAJERIADETALLE_SUBTOTAL' => 7, 'ORDENTABLAJERIADETALLE_REVISADA' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('idordentablajeriadetalle' => 0, 'idordentablajeria' => 1, 'idproducto' => 2, 'ordentablajeriadetalle_cantidad' => 3, 'ordentablajeriadetalle_pesoporcion' => 4, 'ordentablajeriadetalle_precioporcion' => 5, 'ordentablajeriadetalle_pesototal' => 6, 'ordentablajeriadetalle_subtotal' => 7, 'ordentablajeriadetalle_revisada' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $toNames = OrdentablajeriadetallePeer::getFieldNames($toType);
        $key = isset(OrdentablajeriadetallePeer::$fieldKeys[$fromType][$name]) ? OrdentablajeriadetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(OrdentablajeriadetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, OrdentablajeriadetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return OrdentablajeriadetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. OrdentablajeriadetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(OrdentablajeriadetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::IDORDENTABLAJERIA);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::IDPRODUCTO);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_CANTIDAD);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOPORCION);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PRECIOPORCION);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_PESOTOTAL);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_SUBTOTAL);
            $criteria->addSelectColumn(OrdentablajeriadetallePeer::ORDENTABLAJERIADETALLE_REVISADA);
        } else {
            $criteria->addSelectColumn($alias . '.idordentablajeriadetalle');
            $criteria->addSelectColumn($alias . '.idordentablajeria');
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.ordentablajeriadetalle_cantidad');
            $criteria->addSelectColumn($alias . '.ordentablajeriadetalle_pesoporcion');
            $criteria->addSelectColumn($alias . '.ordentablajeriadetalle_precioporcion');
            $criteria->addSelectColumn($alias . '.ordentablajeriadetalle_pesototal');
            $criteria->addSelectColumn($alias . '.ordentablajeriadetalle_subtotal');
            $criteria->addSelectColumn($alias . '.ordentablajeriadetalle_revisada');
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
        $criteria->setPrimaryTableName(OrdentablajeriadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OrdentablajeriadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ordentablajeriadetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = OrdentablajeriadetallePeer::doSelect($critcopy, $con);
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
        return OrdentablajeriadetallePeer::populateObjects(OrdentablajeriadetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            OrdentablajeriadetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

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
     * @param Ordentablajeriadetalle $obj A Ordentablajeriadetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdordentablajeriadetalle();
            } // if key === null
            OrdentablajeriadetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ordentablajeriadetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ordentablajeriadetalle) {
                $key = (string) $value->getIdordentablajeriadetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ordentablajeriadetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(OrdentablajeriadetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ordentablajeriadetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(OrdentablajeriadetallePeer::$instances[$key])) {
                return OrdentablajeriadetallePeer::$instances[$key];
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
        foreach (OrdentablajeriadetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        OrdentablajeriadetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ordentablajeriadetalle
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
        $cls = OrdentablajeriadetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = OrdentablajeriadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = OrdentablajeriadetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                OrdentablajeriadetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Ordentablajeriadetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = OrdentablajeriadetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = OrdentablajeriadetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + OrdentablajeriadetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = OrdentablajeriadetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            OrdentablajeriadetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Ordentablajeria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinOrdentablajeria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OrdentablajeriadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OrdentablajeriadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, OrdentablajeriaPeer::IDORDENTABLAJERIA, $join_behavior);

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
        $criteria->setPrimaryTableName(OrdentablajeriadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OrdentablajeriadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OrdentablajeriadetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Ordentablajeriadetalle objects pre-filled with their Ordentablajeria objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ordentablajeriadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinOrdentablajeria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);
        }

        OrdentablajeriadetallePeer::addSelectColumns($criteria);
        $startcol = OrdentablajeriadetallePeer::NUM_HYDRATE_COLUMNS;
        OrdentablajeriaPeer::addSelectColumns($criteria);

        $criteria->addJoin(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, OrdentablajeriaPeer::IDORDENTABLAJERIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OrdentablajeriadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OrdentablajeriadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OrdentablajeriadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OrdentablajeriadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = OrdentablajeriaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = OrdentablajeriaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OrdentablajeriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    OrdentablajeriaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ordentablajeriadetalle) to $obj2 (Ordentablajeria)
                $obj2->addOrdentablajeriadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ordentablajeriadetalle objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ordentablajeriadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);
        }

        OrdentablajeriadetallePeer::addSelectColumns($criteria);
        $startcol = OrdentablajeriadetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(OrdentablajeriadetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OrdentablajeriadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OrdentablajeriadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = OrdentablajeriadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OrdentablajeriadetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ordentablajeriadetalle) to $obj2 (Producto)
                $obj2->addOrdentablajeriadetalle($obj1);

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
        $criteria->setPrimaryTableName(OrdentablajeriadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OrdentablajeriadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, OrdentablajeriaPeer::IDORDENTABLAJERIA, $join_behavior);

        $criteria->addJoin(OrdentablajeriadetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Ordentablajeriadetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ordentablajeriadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);
        }

        OrdentablajeriadetallePeer::addSelectColumns($criteria);
        $startcol2 = OrdentablajeriadetallePeer::NUM_HYDRATE_COLUMNS;

        OrdentablajeriaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OrdentablajeriaPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, OrdentablajeriaPeer::IDORDENTABLAJERIA, $join_behavior);

        $criteria->addJoin(OrdentablajeriadetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OrdentablajeriadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OrdentablajeriadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OrdentablajeriadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OrdentablajeriadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Ordentablajeria rows

            $key2 = OrdentablajeriaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = OrdentablajeriaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = OrdentablajeriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OrdentablajeriaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Ordentablajeriadetalle) to the collection in $obj2 (Ordentablajeria)
                $obj2->addOrdentablajeriadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Producto rows

            $key3 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProductoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProductoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Ordentablajeriadetalle) to the collection in $obj3 (Producto)
                $obj3->addOrdentablajeriadetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Ordentablajeria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptOrdentablajeria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(OrdentablajeriadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OrdentablajeriadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OrdentablajeriadetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
        $criteria->setPrimaryTableName(OrdentablajeriadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            OrdentablajeriadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, OrdentablajeriaPeer::IDORDENTABLAJERIA, $join_behavior);

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
     * Selects a collection of Ordentablajeriadetalle objects pre-filled with all related objects except Ordentablajeria.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ordentablajeriadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptOrdentablajeria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);
        }

        OrdentablajeriadetallePeer::addSelectColumns($criteria);
        $startcol2 = OrdentablajeriadetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OrdentablajeriadetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OrdentablajeriadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OrdentablajeriadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OrdentablajeriadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OrdentablajeriadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Producto rows

                $key2 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProductoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProductoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProductoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ordentablajeriadetalle) to the collection in $obj2 (Producto)
                $obj2->addOrdentablajeriadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ordentablajeriadetalle objects pre-filled with all related objects except Producto.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ordentablajeriadetalle objects.
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
            $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);
        }

        OrdentablajeriadetallePeer::addSelectColumns($criteria);
        $startcol2 = OrdentablajeriadetallePeer::NUM_HYDRATE_COLUMNS;

        OrdentablajeriaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + OrdentablajeriaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(OrdentablajeriadetallePeer::IDORDENTABLAJERIA, OrdentablajeriaPeer::IDORDENTABLAJERIA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = OrdentablajeriadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = OrdentablajeriadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = OrdentablajeriadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                OrdentablajeriadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Ordentablajeria rows

                $key2 = OrdentablajeriaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = OrdentablajeriaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = OrdentablajeriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    OrdentablajeriaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ordentablajeriadetalle) to the collection in $obj2 (Ordentablajeria)
                $obj2->addOrdentablajeriadetalle($obj1);

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
        return Propel::getDatabaseMap(OrdentablajeriadetallePeer::DATABASE_NAME)->getTable(OrdentablajeriadetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseOrdentablajeriadetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseOrdentablajeriadetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \OrdentablajeriadetalleTableMap());
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
        return OrdentablajeriadetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ordentablajeriadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Ordentablajeriadetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ordentablajeriadetalle object
        }

        if ($criteria->containsKey(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE) && $criteria->keyContainsValue(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ordentablajeriadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Ordentablajeriadetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(OrdentablajeriadetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE);
            $value = $criteria->remove(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE);
            if ($value) {
                $selectCriteria->add(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(OrdentablajeriadetallePeer::TABLE_NAME);
            }

        } else { // $values is Ordentablajeriadetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ordentablajeriadetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(OrdentablajeriadetallePeer::TABLE_NAME, $con, OrdentablajeriadetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            OrdentablajeriadetallePeer::clearInstancePool();
            OrdentablajeriadetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ordentablajeriadetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ordentablajeriadetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            OrdentablajeriadetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ordentablajeriadetalle) { // it's a model object
            // invalidate the cache for this single object
            OrdentablajeriadetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(OrdentablajeriadetallePeer::DATABASE_NAME);
            $criteria->add(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                OrdentablajeriadetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(OrdentablajeriadetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            OrdentablajeriadetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ordentablajeriadetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ordentablajeriadetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(OrdentablajeriadetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(OrdentablajeriadetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(OrdentablajeriadetallePeer::DATABASE_NAME, OrdentablajeriadetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ordentablajeriadetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = OrdentablajeriadetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(OrdentablajeriadetallePeer::DATABASE_NAME);
        $criteria->add(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $pk);

        $v = OrdentablajeriadetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ordentablajeriadetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(OrdentablajeriadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(OrdentablajeriadetallePeer::DATABASE_NAME);
            $criteria->add(OrdentablajeriadetallePeer::IDORDENTABLAJERIADETALLE, $pks, Criteria::IN);
            $objs = OrdentablajeriadetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseOrdentablajeriadetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseOrdentablajeriadetallePeer::buildTableMap();

