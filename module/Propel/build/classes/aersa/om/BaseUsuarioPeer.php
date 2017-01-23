<?php


/**
 * Base static class for performing query and update operations on the 'usuario' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseUsuarioPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'usuario';

    /** the related Propel class for this table */
    const OM_CLASS = 'Usuario';

    /** the related TableMap class for this table */
    const TM_CLASS = 'UsuarioTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the idusuario field */
    const IDUSUARIO = 'usuario.idusuario';

    /** the column name for the idrol field */
    const IDROL = 'usuario.idrol';

    /** the column name for the usuario_nombre field */
    const USUARIO_NOMBRE = 'usuario.usuario_nombre';

    /** the column name for the usuario_estatus field */
    const USUARIO_ESTATUS = 'usuario.usuario_estatus';

    /** the column name for the usuario_username field */
    const USUARIO_USERNAME = 'usuario.usuario_username';

    /** the column name for the usuario_password field */
    const USUARIO_PASSWORD = 'usuario.usuario_password';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Usuario objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Usuario[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. UsuarioPeer::$fieldNames[UsuarioPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idusuario', 'Idrol', 'UsuarioNombre', 'UsuarioEstatus', 'UsuarioUsername', 'UsuarioPassword', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idusuario', 'idrol', 'usuarioNombre', 'usuarioEstatus', 'usuarioUsername', 'usuarioPassword', ),
        BasePeer::TYPE_COLNAME => array (UsuarioPeer::IDUSUARIO, UsuarioPeer::IDROL, UsuarioPeer::USUARIO_NOMBRE, UsuarioPeer::USUARIO_ESTATUS, UsuarioPeer::USUARIO_USERNAME, UsuarioPeer::USUARIO_PASSWORD, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDUSUARIO', 'IDROL', 'USUARIO_NOMBRE', 'USUARIO_ESTATUS', 'USUARIO_USERNAME', 'USUARIO_PASSWORD', ),
        BasePeer::TYPE_FIELDNAME => array ('idusuario', 'idrol', 'usuario_nombre', 'usuario_estatus', 'usuario_username', 'usuario_password', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. UsuarioPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idusuario' => 0, 'Idrol' => 1, 'UsuarioNombre' => 2, 'UsuarioEstatus' => 3, 'UsuarioUsername' => 4, 'UsuarioPassword' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idusuario' => 0, 'idrol' => 1, 'usuarioNombre' => 2, 'usuarioEstatus' => 3, 'usuarioUsername' => 4, 'usuarioPassword' => 5, ),
        BasePeer::TYPE_COLNAME => array (UsuarioPeer::IDUSUARIO => 0, UsuarioPeer::IDROL => 1, UsuarioPeer::USUARIO_NOMBRE => 2, UsuarioPeer::USUARIO_ESTATUS => 3, UsuarioPeer::USUARIO_USERNAME => 4, UsuarioPeer::USUARIO_PASSWORD => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDUSUARIO' => 0, 'IDROL' => 1, 'USUARIO_NOMBRE' => 2, 'USUARIO_ESTATUS' => 3, 'USUARIO_USERNAME' => 4, 'USUARIO_PASSWORD' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('idusuario' => 0, 'idrol' => 1, 'usuario_nombre' => 2, 'usuario_estatus' => 3, 'usuario_username' => 4, 'usuario_password' => 5, ),
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
        $toNames = UsuarioPeer::getFieldNames($toType);
        $key = isset(UsuarioPeer::$fieldKeys[$fromType][$name]) ? UsuarioPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(UsuarioPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, UsuarioPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return UsuarioPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. UsuarioPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(UsuarioPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(UsuarioPeer::IDUSUARIO);
            $criteria->addSelectColumn(UsuarioPeer::IDROL);
            $criteria->addSelectColumn(UsuarioPeer::USUARIO_NOMBRE);
            $criteria->addSelectColumn(UsuarioPeer::USUARIO_ESTATUS);
            $criteria->addSelectColumn(UsuarioPeer::USUARIO_USERNAME);
            $criteria->addSelectColumn(UsuarioPeer::USUARIO_PASSWORD);
        } else {
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.idrol');
            $criteria->addSelectColumn($alias . '.usuario_nombre');
            $criteria->addSelectColumn($alias . '.usuario_estatus');
            $criteria->addSelectColumn($alias . '.usuario_username');
            $criteria->addSelectColumn($alias . '.usuario_password');
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
        $criteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Usuario
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = UsuarioPeer::doSelect($critcopy, $con);
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
        return UsuarioPeer::populateObjects(UsuarioPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            UsuarioPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

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
     * @param Usuario $obj A Usuario object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdusuario();
            } // if key === null
            UsuarioPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Usuario object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Usuario) {
                $key = (string) $value->getIdusuario();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Usuario object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(UsuarioPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Usuario Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(UsuarioPeer::$instances[$key])) {
                return UsuarioPeer::$instances[$key];
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
        foreach (UsuarioPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        UsuarioPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to usuario
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in AbonoproveedordetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        AbonoproveedordetallePeer::clearInstancePool();
        // Invalidate objects in AjusteinventarioPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        AjusteinventarioPeer::clearInstancePool();
        // Invalidate objects in AjusteinventarionotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        AjusteinventarionotaPeer::clearInstancePool();
        // Invalidate objects in CierresemananotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CierresemananotaPeer::clearInstancePool();
        // Invalidate objects in CompraPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompraPeer::clearInstancePool();
        // Invalidate objects in CompraPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompraPeer::clearInstancePool();
        // Invalidate objects in CompranotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompranotaPeer::clearInstancePool();
        // Invalidate objects in CuentaporcobrarPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CuentaporcobrarPeer::clearInstancePool();
        // Invalidate objects in DevolucionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevolucionPeer::clearInstancePool();
        // Invalidate objects in DevolucionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevolucionPeer::clearInstancePool();
        // Invalidate objects in DevolucionnotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevolucionnotaPeer::clearInstancePool();
        // Invalidate objects in IngresoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        IngresoPeer::clearInstancePool();
        // Invalidate objects in IngresoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        IngresoPeer::clearInstancePool();
        // Invalidate objects in IngresonotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        IngresonotaPeer::clearInstancePool();
        // Invalidate objects in InventariomesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        InventariomesPeer::clearInstancePool();
        // Invalidate objects in InventariomesPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        InventariomesPeer::clearInstancePool();
        // Invalidate objects in InventariomesdetallenotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        InventariomesdetallenotaPeer::clearInstancePool();
        // Invalidate objects in NotacreditoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotacreditoPeer::clearInstancePool();
        // Invalidate objects in NotacreditoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotacreditoPeer::clearInstancePool();
        // Invalidate objects in NotacreditonotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotacreditonotaPeer::clearInstancePool();
        // Invalidate objects in OrdentablajeriaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        OrdentablajeriaPeer::clearInstancePool();
        // Invalidate objects in OrdentablajeriaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        OrdentablajeriaPeer::clearInstancePool();
        // Invalidate objects in PagocontrareciboPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PagocontrareciboPeer::clearInstancePool();
        // Invalidate objects in RequisicionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisicionPeer::clearInstancePool();
        // Invalidate objects in RequisicionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisicionPeer::clearInstancePool();
        // Invalidate objects in RequisicionnotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisicionnotaPeer::clearInstancePool();
        // Invalidate objects in UsuarioempresaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        UsuarioempresaPeer::clearInstancePool();
        // Invalidate objects in UsuariosucursalPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        UsuariosucursalPeer::clearInstancePool();
        // Invalidate objects in VentaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentaPeer::clearInstancePool();
        // Invalidate objects in VentaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentaPeer::clearInstancePool();
        // Invalidate objects in VentanotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentanotaPeer::clearInstancePool();
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
        $cls = UsuarioPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = UsuarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = UsuarioPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                UsuarioPeer::addInstanceToPool($obj, $key);
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
     * @return array (Usuario object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = UsuarioPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + UsuarioPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = UsuarioPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            UsuarioPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Rol table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinRol(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuarioPeer::IDROL, RolPeer::IDROL, $join_behavior);

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
     * Selects a collection of Usuario objects pre-filled with their Rol objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinRol(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuarioPeer::DATABASE_NAME);
        }

        UsuarioPeer::addSelectColumns($criteria);
        $startcol = UsuarioPeer::NUM_HYDRATE_COLUMNS;
        RolPeer::addSelectColumns($criteria);

        $criteria->addJoin(UsuarioPeer::IDROL, RolPeer::IDROL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = UsuarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuarioPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = RolPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = RolPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RolPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    RolPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Usuario) to $obj2 (Rol)
                $obj2->addUsuario($obj1);

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
        $criteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            UsuarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(UsuarioPeer::IDROL, RolPeer::IDROL, $join_behavior);

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
     * Selects a collection of Usuario objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Usuario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(UsuarioPeer::DATABASE_NAME);
        }

        UsuarioPeer::addSelectColumns($criteria);
        $startcol2 = UsuarioPeer::NUM_HYDRATE_COLUMNS;

        RolPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + RolPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(UsuarioPeer::IDROL, RolPeer::IDROL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = UsuarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = UsuarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = UsuarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                UsuarioPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Rol rows

            $key2 = RolPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = RolPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = RolPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    RolPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Usuario) to the collection in $obj2 (Rol)
                $obj2->addUsuario($obj1);
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
        return Propel::getDatabaseMap(UsuarioPeer::DATABASE_NAME)->getTable(UsuarioPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseUsuarioPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseUsuarioPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \UsuarioTableMap());
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
        return UsuarioPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Usuario or Criteria object.
     *
     * @param      mixed $values Criteria or Usuario object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Usuario object
        }

        if ($criteria->containsKey(UsuarioPeer::IDUSUARIO) && $criteria->keyContainsValue(UsuarioPeer::IDUSUARIO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.UsuarioPeer::IDUSUARIO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Usuario or Criteria object.
     *
     * @param      mixed $values Criteria or Usuario object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(UsuarioPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(UsuarioPeer::IDUSUARIO);
            $value = $criteria->remove(UsuarioPeer::IDUSUARIO);
            if ($value) {
                $selectCriteria->add(UsuarioPeer::IDUSUARIO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(UsuarioPeer::TABLE_NAME);
            }

        } else { // $values is Usuario object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the usuario table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += UsuarioPeer::doOnDeleteCascade(new Criteria(UsuarioPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(UsuarioPeer::TABLE_NAME, $con, UsuarioPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            UsuarioPeer::clearInstancePool();
            UsuarioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Usuario or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Usuario object or primary key or array of primary keys
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
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Usuario) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
            $criteria->add(UsuarioPeer::IDUSUARIO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(UsuarioPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += UsuarioPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                UsuarioPeer::clearInstancePool();
            } elseif ($values instanceof Usuario) { // it's a model object
                UsuarioPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    UsuarioPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            UsuarioPeer::clearRelatedInstancePool();
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
        $objects = UsuarioPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Abonoproveedordetalle objects
            $criteria = new Criteria(AbonoproveedordetallePeer::DATABASE_NAME);

            $criteria->add(AbonoproveedordetallePeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += AbonoproveedordetallePeer::doDelete($criteria, $con);

            // delete related Ajusteinventario objects
            $criteria = new Criteria(AjusteinventarioPeer::DATABASE_NAME);

            $criteria->add(AjusteinventarioPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += AjusteinventarioPeer::doDelete($criteria, $con);

            // delete related Ajusteinventarionota objects
            $criteria = new Criteria(AjusteinventarionotaPeer::DATABASE_NAME);

            $criteria->add(AjusteinventarionotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += AjusteinventarionotaPeer::doDelete($criteria, $con);

            // delete related Cierresemananota objects
            $criteria = new Criteria(CierresemananotaPeer::DATABASE_NAME);

            $criteria->add(CierresemananotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += CierresemananotaPeer::doDelete($criteria, $con);

            // delete related Compra objects
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);

            $criteria->add(CompraPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += CompraPeer::doDelete($criteria, $con);

            // delete related Compra objects
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);

            $criteria->add(CompraPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += CompraPeer::doDelete($criteria, $con);

            // delete related Compranota objects
            $criteria = new Criteria(CompranotaPeer::DATABASE_NAME);

            $criteria->add(CompranotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += CompranotaPeer::doDelete($criteria, $con);

            // delete related Cuentaporcobrar objects
            $criteria = new Criteria(CuentaporcobrarPeer::DATABASE_NAME);

            $criteria->add(CuentaporcobrarPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += CuentaporcobrarPeer::doDelete($criteria, $con);

            // delete related Devolucion objects
            $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);

            $criteria->add(DevolucionPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += DevolucionPeer::doDelete($criteria, $con);

            // delete related Devolucion objects
            $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);

            $criteria->add(DevolucionPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += DevolucionPeer::doDelete($criteria, $con);

            // delete related Devolucionnota objects
            $criteria = new Criteria(DevolucionnotaPeer::DATABASE_NAME);

            $criteria->add(DevolucionnotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += DevolucionnotaPeer::doDelete($criteria, $con);

            // delete related Ingreso objects
            $criteria = new Criteria(IngresoPeer::DATABASE_NAME);

            $criteria->add(IngresoPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += IngresoPeer::doDelete($criteria, $con);

            // delete related Ingreso objects
            $criteria = new Criteria(IngresoPeer::DATABASE_NAME);

            $criteria->add(IngresoPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += IngresoPeer::doDelete($criteria, $con);

            // delete related Ingresonota objects
            $criteria = new Criteria(IngresonotaPeer::DATABASE_NAME);

            $criteria->add(IngresonotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += IngresonotaPeer::doDelete($criteria, $con);

            // delete related Inventariomes objects
            $criteria = new Criteria(InventariomesPeer::DATABASE_NAME);

            $criteria->add(InventariomesPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += InventariomesPeer::doDelete($criteria, $con);

            // delete related Inventariomes objects
            $criteria = new Criteria(InventariomesPeer::DATABASE_NAME);

            $criteria->add(InventariomesPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += InventariomesPeer::doDelete($criteria, $con);

            // delete related Inventariomesdetallenota objects
            $criteria = new Criteria(InventariomesdetallenotaPeer::DATABASE_NAME);

            $criteria->add(InventariomesdetallenotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += InventariomesdetallenotaPeer::doDelete($criteria, $con);

            // delete related Notacredito objects
            $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);

            $criteria->add(NotacreditoPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += NotacreditoPeer::doDelete($criteria, $con);

            // delete related Notacredito objects
            $criteria = new Criteria(NotacreditoPeer::DATABASE_NAME);

            $criteria->add(NotacreditoPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += NotacreditoPeer::doDelete($criteria, $con);

            // delete related Notacreditonota objects
            $criteria = new Criteria(NotacreditonotaPeer::DATABASE_NAME);

            $criteria->add(NotacreditonotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += NotacreditonotaPeer::doDelete($criteria, $con);

            // delete related Ordentablajeria objects
            $criteria = new Criteria(OrdentablajeriaPeer::DATABASE_NAME);

            $criteria->add(OrdentablajeriaPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += OrdentablajeriaPeer::doDelete($criteria, $con);

            // delete related Ordentablajeria objects
            $criteria = new Criteria(OrdentablajeriaPeer::DATABASE_NAME);

            $criteria->add(OrdentablajeriaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += OrdentablajeriaPeer::doDelete($criteria, $con);

            // delete related Pagocontrarecibo objects
            $criteria = new Criteria(PagocontrareciboPeer::DATABASE_NAME);

            $criteria->add(PagocontrareciboPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += PagocontrareciboPeer::doDelete($criteria, $con);

            // delete related Requisicion objects
            $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);

            $criteria->add(RequisicionPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += RequisicionPeer::doDelete($criteria, $con);

            // delete related Requisicion objects
            $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);

            $criteria->add(RequisicionPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += RequisicionPeer::doDelete($criteria, $con);

            // delete related Requisicionnota objects
            $criteria = new Criteria(RequisicionnotaPeer::DATABASE_NAME);

            $criteria->add(RequisicionnotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += RequisicionnotaPeer::doDelete($criteria, $con);

            // delete related Usuarioempresa objects
            $criteria = new Criteria(UsuarioempresaPeer::DATABASE_NAME);

            $criteria->add(UsuarioempresaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += UsuarioempresaPeer::doDelete($criteria, $con);

            // delete related Usuariosucursal objects
            $criteria = new Criteria(UsuariosucursalPeer::DATABASE_NAME);

            $criteria->add(UsuariosucursalPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += UsuariosucursalPeer::doDelete($criteria, $con);

            // delete related Venta objects
            $criteria = new Criteria(VentaPeer::DATABASE_NAME);

            $criteria->add(VentaPeer::IDAUDITOR, $obj->getIdusuario());
            $affectedRows += VentaPeer::doDelete($criteria, $con);

            // delete related Venta objects
            $criteria = new Criteria(VentaPeer::DATABASE_NAME);

            $criteria->add(VentaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += VentaPeer::doDelete($criteria, $con);

            // delete related Ventanota objects
            $criteria = new Criteria(VentanotaPeer::DATABASE_NAME);

            $criteria->add(VentanotaPeer::IDUSUARIO, $obj->getIdusuario());
            $affectedRows += VentanotaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Usuario object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Usuario $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(UsuarioPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(UsuarioPeer::TABLE_NAME);

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

        return BasePeer::doValidate(UsuarioPeer::DATABASE_NAME, UsuarioPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Usuario
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = UsuarioPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
        $criteria->add(UsuarioPeer::IDUSUARIO, $pk);

        $v = UsuarioPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Usuario[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(UsuarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(UsuarioPeer::DATABASE_NAME);
            $criteria->add(UsuarioPeer::IDUSUARIO, $pks, Criteria::IN);
            $objs = UsuarioPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseUsuarioPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseUsuarioPeer::buildTableMap();

