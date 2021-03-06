<?php


/**
 * Base static class for performing query and update operations on the 'requisiciondetalle' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseRequisiciondetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'requisiciondetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Requisiciondetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RequisiciondetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the idrequisiciondetalle field */
    const IDREQUISICIONDETALLE = 'requisiciondetalle.idrequisiciondetalle';

    /** the column name for the idrequisicion field */
    const IDREQUISICION = 'requisiciondetalle.idrequisicion';

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'requisiciondetalle.idproducto';

    /** the column name for the requisiciondetalle_cantidad field */
    const REQUISICIONDETALLE_CANTIDAD = 'requisiciondetalle.requisiciondetalle_cantidad';

    /** the column name for the requisiciondetalle_revisada field */
    const REQUISICIONDETALLE_REVISADA = 'requisiciondetalle.requisiciondetalle_revisada';

    /** the column name for the requisiciondetalle_preciounitario field */
    const REQUISICIONDETALLE_PRECIOUNITARIO = 'requisiciondetalle.requisiciondetalle_preciounitario';

    /** the column name for the requisiciondetalle_subtotal field */
    const REQUISICIONDETALLE_SUBTOTAL = 'requisiciondetalle.requisiciondetalle_subtotal';

    /** the column name for the idpadre field */
    const IDPADRE = 'requisiciondetalle.idpadre';

    /** the column name for the requisiciondetalle_contable field */
    const REQUISICIONDETALLE_CONTABLE = 'requisiciondetalle.requisiciondetalle_contable';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Requisiciondetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Requisiciondetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RequisiciondetallePeer::$fieldNames[RequisiciondetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idrequisiciondetalle', 'Idrequisicion', 'Idproducto', 'RequisiciondetalleCantidad', 'RequisiciondetalleRevisada', 'RequisiciondetallePreciounitario', 'RequisiciondetalleSubtotal', 'Idpadre', 'RequisiciondetalleContable', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idrequisiciondetalle', 'idrequisicion', 'idproducto', 'requisiciondetalleCantidad', 'requisiciondetalleRevisada', 'requisiciondetallePreciounitario', 'requisiciondetalleSubtotal', 'idpadre', 'requisiciondetalleContable', ),
        BasePeer::TYPE_COLNAME => array (RequisiciondetallePeer::IDREQUISICIONDETALLE, RequisiciondetallePeer::IDREQUISICION, RequisiciondetallePeer::IDPRODUCTO, RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD, RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA, RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO, RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL, RequisiciondetallePeer::IDPADRE, RequisiciondetallePeer::REQUISICIONDETALLE_CONTABLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDREQUISICIONDETALLE', 'IDREQUISICION', 'IDPRODUCTO', 'REQUISICIONDETALLE_CANTIDAD', 'REQUISICIONDETALLE_REVISADA', 'REQUISICIONDETALLE_PRECIOUNITARIO', 'REQUISICIONDETALLE_SUBTOTAL', 'IDPADRE', 'REQUISICIONDETALLE_CONTABLE', ),
        BasePeer::TYPE_FIELDNAME => array ('idrequisiciondetalle', 'idrequisicion', 'idproducto', 'requisiciondetalle_cantidad', 'requisiciondetalle_revisada', 'requisiciondetalle_preciounitario', 'requisiciondetalle_subtotal', 'idpadre', 'requisiciondetalle_contable', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RequisiciondetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idrequisiciondetalle' => 0, 'Idrequisicion' => 1, 'Idproducto' => 2, 'RequisiciondetalleCantidad' => 3, 'RequisiciondetalleRevisada' => 4, 'RequisiciondetallePreciounitario' => 5, 'RequisiciondetalleSubtotal' => 6, 'Idpadre' => 7, 'RequisiciondetalleContable' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idrequisiciondetalle' => 0, 'idrequisicion' => 1, 'idproducto' => 2, 'requisiciondetalleCantidad' => 3, 'requisiciondetalleRevisada' => 4, 'requisiciondetallePreciounitario' => 5, 'requisiciondetalleSubtotal' => 6, 'idpadre' => 7, 'requisiciondetalleContable' => 8, ),
        BasePeer::TYPE_COLNAME => array (RequisiciondetallePeer::IDREQUISICIONDETALLE => 0, RequisiciondetallePeer::IDREQUISICION => 1, RequisiciondetallePeer::IDPRODUCTO => 2, RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD => 3, RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA => 4, RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO => 5, RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL => 6, RequisiciondetallePeer::IDPADRE => 7, RequisiciondetallePeer::REQUISICIONDETALLE_CONTABLE => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDREQUISICIONDETALLE' => 0, 'IDREQUISICION' => 1, 'IDPRODUCTO' => 2, 'REQUISICIONDETALLE_CANTIDAD' => 3, 'REQUISICIONDETALLE_REVISADA' => 4, 'REQUISICIONDETALLE_PRECIOUNITARIO' => 5, 'REQUISICIONDETALLE_SUBTOTAL' => 6, 'IDPADRE' => 7, 'REQUISICIONDETALLE_CONTABLE' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('idrequisiciondetalle' => 0, 'idrequisicion' => 1, 'idproducto' => 2, 'requisiciondetalle_cantidad' => 3, 'requisiciondetalle_revisada' => 4, 'requisiciondetalle_preciounitario' => 5, 'requisiciondetalle_subtotal' => 6, 'idpadre' => 7, 'requisiciondetalle_contable' => 8, ),
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
        $toNames = RequisiciondetallePeer::getFieldNames($toType);
        $key = isset(RequisiciondetallePeer::$fieldKeys[$fromType][$name]) ? RequisiciondetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RequisiciondetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RequisiciondetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RequisiciondetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RequisiciondetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RequisiciondetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RequisiciondetallePeer::IDREQUISICIONDETALLE);
            $criteria->addSelectColumn(RequisiciondetallePeer::IDREQUISICION);
            $criteria->addSelectColumn(RequisiciondetallePeer::IDPRODUCTO);
            $criteria->addSelectColumn(RequisiciondetallePeer::REQUISICIONDETALLE_CANTIDAD);
            $criteria->addSelectColumn(RequisiciondetallePeer::REQUISICIONDETALLE_REVISADA);
            $criteria->addSelectColumn(RequisiciondetallePeer::REQUISICIONDETALLE_PRECIOUNITARIO);
            $criteria->addSelectColumn(RequisiciondetallePeer::REQUISICIONDETALLE_SUBTOTAL);
            $criteria->addSelectColumn(RequisiciondetallePeer::IDPADRE);
            $criteria->addSelectColumn(RequisiciondetallePeer::REQUISICIONDETALLE_CONTABLE);
        } else {
            $criteria->addSelectColumn($alias . '.idrequisiciondetalle');
            $criteria->addSelectColumn($alias . '.idrequisicion');
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.requisiciondetalle_cantidad');
            $criteria->addSelectColumn($alias . '.requisiciondetalle_revisada');
            $criteria->addSelectColumn($alias . '.requisiciondetalle_preciounitario');
            $criteria->addSelectColumn($alias . '.requisiciondetalle_subtotal');
            $criteria->addSelectColumn($alias . '.idpadre');
            $criteria->addSelectColumn($alias . '.requisiciondetalle_contable');
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
        $criteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Requisiciondetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RequisiciondetallePeer::doSelect($critcopy, $con);
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
        return RequisiciondetallePeer::populateObjects(RequisiciondetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

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
     * @param Requisiciondetalle $obj A Requisiciondetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdrequisiciondetalle();
            } // if key === null
            RequisiciondetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Requisiciondetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Requisiciondetalle) {
                $key = (string) $value->getIdrequisiciondetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Requisiciondetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RequisiciondetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Requisiciondetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RequisiciondetallePeer::$instances[$key])) {
                return RequisiciondetallePeer::$instances[$key];
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
        foreach (RequisiciondetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RequisiciondetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to requisiciondetalle
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in RequisiciondetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisiciondetallePeer::clearInstancePool();
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
        $cls = RequisiciondetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RequisiciondetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RequisiciondetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Requisiciondetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RequisiciondetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RequisiciondetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RequisiciondetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RequisiciondetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Requisicion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRequisicion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);

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
     * Selects a collection of Requisiciondetalle objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisiciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);
        }

        RequisiciondetallePeer::addSelectColumns($criteria);
        $startcol = RequisiciondetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisiciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisiciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisiciondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisiciondetalle) to $obj2 (Producto)
                $obj2->addRequisiciondetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisiciondetalle objects pre-filled with their Requisicion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisiciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRequisicion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);
        }

        RequisiciondetallePeer::addSelectColumns($criteria);
        $startcol = RequisiciondetallePeer::NUM_HYDRATE_COLUMNS;
        RequisicionPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisiciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisiciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisiciondetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RequisicionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RequisicionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RequisicionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RequisicionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Requisiciondetalle) to $obj2 (Requisicion)
                $obj2->addRequisiciondetalle($obj1);

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
        $criteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);

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
     * Selects a collection of Requisiciondetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisiciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);
        }

        RequisiciondetallePeer::addSelectColumns($criteria);
        $startcol2 = RequisiciondetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        RequisicionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RequisicionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisiciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisiciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisiciondetallePeer::addInstanceToPool($obj1, $key1);
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
                } // if obj2 loaded

                // Add the $obj1 (Requisiciondetalle) to the collection in $obj2 (Producto)
                $obj2->addRequisiciondetalle($obj1);
            } // if joined row not null

            // Add objects for joined Requisicion rows

            $key3 = RequisicionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = RequisicionPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = RequisicionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RequisicionPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Requisiciondetalle) to the collection in $obj3 (Requisicion)
                $obj3->addRequisiciondetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related RequisiciondetalleRelatedByIdpadre table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRequisiciondetalleRelatedByIdpadre(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);

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
        $criteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Requisicion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptRequisicion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisiciondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Requisiciondetalle objects pre-filled with all related objects except RequisiciondetalleRelatedByIdpadre.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisiciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRequisiciondetalleRelatedByIdpadre(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);
        }

        RequisiciondetallePeer::addSelectColumns($criteria);
        $startcol2 = RequisiciondetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        RequisicionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + RequisicionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisiciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisiciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisiciondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisiciondetalle) to the collection in $obj2 (Producto)
                $obj2->addRequisiciondetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Requisicion rows

                $key3 = RequisicionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = RequisicionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = RequisicionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    RequisicionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisiciondetalle) to the collection in $obj3 (Requisicion)
                $obj3->addRequisiciondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisiciondetalle objects pre-filled with all related objects except Producto.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisiciondetalle objects.
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
            $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);
        }

        RequisiciondetallePeer::addSelectColumns($criteria);
        $startcol2 = RequisiciondetallePeer::NUM_HYDRATE_COLUMNS;

        RequisicionPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RequisicionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisiciondetallePeer::IDREQUISICION, RequisicionPeer::IDREQUISICION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisiciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisiciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisiciondetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Requisicion rows

                $key2 = RequisicionPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = RequisicionPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = RequisicionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RequisicionPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Requisiciondetalle) to the collection in $obj2 (Requisicion)
                $obj2->addRequisiciondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisiciondetalle objects pre-filled with all related objects except Requisicion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisiciondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptRequisicion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);
        }

        RequisiciondetallePeer::addSelectColumns($criteria);
        $startcol2 = RequisiciondetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisiciondetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisiciondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisiciondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisiciondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisiciondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisiciondetalle) to the collection in $obj2 (Producto)
                $obj2->addRequisiciondetalle($obj1);

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
        return Propel::getDatabaseMap(RequisiciondetallePeer::DATABASE_NAME)->getTable(RequisiciondetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRequisiciondetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRequisiciondetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RequisiciondetalleTableMap());
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
        return RequisiciondetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Requisiciondetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Requisiciondetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Requisiciondetalle object
        }

        if ($criteria->containsKey(RequisiciondetallePeer::IDREQUISICIONDETALLE) && $criteria->keyContainsValue(RequisiciondetallePeer::IDREQUISICIONDETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RequisiciondetallePeer::IDREQUISICIONDETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Requisiciondetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Requisiciondetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RequisiciondetallePeer::IDREQUISICIONDETALLE);
            $value = $criteria->remove(RequisiciondetallePeer::IDREQUISICIONDETALLE);
            if ($value) {
                $selectCriteria->add(RequisiciondetallePeer::IDREQUISICIONDETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RequisiciondetallePeer::TABLE_NAME);
            }

        } else { // $values is Requisiciondetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the requisiciondetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += RequisiciondetallePeer::doOnDeleteCascade(new Criteria(RequisiciondetallePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(RequisiciondetallePeer::TABLE_NAME, $con, RequisiciondetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RequisiciondetallePeer::clearInstancePool();
            RequisiciondetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Requisiciondetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Requisiciondetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Requisiciondetalle) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);
            $criteria->add(RequisiciondetallePeer::IDREQUISICIONDETALLE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(RequisiciondetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += RequisiciondetallePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                RequisiciondetallePeer::clearInstancePool();
            } elseif ($values instanceof Requisiciondetalle) { // it's a model object
                RequisiciondetallePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    RequisiciondetallePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RequisiciondetallePeer::clearRelatedInstancePool();
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
        $objects = RequisiciondetallePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Requisiciondetalle objects
            $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);

            $criteria->add(RequisiciondetallePeer::IDPADRE, $obj->getIdrequisiciondetalle());
            $affectedRows += RequisiciondetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Requisiciondetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Requisiciondetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RequisiciondetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RequisiciondetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(RequisiciondetallePeer::DATABASE_NAME, RequisiciondetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Requisiciondetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RequisiciondetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);
        $criteria->add(RequisiciondetallePeer::IDREQUISICIONDETALLE, $pk);

        $v = RequisiciondetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Requisiciondetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisiciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);
            $criteria->add(RequisiciondetallePeer::IDREQUISICIONDETALLE, $pks, Criteria::IN);
            $objs = RequisiciondetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseRequisiciondetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRequisiciondetallePeer::buildTableMap();

