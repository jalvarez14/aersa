<?php


/**
 * Base static class for performing query and update operations on the 'empresa' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseEmpresaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'empresa';

    /** the related Propel class for this table */
    const OM_CLASS = 'Empresa';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EmpresaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 5;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 5;

    /** the column name for the idempresa field */
    const IDEMPRESA = 'empresa.idempresa';

    /** the column name for the empresa_nombrecomercial field */
    const EMPRESA_NOMBRECOMERCIAL = 'empresa.empresa_nombrecomercial';

    /** the column name for the empresa_razonsocial field */
    const EMPRESA_RAZONSOCIAL = 'empresa.empresa_razonsocial';

    /** the column name for the empresa_estatus field */
    const EMPRESA_ESTATUS = 'empresa.empresa_estatus';

    /** the column name for the empresa_administracion field */
    const EMPRESA_ADMINISTRACION = 'empresa.empresa_administracion';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Empresa objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Empresa[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EmpresaPeer::$fieldNames[EmpresaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idempresa', 'EmpresaNombrecomercial', 'EmpresaRazonsocial', 'EmpresaEstatus', 'EmpresaAdministracion', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idempresa', 'empresaNombrecomercial', 'empresaRazonsocial', 'empresaEstatus', 'empresaAdministracion', ),
        BasePeer::TYPE_COLNAME => array (EmpresaPeer::IDEMPRESA, EmpresaPeer::EMPRESA_NOMBRECOMERCIAL, EmpresaPeer::EMPRESA_RAZONSOCIAL, EmpresaPeer::EMPRESA_ESTATUS, EmpresaPeer::EMPRESA_ADMINISTRACION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEMPRESA', 'EMPRESA_NOMBRECOMERCIAL', 'EMPRESA_RAZONSOCIAL', 'EMPRESA_ESTATUS', 'EMPRESA_ADMINISTRACION', ),
        BasePeer::TYPE_FIELDNAME => array ('idempresa', 'empresa_nombrecomercial', 'empresa_razonsocial', 'empresa_estatus', 'empresa_administracion', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EmpresaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idempresa' => 0, 'EmpresaNombrecomercial' => 1, 'EmpresaRazonsocial' => 2, 'EmpresaEstatus' => 3, 'EmpresaAdministracion' => 4, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idempresa' => 0, 'empresaNombrecomercial' => 1, 'empresaRazonsocial' => 2, 'empresaEstatus' => 3, 'empresaAdministracion' => 4, ),
        BasePeer::TYPE_COLNAME => array (EmpresaPeer::IDEMPRESA => 0, EmpresaPeer::EMPRESA_NOMBRECOMERCIAL => 1, EmpresaPeer::EMPRESA_RAZONSOCIAL => 2, EmpresaPeer::EMPRESA_ESTATUS => 3, EmpresaPeer::EMPRESA_ADMINISTRACION => 4, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEMPRESA' => 0, 'EMPRESA_NOMBRECOMERCIAL' => 1, 'EMPRESA_RAZONSOCIAL' => 2, 'EMPRESA_ESTATUS' => 3, 'EMPRESA_ADMINISTRACION' => 4, ),
        BasePeer::TYPE_FIELDNAME => array ('idempresa' => 0, 'empresa_nombrecomercial' => 1, 'empresa_razonsocial' => 2, 'empresa_estatus' => 3, 'empresa_administracion' => 4, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
        $toNames = EmpresaPeer::getFieldNames($toType);
        $key = isset(EmpresaPeer::$fieldKeys[$fromType][$name]) ? EmpresaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EmpresaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EmpresaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EmpresaPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. EmpresaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EmpresaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EmpresaPeer::IDEMPRESA);
            $criteria->addSelectColumn(EmpresaPeer::EMPRESA_NOMBRECOMERCIAL);
            $criteria->addSelectColumn(EmpresaPeer::EMPRESA_RAZONSOCIAL);
            $criteria->addSelectColumn(EmpresaPeer::EMPRESA_ESTATUS);
            $criteria->addSelectColumn(EmpresaPeer::EMPRESA_ADMINISTRACION);
        } else {
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.empresa_nombrecomercial');
            $criteria->addSelectColumn($alias . '.empresa_razonsocial');
            $criteria->addSelectColumn($alias . '.empresa_estatus');
            $criteria->addSelectColumn($alias . '.empresa_administracion');
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
        $criteria->setPrimaryTableName(EmpresaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EmpresaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EmpresaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Empresa
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EmpresaPeer::doSelect($critcopy, $con);
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
        return EmpresaPeer::populateObjects(EmpresaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EmpresaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EmpresaPeer::DATABASE_NAME);

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
     * @param Empresa $obj A Empresa object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdempresa();
            } // if key === null
            EmpresaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Empresa object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Empresa) {
                $key = (string) $value->getIdempresa();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Empresa object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EmpresaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Empresa Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EmpresaPeer::$instances[$key])) {
                return EmpresaPeer::$instances[$key];
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
        foreach (EmpresaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EmpresaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to empresa
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CompraPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompraPeer::clearInstancePool();
        // Invalidate objects in DevolucionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevolucionPeer::clearInstancePool();
        // Invalidate objects in InventariomesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        InventariomesPeer::clearInstancePool();
        // Invalidate objects in NotacreditoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotacreditoPeer::clearInstancePool();
        // Invalidate objects in OrdentablajeriaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        OrdentablajeriaPeer::clearInstancePool();
        // Invalidate objects in PlantillatablajeriaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PlantillatablajeriaPeer::clearInstancePool();
        // Invalidate objects in ProductoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductoPeer::clearInstancePool();
        // Invalidate objects in ProveedorPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProveedorPeer::clearInstancePool();
        // Invalidate objects in RequisicionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisicionPeer::clearInstancePool();
        // Invalidate objects in SucursalPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        SucursalPeer::clearInstancePool();
        // Invalidate objects in TrabajadorpromedioPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        TrabajadorpromedioPeer::clearInstancePool();
        // Invalidate objects in UsuarioempresaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        UsuarioempresaPeer::clearInstancePool();
        // Invalidate objects in VentaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentaPeer::clearInstancePool();
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
        $cls = EmpresaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EmpresaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EmpresaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EmpresaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Empresa object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EmpresaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EmpresaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EmpresaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EmpresaPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(EmpresaPeer::DATABASE_NAME)->getTable(EmpresaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEmpresaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEmpresaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EmpresaTableMap());
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
        return EmpresaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Empresa or Criteria object.
     *
     * @param      mixed $values Criteria or Empresa object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Empresa object
        }

        if ($criteria->containsKey(EmpresaPeer::IDEMPRESA) && $criteria->keyContainsValue(EmpresaPeer::IDEMPRESA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EmpresaPeer::IDEMPRESA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EmpresaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Empresa or Criteria object.
     *
     * @param      mixed $values Criteria or Empresa object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EmpresaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EmpresaPeer::IDEMPRESA);
            $value = $criteria->remove(EmpresaPeer::IDEMPRESA);
            if ($value) {
                $selectCriteria->add(EmpresaPeer::IDEMPRESA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EmpresaPeer::TABLE_NAME);
            }

        } else { // $values is Empresa object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EmpresaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the empresa table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += EmpresaPeer::doOnDeleteCascade(new Criteria(EmpresaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(EmpresaPeer::TABLE_NAME, $con, EmpresaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EmpresaPeer::clearInstancePool();
            EmpresaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Empresa or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Empresa object or primary key or array of primary keys
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
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Empresa) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EmpresaPeer::DATABASE_NAME);
            $criteria->add(EmpresaPeer::IDEMPRESA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(EmpresaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += EmpresaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                EmpresaPeer::clearInstancePool();
            } elseif ($values instanceof Empresa) { // it's a model object
                EmpresaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    EmpresaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EmpresaPeer::clearRelatedInstancePool();
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
        $objects = EmpresaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Compra objects
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);

            $criteria->add(CompraPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += CompraPeer::doDelete($criteria, $con);

            // delete related Devolucion objects
            $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);

            $criteria->add(DevolucionPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += DevolucionPeer::doDelete($criteria, $con);

            // delete related Inventariomes objects
            $criteria = new Criteria(InventariomesPeer::DATABASE_NAME);

            $criteria->add(InventariomesPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += InventariomesPeer::doDelete($criteria, $con);

            // delete related Notacredito objects
            $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);

            $criteria->add(NotacreditoPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += NotacreditoPeer::doDelete($criteria, $con);

            // delete related Ordentablajeria objects
            $criteria = new Criteria(OrdentablajeriaPeer::DATABASE_NAME);

            $criteria->add(OrdentablajeriaPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += OrdentablajeriaPeer::doDelete($criteria, $con);

            // delete related Plantillatablajeria objects
            $criteria = new Criteria(PlantillatablajeriaPeer::DATABASE_NAME);

            $criteria->add(PlantillatablajeriaPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += PlantillatablajeriaPeer::doDelete($criteria, $con);

            // delete related Producto objects
            $criteria = new Criteria(ProductoPeer::DATABASE_NAME);

            $criteria->add(ProductoPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += ProductoPeer::doDelete($criteria, $con);

            // delete related Proveedor objects
            $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);

            $criteria->add(ProveedorPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += ProveedorPeer::doDelete($criteria, $con);

            // delete related Requisicion objects
            $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);

            $criteria->add(RequisicionPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += RequisicionPeer::doDelete($criteria, $con);

            // delete related Sucursal objects
            $criteria = new Criteria(SucursalPeer::DATABASE_NAME);

            $criteria->add(SucursalPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += SucursalPeer::doDelete($criteria, $con);

            // delete related Trabajadorpromedio objects
            $criteria = new Criteria(TrabajadorpromedioPeer::DATABASE_NAME);

            $criteria->add(TrabajadorpromedioPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += TrabajadorpromedioPeer::doDelete($criteria, $con);

            // delete related Usuarioempresa objects
            $criteria = new Criteria(UsuarioempresaPeer::DATABASE_NAME);

            $criteria->add(UsuarioempresaPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += UsuarioempresaPeer::doDelete($criteria, $con);

            // delete related Venta objects
            $criteria = new Criteria(VentaPeer::DATABASE_NAME);

            $criteria->add(VentaPeer::IDEMPRESA, $obj->getIdempresa());
            $affectedRows += VentaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Empresa object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Empresa $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EmpresaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EmpresaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EmpresaPeer::DATABASE_NAME, EmpresaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Empresa
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EmpresaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EmpresaPeer::DATABASE_NAME);
        $criteria->add(EmpresaPeer::IDEMPRESA, $pk);

        $v = EmpresaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Empresa[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EmpresaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EmpresaPeer::DATABASE_NAME);
            $criteria->add(EmpresaPeer::IDEMPRESA, $pks, Criteria::IN);
            $objs = EmpresaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEmpresaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEmpresaPeer::buildTableMap();

