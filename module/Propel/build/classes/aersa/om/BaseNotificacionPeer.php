<?php


/**
 * Base static class for performing query and update operations on the 'notificacion' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseNotificacionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'notificacion';

    /** the related Propel class for this table */
    const OM_CLASS = 'Notificacion';

    /** the related TableMap class for this table */
    const TM_CLASS = 'NotificacionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the idnotificacion field */
    const IDNOTIFICACION = 'notificacion.idnotificacion';

    /** the column name for the notificacion_proceso field */
    const NOTIFICACION_PROCESO = 'notificacion.notificacion_proceso';

    /** the column name for the idproceso field */
    const IDPROCESO = 'notificacion.idproceso';

    /** the column name for the rol1 field */
    const ROL1 = 'notificacion.rol1';

    /** the column name for the rol2 field */
    const ROL2 = 'notificacion.rol2';

    /** the column name for the rol3 field */
    const ROL3 = 'notificacion.rol3';

    /** the column name for the rol4 field */
    const ROL4 = 'notificacion.rol4';

    /** the column name for the rol5 field */
    const ROL5 = 'notificacion.rol5';

    /** The enumerated values for the notificacion_proceso field */
    const NOTIFICACION_PROCESO_COMPRA = 'compra';
    const NOTIFICACION_PROCESO_REQUISICION = 'requisicion';
    const NOTIFICACION_PROCESO_TABLAJERIA = 'tablajeria';
    const NOTIFICACION_PROCESO_ORDENCREDITO = 'ordencredito';
    const NOTIFICACION_PROCESO_CONSIGNACION = 'consignacion';
    const NOTIFICACION_PROCESO_INGRESOS = 'ingresos';
    const NOTIFICACION_PROCESO_VENTAS = 'ventas';
    const NOTIFICACION_PROCESO_INVENTARIOS = 'inventarios';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Notificacion objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Notificacion[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. NotificacionPeer::$fieldNames[NotificacionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idnotificacion', 'NotificacionProceso', 'Idproceso', 'Rol1', 'Rol2', 'Rol3', 'Rol4', 'Rol5', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idnotificacion', 'notificacionProceso', 'idproceso', 'rol1', 'rol2', 'rol3', 'rol4', 'rol5', ),
        BasePeer::TYPE_COLNAME => array (NotificacionPeer::IDNOTIFICACION, NotificacionPeer::NOTIFICACION_PROCESO, NotificacionPeer::IDPROCESO, NotificacionPeer::ROL1, NotificacionPeer::ROL2, NotificacionPeer::ROL3, NotificacionPeer::ROL4, NotificacionPeer::ROL5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDNOTIFICACION', 'NOTIFICACION_PROCESO', 'IDPROCESO', 'ROL1', 'ROL2', 'ROL3', 'ROL4', 'ROL5', ),
        BasePeer::TYPE_FIELDNAME => array ('idnotificacion', 'notificacion_proceso', 'idproceso', 'rol1', 'rol2', 'rol3', 'rol4', 'rol5', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. NotificacionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idnotificacion' => 0, 'NotificacionProceso' => 1, 'Idproceso' => 2, 'Rol1' => 3, 'Rol2' => 4, 'Rol3' => 5, 'Rol4' => 6, 'Rol5' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idnotificacion' => 0, 'notificacionProceso' => 1, 'idproceso' => 2, 'rol1' => 3, 'rol2' => 4, 'rol3' => 5, 'rol4' => 6, 'rol5' => 7, ),
        BasePeer::TYPE_COLNAME => array (NotificacionPeer::IDNOTIFICACION => 0, NotificacionPeer::NOTIFICACION_PROCESO => 1, NotificacionPeer::IDPROCESO => 2, NotificacionPeer::ROL1 => 3, NotificacionPeer::ROL2 => 4, NotificacionPeer::ROL3 => 5, NotificacionPeer::ROL4 => 6, NotificacionPeer::ROL5 => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDNOTIFICACION' => 0, 'NOTIFICACION_PROCESO' => 1, 'IDPROCESO' => 2, 'ROL1' => 3, 'ROL2' => 4, 'ROL3' => 5, 'ROL4' => 6, 'ROL5' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('idnotificacion' => 0, 'notificacion_proceso' => 1, 'idproceso' => 2, 'rol1' => 3, 'rol2' => 4, 'rol3' => 5, 'rol4' => 6, 'rol5' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        NotificacionPeer::NOTIFICACION_PROCESO => array(
            NotificacionPeer::NOTIFICACION_PROCESO_COMPRA,
            NotificacionPeer::NOTIFICACION_PROCESO_REQUISICION,
            NotificacionPeer::NOTIFICACION_PROCESO_TABLAJERIA,
            NotificacionPeer::NOTIFICACION_PROCESO_ORDENCREDITO,
            NotificacionPeer::NOTIFICACION_PROCESO_CONSIGNACION,
            NotificacionPeer::NOTIFICACION_PROCESO_INGRESOS,
            NotificacionPeer::NOTIFICACION_PROCESO_VENTAS,
            NotificacionPeer::NOTIFICACION_PROCESO_INVENTARIOS,
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
        $toNames = NotificacionPeer::getFieldNames($toType);
        $key = isset(NotificacionPeer::$fieldKeys[$fromType][$name]) ? NotificacionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(NotificacionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, NotificacionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return NotificacionPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return NotificacionPeer::$enumValueSets;
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
        $valueSets = NotificacionPeer::getValueSets();

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
        $values = NotificacionPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. NotificacionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(NotificacionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(NotificacionPeer::IDNOTIFICACION);
            $criteria->addSelectColumn(NotificacionPeer::NOTIFICACION_PROCESO);
            $criteria->addSelectColumn(NotificacionPeer::IDPROCESO);
            $criteria->addSelectColumn(NotificacionPeer::ROL1);
            $criteria->addSelectColumn(NotificacionPeer::ROL2);
            $criteria->addSelectColumn(NotificacionPeer::ROL3);
            $criteria->addSelectColumn(NotificacionPeer::ROL4);
            $criteria->addSelectColumn(NotificacionPeer::ROL5);
        } else {
            $criteria->addSelectColumn($alias . '.idnotificacion');
            $criteria->addSelectColumn($alias . '.notificacion_proceso');
            $criteria->addSelectColumn($alias . '.idproceso');
            $criteria->addSelectColumn($alias . '.rol1');
            $criteria->addSelectColumn($alias . '.rol2');
            $criteria->addSelectColumn($alias . '.rol3');
            $criteria->addSelectColumn($alias . '.rol4');
            $criteria->addSelectColumn($alias . '.rol5');
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
        $criteria->setPrimaryTableName(NotificacionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            NotificacionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(NotificacionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Notificacion
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = NotificacionPeer::doSelect($critcopy, $con);
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
        return NotificacionPeer::populateObjects(NotificacionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            NotificacionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(NotificacionPeer::DATABASE_NAME);

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
     * @param Notificacion $obj A Notificacion object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdnotificacion();
            } // if key === null
            NotificacionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Notificacion object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Notificacion) {
                $key = (string) $value->getIdnotificacion();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Notificacion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(NotificacionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Notificacion Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(NotificacionPeer::$instances[$key])) {
                return NotificacionPeer::$instances[$key];
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
        foreach (NotificacionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        NotificacionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to notificacion
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
        $cls = NotificacionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = NotificacionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = NotificacionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                NotificacionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Notificacion object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = NotificacionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = NotificacionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + NotificacionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = NotificacionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            NotificacionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(NotificacionPeer::DATABASE_NAME)->getTable(NotificacionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseNotificacionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseNotificacionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \NotificacionTableMap());
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
        return NotificacionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Notificacion or Criteria object.
     *
     * @param      mixed $values Criteria or Notificacion object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Notificacion object
        }

        if ($criteria->containsKey(NotificacionPeer::IDNOTIFICACION) && $criteria->keyContainsValue(NotificacionPeer::IDNOTIFICACION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.NotificacionPeer::IDNOTIFICACION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(NotificacionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Notificacion or Criteria object.
     *
     * @param      mixed $values Criteria or Notificacion object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(NotificacionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(NotificacionPeer::IDNOTIFICACION);
            $value = $criteria->remove(NotificacionPeer::IDNOTIFICACION);
            if ($value) {
                $selectCriteria->add(NotificacionPeer::IDNOTIFICACION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(NotificacionPeer::TABLE_NAME);
            }

        } else { // $values is Notificacion object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(NotificacionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the notificacion table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(NotificacionPeer::TABLE_NAME, $con, NotificacionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            NotificacionPeer::clearInstancePool();
            NotificacionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Notificacion or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Notificacion object or primary key or array of primary keys
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
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            NotificacionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Notificacion) { // it's a model object
            // invalidate the cache for this single object
            NotificacionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(NotificacionPeer::DATABASE_NAME);
            $criteria->add(NotificacionPeer::IDNOTIFICACION, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                NotificacionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(NotificacionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            NotificacionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Notificacion object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Notificacion $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(NotificacionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(NotificacionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(NotificacionPeer::DATABASE_NAME, NotificacionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Notificacion
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = NotificacionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(NotificacionPeer::DATABASE_NAME);
        $criteria->add(NotificacionPeer::IDNOTIFICACION, $pk);

        $v = NotificacionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Notificacion[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(NotificacionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(NotificacionPeer::DATABASE_NAME);
            $criteria->add(NotificacionPeer::IDNOTIFICACION, $pks, Criteria::IN);
            $objs = NotificacionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseNotificacionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNotificacionPeer::buildTableMap();

