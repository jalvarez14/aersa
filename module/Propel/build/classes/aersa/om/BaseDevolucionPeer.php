<?php


/**
 * Base static class for performing query and update operations on the 'devolucion' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseDevolucionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'devolucion';

    /** the related Propel class for this table */
    const OM_CLASS = 'Devolucion';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DevolucionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the iddevolucion field */
    const IDDEVOLUCION = 'devolucion.iddevolucion';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'devolucion.idempresa';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'devolucion.idsucursal';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'devolucion.idusuario';

    /** the column name for the idauditor field */
    const IDAUDITOR = 'devolucion.idauditor';

    /** the column name for the idalmacen field */
    const IDALMACEN = 'devolucion.idalmacen';

    /** the column name for the idproveedor field */
    const IDPROVEEDOR = 'devolucion.idproveedor';

    /** the column name for the devolucion_folio field */
    const DEVOLUCION_FOLIO = 'devolucion.devolucion_folio';

    /** the column name for the devolucion_revisada field */
    const DEVOLUCION_REVISADA = 'devolucion.devolucion_revisada';

    /** the column name for the devolucion_factura field */
    const DEVOLUCION_FACTURA = 'devolucion.devolucion_factura';

    /** the column name for the devolucion_fechacreacion field */
    const DEVOLUCION_FECHACREACION = 'devolucion.devolucion_fechacreacion';

    /** the column name for the devolucion_fechaentrega field */
    const DEVOLUCION_FECHAENTREGA = 'devolucion.devolucion_fechaentrega';

    /** the column name for the devolucion_ieps field */
    const DEVOLUCION_IEPS = 'devolucion.devolucion_ieps';

    /** the column name for the devolucion_iva field */
    const DEVOLUCION_IVA = 'devolucion.devolucion_iva';

    /** the column name for the devolucion_total field */
    const DEVOLUCION_TOTAL = 'devolucion.devolucion_total';

    /** the column name for the devolucion_subtotal field */
    const DEVOLUCION_SUBTOTAL = 'devolucion.devolucion_subtotal';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Devolucion objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Devolucion[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DevolucionPeer::$fieldNames[DevolucionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Iddevolucion', 'Idempresa', 'Idsucursal', 'Idusuario', 'Idauditor', 'Idalmacen', 'Idproveedor', 'DevolucionFolio', 'DevolucionRevisada', 'DevolucionFactura', 'DevolucionFechacreacion', 'DevolucionFechaentrega', 'DevolucionIeps', 'DevolucionIva', 'DevolucionTotal', 'DevolucionSubtotal', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddevolucion', 'idempresa', 'idsucursal', 'idusuario', 'idauditor', 'idalmacen', 'idproveedor', 'devolucionFolio', 'devolucionRevisada', 'devolucionFactura', 'devolucionFechacreacion', 'devolucionFechaentrega', 'devolucionIeps', 'devolucionIva', 'devolucionTotal', 'devolucionSubtotal', ),
        BasePeer::TYPE_COLNAME => array (DevolucionPeer::IDDEVOLUCION, DevolucionPeer::IDEMPRESA, DevolucionPeer::IDSUCURSAL, DevolucionPeer::IDUSUARIO, DevolucionPeer::IDAUDITOR, DevolucionPeer::IDALMACEN, DevolucionPeer::IDPROVEEDOR, DevolucionPeer::DEVOLUCION_FOLIO, DevolucionPeer::DEVOLUCION_REVISADA, DevolucionPeer::DEVOLUCION_FACTURA, DevolucionPeer::DEVOLUCION_FECHACREACION, DevolucionPeer::DEVOLUCION_FECHAENTREGA, DevolucionPeer::DEVOLUCION_IEPS, DevolucionPeer::DEVOLUCION_IVA, DevolucionPeer::DEVOLUCION_TOTAL, DevolucionPeer::DEVOLUCION_SUBTOTAL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDEVOLUCION', 'IDEMPRESA', 'IDSUCURSAL', 'IDUSUARIO', 'IDAUDITOR', 'IDALMACEN', 'IDPROVEEDOR', 'DEVOLUCION_FOLIO', 'DEVOLUCION_REVISADA', 'DEVOLUCION_FACTURA', 'DEVOLUCION_FECHACREACION', 'DEVOLUCION_FECHAENTREGA', 'DEVOLUCION_IEPS', 'DEVOLUCION_IVA', 'DEVOLUCION_TOTAL', 'DEVOLUCION_SUBTOTAL', ),
        BasePeer::TYPE_FIELDNAME => array ('iddevolucion', 'idempresa', 'idsucursal', 'idusuario', 'idauditor', 'idalmacen', 'idproveedor', 'devolucion_folio', 'devolucion_revisada', 'devolucion_factura', 'devolucion_fechacreacion', 'devolucion_fechaentrega', 'devolucion_ieps', 'devolucion_iva', 'devolucion_total', 'devolucion_subtotal', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DevolucionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Iddevolucion' => 0, 'Idempresa' => 1, 'Idsucursal' => 2, 'Idusuario' => 3, 'Idauditor' => 4, 'Idalmacen' => 5, 'Idproveedor' => 6, 'DevolucionFolio' => 7, 'DevolucionRevisada' => 8, 'DevolucionFactura' => 9, 'DevolucionFechacreacion' => 10, 'DevolucionFechaentrega' => 11, 'DevolucionIeps' => 12, 'DevolucionIva' => 13, 'DevolucionTotal' => 14, 'DevolucionSubtotal' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddevolucion' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idusuario' => 3, 'idauditor' => 4, 'idalmacen' => 5, 'idproveedor' => 6, 'devolucionFolio' => 7, 'devolucionRevisada' => 8, 'devolucionFactura' => 9, 'devolucionFechacreacion' => 10, 'devolucionFechaentrega' => 11, 'devolucionIeps' => 12, 'devolucionIva' => 13, 'devolucionTotal' => 14, 'devolucionSubtotal' => 15, ),
        BasePeer::TYPE_COLNAME => array (DevolucionPeer::IDDEVOLUCION => 0, DevolucionPeer::IDEMPRESA => 1, DevolucionPeer::IDSUCURSAL => 2, DevolucionPeer::IDUSUARIO => 3, DevolucionPeer::IDAUDITOR => 4, DevolucionPeer::IDALMACEN => 5, DevolucionPeer::IDPROVEEDOR => 6, DevolucionPeer::DEVOLUCION_FOLIO => 7, DevolucionPeer::DEVOLUCION_REVISADA => 8, DevolucionPeer::DEVOLUCION_FACTURA => 9, DevolucionPeer::DEVOLUCION_FECHACREACION => 10, DevolucionPeer::DEVOLUCION_FECHAENTREGA => 11, DevolucionPeer::DEVOLUCION_IEPS => 12, DevolucionPeer::DEVOLUCION_IVA => 13, DevolucionPeer::DEVOLUCION_TOTAL => 14, DevolucionPeer::DEVOLUCION_SUBTOTAL => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDEVOLUCION' => 0, 'IDEMPRESA' => 1, 'IDSUCURSAL' => 2, 'IDUSUARIO' => 3, 'IDAUDITOR' => 4, 'IDALMACEN' => 5, 'IDPROVEEDOR' => 6, 'DEVOLUCION_FOLIO' => 7, 'DEVOLUCION_REVISADA' => 8, 'DEVOLUCION_FACTURA' => 9, 'DEVOLUCION_FECHACREACION' => 10, 'DEVOLUCION_FECHAENTREGA' => 11, 'DEVOLUCION_IEPS' => 12, 'DEVOLUCION_IVA' => 13, 'DEVOLUCION_TOTAL' => 14, 'DEVOLUCION_SUBTOTAL' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('iddevolucion' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idusuario' => 3, 'idauditor' => 4, 'idalmacen' => 5, 'idproveedor' => 6, 'devolucion_folio' => 7, 'devolucion_revisada' => 8, 'devolucion_factura' => 9, 'devolucion_fechacreacion' => 10, 'devolucion_fechaentrega' => 11, 'devolucion_ieps' => 12, 'devolucion_iva' => 13, 'devolucion_total' => 14, 'devolucion_subtotal' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = DevolucionPeer::getFieldNames($toType);
        $key = isset(DevolucionPeer::$fieldKeys[$fromType][$name]) ? DevolucionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DevolucionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DevolucionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DevolucionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. DevolucionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DevolucionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DevolucionPeer::IDDEVOLUCION);
            $criteria->addSelectColumn(DevolucionPeer::IDEMPRESA);
            $criteria->addSelectColumn(DevolucionPeer::IDSUCURSAL);
            $criteria->addSelectColumn(DevolucionPeer::IDUSUARIO);
            $criteria->addSelectColumn(DevolucionPeer::IDAUDITOR);
            $criteria->addSelectColumn(DevolucionPeer::IDALMACEN);
            $criteria->addSelectColumn(DevolucionPeer::IDPROVEEDOR);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_FOLIO);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_REVISADA);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_FACTURA);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_FECHACREACION);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_FECHAENTREGA);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_IEPS);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_IVA);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_TOTAL);
            $criteria->addSelectColumn(DevolucionPeer::DEVOLUCION_SUBTOTAL);
        } else {
            $criteria->addSelectColumn($alias . '.iddevolucion');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.idauditor');
            $criteria->addSelectColumn($alias . '.idalmacen');
            $criteria->addSelectColumn($alias . '.idproveedor');
            $criteria->addSelectColumn($alias . '.devolucion_folio');
            $criteria->addSelectColumn($alias . '.devolucion_revisada');
            $criteria->addSelectColumn($alias . '.devolucion_factura');
            $criteria->addSelectColumn($alias . '.devolucion_fechacreacion');
            $criteria->addSelectColumn($alias . '.devolucion_fechaentrega');
            $criteria->addSelectColumn($alias . '.devolucion_ieps');
            $criteria->addSelectColumn($alias . '.devolucion_iva');
            $criteria->addSelectColumn($alias . '.devolucion_total');
            $criteria->addSelectColumn($alias . '.devolucion_subtotal');
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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Devolucion
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DevolucionPeer::doSelect($critcopy, $con);
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
        return DevolucionPeer::populateObjects(DevolucionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DevolucionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

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
     * @param Devolucion $obj A Devolucion object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIddevolucion();
            } // if key === null
            DevolucionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Devolucion object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Devolucion) {
                $key = (string) $value->getIddevolucion();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Devolucion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DevolucionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Devolucion Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DevolucionPeer::$instances[$key])) {
                return DevolucionPeer::$instances[$key];
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
        foreach (DevolucionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DevolucionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to devolucion
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in DevoluciondetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevoluciondetallePeer::clearInstancePool();
        // Invalidate objects in DevolucionnotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevolucionnotaPeer::clearInstancePool();
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
        $cls = DevolucionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DevolucionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DevolucionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Devolucion object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DevolucionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DevolucionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DevolucionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DevolucionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DevolucionPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Devolucion objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol = DevolucionPeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to $obj2 (Almacen)
                $obj2->addDevolucion($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdauditor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol = DevolucionPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to $obj2 (Usuario)
                $obj2->addDevolucionRelatedByIdauditor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol = DevolucionPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to $obj2 (Empresa)
                $obj2->addDevolucion($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with their Proveedor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol = DevolucionPeer::NUM_HYDRATE_COLUMNS;
        ProveedorPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to $obj2 (Proveedor)
                $obj2->addDevolucion($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol = DevolucionPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to $obj2 (Sucursal)
                $obj2->addDevolucion($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdusuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol = DevolucionPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to $obj2 (Usuario)
                $obj2->addDevolucionRelatedByIdusuario($obj1);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Devolucion objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol2 = DevolucionPeer::NUM_HYDRATE_COLUMNS;

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

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj2 (Almacen)
                $obj2->addDevolucion($obj1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj3 (Usuario)
                $obj3->addDevolucionRelatedByIdauditor($obj1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj4 (Empresa)
                $obj4->addDevolucion($obj1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj5 (Proveedor)
                $obj5->addDevolucion($obj1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj6 (Sucursal)
                $obj6->addDevolucion($obj1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj7 (Usuario)
                $obj7->addDevolucionRelatedByIdusuario($obj1);
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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DevolucionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Devolucion objects pre-filled with all related objects except Almacen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
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
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol2 = DevolucionPeer::NUM_HYDRATE_COLUMNS;

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

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj2 (Usuario)
                $obj2->addDevolucionRelatedByIdauditor($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj3 (Empresa)
                $obj3->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj4 (Proveedor)
                $obj4->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj5 (Sucursal)
                $obj5->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj6 (Usuario)
                $obj6->addDevolucionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with all related objects except UsuarioRelatedByIdauditor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
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
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol2 = DevolucionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj2 (Almacen)
                $obj2->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj3 (Empresa)
                $obj3->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj4 (Proveedor)
                $obj4->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj5 (Sucursal)
                $obj5->addDevolucion($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with all related objects except Empresa.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
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
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol2 = DevolucionPeer::NUM_HYDRATE_COLUMNS;

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

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj2 (Almacen)
                $obj2->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj3 (Usuario)
                $obj3->addDevolucionRelatedByIdauditor($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj4 (Proveedor)
                $obj4->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj5 (Sucursal)
                $obj5->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj6 (Usuario)
                $obj6->addDevolucionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with all related objects except Proveedor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
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
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol2 = DevolucionPeer::NUM_HYDRATE_COLUMNS;

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

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj2 (Almacen)
                $obj2->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj3 (Usuario)
                $obj3->addDevolucionRelatedByIdauditor($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj4 (Empresa)
                $obj4->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj5 (Sucursal)
                $obj5->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj6 (Usuario)
                $obj6->addDevolucionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
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
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol2 = DevolucionPeer::NUM_HYDRATE_COLUMNS;

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

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj2 (Almacen)
                $obj2->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj3 (Usuario)
                $obj3->addDevolucionRelatedByIdauditor($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj4 (Empresa)
                $obj4->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj5 (Proveedor)
                $obj5->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj6 (Usuario)
                $obj6->addDevolucionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Devolucion objects pre-filled with all related objects except UsuarioRelatedByIdusuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Devolucion objects.
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
            $criteria->setDbName(DevolucionPeer::DATABASE_NAME);
        }

        DevolucionPeer::addSelectColumns($criteria);
        $startcol2 = DevolucionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(DevolucionPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(DevolucionPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = DevolucionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = DevolucionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = DevolucionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                DevolucionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Devolucion) to the collection in $obj2 (Almacen)
                $obj2->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj3 (Empresa)
                $obj3->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj4 (Proveedor)
                $obj4->addDevolucion($obj1);

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

                // Add the $obj1 (Devolucion) to the collection in $obj5 (Sucursal)
                $obj5->addDevolucion($obj1);

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
        return Propel::getDatabaseMap(DevolucionPeer::DATABASE_NAME)->getTable(DevolucionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDevolucionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDevolucionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DevolucionTableMap());
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
        return DevolucionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Devolucion or Criteria object.
     *
     * @param      mixed $values Criteria or Devolucion object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Devolucion object
        }

        if ($criteria->containsKey(DevolucionPeer::IDDEVOLUCION) && $criteria->keyContainsValue(DevolucionPeer::IDDEVOLUCION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DevolucionPeer::IDDEVOLUCION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Devolucion or Criteria object.
     *
     * @param      mixed $values Criteria or Devolucion object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DevolucionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DevolucionPeer::IDDEVOLUCION);
            $value = $criteria->remove(DevolucionPeer::IDDEVOLUCION);
            if ($value) {
                $selectCriteria->add(DevolucionPeer::IDDEVOLUCION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DevolucionPeer::TABLE_NAME);
            }

        } else { // $values is Devolucion object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the devolucion table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += DevolucionPeer::doOnDeleteCascade(new Criteria(DevolucionPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(DevolucionPeer::TABLE_NAME, $con, DevolucionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DevolucionPeer::clearInstancePool();
            DevolucionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Devolucion or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Devolucion object or primary key or array of primary keys
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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Devolucion) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);
            $criteria->add(DevolucionPeer::IDDEVOLUCION, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(DevolucionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += DevolucionPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                DevolucionPeer::clearInstancePool();
            } elseif ($values instanceof Devolucion) { // it's a model object
                DevolucionPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    DevolucionPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DevolucionPeer::clearRelatedInstancePool();
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
        $objects = DevolucionPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Devoluciondetalle objects
            $criteria = new Criteria(DevoluciondetallePeer::DATABASE_NAME);

            $criteria->add(DevoluciondetallePeer::IDDEVOLUCION, $obj->getIddevolucion());
            $affectedRows += DevoluciondetallePeer::doDelete($criteria, $con);

            // delete related Devolucionnota objects
            $criteria = new Criteria(DevolucionnotaPeer::DATABASE_NAME);

            $criteria->add(DevolucionnotaPeer::IDDEVOLUCION, $obj->getIddevolucion());
            $affectedRows += DevolucionnotaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Devolucion object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Devolucion $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DevolucionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DevolucionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DevolucionPeer::DATABASE_NAME, DevolucionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Devolucion
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DevolucionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);
        $criteria->add(DevolucionPeer::IDDEVOLUCION, $pk);

        $v = DevolucionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Devolucion[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);
            $criteria->add(DevolucionPeer::IDDEVOLUCION, $pks, Criteria::IN);
            $objs = DevolucionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDevolucionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDevolucionPeer::buildTableMap();

