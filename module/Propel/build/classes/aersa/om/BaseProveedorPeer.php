<?php


/**
 * Base static class for performing query and update operations on the 'proveedor' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseProveedorPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'proveedor';

    /** the related Propel class for this table */
    const OM_CLASS = 'Proveedor';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProveedorTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the idproveedor field */
    const IDPROVEEDOR = 'proveedor.idproveedor';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'proveedor.idempresa';

    /** the column name for the proveedor_nombrecomercial field */
    const PROVEEDOR_NOMBRECOMERCIAL = 'proveedor.proveedor_nombrecomercial';

    /** the column name for the proveedor_razonsocial field */
    const PROVEEDOR_RAZONSOCIAL = 'proveedor.proveedor_razonsocial';

    /** the column name for the proveedor_RFC field */
    const PROVEEDOR_RFC = 'proveedor.proveedor_RFC';

    /** the column name for the proveedor_telefono field */
    const PROVEEDOR_TELEFONO = 'proveedor.proveedor_telefono';

    /** the column name for the proveedor_calle field */
    const PROVEEDOR_CALLE = 'proveedor.proveedor_calle';

    /** the column name for the proveedor_numero field */
    const PROVEEDOR_NUMERO = 'proveedor.proveedor_numero';

    /** the column name for the proveedor_interior field */
    const PROVEEDOR_INTERIOR = 'proveedor.proveedor_interior';

    /** the column name for the proveedor_colonia field */
    const PROVEEDOR_COLONIA = 'proveedor.proveedor_colonia';

    /** the column name for the proveedor_ciudad field */
    const PROVEEDOR_CIUDAD = 'proveedor.proveedor_ciudad';

    /** the column name for the proveedor_estado field */
    const PROVEEDOR_ESTADO = 'proveedor.proveedor_estado';

    /** the column name for the proveedor_codigopostal field */
    const PROVEEDOR_CODIGOPOSTAL = 'proveedor.proveedor_codigopostal';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Proveedor objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Proveedor[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProveedorPeer::$fieldNames[ProveedorPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idproveedor', 'Idempresa', 'ProveedorNombrecomercial', 'ProveedorRazonsocial', 'ProveedorRfc', 'ProveedorTelefono', 'ProveedorCalle', 'ProveedorNumero', 'ProveedorInterior', 'ProveedorColonia', 'ProveedorCiudad', 'ProveedorEstado', 'ProveedorCodigopostal', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproveedor', 'idempresa', 'proveedorNombrecomercial', 'proveedorRazonsocial', 'proveedorRfc', 'proveedorTelefono', 'proveedorCalle', 'proveedorNumero', 'proveedorInterior', 'proveedorColonia', 'proveedorCiudad', 'proveedorEstado', 'proveedorCodigopostal', ),
        BasePeer::TYPE_COLNAME => array (ProveedorPeer::IDPROVEEDOR, ProveedorPeer::IDEMPRESA, ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL, ProveedorPeer::PROVEEDOR_RAZONSOCIAL, ProveedorPeer::PROVEEDOR_RFC, ProveedorPeer::PROVEEDOR_TELEFONO, ProveedorPeer::PROVEEDOR_CALLE, ProveedorPeer::PROVEEDOR_NUMERO, ProveedorPeer::PROVEEDOR_INTERIOR, ProveedorPeer::PROVEEDOR_COLONIA, ProveedorPeer::PROVEEDOR_CIUDAD, ProveedorPeer::PROVEEDOR_ESTADO, ProveedorPeer::PROVEEDOR_CODIGOPOSTAL, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROVEEDOR', 'IDEMPRESA', 'PROVEEDOR_NOMBRECOMERCIAL', 'PROVEEDOR_RAZONSOCIAL', 'PROVEEDOR_RFC', 'PROVEEDOR_TELEFONO', 'PROVEEDOR_CALLE', 'PROVEEDOR_NUMERO', 'PROVEEDOR_INTERIOR', 'PROVEEDOR_COLONIA', 'PROVEEDOR_CIUDAD', 'PROVEEDOR_ESTADO', 'PROVEEDOR_CODIGOPOSTAL', ),
        BasePeer::TYPE_FIELDNAME => array ('idproveedor', 'idempresa', 'proveedor_nombrecomercial', 'proveedor_razonsocial', 'proveedor_RFC', 'proveedor_telefono', 'proveedor_calle', 'proveedor_numero', 'proveedor_interior', 'proveedor_colonia', 'proveedor_ciudad', 'proveedor_estado', 'proveedor_codigopostal', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProveedorPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idproveedor' => 0, 'Idempresa' => 1, 'ProveedorNombrecomercial' => 2, 'ProveedorRazonsocial' => 3, 'ProveedorRfc' => 4, 'ProveedorTelefono' => 5, 'ProveedorCalle' => 6, 'ProveedorNumero' => 7, 'ProveedorInterior' => 8, 'ProveedorColonia' => 9, 'ProveedorCiudad' => 10, 'ProveedorEstado' => 11, 'ProveedorCodigopostal' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproveedor' => 0, 'idempresa' => 1, 'proveedorNombrecomercial' => 2, 'proveedorRazonsocial' => 3, 'proveedorRfc' => 4, 'proveedorTelefono' => 5, 'proveedorCalle' => 6, 'proveedorNumero' => 7, 'proveedorInterior' => 8, 'proveedorColonia' => 9, 'proveedorCiudad' => 10, 'proveedorEstado' => 11, 'proveedorCodigopostal' => 12, ),
        BasePeer::TYPE_COLNAME => array (ProveedorPeer::IDPROVEEDOR => 0, ProveedorPeer::IDEMPRESA => 1, ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL => 2, ProveedorPeer::PROVEEDOR_RAZONSOCIAL => 3, ProveedorPeer::PROVEEDOR_RFC => 4, ProveedorPeer::PROVEEDOR_TELEFONO => 5, ProveedorPeer::PROVEEDOR_CALLE => 6, ProveedorPeer::PROVEEDOR_NUMERO => 7, ProveedorPeer::PROVEEDOR_INTERIOR => 8, ProveedorPeer::PROVEEDOR_COLONIA => 9, ProveedorPeer::PROVEEDOR_CIUDAD => 10, ProveedorPeer::PROVEEDOR_ESTADO => 11, ProveedorPeer::PROVEEDOR_CODIGOPOSTAL => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROVEEDOR' => 0, 'IDEMPRESA' => 1, 'PROVEEDOR_NOMBRECOMERCIAL' => 2, 'PROVEEDOR_RAZONSOCIAL' => 3, 'PROVEEDOR_RFC' => 4, 'PROVEEDOR_TELEFONO' => 5, 'PROVEEDOR_CALLE' => 6, 'PROVEEDOR_NUMERO' => 7, 'PROVEEDOR_INTERIOR' => 8, 'PROVEEDOR_COLONIA' => 9, 'PROVEEDOR_CIUDAD' => 10, 'PROVEEDOR_ESTADO' => 11, 'PROVEEDOR_CODIGOPOSTAL' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('idproveedor' => 0, 'idempresa' => 1, 'proveedor_nombrecomercial' => 2, 'proveedor_razonsocial' => 3, 'proveedor_RFC' => 4, 'proveedor_telefono' => 5, 'proveedor_calle' => 6, 'proveedor_numero' => 7, 'proveedor_interior' => 8, 'proveedor_colonia' => 9, 'proveedor_ciudad' => 10, 'proveedor_estado' => 11, 'proveedor_codigopostal' => 12, ),
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
        $toNames = ProveedorPeer::getFieldNames($toType);
        $key = isset(ProveedorPeer::$fieldKeys[$fromType][$name]) ? ProveedorPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProveedorPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ProveedorPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProveedorPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. ProveedorPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProveedorPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ProveedorPeer::IDPROVEEDOR);
            $criteria->addSelectColumn(ProveedorPeer::IDEMPRESA);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_RAZONSOCIAL);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_RFC);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_TELEFONO);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_CALLE);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_NUMERO);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_INTERIOR);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_COLONIA);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_CIUDAD);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_ESTADO);
            $criteria->addSelectColumn(ProveedorPeer::PROVEEDOR_CODIGOPOSTAL);
        } else {
            $criteria->addSelectColumn($alias . '.idproveedor');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.proveedor_nombrecomercial');
            $criteria->addSelectColumn($alias . '.proveedor_razonsocial');
            $criteria->addSelectColumn($alias . '.proveedor_RFC');
            $criteria->addSelectColumn($alias . '.proveedor_telefono');
            $criteria->addSelectColumn($alias . '.proveedor_calle');
            $criteria->addSelectColumn($alias . '.proveedor_numero');
            $criteria->addSelectColumn($alias . '.proveedor_interior');
            $criteria->addSelectColumn($alias . '.proveedor_colonia');
            $criteria->addSelectColumn($alias . '.proveedor_ciudad');
            $criteria->addSelectColumn($alias . '.proveedor_estado');
            $criteria->addSelectColumn($alias . '.proveedor_codigopostal');
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
        $criteria->setPrimaryTableName(ProveedorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProveedorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProveedorPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Proveedor
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProveedorPeer::doSelect($critcopy, $con);
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
        return ProveedorPeer::populateObjects(ProveedorPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProveedorPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProveedorPeer::DATABASE_NAME);

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
     * @param Proveedor $obj A Proveedor object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdproveedor();
            } // if key === null
            ProveedorPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Proveedor object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Proveedor) {
                $key = (string) $value->getIdproveedor();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Proveedor object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProveedorPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Proveedor Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProveedorPeer::$instances[$key])) {
                return ProveedorPeer::$instances[$key];
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
        foreach (ProveedorPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProveedorPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to proveedor
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in AbonoproveedorPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        AbonoproveedorPeer::clearInstancePool();
        // Invalidate objects in CompraPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompraPeer::clearInstancePool();
        // Invalidate objects in DevolucionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevolucionPeer::clearInstancePool();
        // Invalidate objects in NotacreditoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotacreditoPeer::clearInstancePool();
        // Invalidate objects in ProveedorescfdiPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProveedorescfdiPeer::clearInstancePool();
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
        $cls = ProveedorPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProveedorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProveedorPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProveedorPeer::addInstanceToPool($obj, $key);
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
     * @return array (Proveedor object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProveedorPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProveedorPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProveedorPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProveedorPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(ProveedorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProveedorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProveedorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProveedorPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
     * Selects a collection of Proveedor objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Proveedor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProveedorPeer::DATABASE_NAME);
        }

        ProveedorPeer::addSelectColumns($criteria);
        $startcol = ProveedorPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProveedorPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProveedorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProveedorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProveedorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProveedorPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Proveedor) to $obj2 (Empresa)
                $obj2->addProveedor($obj1);

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
        $criteria->setPrimaryTableName(ProveedorPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProveedorPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProveedorPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProveedorPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
     * Selects a collection of Proveedor objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Proveedor objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProveedorPeer::DATABASE_NAME);
        }

        ProveedorPeer::addSelectColumns($criteria);
        $startcol2 = ProveedorPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProveedorPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProveedorPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProveedorPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProveedorPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProveedorPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Proveedor) to the collection in $obj2 (Empresa)
                $obj2->addProveedor($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(ProveedorPeer::DATABASE_NAME)->getTable(ProveedorPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProveedorPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProveedorPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProveedorTableMap());
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
        return ProveedorPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Proveedor or Criteria object.
     *
     * @param      mixed $values Criteria or Proveedor object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Proveedor object
        }

        if ($criteria->containsKey(ProveedorPeer::IDPROVEEDOR) && $criteria->keyContainsValue(ProveedorPeer::IDPROVEEDOR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProveedorPeer::IDPROVEEDOR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProveedorPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Proveedor or Criteria object.
     *
     * @param      mixed $values Criteria or Proveedor object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProveedorPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProveedorPeer::IDPROVEEDOR);
            $value = $criteria->remove(ProveedorPeer::IDPROVEEDOR);
            if ($value) {
                $selectCriteria->add(ProveedorPeer::IDPROVEEDOR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProveedorPeer::TABLE_NAME);
            }

        } else { // $values is Proveedor object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProveedorPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the proveedor table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ProveedorPeer::doOnDeleteCascade(new Criteria(ProveedorPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ProveedorPeer::TABLE_NAME, $con, ProveedorPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProveedorPeer::clearInstancePool();
            ProveedorPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Proveedor or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Proveedor object or primary key or array of primary keys
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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Proveedor) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);
            $criteria->add(ProveedorPeer::IDPROVEEDOR, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ProveedorPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ProveedorPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ProveedorPeer::clearInstancePool();
            } elseif ($values instanceof Proveedor) { // it's a model object
                ProveedorPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ProveedorPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProveedorPeer::clearRelatedInstancePool();
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
        $objects = ProveedorPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Abonoproveedor objects
            $criteria = new Criteria(AbonoproveedorPeer::DATABASE_NAME);

            $criteria->add(AbonoproveedorPeer::IDPROVEEDOR, $obj->getIdproveedor());
            $affectedRows += AbonoproveedorPeer::doDelete($criteria, $con);

            // delete related Compra objects
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);

            $criteria->add(CompraPeer::IDPROVEEDOR, $obj->getIdproveedor());
            $affectedRows += CompraPeer::doDelete($criteria, $con);

            // delete related Devolucion objects
            $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);

            $criteria->add(DevolucionPeer::IDPROVEEDOR, $obj->getIdproveedor());
            $affectedRows += DevolucionPeer::doDelete($criteria, $con);

            // delete related Notacredito objects
            $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);

            $criteria->add(NotacreditoPeer::IDPROVEEDOR, $obj->getIdproveedor());
            $affectedRows += NotacreditoPeer::doDelete($criteria, $con);

            // delete related Proveedorescfdi objects
            $criteria = new Criteria(ProveedorescfdiPeer::DATABASE_NAME);

            $criteria->add(ProveedorescfdiPeer::IDPROVEEDOR, $obj->getIdproveedor());
            $affectedRows += ProveedorescfdiPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Proveedor object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Proveedor $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProveedorPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProveedorPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ProveedorPeer::DATABASE_NAME, ProveedorPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Proveedor
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProveedorPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);
        $criteria->add(ProveedorPeer::IDPROVEEDOR, $pk);

        $v = ProveedorPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Proveedor[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);
            $criteria->add(ProveedorPeer::IDPROVEEDOR, $pks, Criteria::IN);
            $objs = ProveedorPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProveedorPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProveedorPeer::buildTableMap();

