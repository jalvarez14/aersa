<?php


/**
 * Base static class for performing query and update operations on the 'producto' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseProductoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'producto';

    /** the related Propel class for this table */
    const OM_CLASS = 'Producto';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProductoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'producto.idproducto';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'producto.idempresa';

    /** the column name for the idunidadmedida field */
    const IDUNIDADMEDIDA = 'producto.idunidadmedida';

    /** the column name for the producto_nombre field */
    const PRODUCTO_NOMBRE = 'producto.producto_nombre';

    /** the column name for the idcategoria field */
    const IDCATEGORIA = 'producto.idcategoria';

    /** the column name for the idsubcategoria field */
    const IDSUBCATEGORIA = 'producto.idsubcategoria';

    /** the column name for the producto_rendimiento field */
    const PRODUCTO_RENDIMIENTO = 'producto.producto_rendimiento';

    /** the column name for the producto_ultimocosto field */
    const PRODUCTO_ULTIMOCOSTO = 'producto.producto_ultimocosto';

    /** the column name for the producto_baja field */
    const PRODUCTO_BAJA = 'producto.producto_baja';

    /** the column name for the producto_tipo field */
    const PRODUCTO_TIPO = 'producto.producto_tipo';

    /** the column name for the producto_costo field */
    const PRODUCTO_COSTO = 'producto.producto_costo';

    /** the column name for the producto_iva field */
    const PRODUCTO_IVA = 'producto.producto_iva';

    /** the column name for the producto_precio field */
    const PRODUCTO_PRECIO = 'producto.producto_precio';

    /** The enumerated values for the producto_tipo field */
    const PRODUCTO_TIPO_SIMPLE = 'simple';
    const PRODUCTO_TIPO_SUBRECETA = 'subreceta';
    const PRODUCTO_TIPO_PLU = 'plu';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Producto objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Producto[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProductoPeer::$fieldNames[ProductoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idproducto', 'Idempresa', 'Idunidadmedida', 'ProductoNombre', 'Idcategoria', 'Idsubcategoria', 'ProductoRendimiento', 'ProductoUltimocosto', 'ProductoBaja', 'ProductoTipo', 'ProductoCosto', 'ProductoIva', 'ProductoPrecio', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproducto', 'idempresa', 'idunidadmedida', 'productoNombre', 'idcategoria', 'idsubcategoria', 'productoRendimiento', 'productoUltimocosto', 'productoBaja', 'productoTipo', 'productoCosto', 'productoIva', 'productoPrecio', ),
        BasePeer::TYPE_COLNAME => array (ProductoPeer::IDPRODUCTO, ProductoPeer::IDEMPRESA, ProductoPeer::IDUNIDADMEDIDA, ProductoPeer::PRODUCTO_NOMBRE, ProductoPeer::IDCATEGORIA, ProductoPeer::IDSUBCATEGORIA, ProductoPeer::PRODUCTO_RENDIMIENTO, ProductoPeer::PRODUCTO_ULTIMOCOSTO, ProductoPeer::PRODUCTO_BAJA, ProductoPeer::PRODUCTO_TIPO, ProductoPeer::PRODUCTO_COSTO, ProductoPeer::PRODUCTO_IVA, ProductoPeer::PRODUCTO_PRECIO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPRODUCTO', 'IDEMPRESA', 'IDUNIDADMEDIDA', 'PRODUCTO_NOMBRE', 'IDCATEGORIA', 'IDSUBCATEGORIA', 'PRODUCTO_RENDIMIENTO', 'PRODUCTO_ULTIMOCOSTO', 'PRODUCTO_BAJA', 'PRODUCTO_TIPO', 'PRODUCTO_COSTO', 'PRODUCTO_IVA', 'PRODUCTO_PRECIO', ),
        BasePeer::TYPE_FIELDNAME => array ('idproducto', 'idempresa', 'idunidadmedida', 'producto_nombre', 'idcategoria', 'idsubcategoria', 'producto_rendimiento', 'producto_ultimocosto', 'producto_baja', 'producto_tipo', 'producto_costo', 'producto_iva', 'producto_precio', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProductoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idproducto' => 0, 'Idempresa' => 1, 'Idunidadmedida' => 2, 'ProductoNombre' => 3, 'Idcategoria' => 4, 'Idsubcategoria' => 5, 'ProductoRendimiento' => 6, 'ProductoUltimocosto' => 7, 'ProductoBaja' => 8, 'ProductoTipo' => 9, 'ProductoCosto' => 10, 'ProductoIva' => 11, 'ProductoPrecio' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproducto' => 0, 'idempresa' => 1, 'idunidadmedida' => 2, 'productoNombre' => 3, 'idcategoria' => 4, 'idsubcategoria' => 5, 'productoRendimiento' => 6, 'productoUltimocosto' => 7, 'productoBaja' => 8, 'productoTipo' => 9, 'productoCosto' => 10, 'productoIva' => 11, 'productoPrecio' => 12, ),
        BasePeer::TYPE_COLNAME => array (ProductoPeer::IDPRODUCTO => 0, ProductoPeer::IDEMPRESA => 1, ProductoPeer::IDUNIDADMEDIDA => 2, ProductoPeer::PRODUCTO_NOMBRE => 3, ProductoPeer::IDCATEGORIA => 4, ProductoPeer::IDSUBCATEGORIA => 5, ProductoPeer::PRODUCTO_RENDIMIENTO => 6, ProductoPeer::PRODUCTO_ULTIMOCOSTO => 7, ProductoPeer::PRODUCTO_BAJA => 8, ProductoPeer::PRODUCTO_TIPO => 9, ProductoPeer::PRODUCTO_COSTO => 10, ProductoPeer::PRODUCTO_IVA => 11, ProductoPeer::PRODUCTO_PRECIO => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPRODUCTO' => 0, 'IDEMPRESA' => 1, 'IDUNIDADMEDIDA' => 2, 'PRODUCTO_NOMBRE' => 3, 'IDCATEGORIA' => 4, 'IDSUBCATEGORIA' => 5, 'PRODUCTO_RENDIMIENTO' => 6, 'PRODUCTO_ULTIMOCOSTO' => 7, 'PRODUCTO_BAJA' => 8, 'PRODUCTO_TIPO' => 9, 'PRODUCTO_COSTO' => 10, 'PRODUCTO_IVA' => 11, 'PRODUCTO_PRECIO' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('idproducto' => 0, 'idempresa' => 1, 'idunidadmedida' => 2, 'producto_nombre' => 3, 'idcategoria' => 4, 'idsubcategoria' => 5, 'producto_rendimiento' => 6, 'producto_ultimocosto' => 7, 'producto_baja' => 8, 'producto_tipo' => 9, 'producto_costo' => 10, 'producto_iva' => 11, 'producto_precio' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ProductoPeer::PRODUCTO_TIPO => array(
            ProductoPeer::PRODUCTO_TIPO_SIMPLE,
            ProductoPeer::PRODUCTO_TIPO_SUBRECETA,
            ProductoPeer::PRODUCTO_TIPO_PLU,
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
        $toNames = ProductoPeer::getFieldNames($toType);
        $key = isset(ProductoPeer::$fieldKeys[$fromType][$name]) ? ProductoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProductoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, ProductoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProductoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ProductoPeer::$enumValueSets;
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
        $valueSets = ProductoPeer::getValueSets();

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
        $values = ProductoPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. ProductoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProductoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(ProductoPeer::IDPRODUCTO);
            $criteria->addSelectColumn(ProductoPeer::IDEMPRESA);
            $criteria->addSelectColumn(ProductoPeer::IDUNIDADMEDIDA);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_NOMBRE);
            $criteria->addSelectColumn(ProductoPeer::IDCATEGORIA);
            $criteria->addSelectColumn(ProductoPeer::IDSUBCATEGORIA);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_RENDIMIENTO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_ULTIMOCOSTO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_BAJA);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_TIPO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_COSTO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_IVA);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_PRECIO);
        } else {
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idunidadmedida');
            $criteria->addSelectColumn($alias . '.producto_nombre');
            $criteria->addSelectColumn($alias . '.idcategoria');
            $criteria->addSelectColumn($alias . '.idsubcategoria');
            $criteria->addSelectColumn($alias . '.producto_rendimiento');
            $criteria->addSelectColumn($alias . '.producto_ultimocosto');
            $criteria->addSelectColumn($alias . '.producto_baja');
            $criteria->addSelectColumn($alias . '.producto_tipo');
            $criteria->addSelectColumn($alias . '.producto_costo');
            $criteria->addSelectColumn($alias . '.producto_iva');
            $criteria->addSelectColumn($alias . '.producto_precio');
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
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProductoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Producto
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProductoPeer::doSelect($critcopy, $con);
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
        return ProductoPeer::populateObjects(ProductoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProductoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

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
     * @param Producto $obj A Producto object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdproducto();
            } // if key === null
            ProductoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Producto object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Producto) {
                $key = (string) $value->getIdproducto();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Producto object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProductoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Producto Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProductoPeer::$instances[$key])) {
                return ProductoPeer::$instances[$key];
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
        foreach (ProductoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProductoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to producto
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CodigobarrasPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CodigobarrasPeer::clearInstancePool();
        // Invalidate objects in CompradetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompradetallePeer::clearInstancePool();
        // Invalidate objects in DevoluciondetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DevoluciondetallePeer::clearInstancePool();
        // Invalidate objects in NotacreditodetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotacreditodetallePeer::clearInstancePool();
        // Invalidate objects in OrdentablajeriaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        OrdentablajeriaPeer::clearInstancePool();
        // Invalidate objects in OrdentablajeriadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        OrdentablajeriadetallePeer::clearInstancePool();
        // Invalidate objects in PlantillatablajeriaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PlantillatablajeriaPeer::clearInstancePool();
        // Invalidate objects in PlantillatablajeriadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PlantillatablajeriadetallePeer::clearInstancePool();
        // Invalidate objects in ProductosucursalalmacenPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductosucursalalmacenPeer::clearInstancePool();
        // Invalidate objects in RecetaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RecetaPeer::clearInstancePool();
        // Invalidate objects in RecetaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RecetaPeer::clearInstancePool();
        // Invalidate objects in RequisiciondetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisiciondetallePeer::clearInstancePool();
        // Invalidate objects in VentadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentadetallePeer::clearInstancePool();
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
        $cls = ProductoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProductoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProductoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Producto object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProductoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProductoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProductoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProductoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CategoriaRelatedByIdcategoria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCategoriaRelatedByIdcategoria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

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
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CategoriaRelatedByIdsubcategoria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCategoriaRelatedByIdsubcategoria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Unidadmedida table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinUnidadmedida(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);

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
     * Selects a collection of Producto objects pre-filled with their Categoria objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCategoriaRelatedByIdcategoria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        CategoriaPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CategoriaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CategoriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CategoriaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Producto) to $obj2 (Categoria)
                $obj2->addProductoRelatedByIdcategoria($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Producto) to $obj2 (Empresa)
                $obj2->addProducto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with their Categoria objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCategoriaRelatedByIdsubcategoria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        CategoriaPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CategoriaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CategoriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CategoriaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Producto) to $obj2 (Categoria)
                $obj2->addProductoRelatedByIdsubcategoria($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with their Unidadmedida objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUnidadmedida(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        UnidadmedidaPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = UnidadmedidaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = UnidadmedidaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = UnidadmedidaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    UnidadmedidaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Producto) to $obj2 (Unidadmedida)
                $obj2->addProducto($obj1);

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
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);

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
     * Selects a collection of Producto objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        CategoriaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        CategoriaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

        UnidadmedidaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + UnidadmedidaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Categoria rows

            $key2 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CategoriaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CategoriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CategoriaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Categoria)
                $obj2->addProductoRelatedByIdcategoria($obj1);
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

                // Add the $obj1 (Producto) to the collection in $obj3 (Empresa)
                $obj3->addProducto($obj1);
            } // if joined row not null

            // Add objects for joined Categoria rows

            $key4 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CategoriaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CategoriaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CategoriaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Categoria)
                $obj4->addProductoRelatedByIdsubcategoria($obj1);
            } // if joined row not null

            // Add objects for joined Unidadmedida rows

            $key5 = UnidadmedidaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = UnidadmedidaPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = UnidadmedidaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    UnidadmedidaPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Producto) to the collection in $obj5 (Unidadmedida)
                $obj5->addProducto($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CategoriaRelatedByIdcategoria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCategoriaRelatedByIdcategoria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);

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
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CategoriaRelatedByIdsubcategoria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCategoriaRelatedByIdsubcategoria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Unidadmedida table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptUnidadmedida(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

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
     * Selects a collection of Producto objects pre-filled with all related objects except CategoriaRelatedByIdcategoria.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCategoriaRelatedByIdcategoria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        UnidadmedidaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UnidadmedidaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Producto) to the collection in $obj2 (Empresa)
                $obj2->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Unidadmedida rows

                $key3 = UnidadmedidaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UnidadmedidaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UnidadmedidaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UnidadmedidaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Unidadmedida)
                $obj3->addProducto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with all related objects except Empresa.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
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
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        CategoriaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

        CategoriaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

        UnidadmedidaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UnidadmedidaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Categoria rows

                $key2 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CategoriaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CategoriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CategoriaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Categoria)
                $obj2->addProductoRelatedByIdcategoria($obj1);

            } // if joined row is not null

                // Add objects for joined Categoria rows

                $key3 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CategoriaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = CategoriaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CategoriaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Categoria)
                $obj3->addProductoRelatedByIdsubcategoria($obj1);

            } // if joined row is not null

                // Add objects for joined Unidadmedida rows

                $key4 = UnidadmedidaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = UnidadmedidaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = UnidadmedidaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UnidadmedidaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Unidadmedida)
                $obj4->addProducto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with all related objects except CategoriaRelatedByIdsubcategoria.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCategoriaRelatedByIdsubcategoria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        UnidadmedidaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + UnidadmedidaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDUNIDADMEDIDA, UnidadmedidaPeer::IDUNIDADMEDIDA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Producto) to the collection in $obj2 (Empresa)
                $obj2->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Unidadmedida rows

                $key3 = UnidadmedidaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = UnidadmedidaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = UnidadmedidaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    UnidadmedidaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Unidadmedida)
                $obj3->addProducto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with all related objects except Unidadmedida.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptUnidadmedida(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        CategoriaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        CategoriaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CategoriaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDSUBCATEGORIA, CategoriaPeer::IDCATEGORIA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Categoria rows

                $key2 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CategoriaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CategoriaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CategoriaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Categoria)
                $obj2->addProductoRelatedByIdcategoria($obj1);

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

                // Add the $obj1 (Producto) to the collection in $obj3 (Empresa)
                $obj3->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Categoria rows

                $key4 = CategoriaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CategoriaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = CategoriaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CategoriaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Categoria)
                $obj4->addProductoRelatedByIdsubcategoria($obj1);

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
        return Propel::getDatabaseMap(ProductoPeer::DATABASE_NAME)->getTable(ProductoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProductoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProductoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProductoTableMap());
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
        return ProductoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Producto or Criteria object.
     *
     * @param      mixed $values Criteria or Producto object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Producto object
        }

        if ($criteria->containsKey(ProductoPeer::IDPRODUCTO) && $criteria->keyContainsValue(ProductoPeer::IDPRODUCTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProductoPeer::IDPRODUCTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Producto or Criteria object.
     *
     * @param      mixed $values Criteria or Producto object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProductoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProductoPeer::IDPRODUCTO);
            $value = $criteria->remove(ProductoPeer::IDPRODUCTO);
            if ($value) {
                $selectCriteria->add(ProductoPeer::IDPRODUCTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);
            }

        } else { // $values is Producto object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the producto table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ProductoPeer::doOnDeleteCascade(new Criteria(ProductoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ProductoPeer::TABLE_NAME, $con, ProductoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProductoPeer::clearInstancePool();
            ProductoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Producto or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Producto object or primary key or array of primary keys
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Producto) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
            $criteria->add(ProductoPeer::IDPRODUCTO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ProductoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ProductoPeer::clearInstancePool();
            } elseif ($values instanceof Producto) { // it's a model object
                ProductoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ProductoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProductoPeer::clearRelatedInstancePool();
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
        $objects = ProductoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Codigobarras objects
            $criteria = new Criteria(CodigobarrasPeer::DATABASE_NAME);

            $criteria->add(CodigobarrasPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += CodigobarrasPeer::doDelete($criteria, $con);

            // delete related Compradetalle objects
            $criteria = new Criteria(CompradetallePeer::DATABASE_NAME);

            $criteria->add(CompradetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += CompradetallePeer::doDelete($criteria, $con);

            // delete related Devoluciondetalle objects
            $criteria = new Criteria(DevoluciondetallePeer::DATABASE_NAME);

            $criteria->add(DevoluciondetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += DevoluciondetallePeer::doDelete($criteria, $con);

            // delete related Notacreditodetalle objects
            $criteria = new Criteria(NotacreditodetallePeer::DATABASE_NAME);

            $criteria->add(NotacreditodetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += NotacreditodetallePeer::doDelete($criteria, $con);

            // delete related Ordentablajeria objects
            $criteria = new Criteria(OrdentablajeriaPeer::DATABASE_NAME);

            $criteria->add(OrdentablajeriaPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += OrdentablajeriaPeer::doDelete($criteria, $con);

            // delete related Ordentablajeriadetalle objects
            $criteria = new Criteria(OrdentablajeriadetallePeer::DATABASE_NAME);

            $criteria->add(OrdentablajeriadetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += OrdentablajeriadetallePeer::doDelete($criteria, $con);

            // delete related Plantillatablajeria objects
            $criteria = new Criteria(PlantillatablajeriaPeer::DATABASE_NAME);

            $criteria->add(PlantillatablajeriaPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += PlantillatablajeriaPeer::doDelete($criteria, $con);

            // delete related Plantillatablajeriadetalle objects
            $criteria = new Criteria(PlantillatablajeriadetallePeer::DATABASE_NAME);

            $criteria->add(PlantillatablajeriadetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += PlantillatablajeriadetallePeer::doDelete($criteria, $con);

            // delete related Productosucursalalmacen objects
            $criteria = new Criteria(ProductosucursalalmacenPeer::DATABASE_NAME);

            $criteria->add(ProductosucursalalmacenPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += ProductosucursalalmacenPeer::doDelete($criteria, $con);

            // delete related Receta objects
            $criteria = new Criteria(RecetaPeer::DATABASE_NAME);

            $criteria->add(RecetaPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += RecetaPeer::doDelete($criteria, $con);

            // delete related Receta objects
            $criteria = new Criteria(RecetaPeer::DATABASE_NAME);

            $criteria->add(RecetaPeer::IDPRODUCTORECETA, $obj->getIdproducto());
            $affectedRows += RecetaPeer::doDelete($criteria, $con);

            // delete related Requisiciondetalle objects
            $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);

            $criteria->add(RequisiciondetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += RequisiciondetallePeer::doDelete($criteria, $con);

            // delete related Ventadetalle objects
            $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);

            $criteria->add(VentadetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += VentadetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Producto object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Producto $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProductoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProductoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(ProductoPeer::DATABASE_NAME, ProductoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Producto
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProductoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
        $criteria->add(ProductoPeer::IDPRODUCTO, $pk);

        $v = ProductoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Producto[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
            $criteria->add(ProductoPeer::IDPRODUCTO, $pks, Criteria::IN);
            $objs = ProductoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProductoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProductoPeer::buildTableMap();

