<?php


/**
 * Base static class for performing query and update operations on the 'ajusteinventario' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseAjusteinventarioPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'ajusteinventario';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ajusteinventario';

    /** the related TableMap class for this table */
    const TM_CLASS = 'AjusteinventarioTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the idajusteinventario field */
    const IDAJUSTEINVENTARIO = 'ajusteinventario.idajusteinventario';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'ajusteinventario.idempresa';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'ajusteinventario.idsucursal';

    /** the column name for the idalmacen field */
    const IDALMACEN = 'ajusteinventario.idalmacen';

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'ajusteinventario.idproducto';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'ajusteinventario.idusuario';

    /** the column name for the ajusteinventario_cantidad field */
    const AJUSTEINVENTARIO_CANTIDAD = 'ajusteinventario.ajusteinventario_cantidad';

    /** the column name for the ajusteinventario_comentario field */
    const AJUSTEINVENTARIO_COMENTARIO = 'ajusteinventario.ajusteinventario_comentario';

    /** the column name for the ajusteinventario_fecha field */
    const AJUSTEINVENTARIO_FECHA = 'ajusteinventario.ajusteinventario_fecha';

    /** the column name for the ajusteinventario_tipo field */
    const AJUSTEINVENTARIO_TIPO = 'ajusteinventario.ajusteinventario_tipo';

    /** The enumerated values for the ajusteinventario_tipo field */
    const AJUSTEINVENTARIO_TIPO_SOBRANTE = 'sobrante';
    const AJUSTEINVENTARIO_TIPO_FALTANTE = 'faltante';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ajusteinventario objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ajusteinventario[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. AjusteinventarioPeer::$fieldNames[AjusteinventarioPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idajusteinventario', 'Idempresa', 'Idsucursal', 'Idalmacen', 'Idproducto', 'Idusuario', 'AjusteinventarioCantidad', 'AjusteinventarioComentario', 'AjusteinventarioFecha', 'AjusteinventarioTipo', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idajusteinventario', 'idempresa', 'idsucursal', 'idalmacen', 'idproducto', 'idusuario', 'ajusteinventarioCantidad', 'ajusteinventarioComentario', 'ajusteinventarioFecha', 'ajusteinventarioTipo', ),
        BasePeer::TYPE_COLNAME => array (AjusteinventarioPeer::IDAJUSTEINVENTARIO, AjusteinventarioPeer::IDEMPRESA, AjusteinventarioPeer::IDSUCURSAL, AjusteinventarioPeer::IDALMACEN, AjusteinventarioPeer::IDPRODUCTO, AjusteinventarioPeer::IDUSUARIO, AjusteinventarioPeer::AJUSTEINVENTARIO_CANTIDAD, AjusteinventarioPeer::AJUSTEINVENTARIO_COMENTARIO, AjusteinventarioPeer::AJUSTEINVENTARIO_FECHA, AjusteinventarioPeer::AJUSTEINVENTARIO_TIPO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDAJUSTEINVENTARIO', 'IDEMPRESA', 'IDSUCURSAL', 'IDALMACEN', 'IDPRODUCTO', 'IDUSUARIO', 'AJUSTEINVENTARIO_CANTIDAD', 'AJUSTEINVENTARIO_COMENTARIO', 'AJUSTEINVENTARIO_FECHA', 'AJUSTEINVENTARIO_TIPO', ),
        BasePeer::TYPE_FIELDNAME => array ('idajusteinventario', 'idempresa', 'idsucursal', 'idalmacen', 'idproducto', 'idusuario', 'ajusteinventario_cantidad', 'ajusteinventario_comentario', 'ajusteinventario_fecha', 'ajusteinventario_tipo', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. AjusteinventarioPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idajusteinventario' => 0, 'Idempresa' => 1, 'Idsucursal' => 2, 'Idalmacen' => 3, 'Idproducto' => 4, 'Idusuario' => 5, 'AjusteinventarioCantidad' => 6, 'AjusteinventarioComentario' => 7, 'AjusteinventarioFecha' => 8, 'AjusteinventarioTipo' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idajusteinventario' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idalmacen' => 3, 'idproducto' => 4, 'idusuario' => 5, 'ajusteinventarioCantidad' => 6, 'ajusteinventarioComentario' => 7, 'ajusteinventarioFecha' => 8, 'ajusteinventarioTipo' => 9, ),
        BasePeer::TYPE_COLNAME => array (AjusteinventarioPeer::IDAJUSTEINVENTARIO => 0, AjusteinventarioPeer::IDEMPRESA => 1, AjusteinventarioPeer::IDSUCURSAL => 2, AjusteinventarioPeer::IDALMACEN => 3, AjusteinventarioPeer::IDPRODUCTO => 4, AjusteinventarioPeer::IDUSUARIO => 5, AjusteinventarioPeer::AJUSTEINVENTARIO_CANTIDAD => 6, AjusteinventarioPeer::AJUSTEINVENTARIO_COMENTARIO => 7, AjusteinventarioPeer::AJUSTEINVENTARIO_FECHA => 8, AjusteinventarioPeer::AJUSTEINVENTARIO_TIPO => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDAJUSTEINVENTARIO' => 0, 'IDEMPRESA' => 1, 'IDSUCURSAL' => 2, 'IDALMACEN' => 3, 'IDPRODUCTO' => 4, 'IDUSUARIO' => 5, 'AJUSTEINVENTARIO_CANTIDAD' => 6, 'AJUSTEINVENTARIO_COMENTARIO' => 7, 'AJUSTEINVENTARIO_FECHA' => 8, 'AJUSTEINVENTARIO_TIPO' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('idajusteinventario' => 0, 'idempresa' => 1, 'idsucursal' => 2, 'idalmacen' => 3, 'idproducto' => 4, 'idusuario' => 5, 'ajusteinventario_cantidad' => 6, 'ajusteinventario_comentario' => 7, 'ajusteinventario_fecha' => 8, 'ajusteinventario_tipo' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        AjusteinventarioPeer::AJUSTEINVENTARIO_TIPO => array(
            AjusteinventarioPeer::AJUSTEINVENTARIO_TIPO_SOBRANTE,
            AjusteinventarioPeer::AJUSTEINVENTARIO_TIPO_FALTANTE,
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
        $toNames = AjusteinventarioPeer::getFieldNames($toType);
        $key = isset(AjusteinventarioPeer::$fieldKeys[$fromType][$name]) ? AjusteinventarioPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(AjusteinventarioPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, AjusteinventarioPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return AjusteinventarioPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return AjusteinventarioPeer::$enumValueSets;
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
        $valueSets = AjusteinventarioPeer::getValueSets();

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
        $values = AjusteinventarioPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. AjusteinventarioPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(AjusteinventarioPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(AjusteinventarioPeer::IDAJUSTEINVENTARIO);
            $criteria->addSelectColumn(AjusteinventarioPeer::IDEMPRESA);
            $criteria->addSelectColumn(AjusteinventarioPeer::IDSUCURSAL);
            $criteria->addSelectColumn(AjusteinventarioPeer::IDALMACEN);
            $criteria->addSelectColumn(AjusteinventarioPeer::IDPRODUCTO);
            $criteria->addSelectColumn(AjusteinventarioPeer::IDUSUARIO);
            $criteria->addSelectColumn(AjusteinventarioPeer::AJUSTEINVENTARIO_CANTIDAD);
            $criteria->addSelectColumn(AjusteinventarioPeer::AJUSTEINVENTARIO_COMENTARIO);
            $criteria->addSelectColumn(AjusteinventarioPeer::AJUSTEINVENTARIO_FECHA);
            $criteria->addSelectColumn(AjusteinventarioPeer::AJUSTEINVENTARIO_TIPO);
        } else {
            $criteria->addSelectColumn($alias . '.idajusteinventario');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.idalmacen');
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.ajusteinventario_cantidad');
            $criteria->addSelectColumn($alias . '.ajusteinventario_comentario');
            $criteria->addSelectColumn($alias . '.ajusteinventario_fecha');
            $criteria->addSelectColumn($alias . '.ajusteinventario_tipo');
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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ajusteinventario
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = AjusteinventarioPeer::doSelect($critcopy, $con);
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
        return AjusteinventarioPeer::populateObjects(AjusteinventarioPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

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
     * @param Ajusteinventario $obj A Ajusteinventario object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdajusteinventario();
            } // if key === null
            AjusteinventarioPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ajusteinventario object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ajusteinventario) {
                $key = (string) $value->getIdajusteinventario();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ajusteinventario object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(AjusteinventarioPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ajusteinventario Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(AjusteinventarioPeer::$instances[$key])) {
                return AjusteinventarioPeer::$instances[$key];
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
        foreach (AjusteinventarioPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        AjusteinventarioPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ajusteinventario
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
        $cls = AjusteinventarioPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = AjusteinventarioPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                AjusteinventarioPeer::addInstanceToPool($obj, $key);
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
     * @return array (Ajusteinventario object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = AjusteinventarioPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = AjusteinventarioPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            AjusteinventarioPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Usuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Ajusteinventario objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to $obj2 (Almacen)
                $obj2->addAjusteinventario($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to $obj2 (Empresa)
                $obj2->addAjusteinventario($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to $obj2 (Producto)
                $obj2->addAjusteinventario($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to $obj2 (Sucursal)
                $obj2->addAjusteinventario($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to $obj2 (Usuario)
                $obj2->addAjusteinventario($obj1);

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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Ajusteinventario objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol2 = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj2 (Almacen)
                $obj2->addAjusteinventario($obj1);
            } // if joined row not null

            // Add objects for joined Empresa rows

            $key3 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = EmpresaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = EmpresaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpresaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj3 (Empresa)
                $obj3->addAjusteinventario($obj1);
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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj4 (Producto)
                $obj4->addAjusteinventario($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key5 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = SucursalPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = SucursalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SucursalPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj5 (Sucursal)
                $obj5->addAjusteinventario($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key6 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = UsuarioPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    UsuarioPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj6 (Usuario)
                $obj6->addAjusteinventario($obj1);
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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Usuario table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUsuario(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            AjusteinventarioPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Ajusteinventario objects pre-filled with all related objects except Almacen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
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
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol2 = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj2 (Empresa)
                $obj2->addAjusteinventario($obj1);

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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj3 (Producto)
                $obj3->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key4 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = SucursalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = SucursalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SucursalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj4 (Sucursal)
                $obj4->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsuarioPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsuarioPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj5 (Usuario)
                $obj5->addAjusteinventario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with all related objects except Empresa.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
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
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol2 = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj2 (Almacen)
                $obj2->addAjusteinventario($obj1);

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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj3 (Producto)
                $obj3->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key4 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = SucursalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = SucursalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SucursalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj4 (Sucursal)
                $obj4->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsuarioPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsuarioPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj5 (Usuario)
                $obj5->addAjusteinventario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with all related objects except Producto.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
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
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol2 = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj2 (Almacen)
                $obj2->addAjusteinventario($obj1);

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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj3 (Empresa)
                $obj3->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key4 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = SucursalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = SucursalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SucursalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj4 (Sucursal)
                $obj4->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsuarioPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsuarioPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj5 (Usuario)
                $obj5->addAjusteinventario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
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
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol2 = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj2 (Almacen)
                $obj2->addAjusteinventario($obj1);

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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj3 (Empresa)
                $obj3->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Producto rows

                $key4 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProductoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProductoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProductoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj4 (Producto)
                $obj4->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key5 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = UsuarioPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UsuarioPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj5 (Usuario)
                $obj5->addAjusteinventario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ajusteinventario objects pre-filled with all related objects except Usuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ajusteinventario objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUsuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);
        }

        AjusteinventarioPeer::addSelectColumns($criteria);
        $startcol2 = AjusteinventarioPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(AjusteinventarioPeer::IDALMACEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(AjusteinventarioPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = AjusteinventarioPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = AjusteinventarioPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = AjusteinventarioPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                AjusteinventarioPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj2 (Almacen)
                $obj2->addAjusteinventario($obj1);

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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj3 (Empresa)
                $obj3->addAjusteinventario($obj1);

            } // if joined row is not null

                // Add objects for joined Producto rows

                $key4 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProductoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProductoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProductoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ajusteinventario) to the collection in $obj4 (Producto)
                $obj4->addAjusteinventario($obj1);

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

                // Add the $obj1 (Ajusteinventario) to the collection in $obj5 (Sucursal)
                $obj5->addAjusteinventario($obj1);

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
        return Propel::getDatabaseMap(AjusteinventarioPeer::DATABASE_NAME)->getTable(AjusteinventarioPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseAjusteinventarioPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseAjusteinventarioPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \AjusteinventarioTableMap());
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
        return AjusteinventarioPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ajusteinventario or Criteria object.
     *
     * @param      mixed $values Criteria or Ajusteinventario object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ajusteinventario object
        }

        if ($criteria->containsKey(AjusteinventarioPeer::IDAJUSTEINVENTARIO) && $criteria->keyContainsValue(AjusteinventarioPeer::IDAJUSTEINVENTARIO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.AjusteinventarioPeer::IDAJUSTEINVENTARIO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ajusteinventario or Criteria object.
     *
     * @param      mixed $values Criteria or Ajusteinventario object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(AjusteinventarioPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(AjusteinventarioPeer::IDAJUSTEINVENTARIO);
            $value = $criteria->remove(AjusteinventarioPeer::IDAJUSTEINVENTARIO);
            if ($value) {
                $selectCriteria->add(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(AjusteinventarioPeer::TABLE_NAME);
            }

        } else { // $values is Ajusteinventario object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ajusteinventario table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(AjusteinventarioPeer::TABLE_NAME, $con, AjusteinventarioPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            AjusteinventarioPeer::clearInstancePool();
            AjusteinventarioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ajusteinventario or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ajusteinventario object or primary key or array of primary keys
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
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            AjusteinventarioPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ajusteinventario) { // it's a model object
            // invalidate the cache for this single object
            AjusteinventarioPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(AjusteinventarioPeer::DATABASE_NAME);
            $criteria->add(AjusteinventarioPeer::IDAJUSTEINVENTARIO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                AjusteinventarioPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(AjusteinventarioPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            AjusteinventarioPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Ajusteinventario object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ajusteinventario $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(AjusteinventarioPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(AjusteinventarioPeer::TABLE_NAME);

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

        return BasePeer::doValidate(AjusteinventarioPeer::DATABASE_NAME, AjusteinventarioPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ajusteinventario
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = AjusteinventarioPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(AjusteinventarioPeer::DATABASE_NAME);
        $criteria->add(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $pk);

        $v = AjusteinventarioPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ajusteinventario[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(AjusteinventarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(AjusteinventarioPeer::DATABASE_NAME);
            $criteria->add(AjusteinventarioPeer::IDAJUSTEINVENTARIO, $pks, Criteria::IN);
            $objs = AjusteinventarioPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseAjusteinventarioPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAjusteinventarioPeer::buildTableMap();

