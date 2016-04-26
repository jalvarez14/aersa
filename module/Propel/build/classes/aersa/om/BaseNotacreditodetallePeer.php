<?php


/**
 * Base static class for performing query and update operations on the 'notacreditodetalle' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseNotacreditodetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'notacreditodetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Notacreditodetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'NotacreditodetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the idnotacreditodetalle field */
    const IDNOTACREDITODETALLE = 'notacreditodetalle.idnotacreditodetalle';

    /** the column name for the idnotacredito field */
    const IDNOTACREDITO = 'notacreditodetalle.idnotacredito';

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'notacreditodetalle.idproducto';

    /** the column name for the idalmacen field */
    const IDALMACEN = 'notacreditodetalle.idalmacen';

    /** the column name for the notacreditodetalle_cantidad field */
    const NOTACREDITODETALLE_CANTIDAD = 'notacreditodetalle.notacreditodetalle_cantidad';

    /** the column name for the notacreditodetalle_revisada field */
    const NOTACREDITODETALLE_REVISADA = 'notacreditodetalle.notacreditodetalle_revisada';

    /** the column name for the notacreditodetalle_ieps field */
    const NOTACREDITODETALLE_IEPS = 'notacreditodetalle.notacreditodetalle_ieps';

    /** the column name for the notacreditodetalle_descuento field */
    const NOTACREDITODETALLE_DESCUENTO = 'notacreditodetalle.notacreditodetalle_descuento';

    /** the column name for the notacreditodetalle_subtotal field */
    const NOTACREDITODETALLE_SUBTOTAL = 'notacreditodetalle.notacreditodetalle_subtotal';

    /** the column name for the notacreditodetalle_costounitario field */
    const NOTACREDITODETALLE_COSTOUNITARIO = 'notacreditodetalle.notacreditodetalle_costounitario';

    /** the column name for the notacreditodetalle_costounitarioneto field */
    const NOTACREDITODETALLE_COSTOUNITARIONETO = 'notacreditodetalle.notacreditodetalle_costounitarioneto';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Notacreditodetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Notacreditodetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. NotacreditodetallePeer::$fieldNames[NotacreditodetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idnotacreditodetalle', 'Idnotacredito', 'Idproducto', 'Idalmacen', 'NotacreditodetalleCantidad', 'NotacreditodetalleRevisada', 'NotacreditodetalleIeps', 'NotacreditodetalleDescuento', 'NotacreditodetalleSubtotal', 'NotacreditodetalleCostounitario', 'NotacreditodetalleCostounitarioneto', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idnotacreditodetalle', 'idnotacredito', 'idproducto', 'idalmacen', 'notacreditodetalleCantidad', 'notacreditodetalleRevisada', 'notacreditodetalleIeps', 'notacreditodetalleDescuento', 'notacreditodetalleSubtotal', 'notacreditodetalleCostounitario', 'notacreditodetalleCostounitarioneto', ),
        BasePeer::TYPE_COLNAME => array (NotacreditodetallePeer::IDNOTACREDITODETALLE, NotacreditodetallePeer::IDNOTACREDITO, NotacreditodetallePeer::IDPRODUCTO, NotacreditodetallePeer::IDALMACEN, NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD, NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA, NotacreditodetallePeer::NOTACREDITODETALLE_IEPS, NotacreditodetallePeer::NOTACREDITODETALLE_DESCUENTO, NotacreditodetallePeer::NOTACREDITODETALLE_SUBTOTAL, NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIO, NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIONETO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDNOTACREDITODETALLE', 'IDNOTACREDITO', 'IDPRODUCTO', 'IDALMACEN', 'NOTACREDITODETALLE_CANTIDAD', 'NOTACREDITODETALLE_REVISADA', 'NOTACREDITODETALLE_IEPS', 'NOTACREDITODETALLE_DESCUENTO', 'NOTACREDITODETALLE_SUBTOTAL', 'NOTACREDITODETALLE_COSTOUNITARIO', 'NOTACREDITODETALLE_COSTOUNITARIONETO', ),
        BasePeer::TYPE_FIELDNAME => array ('idnotacreditodetalle', 'idnotacredito', 'idproducto', 'idalmacen', 'notacreditodetalle_cantidad', 'notacreditodetalle_revisada', 'notacreditodetalle_ieps', 'notacreditodetalle_descuento', 'notacreditodetalle_subtotal', 'notacreditodetalle_costounitario', 'notacreditodetalle_costounitarioneto', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. NotacreditodetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idnotacreditodetalle' => 0, 'Idnotacredito' => 1, 'Idproducto' => 2, 'Idalmacen' => 3, 'NotacreditodetalleCantidad' => 4, 'NotacreditodetalleRevisada' => 5, 'NotacreditodetalleIeps' => 6, 'NotacreditodetalleDescuento' => 7, 'NotacreditodetalleSubtotal' => 8, 'NotacreditodetalleCostounitario' => 9, 'NotacreditodetalleCostounitarioneto' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idnotacreditodetalle' => 0, 'idnotacredito' => 1, 'idproducto' => 2, 'idalmacen' => 3, 'notacreditodetalleCantidad' => 4, 'notacreditodetalleRevisada' => 5, 'notacreditodetalleIeps' => 6, 'notacreditodetalleDescuento' => 7, 'notacreditodetalleSubtotal' => 8, 'notacreditodetalleCostounitario' => 9, 'notacreditodetalleCostounitarioneto' => 10, ),
        BasePeer::TYPE_COLNAME => array (NotacreditodetallePeer::IDNOTACREDITODETALLE => 0, NotacreditodetallePeer::IDNOTACREDITO => 1, NotacreditodetallePeer::IDPRODUCTO => 2, NotacreditodetallePeer::IDALMACEN => 3, NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD => 4, NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA => 5, NotacreditodetallePeer::NOTACREDITODETALLE_IEPS => 6, NotacreditodetallePeer::NOTACREDITODETALLE_DESCUENTO => 7, NotacreditodetallePeer::NOTACREDITODETALLE_SUBTOTAL => 8, NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIO => 9, NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIONETO => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDNOTACREDITODETALLE' => 0, 'IDNOTACREDITO' => 1, 'IDPRODUCTO' => 2, 'IDALMACEN' => 3, 'NOTACREDITODETALLE_CANTIDAD' => 4, 'NOTACREDITODETALLE_REVISADA' => 5, 'NOTACREDITODETALLE_IEPS' => 6, 'NOTACREDITODETALLE_DESCUENTO' => 7, 'NOTACREDITODETALLE_SUBTOTAL' => 8, 'NOTACREDITODETALLE_COSTOUNITARIO' => 9, 'NOTACREDITODETALLE_COSTOUNITARIONETO' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('idnotacreditodetalle' => 0, 'idnotacredito' => 1, 'idproducto' => 2, 'idalmacen' => 3, 'notacreditodetalle_cantidad' => 4, 'notacreditodetalle_revisada' => 5, 'notacreditodetalle_ieps' => 6, 'notacreditodetalle_descuento' => 7, 'notacreditodetalle_subtotal' => 8, 'notacreditodetalle_costounitario' => 9, 'notacreditodetalle_costounitarioneto' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = NotacreditodetallePeer::getFieldNames($toType);
        $key = isset(NotacreditodetallePeer::$fieldKeys[$fromType][$name]) ? NotacreditodetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(NotacreditodetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, NotacreditodetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return NotacreditodetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. NotacreditodetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(NotacreditodetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(NotacreditodetallePeer::IDNOTACREDITODETALLE);
            $criteria->addSelectColumn(NotacreditodetallePeer::IDNOTACREDITO);
            $criteria->addSelectColumn(NotacreditodetallePeer::IDPRODUCTO);
            $criteria->addSelectColumn(NotacreditodetallePeer::IDALMACEN);
            $criteria->addSelectColumn(NotacreditodetallePeer::NOTACREDITODETALLE_CANTIDAD);
            $criteria->addSelectColumn(NotacreditodetallePeer::NOTACREDITODETALLE_REVISADA);
            $criteria->addSelectColumn(NotacreditodetallePeer::NOTACREDITODETALLE_IEPS);
            $criteria->addSelectColumn(NotacreditodetallePeer::NOTACREDITODETALLE_DESCUENTO);
            $criteria->addSelectColumn(NotacreditodetallePeer::NOTACREDITODETALLE_SUBTOTAL);
            $criteria->addSelectColumn(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIO);
            $criteria->addSelectColumn(NotacreditodetallePeer::NOTACREDITODETALLE_COSTOUNITARIONETO);
        } else {
            $criteria->addSelectColumn($alias . '.idnotacreditodetalle');
            $criteria->addSelectColumn($alias . '.idnotacredito');
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.idalmacen');
            $criteria->addSelectColumn($alias . '.notacreditodetalle_cantidad');
            $criteria->addSelectColumn($alias . '.notacreditodetalle_revisada');
            $criteria->addSelectColumn($alias . '.notacreditodetalle_ieps');
            $criteria->addSelectColumn($alias . '.notacreditodetalle_descuento');
            $criteria->addSelectColumn($alias . '.notacreditodetalle_subtotal');
            $criteria->addSelectColumn($alias . '.notacreditodetalle_costounitario');
            $criteria->addSelectColumn($alias . '.notacreditodetalle_costounitarioneto');
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
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Notacreditodetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = NotacreditodetallePeer::doSelect($critcopy, $con);
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
        return NotacreditodetallePeer::populateObjects(NotacreditodetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

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
     * @param Notacreditodetalle $obj A Notacreditodetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdnotacreditodetalle();
            } // if key === null
            NotacreditodetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Notacreditodetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Notacreditodetalle) {
                $key = (string) $value->getIdnotacreditodetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Notacreditodetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(NotacreditodetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Notacreditodetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(NotacreditodetallePeer::$instances[$key])) {
                return NotacreditodetallePeer::$instances[$key];
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
        foreach (NotacreditodetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        NotacreditodetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to notacreditodetalle
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
        $cls = NotacreditodetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = NotacreditodetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                NotacreditodetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Notacreditodetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = NotacreditodetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = NotacreditodetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            NotacreditodetallePeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Notacredito table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinNotacredito(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Notacreditodetalle objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacreditodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);
        }

        NotacreditodetallePeer::addSelectColumns($criteria);
        $startcol = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NotacreditodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditodetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacreditodetalle) to $obj2 (Almacen)
                $obj2->addNotacreditodetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacreditodetalle objects pre-filled with their Notacredito objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacreditodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinNotacredito(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);
        }

        NotacreditodetallePeer::addSelectColumns($criteria);
        $startcol = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;
        NotacreditoPeer::addSelectColumns($criteria);

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NotacreditodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditodetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = NotacreditoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = NotacreditoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    NotacreditoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Notacreditodetalle) to $obj2 (Notacredito)
                $obj2->addNotacreditodetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacreditodetalle objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacreditodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);
        }

        NotacreditodetallePeer::addSelectColumns($criteria);
        $startcol = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NotacreditodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditodetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacreditodetalle) to $obj2 (Producto)
                $obj2->addNotacreditodetalle($obj1);

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
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Notacreditodetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacreditodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);
        }

        NotacreditodetallePeer::addSelectColumns($criteria);
        $startcol2 = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditodetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj2 (Almacen)
                $obj2->addNotacreditodetalle($obj1);
            } // if joined row not null

            // Add objects for joined Notacredito rows

            $key3 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = NotacreditoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = NotacreditoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    NotacreditoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj3 (Notacredito)
                $obj3->addNotacreditodetalle($obj1);
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

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj4 (Producto)
                $obj4->addNotacreditodetalle($obj1);
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
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Notacredito table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptNotacredito(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditodetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);

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
     * Selects a collection of Notacreditodetalle objects pre-filled with all related objects except Almacen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacreditodetalle objects.
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
            $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);
        }

        NotacreditodetallePeer::addSelectColumns($criteria);
        $startcol2 = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditodetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Notacredito rows

                $key2 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = NotacreditoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = NotacreditoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    NotacreditoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj2 (Notacredito)
                $obj2->addNotacreditodetalle($obj1);

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

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj3 (Producto)
                $obj3->addNotacreditodetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacreditodetalle objects pre-filled with all related objects except Notacredito.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacreditodetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptNotacredito(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);
        }

        NotacreditodetallePeer::addSelectColumns($criteria);
        $startcol2 = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditodetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj2 (Almacen)
                $obj2->addNotacreditodetalle($obj1);

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

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj3 (Producto)
                $obj3->addNotacreditodetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacreditodetalle objects pre-filled with all related objects except Producto.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacreditodetalle objects.
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
            $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);
        }

        NotacreditodetallePeer::addSelectColumns($criteria);
        $startcol2 = NotacreditodetallePeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditodetallePeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditodetallePeer::IDNOTACREDITO, NotacreditoPeer::IDNOTACREDITO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditodetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditodetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditodetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditodetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj2 (Almacen)
                $obj2->addNotacreditodetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Notacredito rows

                $key3 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = NotacreditoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = NotacreditoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    NotacreditoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Notacreditodetalle) to the collection in $obj3 (Notacredito)
                $obj3->addNotacreditodetalle($obj1);

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
        return Propel::getDatabaseMap(NotacreditodetallePeer::DATABASE_NAME)->getTable(NotacreditodetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseNotacreditodetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseNotacreditodetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \NotacreditodetalleTableMap());
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
        return NotacreditodetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Notacreditodetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Notacreditodetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Notacreditodetalle object
        }

        if ($criteria->containsKey(NotacreditodetallePeer::IDNOTACREDITODETALLE) && $criteria->keyContainsValue(NotacreditodetallePeer::IDNOTACREDITODETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.NotacreditodetallePeer::IDNOTACREDITODETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Notacreditodetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Notacreditodetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(NotacreditodetallePeer::IDNOTACREDITODETALLE);
            $value = $criteria->remove(NotacreditodetallePeer::IDNOTACREDITODETALLE);
            if ($value) {
                $selectCriteria->add(NotacreditodetallePeer::IDNOTACREDITODETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(NotacreditodetallePeer::TABLE_NAME);
            }

        } else { // $values is Notacreditodetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the notacreditodetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(NotacreditodetallePeer::TABLE_NAME, $con, NotacreditodetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NotacreditodetallePeer::clearInstancePool();
            NotacreditodetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Notacreditodetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Notacreditodetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            NotacreditodetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Notacreditodetalle) { // it's a model object
            // invalidate the cache for this single object
            NotacreditodetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);
            $criteria->add(NotacreditodetallePeer::IDNOTACREDITODETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                NotacreditodetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(NotacreditodetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            NotacreditodetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Notacreditodetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Notacreditodetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(NotacreditodetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(NotacreditodetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(NotacreditodetallePeer::DATABASE_NAME, NotacreditodetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Notacreditodetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = NotacreditodetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);
        $criteria->add(NotacreditodetallePeer::IDNOTACREDITODETALLE, $pk);

        $v = NotacreditodetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Notacreditodetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);
            $criteria->add(NotacreditodetallePeer::IDNOTACREDITODETALLE, $pks, Criteria::IN);
            $objs = NotacreditodetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseNotacreditodetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNotacreditodetallePeer::buildTableMap();

