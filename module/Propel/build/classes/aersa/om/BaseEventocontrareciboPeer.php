<?php


/**
 * Base static class for performing query and update operations on the 'eventocontrarecibo' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseEventocontrareciboPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'eventocontrarecibo';

    /** the related Propel class for this table */
    const OM_CLASS = 'Eventocontrarecibo';

    /** the related TableMap class for this table */
    const TM_CLASS = 'EventocontrareciboTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the ideventocontrarecibo field */
    const IDEVENTOCONTRARECIBO = 'eventocontrarecibo.ideventocontrarecibo';

    /** the column name for the idcontrarecibo field */
    const IDCONTRARECIBO = 'eventocontrarecibo.idcontrarecibo';

    /** the column name for the eventocontrarecibo_fecha field */
    const EVENTOCONTRARECIBO_FECHA = 'eventocontrarecibo.eventocontrarecibo_fecha';

    /** the column name for the eventocontrarecibo_generador field */
    const EVENTOCONTRARECIBO_GENERADOR = 'eventocontrarecibo.eventocontrarecibo_generador';

    /** the column name for the eventocontrarecibo_evento field */
    const EVENTOCONTRARECIBO_EVENTO = 'eventocontrarecibo.eventocontrarecibo_evento';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'eventocontrarecibo.idempresa';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'eventocontrarecibo.idsucursal';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'eventocontrarecibo.idusuario';

    /** the column name for the eventocontrarecibo_nota field */
    const EVENTOCONTRARECIBO_NOTA = 'eventocontrarecibo.eventocontrarecibo_nota';

    /** The enumerated values for the eventocontrarecibo_generador field */
    const EVENTOCONTRARECIBO_GENERADOR_PROVEEDOR = 'proveedor';
    const EVENTOCONTRARECIBO_GENERADOR_CLIENTE = 'cliente';

    /** The enumerated values for the eventocontrarecibo_evento field */
    const EVENTOCONTRARECIBO_EVENTO_GENERADO = 'generado';
    const EVENTOCONTRARECIBO_EVENTO_RECHAZADO = 'rechazado';
    const EVENTOCONTRARECIBO_EVENTO_REVISADO = 'revisado';
    const EVENTOCONTRARECIBO_EVENTO_VALIDADO = 'validado';
    const EVENTOCONTRARECIBO_EVENTO_PAGO = 'pago';
    const EVENTOCONTRARECIBO_EVENTO_PAGADO = 'pagado';
    const EVENTOCONTRARECIBO_EVENTO_RECORDATORIOPAGO = 'recordatoriopago';
    const EVENTOCONTRARECIBO_EVENTO_PAGOCINCOMPLETO = 'pagocincompleto';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Eventocontrarecibo objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Eventocontrarecibo[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. EventocontrareciboPeer::$fieldNames[EventocontrareciboPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Ideventocontrarecibo', 'Idcontrarecibo', 'EventocontrareciboFecha', 'EventocontrareciboGenerador', 'EventocontrareciboEvento', 'Idempresa', 'Idsucursal', 'Idusuario', 'EventocontrareciboNota', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ideventocontrarecibo', 'idcontrarecibo', 'eventocontrareciboFecha', 'eventocontrareciboGenerador', 'eventocontrareciboEvento', 'idempresa', 'idsucursal', 'idusuario', 'eventocontrareciboNota', ),
        BasePeer::TYPE_COLNAME => array (EventocontrareciboPeer::IDEVENTOCONTRARECIBO, EventocontrareciboPeer::IDCONTRARECIBO, EventocontrareciboPeer::EVENTOCONTRARECIBO_FECHA, EventocontrareciboPeer::EVENTOCONTRARECIBO_GENERADOR, EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO, EventocontrareciboPeer::IDEMPRESA, EventocontrareciboPeer::IDSUCURSAL, EventocontrareciboPeer::IDUSUARIO, EventocontrareciboPeer::EVENTOCONTRARECIBO_NOTA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEVENTOCONTRARECIBO', 'IDCONTRARECIBO', 'EVENTOCONTRARECIBO_FECHA', 'EVENTOCONTRARECIBO_GENERADOR', 'EVENTOCONTRARECIBO_EVENTO', 'IDEMPRESA', 'IDSUCURSAL', 'IDUSUARIO', 'EVENTOCONTRARECIBO_NOTA', ),
        BasePeer::TYPE_FIELDNAME => array ('ideventocontrarecibo', 'idcontrarecibo', 'eventocontrarecibo_fecha', 'eventocontrarecibo_generador', 'eventocontrarecibo_evento', 'idempresa', 'idsucursal', 'idusuario', 'eventocontrarecibo_nota', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. EventocontrareciboPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Ideventocontrarecibo' => 0, 'Idcontrarecibo' => 1, 'EventocontrareciboFecha' => 2, 'EventocontrareciboGenerador' => 3, 'EventocontrareciboEvento' => 4, 'Idempresa' => 5, 'Idsucursal' => 6, 'Idusuario' => 7, 'EventocontrareciboNota' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('ideventocontrarecibo' => 0, 'idcontrarecibo' => 1, 'eventocontrareciboFecha' => 2, 'eventocontrareciboGenerador' => 3, 'eventocontrareciboEvento' => 4, 'idempresa' => 5, 'idsucursal' => 6, 'idusuario' => 7, 'eventocontrareciboNota' => 8, ),
        BasePeer::TYPE_COLNAME => array (EventocontrareciboPeer::IDEVENTOCONTRARECIBO => 0, EventocontrareciboPeer::IDCONTRARECIBO => 1, EventocontrareciboPeer::EVENTOCONTRARECIBO_FECHA => 2, EventocontrareciboPeer::EVENTOCONTRARECIBO_GENERADOR => 3, EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO => 4, EventocontrareciboPeer::IDEMPRESA => 5, EventocontrareciboPeer::IDSUCURSAL => 6, EventocontrareciboPeer::IDUSUARIO => 7, EventocontrareciboPeer::EVENTOCONTRARECIBO_NOTA => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDEVENTOCONTRARECIBO' => 0, 'IDCONTRARECIBO' => 1, 'EVENTOCONTRARECIBO_FECHA' => 2, 'EVENTOCONTRARECIBO_GENERADOR' => 3, 'EVENTOCONTRARECIBO_EVENTO' => 4, 'IDEMPRESA' => 5, 'IDSUCURSAL' => 6, 'IDUSUARIO' => 7, 'EVENTOCONTRARECIBO_NOTA' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('ideventocontrarecibo' => 0, 'idcontrarecibo' => 1, 'eventocontrarecibo_fecha' => 2, 'eventocontrarecibo_generador' => 3, 'eventocontrarecibo_evento' => 4, 'idempresa' => 5, 'idsucursal' => 6, 'idusuario' => 7, 'eventocontrarecibo_nota' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        EventocontrareciboPeer::EVENTOCONTRARECIBO_GENERADOR => array(
            EventocontrareciboPeer::EVENTOCONTRARECIBO_GENERADOR_PROVEEDOR,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_GENERADOR_CLIENTE,
        ),
        EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO => array(
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_GENERADO,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_RECHAZADO,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_REVISADO,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_VALIDADO,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_PAGO,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_PAGADO,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_RECORDATORIOPAGO,
            EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO_PAGOCINCOMPLETO,
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
        $toNames = EventocontrareciboPeer::getFieldNames($toType);
        $key = isset(EventocontrareciboPeer::$fieldKeys[$fromType][$name]) ? EventocontrareciboPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(EventocontrareciboPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, EventocontrareciboPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return EventocontrareciboPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return EventocontrareciboPeer::$enumValueSets;
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
        $valueSets = EventocontrareciboPeer::getValueSets();

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
        $values = EventocontrareciboPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. EventocontrareciboPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(EventocontrareciboPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(EventocontrareciboPeer::IDEVENTOCONTRARECIBO);
            $criteria->addSelectColumn(EventocontrareciboPeer::IDCONTRARECIBO);
            $criteria->addSelectColumn(EventocontrareciboPeer::EVENTOCONTRARECIBO_FECHA);
            $criteria->addSelectColumn(EventocontrareciboPeer::EVENTOCONTRARECIBO_GENERADOR);
            $criteria->addSelectColumn(EventocontrareciboPeer::EVENTOCONTRARECIBO_EVENTO);
            $criteria->addSelectColumn(EventocontrareciboPeer::IDEMPRESA);
            $criteria->addSelectColumn(EventocontrareciboPeer::IDSUCURSAL);
            $criteria->addSelectColumn(EventocontrareciboPeer::IDUSUARIO);
            $criteria->addSelectColumn(EventocontrareciboPeer::EVENTOCONTRARECIBO_NOTA);
        } else {
            $criteria->addSelectColumn($alias . '.ideventocontrarecibo');
            $criteria->addSelectColumn($alias . '.idcontrarecibo');
            $criteria->addSelectColumn($alias . '.eventocontrarecibo_fecha');
            $criteria->addSelectColumn($alias . '.eventocontrarecibo_generador');
            $criteria->addSelectColumn($alias . '.eventocontrarecibo_evento');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.eventocontrarecibo_nota');
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
        $criteria->setPrimaryTableName(EventocontrareciboPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EventocontrareciboPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Eventocontrarecibo
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = EventocontrareciboPeer::doSelect($critcopy, $con);
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
        return EventocontrareciboPeer::populateObjects(EventocontrareciboPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            EventocontrareciboPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);

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
     * @param Eventocontrarecibo $obj A Eventocontrarecibo object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdeventocontrarecibo();
            } // if key === null
            EventocontrareciboPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Eventocontrarecibo object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Eventocontrarecibo) {
                $key = (string) $value->getIdeventocontrarecibo();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Eventocontrarecibo object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(EventocontrareciboPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Eventocontrarecibo Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(EventocontrareciboPeer::$instances[$key])) {
                return EventocontrareciboPeer::$instances[$key];
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
        foreach (EventocontrareciboPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        EventocontrareciboPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to eventocontrarecibo
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
        $cls = EventocontrareciboPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = EventocontrareciboPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = EventocontrareciboPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EventocontrareciboPeer::addInstanceToPool($obj, $key);
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
     * @return array (Eventocontrarecibo object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = EventocontrareciboPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = EventocontrareciboPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + EventocontrareciboPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EventocontrareciboPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            EventocontrareciboPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Contrarecibo table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinContrarecibo(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(EventocontrareciboPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EventocontrareciboPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EventocontrareciboPeer::IDCONTRARECIBO, ContrareciboPeer::IDCONTRARECIBO, $join_behavior);

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
     * Selects a collection of Eventocontrarecibo objects pre-filled with their Contrarecibo objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Eventocontrarecibo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinContrarecibo(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);
        }

        EventocontrareciboPeer::addSelectColumns($criteria);
        $startcol = EventocontrareciboPeer::NUM_HYDRATE_COLUMNS;
        ContrareciboPeer::addSelectColumns($criteria);

        $criteria->addJoin(EventocontrareciboPeer::IDCONTRARECIBO, ContrareciboPeer::IDCONTRARECIBO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EventocontrareciboPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EventocontrareciboPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = EventocontrareciboPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EventocontrareciboPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ContrareciboPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ContrareciboPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ContrareciboPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ContrareciboPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Eventocontrarecibo) to $obj2 (Contrarecibo)
                $obj2->addEventocontrarecibo($obj1);

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
        $criteria->setPrimaryTableName(EventocontrareciboPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            EventocontrareciboPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(EventocontrareciboPeer::IDCONTRARECIBO, ContrareciboPeer::IDCONTRARECIBO, $join_behavior);

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
     * Selects a collection of Eventocontrarecibo objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Eventocontrarecibo objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);
        }

        EventocontrareciboPeer::addSelectColumns($criteria);
        $startcol2 = EventocontrareciboPeer::NUM_HYDRATE_COLUMNS;

        ContrareciboPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ContrareciboPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(EventocontrareciboPeer::IDCONTRARECIBO, ContrareciboPeer::IDCONTRARECIBO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = EventocontrareciboPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = EventocontrareciboPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = EventocontrareciboPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                EventocontrareciboPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Contrarecibo rows

            $key2 = ContrareciboPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ContrareciboPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ContrareciboPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ContrareciboPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Eventocontrarecibo) to the collection in $obj2 (Contrarecibo)
                $obj2->addEventocontrarecibo($obj1);
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
        return Propel::getDatabaseMap(EventocontrareciboPeer::DATABASE_NAME)->getTable(EventocontrareciboPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseEventocontrareciboPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseEventocontrareciboPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \EventocontrareciboTableMap());
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
        return EventocontrareciboPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Eventocontrarecibo or Criteria object.
     *
     * @param      mixed $values Criteria or Eventocontrarecibo object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Eventocontrarecibo object
        }

        if ($criteria->containsKey(EventocontrareciboPeer::IDEVENTOCONTRARECIBO) && $criteria->keyContainsValue(EventocontrareciboPeer::IDEVENTOCONTRARECIBO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EventocontrareciboPeer::IDEVENTOCONTRARECIBO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Eventocontrarecibo or Criteria object.
     *
     * @param      mixed $values Criteria or Eventocontrarecibo object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(EventocontrareciboPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(EventocontrareciboPeer::IDEVENTOCONTRARECIBO);
            $value = $criteria->remove(EventocontrareciboPeer::IDEVENTOCONTRARECIBO);
            if ($value) {
                $selectCriteria->add(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(EventocontrareciboPeer::TABLE_NAME);
            }

        } else { // $values is Eventocontrarecibo object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the eventocontrarecibo table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(EventocontrareciboPeer::TABLE_NAME, $con, EventocontrareciboPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            EventocontrareciboPeer::clearInstancePool();
            EventocontrareciboPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Eventocontrarecibo or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Eventocontrarecibo object or primary key or array of primary keys
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
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            EventocontrareciboPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Eventocontrarecibo) { // it's a model object
            // invalidate the cache for this single object
            EventocontrareciboPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EventocontrareciboPeer::DATABASE_NAME);
            $criteria->add(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                EventocontrareciboPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(EventocontrareciboPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            EventocontrareciboPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Eventocontrarecibo object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Eventocontrarecibo $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(EventocontrareciboPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(EventocontrareciboPeer::TABLE_NAME);

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

        return BasePeer::doValidate(EventocontrareciboPeer::DATABASE_NAME, EventocontrareciboPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Eventocontrarecibo
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = EventocontrareciboPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(EventocontrareciboPeer::DATABASE_NAME);
        $criteria->add(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $pk);

        $v = EventocontrareciboPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Eventocontrarecibo[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(EventocontrareciboPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(EventocontrareciboPeer::DATABASE_NAME);
            $criteria->add(EventocontrareciboPeer::IDEVENTOCONTRARECIBO, $pks, Criteria::IN);
            $objs = EventocontrareciboPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseEventocontrareciboPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseEventocontrareciboPeer::buildTableMap();

