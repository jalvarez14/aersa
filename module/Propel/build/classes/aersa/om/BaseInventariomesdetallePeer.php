<?php


/**
 * Base static class for performing query and update operations on the 'inventariomesdetalle' table.
 *
 *
 *
 * @package propel.generator.aersa.om
 */
abstract class BaseInventariomesdetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'aersa';

    /** the table name for this class */
    const TABLE_NAME = 'inventariomesdetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Inventariomesdetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'InventariomesdetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 20;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 20;

    /** the column name for the idinventariomesdetalle field */
    const IDINVENTARIOMESDETALLE = 'inventariomesdetalle.idinventariomesdetalle';

    /** the column name for the idinventariomes field */
    const IDINVENTARIOMES = 'inventariomesdetalle.idinventariomes';

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'inventariomesdetalle.idproducto';

    /** the column name for the inventariomesdetalle_stockinicial field */
    const INVENTARIOMESDETALLE_STOCKINICIAL = 'inventariomesdetalle.inventariomesdetalle_stockinicial';

    /** the column name for the inventariomesdetalle_stockteorico field */
    const INVENTARIOMESDETALLE_STOCKTEORICO = 'inventariomesdetalle.inventariomesdetalle_stockteorico';

    /** the column name for the inventariomesdetalle_explosion field */
    const INVENTARIOMESDETALLE_EXPLOSION = 'inventariomesdetalle.inventariomesdetalle_explosion';

    /** the column name for the inventariomesdetalle_stockfisico field */
    const INVENTARIOMESDETALLE_STOCKFISICO = 'inventariomesdetalle.inventariomesdetalle_stockfisico';

    /** the column name for the inventariomesdetalle_totalfisico field */
    const INVENTARIOMESDETALLE_TOTALFISICO = 'inventariomesdetalle.inventariomesdetalle_totalfisico';

    /** the column name for the inventariomesdetalle_diferencia field */
    const INVENTARIOMESDETALLE_DIFERENCIA = 'inventariomesdetalle.inventariomesdetalle_diferencia';

    /** the column name for the inventariomesdetalle_revisada field */
    const INVENTARIOMESDETALLE_REVISADA = 'inventariomesdetalle.inventariomesdetalle_revisada';

    /** the column name for the inventariomesdetalle_ingresocompra field */
    const INVENTARIOMESDETALLE_INGRESOCOMPRA = 'inventariomesdetalle.inventariomesdetalle_ingresocompra';

    /** the column name for the inventariomesdetalle_ingresorequisicion field */
    const INVENTARIOMESDETALLE_INGRESOREQUISICION = 'inventariomesdetalle.inventariomesdetalle_ingresorequisicion';

    /** the column name for the inventariomesdetalle_egresorequisicion field */
    const INVENTARIOMESDETALLE_EGRESOREQUISICION = 'inventariomesdetalle.inventariomesdetalle_egresorequisicion';

    /** the column name for the inventariomesdetalle_egresoventa field */
    const INVENTARIOMESDETALLE_EGRESOVENTA = 'inventariomesdetalle.inventariomesdetalle_egresoventa';

    /** the column name for the inventariomesdetalle_ingresoordentablajeria field */
    const INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA = 'inventariomesdetalle.inventariomesdetalle_ingresoordentablajeria';

    /** the column name for the inventariomesdetalle_egresoordentablajeria field */
    const INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA = 'inventariomesdetalle.inventariomesdetalle_egresoordentablajeria';

    /** the column name for the inventariomesdetalle_egresodevolucion field */
    const INVENTARIOMESDETALLE_EGRESODEVOLUCION = 'inventariomesdetalle.inventariomesdetalle_egresodevolucion';

    /** the column name for the inventariomesdetalle_costopromedio field */
    const INVENTARIOMESDETALLE_COSTOPROMEDIO = 'inventariomesdetalle.inventariomesdetalle_costopromedio';

    /** the column name for the inventariomesdetalle_difimporte field */
    const INVENTARIOMESDETALLE_DIFIMPORTE = 'inventariomesdetalle.inventariomesdetalle_difimporte';

    /** the column name for the inventariomesdetalle_importefisico field */
    const INVENTARIOMESDETALLE_IMPORTEFISICO = 'inventariomesdetalle.inventariomesdetalle_importefisico';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Inventariomesdetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Inventariomesdetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. InventariomesdetallePeer::$fieldNames[InventariomesdetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idinventariomesdetalle', 'Idinventariomes', 'Idproducto', 'InventariomesdetalleStockinicial', 'InventariomesdetalleStockteorico', 'InventariomesdetalleExplosion', 'InventariomesdetalleStockfisico', 'InventariomesdetalleTotalfisico', 'InventariomesdetalleDiferencia', 'InventariomesdetalleRevisada', 'InventariomesdetalleIngresocompra', 'InventariomesdetalleIngresorequisicion', 'InventariomesdetalleEgresorequisicion', 'InventariomesdetalleEgresoventa', 'InventariomesdetalleIngresoordentablajeria', 'InventariomesdetalleEgresoordentablajeria', 'InventariomesdetalleEgresodevolucion', 'InventariomesdetalleCostopromedio', 'InventariomesdetalleDifimporte', 'InventariomesdetalleImportefisico', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idinventariomesdetalle', 'idinventariomes', 'idproducto', 'inventariomesdetalleStockinicial', 'inventariomesdetalleStockteorico', 'inventariomesdetalleExplosion', 'inventariomesdetalleStockfisico', 'inventariomesdetalleTotalfisico', 'inventariomesdetalleDiferencia', 'inventariomesdetalleRevisada', 'inventariomesdetalleIngresocompra', 'inventariomesdetalleIngresorequisicion', 'inventariomesdetalleEgresorequisicion', 'inventariomesdetalleEgresoventa', 'inventariomesdetalleIngresoordentablajeria', 'inventariomesdetalleEgresoordentablajeria', 'inventariomesdetalleEgresodevolucion', 'inventariomesdetalleCostopromedio', 'inventariomesdetalleDifimporte', 'inventariomesdetalleImportefisico', ),
        BasePeer::TYPE_COLNAME => array (InventariomesdetallePeer::IDINVENTARIOMESDETALLE, InventariomesdetallePeer::IDINVENTARIOMES, InventariomesdetallePeer::IDPRODUCTO, InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL, InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO, InventariomesdetallePeer::INVENTARIOMESDETALLE_EXPLOSION, InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO, InventariomesdetallePeer::INVENTARIOMESDETALLE_TOTALFISICO, InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA, InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA, InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA, InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA, InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION, InventariomesdetallePeer::INVENTARIOMESDETALLE_COSTOPROMEDIO, InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFIMPORTE, InventariomesdetallePeer::INVENTARIOMESDETALLE_IMPORTEFISICO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINVENTARIOMESDETALLE', 'IDINVENTARIOMES', 'IDPRODUCTO', 'INVENTARIOMESDETALLE_STOCKINICIAL', 'INVENTARIOMESDETALLE_STOCKTEORICO', 'INVENTARIOMESDETALLE_EXPLOSION', 'INVENTARIOMESDETALLE_STOCKFISICO', 'INVENTARIOMESDETALLE_TOTALFISICO', 'INVENTARIOMESDETALLE_DIFERENCIA', 'INVENTARIOMESDETALLE_REVISADA', 'INVENTARIOMESDETALLE_INGRESOCOMPRA', 'INVENTARIOMESDETALLE_INGRESOREQUISICION', 'INVENTARIOMESDETALLE_EGRESOREQUISICION', 'INVENTARIOMESDETALLE_EGRESOVENTA', 'INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA', 'INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA', 'INVENTARIOMESDETALLE_EGRESODEVOLUCION', 'INVENTARIOMESDETALLE_COSTOPROMEDIO', 'INVENTARIOMESDETALLE_DIFIMPORTE', 'INVENTARIOMESDETALLE_IMPORTEFISICO', ),
        BasePeer::TYPE_FIELDNAME => array ('idinventariomesdetalle', 'idinventariomes', 'idproducto', 'inventariomesdetalle_stockinicial', 'inventariomesdetalle_stockteorico', 'inventariomesdetalle_explosion', 'inventariomesdetalle_stockfisico', 'inventariomesdetalle_totalfisico', 'inventariomesdetalle_diferencia', 'inventariomesdetalle_revisada', 'inventariomesdetalle_ingresocompra', 'inventariomesdetalle_ingresorequisicion', 'inventariomesdetalle_egresorequisicion', 'inventariomesdetalle_egresoventa', 'inventariomesdetalle_ingresoordentablajeria', 'inventariomesdetalle_egresoordentablajeria', 'inventariomesdetalle_egresodevolucion', 'inventariomesdetalle_costopromedio', 'inventariomesdetalle_difimporte', 'inventariomesdetalle_importefisico', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. InventariomesdetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idinventariomesdetalle' => 0, 'Idinventariomes' => 1, 'Idproducto' => 2, 'InventariomesdetalleStockinicial' => 3, 'InventariomesdetalleStockteorico' => 4, 'InventariomesdetalleExplosion' => 5, 'InventariomesdetalleStockfisico' => 6, 'InventariomesdetalleTotalfisico' => 7, 'InventariomesdetalleDiferencia' => 8, 'InventariomesdetalleRevisada' => 9, 'InventariomesdetalleIngresocompra' => 10, 'InventariomesdetalleIngresorequisicion' => 11, 'InventariomesdetalleEgresorequisicion' => 12, 'InventariomesdetalleEgresoventa' => 13, 'InventariomesdetalleIngresoordentablajeria' => 14, 'InventariomesdetalleEgresoordentablajeria' => 15, 'InventariomesdetalleEgresodevolucion' => 16, 'InventariomesdetalleCostopromedio' => 17, 'InventariomesdetalleDifimporte' => 18, 'InventariomesdetalleImportefisico' => 19, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idinventariomesdetalle' => 0, 'idinventariomes' => 1, 'idproducto' => 2, 'inventariomesdetalleStockinicial' => 3, 'inventariomesdetalleStockteorico' => 4, 'inventariomesdetalleExplosion' => 5, 'inventariomesdetalleStockfisico' => 6, 'inventariomesdetalleTotalfisico' => 7, 'inventariomesdetalleDiferencia' => 8, 'inventariomesdetalleRevisada' => 9, 'inventariomesdetalleIngresocompra' => 10, 'inventariomesdetalleIngresorequisicion' => 11, 'inventariomesdetalleEgresorequisicion' => 12, 'inventariomesdetalleEgresoventa' => 13, 'inventariomesdetalleIngresoordentablajeria' => 14, 'inventariomesdetalleEgresoordentablajeria' => 15, 'inventariomesdetalleEgresodevolucion' => 16, 'inventariomesdetalleCostopromedio' => 17, 'inventariomesdetalleDifimporte' => 18, 'inventariomesdetalleImportefisico' => 19, ),
        BasePeer::TYPE_COLNAME => array (InventariomesdetallePeer::IDINVENTARIOMESDETALLE => 0, InventariomesdetallePeer::IDINVENTARIOMES => 1, InventariomesdetallePeer::IDPRODUCTO => 2, InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL => 3, InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO => 4, InventariomesdetallePeer::INVENTARIOMESDETALLE_EXPLOSION => 5, InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO => 6, InventariomesdetallePeer::INVENTARIOMESDETALLE_TOTALFISICO => 7, InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA => 8, InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA => 9, InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA => 10, InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION => 11, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION => 12, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA => 13, InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA => 14, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA => 15, InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION => 16, InventariomesdetallePeer::INVENTARIOMESDETALLE_COSTOPROMEDIO => 17, InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFIMPORTE => 18, InventariomesdetallePeer::INVENTARIOMESDETALLE_IMPORTEFISICO => 19, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDINVENTARIOMESDETALLE' => 0, 'IDINVENTARIOMES' => 1, 'IDPRODUCTO' => 2, 'INVENTARIOMESDETALLE_STOCKINICIAL' => 3, 'INVENTARIOMESDETALLE_STOCKTEORICO' => 4, 'INVENTARIOMESDETALLE_EXPLOSION' => 5, 'INVENTARIOMESDETALLE_STOCKFISICO' => 6, 'INVENTARIOMESDETALLE_TOTALFISICO' => 7, 'INVENTARIOMESDETALLE_DIFERENCIA' => 8, 'INVENTARIOMESDETALLE_REVISADA' => 9, 'INVENTARIOMESDETALLE_INGRESOCOMPRA' => 10, 'INVENTARIOMESDETALLE_INGRESOREQUISICION' => 11, 'INVENTARIOMESDETALLE_EGRESOREQUISICION' => 12, 'INVENTARIOMESDETALLE_EGRESOVENTA' => 13, 'INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA' => 14, 'INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA' => 15, 'INVENTARIOMESDETALLE_EGRESODEVOLUCION' => 16, 'INVENTARIOMESDETALLE_COSTOPROMEDIO' => 17, 'INVENTARIOMESDETALLE_DIFIMPORTE' => 18, 'INVENTARIOMESDETALLE_IMPORTEFISICO' => 19, ),
        BasePeer::TYPE_FIELDNAME => array ('idinventariomesdetalle' => 0, 'idinventariomes' => 1, 'idproducto' => 2, 'inventariomesdetalle_stockinicial' => 3, 'inventariomesdetalle_stockteorico' => 4, 'inventariomesdetalle_explosion' => 5, 'inventariomesdetalle_stockfisico' => 6, 'inventariomesdetalle_totalfisico' => 7, 'inventariomesdetalle_diferencia' => 8, 'inventariomesdetalle_revisada' => 9, 'inventariomesdetalle_ingresocompra' => 10, 'inventariomesdetalle_ingresorequisicion' => 11, 'inventariomesdetalle_egresorequisicion' => 12, 'inventariomesdetalle_egresoventa' => 13, 'inventariomesdetalle_ingresoordentablajeria' => 14, 'inventariomesdetalle_egresoordentablajeria' => 15, 'inventariomesdetalle_egresodevolucion' => 16, 'inventariomesdetalle_costopromedio' => 17, 'inventariomesdetalle_difimporte' => 18, 'inventariomesdetalle_importefisico' => 19, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, )
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
        $toNames = InventariomesdetallePeer::getFieldNames($toType);
        $key = isset(InventariomesdetallePeer::$fieldKeys[$fromType][$name]) ? InventariomesdetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(InventariomesdetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, InventariomesdetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return InventariomesdetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. InventariomesdetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(InventariomesdetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(InventariomesdetallePeer::IDINVENTARIOMESDETALLE);
            $criteria->addSelectColumn(InventariomesdetallePeer::IDINVENTARIOMES);
            $criteria->addSelectColumn(InventariomesdetallePeer::IDPRODUCTO);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKINICIAL);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKTEORICO);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_EXPLOSION);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_STOCKFISICO);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_TOTALFISICO);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFERENCIA);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_REVISADA);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOCOMPRA);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOREQUISICION);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOREQUISICION);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOVENTA);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_INGRESOORDENTABLAJERIA);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESOORDENTABLAJERIA);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_EGRESODEVOLUCION);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_COSTOPROMEDIO);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_DIFIMPORTE);
            $criteria->addSelectColumn(InventariomesdetallePeer::INVENTARIOMESDETALLE_IMPORTEFISICO);
        } else {
            $criteria->addSelectColumn($alias . '.idinventariomesdetalle');
            $criteria->addSelectColumn($alias . '.idinventariomes');
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_stockinicial');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_stockteorico');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_explosion');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_stockfisico');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_totalfisico');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_diferencia');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_revisada');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_ingresocompra');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_ingresorequisicion');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_egresorequisicion');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_egresoventa');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_ingresoordentablajeria');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_egresoordentablajeria');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_egresodevolucion');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_costopromedio');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_difimporte');
            $criteria->addSelectColumn($alias . '.inventariomesdetalle_importefisico');
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
        $criteria->setPrimaryTableName(InventariomesdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InventariomesdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Inventariomesdetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = InventariomesdetallePeer::doSelect($critcopy, $con);
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
        return InventariomesdetallePeer::populateObjects(InventariomesdetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            InventariomesdetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);

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
     * @param Inventariomesdetalle $obj A Inventariomesdetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdinventariomesdetalle();
            } // if key === null
            InventariomesdetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Inventariomesdetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Inventariomesdetalle) {
                $key = (string) $value->getIdinventariomesdetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Inventariomesdetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(InventariomesdetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Inventariomesdetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(InventariomesdetallePeer::$instances[$key])) {
                return InventariomesdetallePeer::$instances[$key];
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
        foreach (InventariomesdetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        InventariomesdetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to inventariomesdetalle
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in InventariomesdetallenotaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        InventariomesdetallenotaPeer::clearInstancePool();
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
        $cls = InventariomesdetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = InventariomesdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = InventariomesdetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                InventariomesdetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Inventariomesdetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = InventariomesdetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = InventariomesdetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + InventariomesdetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = InventariomesdetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            InventariomesdetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Inventariomes table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinInventariomes(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(InventariomesdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InventariomesdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(InventariomesdetallePeer::IDINVENTARIOMES, InventariomesPeer::IDINVENTARIOMES, $join_behavior);

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
     * Selects a collection of Inventariomesdetalle objects pre-filled with their Inventariomes objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Inventariomesdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinInventariomes(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);
        }

        InventariomesdetallePeer::addSelectColumns($criteria);
        $startcol = InventariomesdetallePeer::NUM_HYDRATE_COLUMNS;
        InventariomesPeer::addSelectColumns($criteria);

        $criteria->addJoin(InventariomesdetallePeer::IDINVENTARIOMES, InventariomesPeer::IDINVENTARIOMES, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = InventariomesdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = InventariomesdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = InventariomesdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                InventariomesdetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = InventariomesPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = InventariomesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = InventariomesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    InventariomesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Inventariomesdetalle) to $obj2 (Inventariomes)
                $obj2->addInventariomesdetalle($obj1);

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
        $criteria->setPrimaryTableName(InventariomesdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            InventariomesdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(InventariomesdetallePeer::IDINVENTARIOMES, InventariomesPeer::IDINVENTARIOMES, $join_behavior);

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
     * Selects a collection of Inventariomesdetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Inventariomesdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);
        }

        InventariomesdetallePeer::addSelectColumns($criteria);
        $startcol2 = InventariomesdetallePeer::NUM_HYDRATE_COLUMNS;

        InventariomesPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + InventariomesPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(InventariomesdetallePeer::IDINVENTARIOMES, InventariomesPeer::IDINVENTARIOMES, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = InventariomesdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = InventariomesdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = InventariomesdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                InventariomesdetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Inventariomes rows

            $key2 = InventariomesPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = InventariomesPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = InventariomesPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    InventariomesPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Inventariomesdetalle) to the collection in $obj2 (Inventariomes)
                $obj2->addInventariomesdetalle($obj1);
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
        return Propel::getDatabaseMap(InventariomesdetallePeer::DATABASE_NAME)->getTable(InventariomesdetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseInventariomesdetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseInventariomesdetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \InventariomesdetalleTableMap());
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
        return InventariomesdetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Inventariomesdetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Inventariomesdetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Inventariomesdetalle object
        }

        if ($criteria->containsKey(InventariomesdetallePeer::IDINVENTARIOMESDETALLE) && $criteria->keyContainsValue(InventariomesdetallePeer::IDINVENTARIOMESDETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.InventariomesdetallePeer::IDINVENTARIOMESDETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Inventariomesdetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Inventariomesdetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(InventariomesdetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(InventariomesdetallePeer::IDINVENTARIOMESDETALLE);
            $value = $criteria->remove(InventariomesdetallePeer::IDINVENTARIOMESDETALLE);
            if ($value) {
                $selectCriteria->add(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(InventariomesdetallePeer::TABLE_NAME);
            }

        } else { // $values is Inventariomesdetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the inventariomesdetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += InventariomesdetallePeer::doOnDeleteCascade(new Criteria(InventariomesdetallePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(InventariomesdetallePeer::TABLE_NAME, $con, InventariomesdetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            InventariomesdetallePeer::clearInstancePool();
            InventariomesdetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Inventariomesdetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Inventariomesdetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Inventariomesdetalle) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(InventariomesdetallePeer::DATABASE_NAME);
            $criteria->add(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(InventariomesdetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += InventariomesdetallePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                InventariomesdetallePeer::clearInstancePool();
            } elseif ($values instanceof Inventariomesdetalle) { // it's a model object
                InventariomesdetallePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    InventariomesdetallePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            InventariomesdetallePeer::clearRelatedInstancePool();
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
        $objects = InventariomesdetallePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Inventariomesdetallenota objects
            $criteria = new Criteria(InventariomesdetallenotaPeer::DATABASE_NAME);

            $criteria->add(InventariomesdetallenotaPeer::IDINVENTARIOMESDETALLE, $obj->getIdinventariomesdetalle());
            $affectedRows += InventariomesdetallenotaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Inventariomesdetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Inventariomesdetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(InventariomesdetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(InventariomesdetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(InventariomesdetallePeer::DATABASE_NAME, InventariomesdetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Inventariomesdetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = InventariomesdetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(InventariomesdetallePeer::DATABASE_NAME);
        $criteria->add(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $pk);

        $v = InventariomesdetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Inventariomesdetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(InventariomesdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(InventariomesdetallePeer::DATABASE_NAME);
            $criteria->add(InventariomesdetallePeer::IDINVENTARIOMESDETALLE, $pks, Criteria::IN);
            $objs = InventariomesdetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseInventariomesdetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseInventariomesdetallePeer::buildTableMap();

