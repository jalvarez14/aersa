<?php


/**
 * Base static class for performing query and update operations on the 'requisicion' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseRequisicionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'requisicion';

    /** the related Propel class for this table */
    const OM_CLASS = 'Requisicion';

    /** the related TableMap class for this table */
    const TM_CLASS = 'RequisicionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 17;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 17;

    /** the column name for the idrequisicion field */
    const IDREQUISICION = 'requisicion.idrequisicion';

    /** the column name for the idempresa field */
    const IDEMPRESA = 'requisicion.idempresa';

    /** the column name for the idsucursalorigen field */
    const IDSUCURSALORIGEN = 'requisicion.idsucursalorigen';

    /** the column name for the idalmacenorigen field */
    const IDALMACENORIGEN = 'requisicion.idalmacenorigen';

    /** the column name for the idsucursaldestino field */
    const IDSUCURSALDESTINO = 'requisicion.idsucursaldestino';

    /** the column name for the idalmacendestino field */
    const IDALMACENDESTINO = 'requisicion.idalmacendestino';

    /** the column name for the idusuario field */
    const IDUSUARIO = 'requisicion.idusuario';

    /** the column name for the idauditor field */
    const IDAUDITOR = 'requisicion.idauditor';

    /** the column name for the idconceptosalida field */
    const IDCONCEPTOSALIDA = 'requisicion.idconceptosalida';

    /** the column name for the requisicion_fecha field */
    const REQUISICION_FECHA = 'requisicion.requisicion_fecha';

    /** the column name for the requisicion_fechacreacion field */
    const REQUISICION_FECHACREACION = 'requisicion.requisicion_fechacreacion';

    /** the column name for the requisicion_revisada field */
    const REQUISICION_REVISADA = 'requisicion.requisicion_revisada';

    /** the column name for the requisicion_folio field */
    const REQUISICION_FOLIO = 'requisicion.requisicion_folio';

    /** the column name for the requisicion_total field */
    const REQUISICION_TOTAL = 'requisicion.requisicion_total';

    /** the column name for the notaauditorempresa field */
    const NOTAAUDITOREMPRESA = 'requisicion.notaauditorempresa';

    /** the column name for the notaalmacenistaempresa field */
    const NOTAALMACENISTAEMPRESA = 'requisicion.notaalmacenistaempresa';

    /** the column name for the notaauditoraersa field */
    const NOTAAUDITORAERSA = 'requisicion.notaauditoraersa';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Requisicion objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Requisicion[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. RequisicionPeer::$fieldNames[RequisicionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idrequisicion', 'Idempresa', 'Idsucursalorigen', 'Idalmacenorigen', 'Idsucursaldestino', 'Idalmacendestino', 'Idusuario', 'Idauditor', 'Idconceptosalida', 'RequisicionFecha', 'RequisicionFechacreacion', 'RequisicionRevisada', 'RequisicionFolio', 'RequisicionTotal', 'Notaauditorempresa', 'Notaalmacenistaempresa', 'Notaauditoraersa', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idrequisicion', 'idempresa', 'idsucursalorigen', 'idalmacenorigen', 'idsucursaldestino', 'idalmacendestino', 'idusuario', 'idauditor', 'idconceptosalida', 'requisicionFecha', 'requisicionFechacreacion', 'requisicionRevisada', 'requisicionFolio', 'requisicionTotal', 'notaauditorempresa', 'notaalmacenistaempresa', 'notaauditoraersa', ),
        BasePeer::TYPE_COLNAME => array (RequisicionPeer::IDREQUISICION, RequisicionPeer::IDEMPRESA, RequisicionPeer::IDSUCURSALORIGEN, RequisicionPeer::IDALMACENORIGEN, RequisicionPeer::IDSUCURSALDESTINO, RequisicionPeer::IDALMACENDESTINO, RequisicionPeer::IDUSUARIO, RequisicionPeer::IDAUDITOR, RequisicionPeer::IDCONCEPTOSALIDA, RequisicionPeer::REQUISICION_FECHA, RequisicionPeer::REQUISICION_FECHACREACION, RequisicionPeer::REQUISICION_REVISADA, RequisicionPeer::REQUISICION_FOLIO, RequisicionPeer::REQUISICION_TOTAL, RequisicionPeer::NOTAAUDITOREMPRESA, RequisicionPeer::NOTAALMACENISTAEMPRESA, RequisicionPeer::NOTAAUDITORAERSA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDREQUISICION', 'IDEMPRESA', 'IDSUCURSALORIGEN', 'IDALMACENORIGEN', 'IDSUCURSALDESTINO', 'IDALMACENDESTINO', 'IDUSUARIO', 'IDAUDITOR', 'IDCONCEPTOSALIDA', 'REQUISICION_FECHA', 'REQUISICION_FECHACREACION', 'REQUISICION_REVISADA', 'REQUISICION_FOLIO', 'REQUISICION_TOTAL', 'NOTAAUDITOREMPRESA', 'NOTAALMACENISTAEMPRESA', 'NOTAAUDITORAERSA', ),
        BasePeer::TYPE_FIELDNAME => array ('idrequisicion', 'idempresa', 'idsucursalorigen', 'idalmacenorigen', 'idsucursaldestino', 'idalmacendestino', 'idusuario', 'idauditor', 'idconceptosalida', 'requisicion_fecha', 'requisicion_fechacreacion', 'requisicion_revisada', 'requisicion_folio', 'requisicion_total', 'notaauditorempresa', 'notaalmacenistaempresa', 'notaauditoraersa', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. RequisicionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idrequisicion' => 0, 'Idempresa' => 1, 'Idsucursalorigen' => 2, 'Idalmacenorigen' => 3, 'Idsucursaldestino' => 4, 'Idalmacendestino' => 5, 'Idusuario' => 6, 'Idauditor' => 7, 'Idconceptosalida' => 8, 'RequisicionFecha' => 9, 'RequisicionFechacreacion' => 10, 'RequisicionRevisada' => 11, 'RequisicionFolio' => 12, 'RequisicionTotal' => 13, 'Notaauditorempresa' => 14, 'Notaalmacenistaempresa' => 15, 'Notaauditoraersa' => 16, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idrequisicion' => 0, 'idempresa' => 1, 'idsucursalorigen' => 2, 'idalmacenorigen' => 3, 'idsucursaldestino' => 4, 'idalmacendestino' => 5, 'idusuario' => 6, 'idauditor' => 7, 'idconceptosalida' => 8, 'requisicionFecha' => 9, 'requisicionFechacreacion' => 10, 'requisicionRevisada' => 11, 'requisicionFolio' => 12, 'requisicionTotal' => 13, 'notaauditorempresa' => 14, 'notaalmacenistaempresa' => 15, 'notaauditoraersa' => 16, ),
        BasePeer::TYPE_COLNAME => array (RequisicionPeer::IDREQUISICION => 0, RequisicionPeer::IDEMPRESA => 1, RequisicionPeer::IDSUCURSALORIGEN => 2, RequisicionPeer::IDALMACENORIGEN => 3, RequisicionPeer::IDSUCURSALDESTINO => 4, RequisicionPeer::IDALMACENDESTINO => 5, RequisicionPeer::IDUSUARIO => 6, RequisicionPeer::IDAUDITOR => 7, RequisicionPeer::IDCONCEPTOSALIDA => 8, RequisicionPeer::REQUISICION_FECHA => 9, RequisicionPeer::REQUISICION_FECHACREACION => 10, RequisicionPeer::REQUISICION_REVISADA => 11, RequisicionPeer::REQUISICION_FOLIO => 12, RequisicionPeer::REQUISICION_TOTAL => 13, RequisicionPeer::NOTAAUDITOREMPRESA => 14, RequisicionPeer::NOTAALMACENISTAEMPRESA => 15, RequisicionPeer::NOTAAUDITORAERSA => 16, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDREQUISICION' => 0, 'IDEMPRESA' => 1, 'IDSUCURSALORIGEN' => 2, 'IDALMACENORIGEN' => 3, 'IDSUCURSALDESTINO' => 4, 'IDALMACENDESTINO' => 5, 'IDUSUARIO' => 6, 'IDAUDITOR' => 7, 'IDCONCEPTOSALIDA' => 8, 'REQUISICION_FECHA' => 9, 'REQUISICION_FECHACREACION' => 10, 'REQUISICION_REVISADA' => 11, 'REQUISICION_FOLIO' => 12, 'REQUISICION_TOTAL' => 13, 'NOTAAUDITOREMPRESA' => 14, 'NOTAALMACENISTAEMPRESA' => 15, 'NOTAAUDITORAERSA' => 16, ),
        BasePeer::TYPE_FIELDNAME => array ('idrequisicion' => 0, 'idempresa' => 1, 'idsucursalorigen' => 2, 'idalmacenorigen' => 3, 'idsucursaldestino' => 4, 'idalmacendestino' => 5, 'idusuario' => 6, 'idauditor' => 7, 'idconceptosalida' => 8, 'requisicion_fecha' => 9, 'requisicion_fechacreacion' => 10, 'requisicion_revisada' => 11, 'requisicion_folio' => 12, 'requisicion_total' => 13, 'notaauditorempresa' => 14, 'notaalmacenistaempresa' => 15, 'notaauditoraersa' => 16, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, )
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
        $toNames = RequisicionPeer::getFieldNames($toType);
        $key = isset(RequisicionPeer::$fieldKeys[$fromType][$name]) ? RequisicionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(RequisicionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, RequisicionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return RequisicionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. RequisicionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(RequisicionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(RequisicionPeer::IDREQUISICION);
            $criteria->addSelectColumn(RequisicionPeer::IDEMPRESA);
            $criteria->addSelectColumn(RequisicionPeer::IDSUCURSALORIGEN);
            $criteria->addSelectColumn(RequisicionPeer::IDALMACENORIGEN);
            $criteria->addSelectColumn(RequisicionPeer::IDSUCURSALDESTINO);
            $criteria->addSelectColumn(RequisicionPeer::IDALMACENDESTINO);
            $criteria->addSelectColumn(RequisicionPeer::IDUSUARIO);
            $criteria->addSelectColumn(RequisicionPeer::IDAUDITOR);
            $criteria->addSelectColumn(RequisicionPeer::IDCONCEPTOSALIDA);
            $criteria->addSelectColumn(RequisicionPeer::REQUISICION_FECHA);
            $criteria->addSelectColumn(RequisicionPeer::REQUISICION_FECHACREACION);
            $criteria->addSelectColumn(RequisicionPeer::REQUISICION_REVISADA);
            $criteria->addSelectColumn(RequisicionPeer::REQUISICION_FOLIO);
            $criteria->addSelectColumn(RequisicionPeer::REQUISICION_TOTAL);
            $criteria->addSelectColumn(RequisicionPeer::NOTAAUDITOREMPRESA);
            $criteria->addSelectColumn(RequisicionPeer::NOTAALMACENISTAEMPRESA);
            $criteria->addSelectColumn(RequisicionPeer::NOTAAUDITORAERSA);
        } else {
            $criteria->addSelectColumn($alias . '.idrequisicion');
            $criteria->addSelectColumn($alias . '.idempresa');
            $criteria->addSelectColumn($alias . '.idsucursalorigen');
            $criteria->addSelectColumn($alias . '.idalmacenorigen');
            $criteria->addSelectColumn($alias . '.idsucursaldestino');
            $criteria->addSelectColumn($alias . '.idalmacendestino');
            $criteria->addSelectColumn($alias . '.idusuario');
            $criteria->addSelectColumn($alias . '.idauditor');
            $criteria->addSelectColumn($alias . '.idconceptosalida');
            $criteria->addSelectColumn($alias . '.requisicion_fecha');
            $criteria->addSelectColumn($alias . '.requisicion_fechacreacion');
            $criteria->addSelectColumn($alias . '.requisicion_revisada');
            $criteria->addSelectColumn($alias . '.requisicion_folio');
            $criteria->addSelectColumn($alias . '.requisicion_total');
            $criteria->addSelectColumn($alias . '.notaauditorempresa');
            $criteria->addSelectColumn($alias . '.notaalmacenistaempresa');
            $criteria->addSelectColumn($alias . '.notaauditoraersa');
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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Requisicion
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = RequisicionPeer::doSelect($critcopy, $con);
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
        return RequisicionPeer::populateObjects(RequisicionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            RequisicionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

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
     * @param Requisicion $obj A Requisicion object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdrequisicion();
            } // if key === null
            RequisicionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Requisicion object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Requisicion) {
                $key = (string) $value->getIdrequisicion();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Requisicion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(RequisicionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Requisicion Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(RequisicionPeer::$instances[$key])) {
                return RequisicionPeer::$instances[$key];
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
        foreach (RequisicionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        RequisicionPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to requisicion
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in RequisiciondetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisiciondetallePeer::clearInstancePool();
        // Invalidate objects in RequisicionnotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        RequisicionnotaPeer::clearInstancePool();
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
        $cls = RequisicionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = RequisicionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                RequisicionPeer::addInstanceToPool($obj, $key);
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
     * @return array (Requisicion object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = RequisicionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = RequisicionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + RequisicionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = RequisicionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            RequisicionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related AlmacenRelatedByIdalmacendestino table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAlmacenRelatedByIdalmacendestino(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related AlmacenRelatedByIdalmacenorigen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAlmacenRelatedByIdalmacenorigen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Conceptosalida table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinConceptosalida(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related SucursalRelatedByIdsucursaldestino table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSucursalRelatedByIdsucursaldestino(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related SucursalRelatedByIdsucursalorigen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSucursalRelatedByIdsucursalorigen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Requisicion objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacenRelatedByIdalmacendestino(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with their Almacen objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAlmacenRelatedByIdalmacenorigen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        AlmacenPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacenorigen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdauditor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to $obj2 (Usuario)
                $obj2->addRequisicionRelatedByIdauditor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with their Conceptosalida objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinConceptosalida(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        ConceptosalidaPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ConceptosalidaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ConceptosalidaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ConceptosalidaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Requisicion) to $obj2 (Conceptosalida)
                $obj2->addRequisicion($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with their Empresa objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpresa(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        EmpresaPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to $obj2 (Empresa)
                $obj2->addRequisicion($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursalRelatedByIdsucursaldestino(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to $obj2 (Sucursal)
                $obj2->addRequisicionRelatedByIdsucursaldestino($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursalRelatedByIdsucursalorigen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to $obj2 (Sucursal)
                $obj2->addRequisicionRelatedByIdsucursalorigen($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with their Usuario objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinUsuarioRelatedByIdusuario(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol = RequisicionPeer::NUM_HYDRATE_COLUMNS;
        UsuarioPeer::addSelectColumns($criteria);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to $obj2 (Usuario)
                $obj2->addRequisicionRelatedByIdusuario($obj1);

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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Selects a collection of Requisicion objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol10 = $startcol9 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);
            } // if joined row not null

            // Add objects for joined Almacen rows

            $key3 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = AlmacenPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = AlmacenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlmacenPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Almacen)
                $obj3->addRequisicionRelatedByIdalmacenorigen($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key4 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = UsuarioPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    UsuarioPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Usuario)
                $obj4->addRequisicionRelatedByIdauditor($obj1);
            } // if joined row not null

            // Add objects for joined Conceptosalida rows

            $key5 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ConceptosalidaPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ConceptosalidaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ConceptosalidaPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Conceptosalida)
                $obj5->addRequisicion($obj1);
            } // if joined row not null

            // Add objects for joined Empresa rows

            $key6 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = EmpresaPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = EmpresaPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EmpresaPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Empresa)
                $obj6->addRequisicion($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
            if ($key7 !== null) {
                $obj7 = SucursalPeer::getInstanceFromPool($key7);
                if (!$obj7) {

                    $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if obj7 loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Sucursal)
                $obj7->addRequisicionRelatedByIdsucursaldestino($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key8 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol8);
            if ($key8 !== null) {
                $obj8 = SucursalPeer::getInstanceFromPool($key8);
                if (!$obj8) {

                    $cls = SucursalPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    SucursalPeer::addInstanceToPool($obj8, $key8);
                } // if obj8 loaded

                // Add the $obj1 (Requisicion) to the collection in $obj8 (Sucursal)
                $obj8->addRequisicionRelatedByIdsucursalorigen($obj1);
            } // if joined row not null

            // Add objects for joined Usuario rows

            $key9 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol9);
            if ($key9 !== null) {
                $obj9 = UsuarioPeer::getInstanceFromPool($key9);
                if (!$obj9) {

                    $cls = UsuarioPeer::getOMClass();

                    $obj9 = new $cls();
                    $obj9->hydrate($row, $startcol9);
                    UsuarioPeer::addInstanceToPool($obj9, $key9);
                } // if obj9 loaded

                // Add the $obj1 (Requisicion) to the collection in $obj9 (Usuario)
                $obj9->addRequisicionRelatedByIdusuario($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related AlmacenRelatedByIdalmacendestino table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAlmacenRelatedByIdalmacendestino(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related AlmacenRelatedByIdalmacenorigen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptAlmacenRelatedByIdalmacenorigen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Conceptosalida table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptConceptosalida(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related SucursalRelatedByIdsucursaldestino table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSucursalRelatedByIdsucursaldestino(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related SucursalRelatedByIdsucursalorigen table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSucursalRelatedByIdsucursalorigen(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);

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
        $criteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            RequisicionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Requisicion objects pre-filled with all related objects except AlmacenRelatedByIdalmacendestino.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAlmacenRelatedByIdalmacendestino(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Usuario)
                $obj2->addRequisicionRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Conceptosalida rows

                $key3 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ConceptosalidaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ConceptosalidaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ConceptosalidaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Conceptosalida)
                $obj3->addRequisicion($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Empresa)
                $obj4->addRequisicion($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Sucursal)
                $obj5->addRequisicionRelatedByIdsucursaldestino($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key6 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = SucursalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = SucursalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SucursalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Sucursal)
                $obj6->addRequisicionRelatedByIdsucursalorigen($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key7 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsuarioPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsuarioPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Usuario)
                $obj7->addRequisicionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with all related objects except AlmacenRelatedByIdalmacenorigen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptAlmacenRelatedByIdalmacenorigen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Usuario)
                $obj2->addRequisicionRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Conceptosalida rows

                $key3 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ConceptosalidaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ConceptosalidaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ConceptosalidaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Conceptosalida)
                $obj3->addRequisicion($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Empresa)
                $obj4->addRequisicion($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Sucursal)
                $obj5->addRequisicionRelatedByIdsucursaldestino($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key6 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = SucursalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = SucursalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SucursalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Sucursal)
                $obj6->addRequisicionRelatedByIdsucursalorigen($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key7 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsuarioPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsuarioPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Usuario)
                $obj7->addRequisicionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with all related objects except UsuarioRelatedByIdauditor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
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
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);

            } // if joined row is not null

                // Add objects for joined Almacen rows

                $key3 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlmacenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlmacenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Almacen)
                $obj3->addRequisicionRelatedByIdalmacenorigen($obj1);

            } // if joined row is not null

                // Add objects for joined Conceptosalida rows

                $key4 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ConceptosalidaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ConceptosalidaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ConceptosalidaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Conceptosalida)
                $obj4->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Empresa)
                $obj5->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key6 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = SucursalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = SucursalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SucursalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Sucursal)
                $obj6->addRequisicionRelatedByIdsucursaldestino($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Sucursal)
                $obj7->addRequisicionRelatedByIdsucursalorigen($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with all related objects except Conceptosalida.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptConceptosalida(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);

            } // if joined row is not null

                // Add objects for joined Almacen rows

                $key3 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlmacenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlmacenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Almacen)
                $obj3->addRequisicionRelatedByIdalmacenorigen($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Usuario)
                $obj4->addRequisicionRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Empresa)
                $obj5->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key6 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = SucursalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = SucursalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SucursalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Sucursal)
                $obj6->addRequisicionRelatedByIdsucursaldestino($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Sucursal)
                $obj7->addRequisicionRelatedByIdsucursalorigen($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj8 (Usuario)
                $obj8->addRequisicionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with all related objects except Empresa.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
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
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol9 = $startcol8 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);

            } // if joined row is not null

                // Add objects for joined Almacen rows

                $key3 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlmacenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlmacenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Almacen)
                $obj3->addRequisicionRelatedByIdalmacenorigen($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Usuario)
                $obj4->addRequisicionRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Conceptosalida rows

                $key5 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ConceptosalidaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ConceptosalidaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ConceptosalidaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Conceptosalida)
                $obj5->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key6 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = SucursalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = SucursalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SucursalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Sucursal)
                $obj6->addRequisicionRelatedByIdsucursaldestino($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Sucursal)
                $obj7->addRequisicionRelatedByIdsucursalorigen($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key8 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol8);
                if ($key8 !== null) {
                    $obj8 = UsuarioPeer::getInstanceFromPool($key8);
                    if (!$obj8) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj8 = new $cls();
                    $obj8->hydrate($row, $startcol8);
                    UsuarioPeer::addInstanceToPool($obj8, $key8);
                } // if $obj8 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj8 (Usuario)
                $obj8->addRequisicionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with all related objects except SucursalRelatedByIdsucursaldestino.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSucursalRelatedByIdsucursaldestino(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);

            } // if joined row is not null

                // Add objects for joined Almacen rows

                $key3 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlmacenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlmacenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Almacen)
                $obj3->addRequisicionRelatedByIdalmacenorigen($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Usuario)
                $obj4->addRequisicionRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Conceptosalida rows

                $key5 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ConceptosalidaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ConceptosalidaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ConceptosalidaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Conceptosalida)
                $obj5->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key6 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = EmpresaPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EmpresaPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Empresa)
                $obj6->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key7 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsuarioPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsuarioPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Usuario)
                $obj7->addRequisicionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with all related objects except SucursalRelatedByIdsucursalorigen.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSucursalRelatedByIdsucursalorigen(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        UsuarioPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + UsuarioPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDAUDITOR, UsuarioPeer::IDUSUARIO, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDUSUARIO, UsuarioPeer::IDUSUARIO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);

            } // if joined row is not null

                // Add objects for joined Almacen rows

                $key3 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlmacenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlmacenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Almacen)
                $obj3->addRequisicionRelatedByIdalmacenorigen($obj1);

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

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Usuario)
                $obj4->addRequisicionRelatedByIdauditor($obj1);

            } // if joined row is not null

                // Add objects for joined Conceptosalida rows

                $key5 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ConceptosalidaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ConceptosalidaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ConceptosalidaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Conceptosalida)
                $obj5->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key6 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = EmpresaPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    EmpresaPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Empresa)
                $obj6->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Usuario rows

                $key7 = UsuarioPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = UsuarioPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = UsuarioPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    UsuarioPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Usuario)
                $obj7->addRequisicionRelatedByIdusuario($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Requisicion objects pre-filled with all related objects except UsuarioRelatedByIdusuario.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Requisicion objects.
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
            $criteria->setDbName(RequisicionPeer::DATABASE_NAME);
        }

        RequisicionPeer::addSelectColumns($criteria);
        $startcol2 = RequisicionPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        AlmacenPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + AlmacenPeer::NUM_HYDRATE_COLUMNS;

        ConceptosalidaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ConceptosalidaPeer::NUM_HYDRATE_COLUMNS;

        EmpresaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + EmpresaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol8 = $startcol7 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(RequisicionPeer::IDALMACENDESTINO, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDALMACENORIGEN, AlmacenPeer::IDALMACEN, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDCONCEPTOSALIDA, ConceptosalidaPeer::IDCONCEPTOSALIDA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDEMPRESA, EmpresaPeer::IDEMPRESA, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALDESTINO, SucursalPeer::IDSUCURSAL, $join_behavior);

        $criteria->addJoin(RequisicionPeer::IDSUCURSALORIGEN, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = RequisicionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = RequisicionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = RequisicionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                RequisicionPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Requisicion) to the collection in $obj2 (Almacen)
                $obj2->addRequisicionRelatedByIdalmacendestino($obj1);

            } // if joined row is not null

                // Add objects for joined Almacen rows

                $key3 = AlmacenPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = AlmacenPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = AlmacenPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    AlmacenPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj3 (Almacen)
                $obj3->addRequisicionRelatedByIdalmacenorigen($obj1);

            } // if joined row is not null

                // Add objects for joined Conceptosalida rows

                $key4 = ConceptosalidaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ConceptosalidaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ConceptosalidaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ConceptosalidaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj4 (Conceptosalida)
                $obj4->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Empresa rows

                $key5 = EmpresaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = EmpresaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = EmpresaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    EmpresaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj5 (Empresa)
                $obj5->addRequisicion($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key6 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol6);
                if ($key6 !== null) {
                    $obj6 = SucursalPeer::getInstanceFromPool($key6);
                    if (!$obj6) {

                        $cls = SucursalPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    SucursalPeer::addInstanceToPool($obj6, $key6);
                } // if $obj6 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj6 (Sucursal)
                $obj6->addRequisicionRelatedByIdsucursaldestino($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key7 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol7);
                if ($key7 !== null) {
                    $obj7 = SucursalPeer::getInstanceFromPool($key7);
                    if (!$obj7) {

                        $cls = SucursalPeer::getOMClass();

                    $obj7 = new $cls();
                    $obj7->hydrate($row, $startcol7);
                    SucursalPeer::addInstanceToPool($obj7, $key7);
                } // if $obj7 already loaded

                // Add the $obj1 (Requisicion) to the collection in $obj7 (Sucursal)
                $obj7->addRequisicionRelatedByIdsucursalorigen($obj1);

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
        return Propel::getDatabaseMap(RequisicionPeer::DATABASE_NAME)->getTable(RequisicionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseRequisicionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseRequisicionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \RequisicionTableMap());
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
        return RequisicionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Requisicion or Criteria object.
     *
     * @param      mixed $values Criteria or Requisicion object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Requisicion object
        }

        if ($criteria->containsKey(RequisicionPeer::IDREQUISICION) && $criteria->keyContainsValue(RequisicionPeer::IDREQUISICION) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.RequisicionPeer::IDREQUISICION.')');
        }


        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Requisicion or Criteria object.
     *
     * @param      mixed $values Criteria or Requisicion object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(RequisicionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(RequisicionPeer::IDREQUISICION);
            $value = $criteria->remove(RequisicionPeer::IDREQUISICION);
            if ($value) {
                $selectCriteria->add(RequisicionPeer::IDREQUISICION, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(RequisicionPeer::TABLE_NAME);
            }

        } else { // $values is Requisicion object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the requisicion table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += RequisicionPeer::doOnDeleteCascade(new Criteria(RequisicionPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(RequisicionPeer::TABLE_NAME, $con, RequisicionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            RequisicionPeer::clearInstancePool();
            RequisicionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Requisicion or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Requisicion object or primary key or array of primary keys
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
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Requisicion) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);
            $criteria->add(RequisicionPeer::IDREQUISICION, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(RequisicionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += RequisicionPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                RequisicionPeer::clearInstancePool();
            } elseif ($values instanceof Requisicion) { // it's a model object
                RequisicionPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    RequisicionPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            RequisicionPeer::clearRelatedInstancePool();
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
        $objects = RequisicionPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Requisiciondetalle objects
            $criteria = new Criteria(RequisiciondetallePeer::DATABASE_NAME);

            $criteria->add(RequisiciondetallePeer::IDREQUISICION, $obj->getIdrequisicion());
            $affectedRows += RequisiciondetallePeer::doDelete($criteria, $con);

            // delete related Requisicionnota objects
            $criteria = new Criteria(RequisicionnotaPeer::DATABASE_NAME);

            $criteria->add(RequisicionnotaPeer::IDREQUISICION, $obj->getIdrequisicion());
            $affectedRows += RequisicionnotaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Requisicion object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Requisicion $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(RequisicionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(RequisicionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(RequisicionPeer::DATABASE_NAME, RequisicionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Requisicion
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = RequisicionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);
        $criteria->add(RequisicionPeer::IDREQUISICION, $pk);

        $v = RequisicionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Requisicion[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(RequisicionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(RequisicionPeer::DATABASE_NAME);
            $criteria->add(RequisicionPeer::IDREQUISICION, $pks, Criteria::IN);
            $objs = RequisicionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseRequisicionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseRequisicionPeer::buildTableMap();

