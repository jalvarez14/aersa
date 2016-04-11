<?php


/**
 * Base static class for performing query and update operations on the 'notacredito' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseNotacreditoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'notacredito';

    /** the related Propel class for this table */
    const OM_CLASS = 'Notacredito';

    /** the related TableMap class for this table */
    const TM_CLASS = 'NotacreditoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the idnotacredito field */
    const IDNOTACREDITO = 'notacredito.idnotacredito';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'notacredito.idsucursal';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'notacredito.idusuario';

    /** the column name for the idauditor field */
    const IDAUDITOR = 'notacredito.idauditor';

    /** the column name for the idalmacen field */
    const IDALMACEN = 'notacredito.idalmacen';

    /** the column name for the notacredito_folio field */
    const NOTACREDITO_FOLIO = 'notacredito.notacredito_folio';

    /** the column name for the notacredito_revisada field */
    const NOTACREDITO_REVISADA = 'notacredito.notacredito_revisada';

    /** the column name for the notacredito_factura field */
    const NOTACREDITO_FACTURA = 'notacredito.notacredito_factura';

    /** the column name for the notacredito_fechacreacion field */
    const NOTACREDITO_FECHACREACION = 'notacredito.notacredito_fechacreacion';

    /** the column name for the notacredito_fechaentrega field */
    const NOTACREDITO_FECHAENTREGA = 'notacredito.notacredito_fechaentrega';

    /** the column name for the notacredito_ieps field */
    const NOTACREDITO_IEPS = 'notacredito.notacredito_ieps';

    /** the column name for the notacredito_iva field */
    const NOTACREDITO_IVA = 'notacredito.notacredito_iva';

    /** the column name for the notacredito_total field */
    const NOTACREDITO_TOTAL = 'notacredito.notacredito_total';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Notacredito objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Notacredito[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. NotacreditoPeer::$fieldNames[NotacreditoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idnotacredito', 'Idsucursal', 'Idusuario', 'Idauditor', 'Idalmacen', 'NotacreditoFolio', 'NotacreditoRevisada', 'NotacreditoFactura', 'NotacreditoFechacreacion', 'NotacreditoFechaentrega', 'NotacreditoIeps', 'NotacreditoIva', 'NotacreditoTotal', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idnotacredito', 'idsucursal', 'idusuario', 'idauditor', 'idalmacen', 'notacreditoFolio', 'notacreditoRevisada', 'notacreditoFactura', 'notacreditoFechacreacion', 'notacreditoFechaentrega', 'notacreditoIeps', 'notacreditoIva', 'notacreditoTotal', ),
        BasePeer::TYPE_COLNAME => array (NotacreditoPeer::IDNOTACREDITO, NotacreditoPeer::IDSUCURSAL, NotacreditoPeer::IDUSUARIO, NotacreditoPeer::IDAUDITOR, NotacreditoPeer::IDALMACEN, NotacreditoPeer::NOTACREDITO_FOLIO, NotacreditoPeer::NOTACREDITO_REVISADA, NotacreditoPeer::NOTACREDITO_FACTURA, NotacreditoPeer::NOTACREDITO_FECHACREACION, NotacreditoPeer::NOTACREDITO_FECHAENTREGA, NotacreditoPeer::NOTACREDITO_IEPS, NotacreditoPeer::NOTACREDITO_IVA, NotacreditoPeer::NOTACREDITO_TOTAL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDNOTACREDITO', 'IDSUCURSAL', 'IDUSUARIO', 'IDAUDITOR', 'IDALMACEN', 'NOTACREDITO_FOLIO', 'NOTACREDITO_REVISADA', 'NOTACREDITO_FACTURA', 'NOTACREDITO_FECHACREACION', 'NOTACREDITO_FECHAENTREGA', 'NOTACREDITO_IEPS', 'NOTACREDITO_IVA', 'NOTACREDITO_TOTAL', ),
        BasePeer::TYPE_FIELDNAME => array ('idnotacredito', 'idsucursal', 'idusuario', 'idauditor', 'idalmacen', 'notacredito_folio', 'notacredito_revisada', 'notacredito_factura', 'notacredito_fechacreacion', 'notacredito_fechaentrega', 'notacredito_ieps', 'notacredito_iva', 'notacredito_total', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. NotacreditoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idnotacredito' => 0, 'Idsucursal' => 1, 'Idusuario' => 2, 'Idauditor' => 3, 'Idalmacen' => 4, 'NotacreditoFolio' => 5, 'NotacreditoRevisada' => 6, 'NotacreditoFactura' => 7, 'NotacreditoFechacreacion' => 8, 'NotacreditoFechaentrega' => 9, 'NotacreditoIeps' => 10, 'NotacreditoIva' => 11, 'NotacreditoTotal' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idnotacredito' => 0, 'idsucursal' => 1, 'idusuario' => 2, 'idauditor' => 3, 'idalmacen' => 4, 'notacreditoFolio' => 5, 'notacreditoRevisada' => 6, 'notacreditoFactura' => 7, 'notacreditoFechacreacion' => 8, 'notacreditoFechaentrega' => 9, 'notacreditoIeps' => 10, 'notacreditoIva' => 11, 'notacreditoTotal' => 12, ),
        BasePeer::TYPE_COLNAME => array (NotacreditoPeer::IDNOTACREDITO => 0, NotacreditoPeer::IDSUCURSAL => 1, NotacreditoPeer::IDUSUARIO => 2, NotacreditoPeer::IDAUDITOR => 3, NotacreditoPeer::IDALMACEN => 4, NotacreditoPeer::NOTACREDITO_FOLIO => 5, NotacreditoPeer::NOTACREDITO_REVISADA => 6, NotacreditoPeer::NOTACREDITO_FACTURA => 7, NotacreditoPeer::NOTACREDITO_FECHACREACION => 8, NotacreditoPeer::NOTACREDITO_FECHAENTREGA => 9, NotacreditoPeer::NOTACREDITO_IEPS => 10, NotacreditoPeer::NOTACREDITO_IVA => 11, NotacreditoPeer::NOTACREDITO_TOTAL => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDNOTACREDITO' => 0, 'IDSUCURSAL' => 1, 'IDUSUARIO' => 2, 'IDAUDITOR' => 3, 'IDALMACEN' => 4, 'NOTACREDITO_FOLIO' => 5, 'NOTACREDITO_REVISADA' => 6, 'NOTACREDITO_FACTURA' => 7, 'NOTACREDITO_FECHACREACION' => 8, 'NOTACREDITO_FECHAENTREGA' => 9, 'NOTACREDITO_IEPS' => 10, 'NOTACREDITO_IVA' => 11, 'NOTACREDITO_TOTAL' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('idnotacredito' => 0, 'idsucursal' => 1, 'idusuario' => 2, 'idauditor' => 3, 'idalmacen' => 4, 'notacredito_folio' => 5, 'notacredito_revisada' => 6, 'notacredito_factura' => 7, 'notacredito_fechacreacion' => 8, 'notacredito_fechaentrega' => 9, 'notacredito_ieps' => 10, 'notacredito_iva' => 11, 'notacredito_total' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
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
        $toNames = NotacreditoPeer::getFieldNames($toType);
        $key = isset(NotacreditoPeer::$fieldKeys[$fromType][$name]) ? NotacreditoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(NotacreditoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, NotacreditoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return NotacreditoPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. NotacreditoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(NotacreditoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(NotacreditoPeer::IDNOTACREDITO);
            $criteria->addSelectColumn(NotacreditoPeer::IDSUCURSAL);
            $criteria->addSelectColumn(NotacreditoPeer::IDUSUARIO);
            $criteria->addSelectColumn(NotacreditoPeer::IDAUDITOR);
            $criteria->addSelectColumn(NotacreditoPeer::IDALMACEN);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_FOLIO);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_REVISADA);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_FACTURA);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_FECHACREACION);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_FECHAENTREGA);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_IEPS);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_IVA);
            $criteria->addSelectColumn(NotacreditoPeer::NOTACREDITO_TOTAL);
        } else {
            $criteria->addSelectColumn($alias . '.idnotacredito');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.idauditor');
            $criteria->addSelectColumn($alias . '.idalmacen');
            $criteria->addSelectColumn($alias . '.notacredito_folio');
            $criteria->addSelectColumn($alias . '.notacredito_revisada');
            $criteria->addSelectColumn($alias . '.notacredito_factura');
            $criteria->addSelectColumn($alias . '.notacredito_fechacreacion');
            $criteria->addSelectColumn($alias . '.notacredito_fechaentrega');
            $criteria->addSelectColumn($alias . '.notacredito_ieps');
            $criteria->addSelectColumn($alias . '.notacredito_iva');
            $criteria->addSelectColumn($alias . '.notacredito_total');
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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Notacredito
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = NotacreditoPeer::doSelect($critcopy, $con);
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
        return NotacreditoPeer::populateObjects(NotacreditoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            NotacreditoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

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
     * @param Notacredito $obj A Notacredito object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdnotacredito();
            } // if key === null
            NotacreditoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Notacredito object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Notacredito) {
                $key = (string) $value->getIdnotacredito();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Notacredito object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(NotacreditoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Notacredito Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(NotacreditoPeer::$instances[$key])) {
                return NotacreditoPeer::$instances[$key];
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
        foreach (NotacreditoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        NotacreditoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to notacredito
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in NotacreditodetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotacreditodetallePeer::clearInstancePool();
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
        $cls = NotacreditoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = NotacreditoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                NotacreditoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Notacredito object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = NotacreditoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = NotacreditoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + NotacreditoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = NotacreditoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            NotacreditoPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Notacredito objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol = NotacreditoPeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to $obj2 (Almacen)
                $obj2->addNotacredito($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacredito objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdauditor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol = NotacreditoPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to $obj2 (Usuario)
                $obj2->addNotacreditoRelatedByIdauditor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacredito objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol = NotacreditoPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to $obj2 (Sucursal)
                $obj2->addNotacredito($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacredito objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdusuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol = NotacreditoPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to $obj2 (Usuario)
                $obj2->addNotacreditoRelatedByIdusuario($obj1);

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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Notacredito objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol2 = NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to the collection in $obj2 (Almacen)
                $obj2->addNotacredito($obj1);
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

                // Add the $obj1 (Notacredito) to the collection in $obj3 (Usuario)
                $obj3->addNotacreditoRelatedByIdauditor($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key4 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = SucursalPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = SucursalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SucursalPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Notacredito) to the collection in $obj4 (Sucursal)
                $obj4->addNotacredito($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = UsuarioPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsuarioPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Notacredito) to the collection in $obj5 (Usuario)
                $obj5->addNotacreditoRelatedByIdusuario($obj1);
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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotacreditoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Notacredito objects pre-filled with all related objects except Almacen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
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
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol2 = NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to the collection in $obj2 (Usuario)
                $obj2->addNotacreditoRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key3 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SucursalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SucursalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SucursalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Notacredito) to the collection in $obj3 (Sucursal)
                $obj3->addNotacredito($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsuarioPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsuarioPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Notacredito) to the collection in $obj4 (Usuario)
                $obj4->addNotacreditoRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacredito objects pre-filled with all related objects except UsuarioRelatedByIdauditor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
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
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol2 = NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to the collection in $obj2 (Almacen)
                $obj2->addNotacredito($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key3 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SucursalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SucursalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SucursalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Notacredito) to the collection in $obj3 (Sucursal)
                $obj3->addNotacredito($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacredito objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
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
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol2 = NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to the collection in $obj2 (Almacen)
                $obj2->addNotacredito($obj1);

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

                // Add the $obj1 (Notacredito) to the collection in $obj3 (Usuario)
                $obj3->addNotacreditoRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UsuarioPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsuarioPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Notacredito) to the collection in $obj4 (Usuario)
                $obj4->addNotacreditoRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Notacredito objects pre-filled with all related objects except UsuarioRelatedByIdusuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Notacredito objects.
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
            $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);
        }

        NotacreditoPeer::addSelectColumns($criteria);
        $startcol2 = NotacreditoPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(NotacreditoPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(NotacreditoPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = NotacreditoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = NotacreditoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = NotacreditoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                NotacreditoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Notacredito) to the collection in $obj2 (Almacen)
                $obj2->addNotacredito($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key3 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SucursalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SucursalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SucursalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Notacredito) to the collection in $obj3 (Sucursal)
                $obj3->addNotacredito($obj1);

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
        return Propel::getDatabaseMap(NotacreditoPeer::DATABASE_NAME)->getTable(NotacreditoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseNotacreditoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseNotacreditoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \NotacreditoTableMap());
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
        return NotacreditoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Notacredito or Criteria object.
     *
     * @param      mixed $values Criteria or Notacredito object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Notacredito object
        }

        if ($criteria->containsKey(NotacreditoPeer::IDNOTACREDITO) && $criteria->keyContainsValue(NotacreditoPeer::IDNOTACREDITO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.NotacreditoPeer::IDNOTACREDITO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Notacredito or Criteria object.
     *
     * @param      mixed $values Criteria or Notacredito object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(NotacreditoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(NotacreditoPeer::IDNOTACREDITO);
            $value = $criteria->remove(NotacreditoPeer::IDNOTACREDITO);
            if ($value) {
                $selectCriteria->add(NotacreditoPeer::IDNOTACREDITO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(NotacreditoPeer::TABLE_NAME);
            }

        } else { // $values is Notacredito object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the notacredito table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += NotacreditoPeer::doOnDeleteCascade(new Criteria(NotacreditoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(NotacreditoPeer::TABLE_NAME, $con, NotacreditoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NotacreditoPeer::clearInstancePool();
            NotacreditoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Notacredito or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Notacredito object or primary key or array of primary keys
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
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Notacredito) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);
            $criteria->add(NotacreditoPeer::IDNOTACREDITO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(NotacreditoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += NotacreditoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                NotacreditoPeer::clearInstancePool();
            } elseif ($values instanceof Notacredito) { // it's a model object
                NotacreditoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    NotacreditoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            NotacreditoPeer::clearRelatedInstancePool();
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
        $objects = NotacreditoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Notacreditodetalle objects
            $criteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);

            $criteria->add(NotacreditodetallePeer::IDNOTACREDITO, $obj->getIdnotacredito());
            $affectedRows += NotacreditodetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Notacredito object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Notacredito $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(NotacreditoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(NotacreditoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(NotacreditoPeer::DATABASE_NAME, NotacreditoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Notacredito
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = NotacreditoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);
        $criteria->add(NotacreditoPeer::IDNOTACREDITO, $pk);

        $v = NotacreditoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Notacredito[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotacreditoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);
            $criteria->add(NotacreditoPeer::IDNOTACREDITO, $pks, Criteria::IN);
            $objs = NotacreditoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseNotacreditoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNotacreditoPeer::buildTableMap();

